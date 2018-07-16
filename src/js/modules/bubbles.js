import Util from './util';

class Bubble {
  constructor(bubbleEl, parent) {
    this.bubbleEl = bubbleEl;
    this.isOpen = false;
    this.EXPAND_FLAG = 'is-expanded';
    this.ANIMATING_FLAG = 'is-animating';
    this.initToggle();
    this.initOutsideClick();
    this.initTransitionFlag();

    // optional parent container
    this.parent = parent;
  }

  initToggle() {
    // openers
    this.bubbleEl.addEventListener('click', (e) => {
      this.toggle();
    });
  }

  // close bubble on click "anywhere"
  initOutsideClick() {
    document.addEventListener('click', (e) => {
      if (this.bubbleEl !== e.target && !this.bubbleEl.contains(e.target)) {
        this.close();
      }
    });
  }

  initTransitionFlag() {
    let transitionEndEvent = Util.transitionEndEvent();
    transitionEndEvent && this.bubbleEl.addEventListener(transitionEndEvent, (e) => {
      if (e.target === this.bubbleEl) {
        this.bubbleEl.classList.remove(this.ANIMATING_FLAG);
      }
    }, false);
  }

  toggle() {
    this.isOpen
      ? this.close()
      : this.open();
  }

  close() {
    if (this.isOpen) {
      this.isOpen = false;
      this.bubbleEl.classList.remove(this.EXPAND_FLAG);
      this.bubbleEl.classList.add(this.ANIMATING_FLAG);
    }
  }

  open() {
    if (this.parent) {
      this.parent.closeBubbles();
    }

    this.isOpen = true;
    this.bubbleEl.classList.add(this.EXPAND_FLAG);
    this.bubbleEl.classList.add(this.ANIMATING_FLAG);
  }
}

export default class Bubbles {
  constructor() {
    document.addEventListener('DOMContentLoaded', (event) => {
      this.bubbles = [...document.querySelectorAll('[data-bubble]')].map((bubble) => new Bubble(bubble, this));
    });
  }

  closeBubbles() {
    this.bubbles.forEach((bubble) => bubble.close());
  }
}
