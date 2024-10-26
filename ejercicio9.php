<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="/ejercicio9.php" method="post">
        <input type="number" name="numero1" placeholder="Ingresa un numero">
        <select name="operacion">
            <option value="">--Selecciona la operación--</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
        </select>
        <input type="number" name="numero2" placeholder="Ingresa un numero">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

    if($_POST) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

    }

    switch ($operacion) {
        case '+':
            echo "El resultado es: ".$numero1 + $numero2;
            break;
        
        case '-':
            echo "El resultado es: ".$numero1 - $numero2;
            break;

        case '*':
            echo "El resultado es: ".$numero1 * $numero2;
            break;
        
        default:
            # code...
            break;
    }

?>