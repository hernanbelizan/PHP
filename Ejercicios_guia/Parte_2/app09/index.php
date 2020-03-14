<?php
/*
Aplicación Nº 9 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.
*/

$arrNUmeros = Array(
    1 => rand(),
    2 => rand(),
    3 => rand(),
    4 => rand(),
    5 => rand()
);

// $arrNUmeros = Array(
//     1 => 1,
//     2 => 2,
//     3 => 3,
//     4 => 4,
//     5 => 30
// );

$suma = 0;

foreach ($arrNUmeros as $numero) {
    # code...
    $suma+= $numero;
}


$cantidadElementos = count($arrNUmeros);

$promedio = $suma / $cantidadElementos;

echo $promedio . "<br>";
if($promedio < 6) {
    echo "El promedio es Menor a 6" . "<br>";
}

if($promedio > 6) {
    echo "El promedio es Mayor a 6" . "<br>";
}

if($promedio == 6) {
    echo "El promedio es Igual a 6" . "<br>";
}