// formulario.js

// Función para convertir a mayúsculas los campos Nombre y Apellido
function convertirAMayusculas(inputId) {
  const input = document.getElementById(inputId);
  input.value = input.value.toUpperCase();
}

// Función para validar el campo de correo electrónico
function validarCorreo() {
  const correoInput = document.getElementById('correo');
  const correoValue = correoInput.value;

  // Expresión regular para validar el formato del correo
  const correoRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

  if (!correoRegex.test(correoValue)) {
    alert('Por favor, ingresa una dirección de correo válida.');
    correoInput.focus();
  }
}

// Función para visualizar la contraseña como asteriscos
function mostrarAsteriscos() {
  const passwordInput = document.getElementById('password');
  passwordInput.type = 'password';
}

// Event listener para ejecutar las funciones al cargar la página
document.addEventListener('DOMContentLoaded', function () {
  const nombreInput = document.getElementById('nombre');
  const apellidoInput = document.getElementById('apellido');
  const correoInput = document.getElementById('correo');
  const passwordInput = document.getElementById('password');

  nombreInput.addEventListener('input', () => convertirAMayusculas('nombre'));
  apellidoInput.addEventListener('input', () => convertirAMayusculas('apellido'));
  correoInput.addEventListener('blur', validarCorreo);
  passwordInput.addEventListener('focus', mostrarAsteriscos);
});
