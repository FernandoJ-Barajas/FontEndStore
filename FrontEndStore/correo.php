<?php

if(isset($_POST['boton']))
{
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['asunto']) &&!empty($_POST['mensaje']))
    {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.="X-Mailer: PHP/" . phpversion();

        $mail = @mail("006190003@alumnos.uteg.edu.mx",$asunto,$mensaje,$header);
        var_dump($mail);
        if($mail)
        {
            echo "<script>alert('Se envio correo exitosamente')</script>";
            echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
        }

    }
}