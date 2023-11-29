<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor debes iniciar sesión");
            window.location = "../1. Inicio de Sesión/index.php";
        </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Saber Prep</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="img/saberprep.png">
  <link rel="stylesheet" href="../4. Preguntas/index-ciencias-naturales.html">
</head>

<body>

  <!-- Encabezado -->
  <header class="header">
    <a href="#" class="logo">Saber Prep</a>
    </div>
    <!-- Botón de cerrar sesión -->
    <a href="../1. Inicio de Sesión/php/cerrar_sesion.php" class="btn">Cerrar Sesión</a>
    </div>
  </header>

  <!-- Selección de prueba -->
  <header>
    <h1>Seleccionar prueba</h1>
  </header>
  <div class="pruebas">
    <div class="seleccion-prueba">
      <h2>Seleccionar Prueba</h2>
      <form id="prueba-form" action="">
        <label for="tipo-prueba">Tipo de Prueba:</label>
        <select name="tipo-prueba" id="tipo-prueba">
          <option value="">Seleccion una prueba</option>
          <option value="prueba1">Prueba 1</option>
          <option value="prueba2">Prueba 2</option>
          <option value="prueba3">Prueba 3</option>
          <option value="prueba4">Prueba 4</option>
        </select>
        <label for="materia-prueba">Materia:</label>
        <select name="materia-prueba" id="materia-prueba">
          <option value="">Seleccione una materia</option>
          <option value="matematicas">Matemáticas</option>
          <option value="ciencias-naturales">Ciencias Naturales</option>
          <option value="ciencias-sociales">Ciencias Sociales y Ciudadanas</option>
          <option value="lectura-critica">Lectura Crítica</option>
          <option value="ingles">Inglés</option>
        </select>
        <input type="submit" value="Iniciar Prueba">
      </form>
    </div>
  </div>

  <!-- Categorías de materia -->
  <div class="categorias">
    <div class="materia">
      <a href="#">
        <img src="img/matematica.png" alt="Matemáticas">
        <h2>Matemáticas</h2>
      </a>
    </div>
    <div class="materia">
      <a href="../4. Preguntas/index-ciencias-naturales.html">
        <img src="img/ciencias.png" alt="Ciencias Naturales">
        <h2>Ciencias Naturales</h2>
      </a>
    </div>
    <div class="materia">
      <a href="#">
        <img src="img/ciencias-sociales.png" alt="Ciencias Sociales y Ciudadanas">
        <h2>Ciencias Sociales y Ciudadanas</h2>
      </a>
    </div>
    <div class="materia">
      <a href="#">
        <img src="img/libro-de-lectura.png" alt="Lectura Crítica">
        <h2>Lectura Crítica</h2>
      </a>
    </div>
    <div class="materia">
      <a href="#">
        <img src="img/eng.png" alt="Inglés">
        <h2>Inglés</h2>
      </a>
    </div>
  </div>
  <footer>
    <center>
      <div class="fondo-opaco">
        <p>© 2023 Saber Prep. Todos los Derechos Reservados.
          <br>
          Algunas preguntas de Saber Prep han
          sido tomadas del material de apoyo
          libre y gratuito del ICFES.
        </p>
      </div>
    </center>
  </footer>
  <script src="script.js"></script>
   
</body>

</html>