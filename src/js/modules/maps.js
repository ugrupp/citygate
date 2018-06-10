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
    this.MAP_CENTER = {
      lat: 50.128754,
      lng: 8.691756,
    };
    this.initialZoom = 15;
    this.mapStyles = null;

    this.markers = [];
    this.infowindows = [];
  }

  init() {
    this.initMap();
    this.initZoomers();
    this.addMarkers();
    this.addAutobahnMarkers();
    this.addPOIMarkers();
    this.initModalTogglers();
  }

  initMap() {
    this.map = new window.google.maps.Map(this.mapEl, {
      zoom: this.initialZoom,
      styles: this.mapStyles,
      center: this.MAP_CENTER,
      disableDefaultUI: true,
      gestureHandling: 'greedy',
    });
  }

  initOverlay() {
    if (this.map) {
      let imageBounds = {
        north: 50.162275,
        south: 50.102031,
        east: 8.753333,
        west: 8.622927,
      };

      new window.google.maps.GroundOverlay(
        window.MAP_ASSETS_BASE + 'images/layout/map-travel-bg.png',
        imageBounds,
        {
          opacity: 1,
          clickable: true,
          map: this.map,
        }
      );
    }
  }

  initZoomers() {
    if (this.modalEl && this.map) {
      // setup zoom listeners
      window.google.maps.event.addDomListener(this.modalEl.querySelector('[data-map-zoom-in]'), 'click', () => {
        this.map.setZoom(this.map.getZoom() + 1);
      });
      window.google.maps.event.addDomListener(this.modalEl.querySelector('[data-map-zoom-out]'), 'click', () => {
        this.map.setZoom(this.map.getZoom() - 1);
      });
    }
  }

  addPOIMarkers() {
    // zoo
    this.addMarkersFactory({
      icon: 'zoo',
      locationsKey: 'poiZoo',
      size: new window.google.maps.Size(60, 44),
    });

    // opera
    this.addMarkersFactory({
      icon: 'alte-oper',
      locationsKey: 'poiOpera',
      size: new window.google.maps.Size(60, 43),
    });

    // palmengarten
    this.addMarkersFactory({
      icon: 'palmengarten',
      locationsKey: 'poiPalmengarten',
      size: new window.google.maps.Size(60, 42),
    });
  }

  // Autobahn markers
  addAutobahnMarkers() {
    // a661
    this.markers.push(new window.google.maps.Marker({
      map: this.map,
      position: {
        lat: 50.141351,
        lng: 8.706293,
      },
      icon: {
        url: window.MAP_ASSETS_BASE + 'images/layout/markers/a661.png',
        size: new window.google.maps.Size(73, 54),
        anchor: new window.google.maps.Point(36, 27),
      },
    }));

    // a66
    this.markers.push(new window.google.maps.Marker({
      map: this.map,
      position: {
        lat: 50.132671,
        lng: 8.649927,
      },
      icon: {
        url: window.MAP_ASSETS_BASE + 'images/layout/markers/a66.png',
        size: new window.google.maps.Size(73, 54),
        anchor: new window.google.maps.Point(36, 27),
      },
    }));
  }

  // should be overridden by subclasses
  addMarkers() {
  }

  openModal() {
    this.modalEl.classList.add(this.MODAL_OPEN_FLAG);
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
    let baseOptions = {
      map: this.map,
      icon: {
        url: `${window.MAP_ASSETS_BASE}images/layout/markers/${options.icon}.png`,
        size: options.size || new window.google.maps.Size(22, 22),
        anchor: options.anchor,
      },
    };

    // loop through locations and add markers
    if (window.MAP_LOCATIONS && window.MAP_LOCATIONS[options.locationsKey]) {
      window.MAP_LOCATIONS[options.locationsKey].forEach((markerOptions) => {
        // prepare the infowindow
        let infowindow = new window.google.maps.InfoWindow({
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
        let marker = new window.google.maps.Marker(Object.assign(baseOptions, {
          position: markerOptions.coords,
          title: markerOptions.name,
        }));

        this.markers.push(marker);

        // set mouseover handlers to open the corresponding infowindow
        let openHandler = () => {
          // close other infowindows
          this.infowindows.forEach((infowindow) => infowindow.close());
          // open infowindow
          infowindow.open(this.map, marker);
        };
        marker.addListener('mouseover', openHandler);
        marker.addListener('click', openHandler);

        marker.addListener('mouseout', () => {
          infowindow.close();
        });
      });
    }
  }
}

// Travel (level 1)
class TravelModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 14;
    this.mapStyles = window.MAP_STYLES.travel;
    this.init();
  }

  addMarkers() {
    // citygate tower
    this.addMarkersFactory({
      icon: 'gebaeude-icon',
      locationsKey: 'citygate',
      size: new window.google.maps.Size(64, 90),
      anchor: new window.google.maps.Point(64, 90),
    });

    // underground
    this.addMarkersFactory({
      icon: 'ubahn1',
      locationsKey: 'underground',
      size: new window.google.maps.Size(42, 42),
    });

    // tram
    this.addMarkersFactory({
      icon: 'tram1',
      locationsKey: 'tram',
      size: new window.google.maps.Size(42, 42),
    });

    // bus
    this.addMarkersFactory({
      icon: 'bus1',
      locationsKey: 'bus',
      size: new window.google.maps.Size(37, 37),
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
      size: new window.google.maps.Size(21, 21),
    });
  }
}

// Around (level 2)
class AroundModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 16;
    this.mapStyles = window.MAP_STYLES.around;
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
      new window.google.maps.Circle({
        strokeWeight: 0,
        fillColor: '#fff',
        fillOpacity: 0.3,
        map: this.map,
        center: this.MAP_CENTER,
        radius: radius,
      });
    });
  }

  addMarkers() {
    // citygate tower
    this.addMarkersFactory({
      icon: 'gebaeude-icon',
      locationsKey: 'citygate',
      size: new window.google.maps.Size(64, 90),
      anchor: new window.google.maps.Point(64, 90),
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
    this.mapStyles = window.MAP_STYLES.campusmile;
    this.init();
  }

  addMarkers() {
    // Student citygate tower marker
    this.addMarkersFactory({
      icon: 'gebaeude-uni',
      locationsKey: 'citygateUni',
      size: new window.google.maps.Size(106, 116),
      anchor: new window.google.maps.Point(106, 116),
    });

    // campus restaurants
    this.addMarkersFactory({
      icon: 'gastro',
      locationsKey: 'campusRestaurants',
    });

    // universities
    this.addMarkersFactory({
      icon: 'uni',
      locationsKey: 'universities',
      size: new window.google.maps.Size(76, 105),
    });

    // libraries
    this.addMarkersFactory({
      icon: 'bibliothek',
      locationsKey: 'libraries',
      size: new window.google.maps.Size(87, 63),
    });
  }
}


// Wrapper class around modals
class MapModals {
  constructor() {
    if (typeof window.google !== 'undefined' && window.MAP_ASSETS_BASE && window.MAP_LOCATIONS && window.MAP_STYLES) {
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

// triggered by google script callback
window.initMap = function() {
  new MapModals();
};

