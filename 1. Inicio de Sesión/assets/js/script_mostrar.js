// Obtener elementos del DOM
const passwordInput = document.getElementById('password-input');
const showPasswordCheckbox = document.getElementById('show-password-checkbox');

// Función para cambiar el tipo de input de contraseña
function togglePasswordVisibility() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
}

// Asignar evento al cambio de estado del checkbox
showPasswordCheckbox.addEventListener('change', togglePasswordVisibility);