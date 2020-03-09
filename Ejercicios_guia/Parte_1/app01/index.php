<?php
/*
Aplicación Nº 1 (Mostrar variables)
Realizar un programa que guarde su nombre en $nombre y su apellido en $apellido. Luego
mostrar el contenido de las variables con el siguiente formato: Pérez, Juan. Utilizar el operador
de concatenación.
*/

#Variables
$nombre;
$apellido;

echo "Por favor ingrese Nombre y Apellido";
echo"<br>";
//Valido que el metodo POST sea utilizado y que los datos nombre y apellido no vengan vacios
if (isset($_POST) && (!empty($_POST['nombre']) && !empty($_POST['apellido']))) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo "Bienvenido a PHP $nombre $apellido";

    #var_dump($_POST);
}else{
    echo"<br>";
    #echo $_POST['nombre'] . $_POST['apellido'];
    echo "Debe ingresar Nombre y Apellido..";
}
