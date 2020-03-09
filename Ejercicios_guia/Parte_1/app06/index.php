<?php

/*
Aplicación Nº 6 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

*/


if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<br/>";
    echo "Elija el metodo POST por favor.";
} else {

    if (isset($_POST['operador']) && isset($_POST['op1']) && isset($_POST['op2'])) {

        var_dump($_POST);
        $operador = $_POST['operador'];
        $op1 = $_POST['op1'];
        $op2 = $_POST['op2'];

        switch ($operador) {
            case "+":
                echo $op1 + $op2;
            break;
            
            case "-":
                echo $op1 - $op2;
            break;

            case "*":
                echo $op1 * $op2;
            break;

            case "/":
                if($op2 == "0") {
                    $rsta = "No es posible dividir entre cero";
                } else {
                    $rsta = $op1 / $op2;
                }
                echo $rsta;
            break;

            default:
                
                echo "Por favor ingrese un operador valido. ";
                echo "<br/>";
                echo "‘+’, ‘-’, ‘/’ y ‘*’";
                echo "<br/>";
                break;
        }
    }
}

?>