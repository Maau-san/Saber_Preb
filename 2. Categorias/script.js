const form = document.querySelector('form'); // seleccionar el formulario y guardarlo en la variable "form"

// Agregar un evento de escucha de envío de formulario
form.addEventListener('submit', (event) => {
  event.preventDefault(); // detener el envío del formulario por defecto

  // Obtener el valor de la opción de prueba de tipo y materia del formulario
  const tipoPrueba = document.getElementById('tipo-prueba').value;
  const materiaPrueba = document.getElementById('materia-prueba').value;

  // Dependiendo del valor de la opción de materia seleccionada, redirigir al usuario a una página diferente
  switch (materiaPrueba) {
    case 'matematicas':
      window.location.href = ''; // redirigir al usuario a una URL específica para matemáticas
      break;
    case 'ciencias-naturales':
      window.location.href = '../4. Preguntas/index-ciencias-naturales.html'; // redirigir al usuario a una URL específica para ciencias naturales
      break;
    case 'ciencias-sociales':
      window.location.href = ''; // redirigir al usuario a una URL específica para ciencias sociales
      break;
    case 'lectura-critica':
      window.location.href = ''; // redirigir al usuario a una URL específica para lectura crítica
      break;
    case 'ingles':
      window.location.href = ''; // redirigir al usuario a una URL específica para inglés
      break;
    default:
      break;
  }
});