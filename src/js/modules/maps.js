class MapModals {
  constructor() {
    if (typeof window.google !== 'undefined') {
      this.modals = [...document.querySelectorAll('[data-map-modal]')];
      if (this.modals.length) {
        this.modals.forEach((modal) => {
          new MapModal(modal);
        });
      }
    }
  }
}

class MapModal {
  constructor(modalEl) {
    // modalEl must be set
    if (!modalEl)
      return false;

    this.modalEl = modalEl;
    this.mapEl = this.modalEl.querySelector('[data-map]');
    if (this.mapEl) {
      // init map
      this.map = new window.google.maps.Map(this.mapEl, {
        zoom: 15,
        center: {lat: 50.128754, lng: 8.691756},

        disableDefaultUI: true,
      });


      // setup zoom listeners
      window.google.maps.event.addDomListener(this.modalEl.querySelector('[data-map-zoom-in]'), 'click', () => {
        this.map.setZoom(this.map.getZoom() + 1);
      });
      window.google.maps.event.addDomListener(this.modalEl.querySelector('[data-map-zoom-out]'), 'click', () => {
        this.map.setZoom(this.map.getZoom() - 1);
      });


      // overlay map
      let imageBounds = {
        north: 50.162275,
        south: 50.102031,
        east: 8.753333,
        west: 8.622927,
      };

      let travelOverlay = new google.maps.GroundOverlay(
        'https://github.com/ugrupp/citygate/raw/master/src/images/layout/map-travel-bg.png',
        imageBounds,
        {
          opacity: 1,
          clickable: true,
          map: this.map
        }
      );
    };
  }
}

// triggered by google script callback
window.initMap = function() {
  new MapModals();
}

