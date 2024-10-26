<?php

    if($_POST) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(empty($nombre) && empty($email) && empty($password)) {
            echo "Los campos no pueden ir vacíos";
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "El formato del correo electrónico es válido.";
        }else {
            echo "Registro exitoso";
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar form</title>
</head>
<body>
    <form action="/ejercicio12.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
