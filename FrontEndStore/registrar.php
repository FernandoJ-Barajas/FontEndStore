<?php
include 'cn.php';

//Recibir y almacenar datos en una variable
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$comentarios = $_POST["comentarios"];
//$clave = $_POST["clave"];
//$telefono = $_POST["telefono"];

//Consulta para insertar datos en el formulario hasta la base de datos
$insertar = "INSERT INTO usuario(nombre, correo, telefono, comentarios) VALUES('$nombre', '$correo', '$telefono', '$comentarios')";

if(isset($_POST['boton']))
{
    if(empty($nombre))
    {
        echo '<script languaje="javascript"> alert("Comentarios no enviados");
        window.history.go(-1); </script>';
        exit;
    }
    if(empty($correo))
    {
        echo '<script languaje="javascript"> alert("Comentarios no enviados");
        window.history.go(-1); </script>';
        exit;
    }
    if(empty($telefono))
    {
        echo '<script languaje="javascript"> alert("Comentarios no enviados");
        window.history.go(-1); </script>';
        exit;
    }
}

if(isset($_POST['boton']))//
{
    if(strlen($nombre)>100)
    {
        echo '<script languaje="javascript"> alert("Campo Nombre excedido");
        window.history.go(-1); </script>';
        exit;
    }
    if(strlen($correo)>40)
    {
        echo '<script languaje="javascript"> alert("Campo Correo excedido");
        window.history.go(-1); </script>';-
        exit;
    }
    if(strlen($telefono)>11)
    {
        
        echo '<script languaje="javascript"> alert("Campo Telefono excedido);
        window.history.go(-1); </script>';
        exit;
    }
    if(strlen($comentarios)>200)
    {
        echo '<script languaje="javascript"> alert("Comentarios muy largos");
        window.history.go(-1); </script>';
        exit;
    }
}

//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo 'usuario registrado exitosamente';
}
else if(!$resultado){
    echo 'error al registrar el usuario';
}
//Cerrar la conexion a la base de datos
mysqli_close($conexion);