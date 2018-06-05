export default class Stack {
  constructor() {
    // set up class attributes and constants
    this.BREAKPOINT_SM = '800px';
    this.BREAKPOINT_LG = '1400px';
    this.FLAGS = ['is-level1', 'is-level2', 'is-level3'];
    this.levelOrder = [];

    // main JS is run on DOMContentLoaded
    document.addEventListener('DOMContentLoaded', (event) => {
      // select DOM wrapper
      this.el = document.querySelector('[data-stack]');

      if (this.el) {
        // select DOM items
        this.levels = [...this.el.querySelectorAll('[data-stack-item]')];
        this.navWrapper = this.el.querySelector('[data-stack-nav]');
        this.navItems = [...this.el.querySelectorAll('[data-stack-nav-item]')];

        if (this.levels.length && this.navWrapper && this.navItems.length) {
          // set up click events
          this.initEvents();

          // set up nav items width and its MQ listener
          this.setNavItemsWidth();
          let mqlSM = window.matchMedia(`(min-width: ${this.BREAKPOINT_SM})`);
          let mqlLG = window.matchMedia(`(min-width: ${this.BREAKPOINT_LG})`);
          let callback = window.setTimeout.bind(null, this.setNavItemsWidth.bind(this), 500);// > $transition-time
          mqlSM.addListener(callback);
          mqlLG.addListener(callback);

          // set up initial level order and update DOM
          this.levelOrder = this.levels;
          this.updateDOM();
        }
      }
    });
  }

  initEvents() {
    this.levels.forEach((level, idx) => {
      level.addEventListener('click', (e) => {
        this.elevate(idx);

        e.preventDefault();
        e.stopPropagation();
        return false;
      });
    });

    this.navItems.forEach((navItem, idx) => {
      navItem.addEventListener('click', (e) => {
        this.elevate(this.levels.findIndex((level) => level.id === e.currentTarget.getAttribute('href').replace('#', '')));

        e.preventDefault();
        e.stopPropagation();
        return false;
      });
    });
  }

  elevate(levelIndex) {
    this.levelOrder = [
      this.levels[levelIndex % this.levels.length],
      this.levels[(levelIndex + 1) % this.levels.length],
      this.levels[(levelIndex + 2) % this.levels.length],
    ];

    this.updateDOM();
  }

  updateDOM() {
    this.levelOrder.forEach((level, idx) => {
      // update levels
      level.classList.remove(...this.FLAGS);
      level.classList.add(this.FLAGS[idx]);

      // update nav items
      let navItem = this.navItems.find((el) => el.getAttribute('href') === `#${level.id}`);
      if (navItem) {
        navItem.classList.remove(...this.FLAGS);
        navItem.classList.add(this.FLAGS[idx]);
      }
    });
  }

  setNavItemsWidth() {
    this.navWrapper.classList.remove('has-calculated-dimensions');

    let itemsLargestWidth = this.navItems.reduce((maxWidth, navItem) => {
      return Math.max(navItem.offsetWidth, maxWidth);
    }, 0);

    this.navWrapper.style.width = `${itemsLargestWidth}px`;
    this.navWrapper.classList.add('has-calculated-dimensions');
  }
}

new Stack();
