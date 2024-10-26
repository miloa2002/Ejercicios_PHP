<?php

    session_start();

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($_POST["nombre"]  && $_POST["password"]){
        $_SESSION["autorizado"] = true;
        echo "Autorizado";
    }else {
        echo "No autorizado";
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <form action="/ejercicio14.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
