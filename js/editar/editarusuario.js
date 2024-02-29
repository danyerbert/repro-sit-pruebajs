const editarUsuario = async()=>{
    document.getElementById('formularioRegistro').onsubmit = function(e) {
        e.preventDefault();
    };
    var idedit = document.querySelector("#idEdit").value;
    var usuario = document.querySelector("#usuario").value;
    var nombre = document.querySelector("#nombre").value;
    var cedula = document.querySelector("#cedula").value;
    var correo = document.querySelector("#correo").value;
    var perfil = document.querySelector("#perfil").value;

    if (idedit.trim() === '' ||
        usuario.trim()=== '' ||
        nombre.trim()=== ''  ||
        cedula.trim()=== ''  ||
        correo.trim()=== ''  ||
        perfil.trim()=== ''  
    ) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "Faltan Campos por completar",
          });
        return;
    }
    if (!validarusuario(usuario)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El nombre no cumple con los caracteres. Solo letras",
          });
        return;
    }
    if (!validarnombre(nombre)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El nombre no cumple con los caracteres",
          });
        return;
    }
    if (!validarcedula(cedula)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "La cedula no cumple con los caracteres solicitados",
          });
        return;
    }
    if (!validarcorreo(correo)) {
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "El correo no cumple con los caracteres",
          });
        return;
    }

    // Enviar al backend

    const datos=new FormData();
    datos.append("idEdit", idedit);
    datos.append("usuario", usuario);
    datos.append("nombre", nombre);
    datos.append("cedula", cedula);
    datos.append("correo", correo);
    datos.append("perfil", perfil);

    var respuesta = await fetch("php/update/editarusuario.php", {
      method: 'POST',
      body: datos
    });
    
    var resultado=await respuesta.json();
  
    if (resultado.success == true) {
      Swal.fire({
        icon: "success",
        title: "EXITO",
        text: resultado.mensaje,
      });
      document.querySelector("#editarusuario").reset();
    }else{
      Swal.fire({
        icon: "error",
        title: "ERROR",
        text: resultado.mensaje,
      });
    }
}

// console.log("archivo enlazado");