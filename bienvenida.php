<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Debes iniciar Sesión");
                window.location = "index.php"
            </script>
        ';
        //header("location: index.php");
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenida a la pagina web.</h1>
    <a href="php/cerrar_session.php">Cerrar Sesión</a>
</body>
</html>