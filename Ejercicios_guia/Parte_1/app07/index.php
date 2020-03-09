<?php
/*
Aplicación Nº 7 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple
-----------------------------------------------------------------------------------------------
Inicio                  H. norte        H. sur
20-21       Marzo	    Primavera	    Otoño 20/3 al 20/6
21-22       Junio	    Verano	        Invierno 20/6 al 22/9
22-24       Septiembre	Otoño	        Primavera 22/9 al 21/12
21-22       Diciembre	Invierno	    Verano 22/12 al 20/2
*/

echo "la estacion de año actual es...";
echo estaciondelanio();

//var_dump(estaciondelanio($mes_actual, $dia_actual));


function estaciondelanio()
{
    $fecha_actual = getdate();

    //echo $fecha_actual . "<br>";

    //var_dump($fecha_actual);

    echo "<br>";

    $mes_actual = $fecha_actual['mon'];
    $dia_actual = $fecha_actual['mday'];
    $mes = (int) $mes_actual;
    $dia = (int) $dia_actual;

    // var_dump($mes);
    // var_dump($dia);

    //echo "dia actual : " . $dia_actual . "<br>";
    //echo "mes actual : " . $mes_actual . "<br>";
     
    // var_dump(($mes >= 3 && $dia >= 20));
    if (($mes >= 3 && $mes <= 6)) {
        if( $dia >= 20){
            return "otono" . "<br>";
        } else {
            return "verano" . "<br>" ;
        }
    }
    if (($mes >= 6 && $mes <= 9)) {
        if($dia >= 20) {
            return "invierno" . "<br>";
        } else {
            return "otoño" . "<br>";
        }
    }
    if (($mes >= 9 && $mes <= 12)) {
        if($dia >= 20) {
            return "primavera" . "<br>";
        } else {
            return "invierno" . "<br>";
        }
    }
    if (($mes >= 12 && $mes <= 3)) {
        if($dia <= 20) {
            return "verano" . "<br>";
        } else {
            return "primavera" . "<br>";
        }
    }
}


// get today's date
// $today = new DateTime();
// echo 'Hoy es: ' . $today->format('m-d-Y') . '<br />';

// // get the season dates
// $spring = new DateTime('March 20');
// $summer = new DateTime('June 20');
// $fall = new DateTime('September 22');
// $winter = new DateTime('December 21');

// switch (true) {
//     case $today >= $spring && $today < $summer:
//         echo 'It\'s Primavera!';
//         break;

//     case $today >= $summer && $today < $fall:
//         echo 'It\'s Verano!';
//         break;

//     case $today >= $fall && $today < $winter:
//         echo 'It\'s Otoño';
//         break;

//     default:
//         echo 'Invierno!';
// }
