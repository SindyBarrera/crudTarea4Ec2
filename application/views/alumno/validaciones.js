function validar(){
    var nombre, apellido, direccion, movil, email, dpi, estado, expresion
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    direccion = document.getElementById("direccion").value;
    movil = document.getElementById("movil").value;
    email = document.getElementById("email").value;
    dpi = document.getElementById("dpi").value;
    estado = document.getElementById("estado").value

    expresion = /\w+@\w+\.+[a-z]/;
    
    if (nombre === "" || apellido === "" || email === "" || dpi === ""  || estado === "" || movil === ""){
        alert ("Todos los campos son obligatorios...");
        return false;
    }
    if (movil.length>10){
        alert ("solo se permite 8 digitos");
        return false;
    }
    if (isNaN(movil)){
        alert ("El telefono ingresado no es un numero");
        return false;
    }

}