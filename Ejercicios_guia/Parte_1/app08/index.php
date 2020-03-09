<?php

/*
Aplicación Nº 8 (Números en letras)
Realizar un programa que en base al valor numérico de la variable $num, pueda mostrarse por
pantalla, el nombre del número que tenga dentro escrito con palabras, para los números entre
el 20 y el 60.
*/

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<br/>";
    echo "Elija el metodo POST por favor.";
} else { 
    $num = $_POST['num'];
    
}