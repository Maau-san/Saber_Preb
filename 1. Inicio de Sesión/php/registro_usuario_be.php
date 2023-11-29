<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //Incriptado de contraseña utilizando el algoritmo de incriptamiento sha512
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    //Verificar que el correo no se repita en la base de datos
    $vericiar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
        if(mysqli_num_rows($vericiar_correo) > 0){
            echo'
                <script>
                    alert("Este correo ya está registrado, intenta con otro diferente");
                    window.location = "../index.php"
                </script>        
            ';
            exit();
            
    }

    //Verificar que el nombre de usuario no se repita en la base de datos
    $vericiar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
        if(mysqli_num_rows($vericiar_usuario) > 0){
            echo'
                <script>
                    alert("Ya hay una cuenta registrada con este nombre de usuario, intente con otro diferente");
                    window.location = "../index.php"
                </script>        
            ';
            exit();
            
    }
    $ejecutar = mysqli_query($conexion, $query);

        if($ejecutar){
            echo '
                <script>
                    alert("Usted a sido registrado exitosamente");
                    window.location = "../index.php";
                </script>
            ';
         }else{
            echo '
                <script>
                    alert("Este usuario no se ha podido almacenar, por favor, intente nuevamente");
                    window.location = "../index.php";
                </script>
            ';
    }

        mysqli_close($conexion);
?>