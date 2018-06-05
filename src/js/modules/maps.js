import LOCATIONS from './map-locations';

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

    this.markers = [];
    this.infowindows = [];
  }

  init() {
    this.initMap();
    this.initZoomers();
    this.initOverlay();
    this.addMarkers();
    this.initModalTogglers();
  }

  initMap() {
    this.map = new window.google.maps.Map(this.mapEl, {
      zoom: this.initialZoom,
      center: this.MAP_CENTER,
      disableDefaultUI: true,
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
        'https://github.com/ugrupp/citygate/raw/master/src/images/layout/map-travel-bg.png',
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
}

// Travel (level 1)
class TravelModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);
    this.init();
  }

  addMarkers() {
    // citygate tower
    this.addCitygateMarker();

    // underground
    this.addMarkersFactory({
      icon: 'ubahn',
      locationsKey: 'underground',
    });

    // tram
    this.addMarkersFactory({
      icon: 'tram',
      locationsKey: 'tram',
    });

    // bus
    this.addMarkersFactory({
      icon: 'bus',
      locationsKey: 'bus',
    });

    // S-Bahn
    this.addMarkersFactory({
      icon: 'tram',
      locationsKey: 'sbahn',
    });
  }

  // Citygate tower marker
  addCitygateMarker() {
    this.markers.push(new window.google.maps.Marker({
      map: this.map,
      position: this.MAP_CENTER,
      icon: {
        url: 'https://raw.githubusercontent.com/ugrupp/citygate/master/src/images/layout/markers/gebaeude-icon.png',
        size: new window.google.maps.Size(64, 90),
        anchor: new window.google.maps.Point(64, 90),
      },
    }));
  }

  // general factory method for adding standard markers (22x22px)
  addMarkersFactory(options) {
    let baseOptions = {
      map: this.map,
      icon: {
        url: `https://raw.githubusercontent.com/ugrupp/citygate/master/src/images/layout/markers/${options.icon}.png`,
        size: new window.google.maps.Size(22, 22),
      },
    };

    // loop through locations and add markers
    LOCATIONS[options.locationsKey].forEach((markerOptions) => {
      // prepare the infowindow
      let infowindow = new window.google.maps.InfoWindow({
        content: `
          <article class="c-map-infowindow">
            <h1>${markerOptions.name}</h1>
            <div>${markerOptions.text || ''}</div>
          </article>
        `,
        maxWidth: 300,
      });

      // add it to the infowindow list
      this.infowindows.push(infowindow);

      // finally set the marker and it to the markers list
      let marker = new window.google.maps.Marker(Object.assign(baseOptions, {
        position: markerOptions.coords,
        title: markerOptions.name,
      }));

      this.markers.push(marker);

      // set a click handler to open the corresponding infowindow
      marker.addListener('click', () => {
        // close other infowindows
        this.infowindows.forEach((infowindow) => infowindow.close());
        // open infowindow
        infowindow.open(this.map, marker);
      });
    });
  }
}

// Around (level 2)
class AroundModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 17;
    this.init();
  }
}

// Campus mile (level 3)
class CampusMileModal extends MapModal {
  constructor(modalEl) {
    super(modalEl);

    this.initialZoom = 18;
    this.init();
  }
}

// Wrapper class around modals
class MapModals {
  constructor() {
    if (typeof window.google !== 'undefined') {
      this.modals = [...document.querySelectorAll('[data-map-modal]')];
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

// triggered by google script callback
window.initMap = function() {
  new MapModals();
};

