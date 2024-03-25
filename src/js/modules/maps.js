import L from 'leaflet';
import './leaflet-tilelayer-colorizr';

// Map modal parent class (will be extended)
class MapModal {
  constructor(modalEl) {
    // modalEl must be set
    if (!modalEl) {
      return false;
    }

    // DOM elements
    this.modalEl = modalEl;
    this.mapEl = this.modalEl.querySelector('[data-map]');

    this.MODAL_OPEN_FLAG = 'is-open';

    // map attributes
    this.initialCenter = L.latLng(50.128754, 8.691756);
    this.initialZoom = 15;

    this.markers = [];
    this.infowindows = [];
    this.tileColor = {
      r: 0,
      g: 0,
      b: 0,
    };
  }

  init() {
    this.initMap();
    this.initTiles();
    this.initZoomers();
    this.addMarkers();
    this.addAutobahnMarkers();
    this.addPOIMarkers();
    this.addStreetMarkers();
    this.initModalTogglers();
  }

  initMap() {
    this.map = L.map(this.mapEl, {
      zoom: this.initialZoom,
      center: this.initialCenter,
      zoomControl: false,
    });

    this.map.attributionControl.setPrefix('<a href="https://leafletjs.com" title="A JavaScript library for interactive maps">Leaflet</a>');
  }

  initTiles() {
    const color = this.tileColor;
    L.tileLayer.colorizr('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      colorize: function(pixel) {
        const brightness = 1.15;

        return {
          r: (pixel.r * color.r * brightness) / 255,
          g: (pixel.g * color.g * brightness) / 255,
          b: (pixel.b * color.b * brightness) / 255,
        };
      },
    }).addTo(this.map);
  }

  initZoomers() {
    if (this.modalEl && this.map) {
      // setup zoom listeners
      this.modalEl.querySelector('[data-map-zoom-in]').addEventListener('click', () => {
        this.map.setZoom(this.map.getZoom() + 1);
      });
      this.modalEl.querySelector('[data-map-zoom-out]').addEventListener('click', () => {
        this.map.setZoom(this.map.getZoom() - 1);
      });
    }
  }

  addPOIMarkers() {
    // zoo
    this.addMarkersFactory({
      icon: 'zoo',
      locationsKey: 'poiZoo',
      iconSize: [60, 44],
      zIndexOffset: 0,
    });

    // opera
    this.addMarkersFactory({
      icon: 'alte-oper',
      locationsKey: 'poiOpera',
      iconSize: [60, 43],
      zIndexOffset: 0,
    });

    // palmengarten
    this.addMarkersFactory({
      icon: 'palmengarten',
      locationsKey: 'poiPalmengarten',
      iconSize: [60, 42],
      zIndexOffset: 0,
    });
  }

  addStreetMarkers() {
    this.addMarkersFactory({
      icon: 'adickesallee',
      locationsKey: 'adickesallee',
      iconSize: [127, 30],
      zIndexOffset: 0,
    });

    this.addMarkersFactory({
      icon: 'arrow-a66',
      locationsKey: 'arrowA66',
      iconSize: [123, 33],
      zIndexOffset: 0,
    });

    this.addMarkersFactory({
      icon: 'miquelallee',
      locationsKey: 'miquelallee',
      iconSize: [112, 33],
      zIndexOffset: 0,
    });

    this.addMarkersFactory({
      icon: 'nibelungenallee',
      locationsKey: 'nibelungenallee',
      iconSize: [157, 30],
      zIndexOffset: 0,
    });
  }

  // Autobahn markers
  addAutobahnMarkers() {
    // a661
    this.markers.push(L.marker([50.141351, 8.706293], {
      icon: L.icon({
        iconUrl: window.MAP_ASSETS_BASE + 'images/layout/markers/a661.png',
        iconSize: [73, 54],
        iconAnchor: [36, 27],
      }),
      zIndexOffset: 0,
    }).addTo(this.map));

    // a66
    this.markers.push(L.marker([50.132671, 8.649927], {
      icon: L.icon({
        iconUrl: window.MAP_ASSETS_BASE + 'images/layout/markers/a66.png',
        iconSize: [73, 54],
        iconAnchor: [36, 27],
      }),
      zIndexOffset: 0,
    }).addTo(this.map));
  }

  // should be overridden by subclasses
  addMarkers() {
  }

  openModal() {
    this.modalEl.classList.add(this.MODAL_OPEN_FLAG);
    this.map.invalidateSize();
  }

  closeModal() {
    this.modalEl.classList.remove(this.MODAL_OPEN_FLAG);
  }

  initModalTogglers() {
    // closers
    let closers = [...this.modalEl.querySelectorAll('[data-map-modal-close]')];
    closers.forEach((closer) => {
      closer.addEventListener('click', (e) => {
        this.closeModal();

        e.preventDefault();
        e.stopPropagation();
        return false;
      });
    });

    // openers
    let openers = [...document.querySelectorAll(`[data-map-modal-open]`)];
    openers.forEach((opener) => {
      if (opener.getAttribute('href').replace('#', '') === this.modalEl.id) {
        opener.addEventListener('click', (e) => {
          this.openModal();

          e.preventDefault();
          e.stopPropagation();
          return false;
        });
      }
    });
  }

  // general factory method for adding standard markers
  addMarkersFactory(options) {
    const iconSize = options.iconSize || [22, 22];
    const iconTop = iconSize[1] / -2;

    let baseOptions = {
      icon: L.icon({
        iconUrl: `${window.MAP_ASSETS_BASE}images/layout/markers/${options.icon}.png`,
        iconSize,
        iconAnchor: options.iconAnchor || undefined,
        popupAnchor: options.popupAnchor || [0, iconTop],
        tooltipAnchor: options.tooltipAnchor || [0, iconTop],
      }),
      zIndexOffset: (typeof options.zIndexOffset !== 'undefined') ? options.zIndexOffset : 10,
    };

    // loop through locations and add markers
    if (window.MAP_LOCATIONS && window.MAP_LOCATIONS[options.locationsKey]) {
      window.MAP_LOCATIONS[options.locationsKey].forEach((markerOptions) => {
        // prepare the infowindow
        let infowindow = L.tooltip({
          direction: 'top',
          content: `
            <article class="c-map-infowindow">
              <strong>${markerOptions.name}</strong>
              <div>${markerOptions.text || ''}</div>
            </article>
          `,
          maxWidth: 300,
        });

        // add it to the infowindow list
        this.infowindows.push(infowindow);

        // finally set the marker and add it to the markers list
        let marker = L.marker(markerOptions.coords, Object.assign(baseOptions, {
          title: markerOptions.name,
        })).addTo(this.map).bindTooltip(infowindow);

        this.markers.push(marker);
      });
    }
  }
}

