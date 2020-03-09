<?php

/* Aplicación Nº 5 (Obtener el valor del medio)
 Dadas tres variables numéricas de tipo entero $a, $b y $c, realizar una aplicación que muestre
 el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
 variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
 Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
 Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”*/

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<br/>";
    echo "Elija el metodo POST por favor.";
} else {
    $a = $_POST['numeroA'];
    $b = $_POST['numeroB'];
    $c = $_POST['numeroC'];


    $arr_ = array($a, $b, $c);

    // array_push ($arr_, $a );
    // array_push ($arr_, $b );
    // array_push ($arr_, $c );

    $valMax = max($arr_);

    $valMin = min($arr_);

    for ($i = 0; $i < count($arr_); $i++) {

        if ($arr_[$i] != $valMin && $arr_[$i] != $valMax) {
            echo "<br/>";
            echo "El valor medio es $arr_[$i]";
        } else {
            echo "<br/>";
            echo "No hay valor del medio";
            continue;
        }
    }
}
