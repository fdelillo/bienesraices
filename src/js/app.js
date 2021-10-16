document.addEventListener('DOMContentLoaded', function() {
    eventlisteners();
    darkMode();
});

function darkMode() {
    const prefiereDarkModo = window.matchMedia('(prefers-color-scheme: dark)');

    if (prefiereDarkModo.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkModo.addEventListener('change', function() {
        if (prefiereDarkModo.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });
    
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
    });
}

function eventlisteners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar'); //agrega o quita la clase segun exista o no
}
