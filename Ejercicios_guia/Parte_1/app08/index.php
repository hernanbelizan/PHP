<?php

/*
Aplicación Nº 8 (Números en letras)
Realizar un programa que en base al valor numérico de la variable $num, pueda mostrarse por
pantalla, el nombre del número que tenga dentro escrito con palabras, para los números entre
el 20 y el 60.
*/

$num = $_POST['numero'];

$enteros = array(
    10 => "Diez",
    20 => "Veinte",
    30 => "Traeinta",
    40 => "Cuarenta",
    50 => "Cincuenta",
    60 => "Sesenta",
    70 => "Setenta",
    80 => "Ochenta",
    90 => "Noventa",
    100 => "Cien"
);

$unidades = array(
    1 => "Uno",
    2 => "Dos",
    3 => "Tres",
    4 => "Cuatro",
    5 => "Cinco",
    6 => "Seis",
    7 => "Siete",
    8 => "Ocho",
    9 => "Nueve"
);

$decenas = array(
    
    2 => "Veinte",
    3 => "Treinta",
    4 => "Cuarenta",
    5 => "Cincuenta",
    6 => "Sesenta",
    7 => "Setenta",
    8 => "Ochenta",
    9 => "Noventa"
);

$enteros = array(
    1 => 1,
    2 => 2,
    3 => 3,
    4 => 4,
    5 => 5,
    6 => 6,
    7 => 7,
    8 => 8,
    9 => 9
);


//Mostrar el nunmero

//paso el strin a ARRAY
$arr = str_split($num);

//Creo el array de enteros
$numArray = array_map('intVal', $arr);
//var_dump($numArray);
if ($numArray[0] != 0){
    DecenasALetras($numArray[0]);
    if ($numArray[1] != 0){
        UnidadesALetras($numArray[1]);
    }
}
// foreach ($numArray as $pos => $val) {
//     // var_dump($numArray);
//     // var_dump($enteros);
//     // var_dump($unidades);
//     foreach ($enteros as $key => $value) {

//         // var_dump($key);
//         // var_dump($value);
//         if ($val === $value && $val != 0 && $val != 1) {
//             DecenasALetras($val);
//             if ($pos[1] === $value && $val != 0) {
//                 UnidadesALetras($value);
//             }
//         }
        
//     }
// }

function DecenasALetras($value){

    switch ($value) {
        case 2:
            echo "Veinte";
            break;
    
        case 3:
            echo "Treinta";
            break;
    
        case 4:
            echo "Cuarenta";
            break;
    
        case 5:
            echo "Cincuenta";
            break;

        case 6:
            echo "Sesenta";
            break;
    
        case 7:
            echo "Setenta";
            break;
    
        case 8:
            echo "Ochenta";
            break;
    
        case 9:
            echo "Noventa";
            break;
    
        default:
            echo "No se puede hacer, Lo siento :(" . "<br>";
            break;
    }
}

function UnidadesALetras($valor){

    //var_dump($valor);
    switch ($valor) {
        case 1:
            echo " y uno" . "<br>";
            break;
    
        case 2:
            echo " y dos" . "<br>";
            break;
    
        case 3:
            echo " y tres" . "<br>";
            break;
    
        case 4:
            echo " y cuatro" . "<br>";
            break;
    
        case 5:
            echo " y cinco" . "<br>";
            break;

        case 6:
            echo " y seis" . "<br>";
            break;
    
        case 7:
            echo " y siete" . "<br>";
            break;
    
        case 8:
            echo " y ocho" . "<br>";
            break;
    
        case 9:
            echo " y nueve" . "<br>";
            break;
    
        default:
            echo "No se puede hacer, Lo siento :(" . "<br>";
            break;
    }
}