// Travel (level 1)
class TravelModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 15;
    this.tileColor = {
      r: 112,
      g: 215,
      b: 232,
    };
    this.init();
  }

  addMarkers() {
    // citygate tower
    this.addMarkersFactory({
      icon: 'gebaeude-icon',
      locationsKey: 'citygate',
      iconSize: [64, 90],
      iconAnchor: [64, 90],
      tooltipAnchor: [-32, -90],
      zIndexOffset: 0,
    });

    // underground
    this.addMarkersFactory({
      icon: 'ubahn1',
      locationsKey: 'undergroundNearby',
      iconSize: [42, 42],
    });

    this.addMarkersFactory({
      icon: 'ubahn',
      locationsKey: 'underground',
    });

    // tram
    this.addMarkersFactory({
      icon: 'tram1',
      locationsKey: 'tramNearby',
      iconSize: [42, 42],
    });

    this.addMarkersFactory({
      icon: 'tram',
      locationsKey: 'tram',
    });

    // bus
    this.addMarkersFactory({
      icon: 'bus1',
      locationsKey: 'busNearby',
      iconSize: [37, 37],
    });

    this.addMarkersFactory({
      icon: 'bus',
      locationsKey: 'bus',
    });

    // S-Bahn
    this.addMarkersFactory({
      icon: 'sbahn',
      locationsKey: 'sbahn',
    });

    // Taxi
    this.addMarkersFactory({
      icon: 'taxi',
      locationsKey: 'taxi',
      iconSize: [21, 21],
    });

    // Gastro
    this.addMarkersFactory({
      icon: 'gastro-res',
      locationsKey: 'gastroResTravel',
    });
  }
}

