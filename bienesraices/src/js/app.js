document.addEventListener('DOMContentLoaded', function() {

    eventListeners();

    darkMode();
});

function darkMode() {

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    const modoOscuroGuardado = localStorage.getItem('modoOscuro');

    if (modoOscuroGuardado === 'true') {
        document.body.classList.add('dark-mode');
    } else if (modoOscuroGuardado ==='false') {
        document.body.classList.remove('dark-mode');
    } else {

        const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        }
    }

    botonDarkMode.addEventListener('click', function () {
        document.body.classList.toggle('dark-mode');

        const modoOscuroActivo = document.body.classList.contains('dark-mode');
        localStorage.setItem('modoOscuro', modoOscuroActivo);
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive () {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}