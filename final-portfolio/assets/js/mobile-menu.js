const hamburger = document.getElementById('js-hamburger');/* used to return the  element with the specified value for usage */
const mobileMenu = document.getElementById('js-mobile-menu');  

if (hamburger) {
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('is-active'); /* if statement for functioning hamburger menu when viewed on mobile devices */
    mobileMenu.classList.toggle('is-active');
  });
}
