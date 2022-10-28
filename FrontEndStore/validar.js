function validar(){

    var nombre, correo, telefono, comentarios, expresion;
    var ernombre, ercorreo;
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    comentarios = document.getElementById("comentarios").value;
    ernombre = /^([A-Z][a-z]+([ ]?[a-z]?[A-Z][a-z]+)*)$/;
    ercorreo = /\w+@[a-zA-Z]+\.[a-z]{2,3}/;

    if(nombre==="" || correo==="" || telefono==="" || comentarios==="")
    {
        alert("Todos los campos son obligartorios");
        return false;
    } 
    else if(nombre.length>100)
    {
        alert("Nombre demasiado largo");
        return false;
    }
    else if (correo.length>40)
    {
        alert("Correo demasiado largo")
        return false;
    }
    else if (telefono.length>11)
    {
        alert ("El telefono es demasiado largo")
        return false;
    }
    else if (comentarios.length>200)
    {
        alert ("Tu comentario es demasiado largo")
        return false;
    }
    else if (isNaN(telefono)){
        alert ("El telefono solo admite numeros")
        return false;
    }
    if(!ernombre.text(nombre)){
        alert("El formato de nombre es incorrecto")
        return false;
    }
    if(!ercorreo.text(correo)){
        alert("El formato de correo es incorrecto")
        return false;
    }

}
