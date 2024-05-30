const body = document.getElementsByTagName('body')[0];
const html = document.getElementsByTagName('html')[0];
const main = document.getElementsByTagName('main')[0];

const btnBurger = document.querySelector('.js-burger-btn');
const headerNavMenu = document.querySelector('.js-header-menu');
const headerMenuItems = document.querySelectorAll('.header__menu-item');

const addToCartBtn = document.querySelector('.js-addToCart-btn');
const discoverBtn = document.querySelector('.js-discover-btn');

const typeBtns = document.querySelectorAll('.products__type-btn');
const vegetablesDropdown = document.querySelector('.products__dropdown--vegetables');

const footerLogo = document.querySelector('.footer__logo-link');
const footerNav = document.querySelector('.footer__nav');

const OVERLAY_CLASS = 'overlay';
const ACTIVE_CLASS = 'active';
const OPEN_CLASS = 'open';
const FIXING_CLASS = 'fixing';

let activeItem = null;

function removeClass(element, className){
    element.classList.remove(className);
}
function addClass(element, className){
    element.classList.add(className);
}
function toggleClass(element, className) {
    element.classList.toggle(className);
}

btnBurger.addEventListener('click', (e) => {
    if(e.target == btnBurger){
        toggleClass(body, FIXING_CLASS);
        toggleClass(html, FIXING_CLASS);
        toggleClass(btnBurger, ACTIVE_CLASS);
        toggleClass(headerNavMenu, OPEN_CLASS);
        toggleClass(main, 'blured-overlay');
    }
    if(btnBurger.classList.contains(ACTIVE_CLASS)){
        addToCartBtn.setAttribute('disabled', '');
        discoverBtn.setAttribute('disabled', '');
    } else {
        addToCartBtn.removeAttribute('disabled', '');
        discoverBtn.removeAttribute('disabled', '');
    }
});
main.addEventListener('click', () => {
  if(headerNavMenu.classList.contains(OPEN_CLASS)){
    removeClass(body, FIXING_CLASS);
    removeClass(html, FIXING_CLASS);
    removeClass(btnBurger, ACTIVE_CLASS);
    removeClass(headerNavMenu, OPEN_CLASS);
    removeClass(main, 'blured-overlay');
  }
});
if(window.matchMedia('(min-width: 992px)').matches){
    footerLogo.remove();
    footerNav.appendChild(footerLogo);
}
headerMenuItems.forEach((item) => {
    item.addEventListener('click', () => {
      const isActive = item.classList.contains('active');
      if (isActive) {
        removeClass(item, ACTIVE_CLASS);
        } else {
            headerMenuItems.forEach(otherItem => {
            if (otherItem !== item) {
                removeClass(otherItem, ACTIVE_CLASS);
              }
            });
        addClass(item, ACTIVE_CLASS);
        }
    });
    const dropdownItems = item.querySelectorAll('.header__dropdown-item');
    dropdownItems.forEach((dropdownItem) => {
        dropdownItem.addEventListener('click', (e) => {
            e.stopPropagation();
        });
    }); 
});
typeBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const isActive = btn.classList.contains(ACTIVE_CLASS);
        if(isActive){
            removeClass(btn, ACTIVE_CLASS);
        } else {
            typeBtns.forEach(otherBtn => {
                if(otherBtn !== btn){
                    removeClass(otherBtn, ACTIVE_CLASS);
                }
            });
        addClass(btn, ACTIVE_CLASS);
        }
        if(btn.classList.contains(ACTIVE_CLASS) && btn.dataset.type == 'vegetables'){
            addClass(vegetablesDropdown, ACTIVE_CLASS);
        } else {
            removeClass(vegetablesDropdown, ACTIVE_CLASS);
        }
    });
});
