<?php

/*
Aplicación Nº 10 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach. 
*/
//creo un array

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$arrImpares = array();
//a partir de un array detectar los impares
echo "los valores pares son: " . "<br>";
foreach ($arr as $key => $value) {
    # code...
    if (($value % 2) == 0) {
        
        echo $value . "<br>";
    } else {
        array_push($arrImpares, $value);
    }
}

//var_dump($arrImpares);
echo "los valores impares son: " . "<br>";
foreach ($arrImpares as $key => $value) {
    
    echo $value . "<br>";
}

//imprimir los resultados
