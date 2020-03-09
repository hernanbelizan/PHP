<?php

// Aplicación Nº 4 (Sumar números)
// Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
// supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
// se sumaron.


$num_1 = 0;
$num_2 = 1;
$resultado = 0;
$contador = 0;

do {
    echo "<br>";
    
    $resultado += $num_1 + $num_2;
    echo "$num_1 + $num_2";
    echo "<br>";

    $num_1 += 1;
    $num_2 += 1;
    $contador += 2;

} while ($resultado <= 1000);

echo "La cantidad de numeros sumados es: $contador";
