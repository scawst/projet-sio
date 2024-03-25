document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.wrapper');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');

    if (wrapper && loginLink && registerLink) {
        registerLink.addEventListener('click', function() {
            wrapper.classList.add('active');
        });

        loginLink.addEventListener('click', function() {
            wrapper.classList.remove('active');
        });
    } else {
        console.error('Les éléments nécessaires ne sont pas trouvés.');
    }
});
