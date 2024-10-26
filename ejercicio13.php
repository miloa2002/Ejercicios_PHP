<?php

$productos = [];
array_push($productos, "manzana", "banana", "sandía"); //Crear
unset($productos[1]); //Eliminar
$productos[0] = "Papaya"; //Editar


echo "<pre>";
var_dump($productos);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud con arrays</title>
</head>
<body>
    <?php
        foreach ($productos as $producto) {
            echo $producto."<br/>";
        }
    ?>
</body>
</html>