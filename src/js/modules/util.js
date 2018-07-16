// Util class
export default class Util {
  static transitionEndEvent() {
    let t;
    let el = document.createElement('fakeelement');
    let transitions = {
      'transition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'MozTransition': 'transitionend',
      'WebkitTransition': 'webkitTransitionEnd',
    };

    for (t in transitions) {
      if (el.style[t] !== undefined ) {
        return transitions[t];
      }
    }
  }

  // Helper function to trigger events
  static triggerEvent(eventName, payload) {
    if (!eventName) return;

    let event;
    event = document.createEvent('CustomEvent');
    event.initCustomEvent(eventName, true, true, payload);
    document.dispatchEvent(event);
  }
}
