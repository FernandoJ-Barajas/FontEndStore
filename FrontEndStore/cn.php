<?php
//Crear una variable con los siguientes parametros
//Servidor, usuario, contraseña, nombre_basededatos

$conexion = mysqli_connect("localhost", "root", "", "login");


/*if(!$conexion){
    echo 'Error en la conexion a la base de datos';
} 
else {
    echo 'Conexion exitosa';
}*/