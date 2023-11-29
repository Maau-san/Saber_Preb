// Crear una instancia de Typed y asignarla a la clase "multiple-text"
var typed = new Typed(".multiple-text", {
    strings: ["Preparación gratuita para las pruebas Saber 11."],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 100,
    loop: true
});

// Obtener el botón de práctica y los temas preparatorios
const practicaBtn = document.querySelector('.navbar a:nth-child(2)');
const temasPreparatorios = document.querySelector('.temas-preparatorios');

// Agregar un controlador de eventos de clic al botón de práctica
practicaBtn.addEventListener('click', function () {
    // Alternar la clase "show" en los temas preparatorios
    temasPreparatorios.classList.toggle('show');
});