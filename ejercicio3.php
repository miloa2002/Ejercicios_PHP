<?php
/*Modifica el ejercicio anterior para que muestre al lado de cada 
cuadrado si es un número par o impar.*/

for($i = 0; $i<=30; $i++) {
    $cuadrado = $i*$i;
    echo "El cuadrado de ".$i."es".($cuadrado);

    if($cuadrado%2 == 0) {
        echo " Y es par";
    }else {
        echo " Y es impar";
    }
    
    echo "<br/>";
}

?>