    <?php

    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: ../2. Categorias/index.php");
    }

    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesión</title>
        
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="icon" href="../Pagina de Inicio/media/Icono Saber Prep.png">

        <link rel="stylesheet" href="assets/css/estilos.css">
    </head>
    <body>

            <main>

                <div class="contenedor__todo">
                    <div class="caja__trasera">
                        <div class="caja__trasera-login">
                            <h3>¿Ya tienes una cuenta?</h3>
                            <p>Inicia sesión para entrar en la página</p>
                            <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                        </div>
                        <div class="caja__trasera-register">
                            <h3>¿Aún no tienes una cuenta?</h3>
                            <p>Regístrate para que puedas iniciar sesión</p>
                            <button id="btn__registrarse">Regístrarse</button>
                        </div>
                    </div>

                    <!--Formulario de Login y registo-->
                    <div class="contenedor__login-register">
                        <!--Login-->
                        <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                            <h2>Iniciar Sesión</h2>
                            <input type="email" placeholder="Correo Electrónico Institucional" name="correo" required>
                            <div class="password-container">
                                <input type="password" placeholder="Contraseña" name="contrasena" id="password-input" required>
                                <input type="checkbox" id="show-password-checkbox">
                                <label for="show-password-checkbox">Mostrar contraseña</label>
                            </div>
                                <button>Entrar</button>
                        </form>

                        <!--Registor-->
                        <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                            <h2>Regístrarse</h2>
                            <input type="text" placeholder="Nombre completo" name="nombre_completo">
                            <input type="email" placeholder="Correo Electronico Institucional" name="correo">
                            <input type="text" placeholder="Usuario" name="usuario">
                            <input type="password" placeholder="Contraseña" name="contrasena">
                            <button>Regístrarse</button>
                        </form>
                    </div>
                </div>

            </main>

            <script src="assets/js/script.js"></script>
            <script src="assets/js/script_mostrar.js"></script>
    </body>
    </html>