<?php

if ($_POST) {
    $palabra = $_POST['palabra'];
    $vocales = "a e i o u";

    for ($i = 0; $i < strlen($palabra); $i++) {
        switch ($palabra[$i]) {
            case 'a':
                echo "La palabra contiene vocal a"."<br/>";
                break;

            case 'e':
                echo "La palabra contiene vocal e"."<br/";
                break;

            case 'i':
                echo "La palabra contiene vocal i"."<br/";
                break;

            case 'o':
                echo "La palabra contiene vocal o"."<br/";
                break;

            case 'u':
                echo "La palabra contiene vocal u"."<br/";
                break;

            default:
                echo "El carácter '{$palabra[$i]}' no es una vocal<br>";
                break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vocales</title>
</head>

<body>
    <form action="/ejercicio11.php" method="post">
        <input type="text" name="palabra" placeholder="Ingresa una palabra">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>