<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css" type="text/css" title="Estilos de formulario" media="screen,print"><!--media funciona para que se imprima el color de la pantalla-->
    <title>Correo</title>
    <!--<script src="validar.js" ></script>-->
</head>
<body>
    <h1>Correo</h1><!--Titulo-->
        <form action="correo.php" method="post" class="form-register" onsubmit="validar()">
            <h2 class="form__titulo">ENVIANOS UN CORREO</h2>
            
            <div class="contendedor_inputs">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-100"><!--Botón-->
                <input type="text" id="correo" name="correo" placeholder="Email" class="input-100">
                <input type="text" id="asunto" name="asunto" placeholder="Asunto" class="input-100">
                <input type="text" id="mensaje" name="mensaje" placeholder="Mensaje" class="input-100" id="comentarios">
                <input type="submit" name="boton" value="Enviar mensaje" class="btn-enviar">
                <a class="btn-regresar" href="index.html">Regresar a principal</a>
            </div>

            <?php
            include("correo.php");
            ?>

        </form>
</body>
</html>