// Around (level 2)
class AroundModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 17;
    this.tileColor = {
      r: 255,
      g: 146,
      b: 64,
    };
    this.init();

    this.addCircles();
  }

  addCircles() {
    let circlesRadiuses = [
      100,
      300,
      500,
    ];

    circlesRadiuses.forEach((radius) => {
      L.circle(this.initialCenter, {
        stroke: false,
        fillColor: '#fff',
        fillOpacity: 0.25,
        radius,
      }).addTo(this.map);
    });
  }

  addMarkers() {
    // citygate tower
    this.addMarkersFactory({
      icon: 'gebaeude-icon',
      locationsKey: 'citygate',
      iconSize: [64, 90],
      iconAnchor: [64, 90],
      tooltipAnchor: [-32, -90],
      zIndexOffset: 0,
    });

    // gastro markers
    this.addMarkersFactory({
      icon: 'gastro-res',
      locationsKey: 'gastroRes',
    });

    this.addMarkersFactory({
      icon: 'gastro-imbiss',
      locationsKey: 'gastroImbiss',
    });

    this.addMarkersFactory({
      icon: 'gastro-shopping',
      locationsKey: 'gastroShopping',
    });

    this.addMarkersFactory({
      icon: 'gastro-cafe',
      locationsKey: 'gastroCafe',
    });

    this.addMarkersFactory({
      icon: 'gastro-bar',
      locationsKey: 'gastroBar',
    });
  }
}

// Campus mile (level 3)
class CampusMileModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 16;
    this.initialCenter = L.latLng(50.129622, 8.677280);
    this.tileColor = {
      r: 116,
      g: 203,
      b: 100,
    };
    this.init();
  }

  addMarkers() {
    // Student citygate tower marker
    this.addMarkersFactory({
      icon: 'gebaeude-uni',
      locationsKey: 'citygateUni',
      iconSize: [70, 90],
      iconAnchor: [70, 90],
      tooltipAnchor: [-35, -90],
      zIndexOffset: 0,
    });

    // campus restaurants
    this.addMarkersFactory({
      icon: 'gastro',
      locationsKey: 'campusRestaurants',
    });

    // libraries
    this.addMarkersFactory({
      icon: 'bibliothek',
      locationsKey: 'libraries',
      iconSize: [87, 63],
    });

    // merz headquarters
    this.addMarkersFactory({
      icon: 'merz',
      locationsKey: 'merzHQ',
      iconSize: [51, 49],
    });

    // campusmile
    this.addMarkersFactory({
      icon: 'campus-mile',
      locationsKey: 'campusMile',
      iconSize: [137, 33],
      zIndexOffset: 0,
    });

    // campus icons
    for (let i = 2; i <= 8; i++) {
      this.addMarkersFactory({
        icon: `campus${i}`,
        locationsKey: `campus${i}`,
        iconSize: [71, 49],
      });
    }
  }
}


// Wrapper class around modals
class MapModals {
  constructor() {
    if (window.MAP_ASSETS_BASE && window.MAP_LOCATIONS) {
      this.modalsWrapper = document.querySelector('[data-map-modal-wrapper]');
      if (this.modalsWrapper) {
        // move modalswrapper below body
        document.body.appendChild(this.modalsWrapper);

        this.modals = [...this.modalsWrapper.querySelectorAll('[data-map-modal]')];
        if (this.modals.length) {
          this.modals.forEach((modal) => {
            // decide which modal type should be opened
            switch (modal.dataset.mapModal) {
            case 'travel':
              new TravelModal(modal);
              break;

            case 'around':
              new AroundModal(modal);
              break;

            case 'campusmile':
              new CampusMileModal(modal);
              break;
            }
          });
        }
      }
    }
  }
}

document.addEventListener('DOMContentLoaded', function() {
  new MapModals();
});
