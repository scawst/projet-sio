const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

    registerLink.addEventListener('click', function() {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', function() {
        wrapper.classList.remove('active');
    });
    btnPopup.addEventListener('click', function() {
        wrapper.classList.add('active-popup');
        wrapper.style.pointerEvents = 'auto';
    });
    iconClose.addEventListener('click', function() {
         wrapper.classList.remove('active-popup');
         wrapper.style.pointerEvents = 'none'
    });