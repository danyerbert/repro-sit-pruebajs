<?php
require "../../config/conexion.php";
require "../../function.php";

$valido['success']=array('success', false, 'mensaje'=>"");

if ($_POST) {
    $idUpdate = $_POST['idEdit'];
    if (!preg_match("/\b/", $idUpdate)){
        $valido['success']=false;
        $valido['mensaje']="El valor no definido.";
    }
    $usuarioupdate = limpiarDatos(htmlspecialchars($_POST['usuario']));
    if (!preg_match("/([a-zA-Z]{4,15})+$/", $usuarioupdate )) {
        $valido['success']=false;
        $valido['mensaje']="El usuario no cumple con los caracteres establecidos.";
    }
    $nombreupdate = limpiarDatos(htmlspecialchars($_POST['nombre']));
    if (!preg_match("/^([a-z-A-Z\s])+$/", $nombreupdate || $nombreupdate == "")) {
        $valido['success']=false;
        $valido['mensaje']="El nombre no cumple con los caracteres establecidos.";
    }
    $cedulaupdate = limpiarDatos(htmlspecialchars($_POST['cedula']));
    if (!preg_match("/\b/", $cedulaupdate || $cedulaupdate == "")) {
        $valido['success']=false;
        $valido['mensaje']="El usuario no cumple con los caracteres establecidos.";

        if (!preg_match("/^[0-9]{8}/", $cedulaupdate || $cedulaupdate == "")) {
            $valido['success']=false;
            $valido['mensaje']="El usuario no cumple con los caracteres establecidos.";
        }
    }
    $correoupdate = limpiarDatos(htmlspecialchars($_POST['correo']));
    if (!preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $correoupdate || $correoupdate == "")) {
        $valido['success']=false;
        $valido['mensaje']="El usuario no cumple con los caracteres establecidos.";
    }
    $rolesupdate = limpiarDatos(htmlspecialchars($_POST['perfil']));
    if ($rolesupdate == "") {
        $valido['success']=false;
        $valido['mensaje']="El usuario no cumple con los caracteres establecidos.";
    }



    $sql = "UPDATE usuarios SET usuario = '$usuarioupdate', nombre = '$nombreupdate',  cedula = '$cedulaupdate', correo = '$correoupdate', id_roles = '$rolesupdate' WHERE id_usuarios = " . $idUpdate;

   $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'El registro fue actualizado correctamente',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {
                location.assign('listadeusuario.php');
              });
    });
        </script>";
    }else {
         echo "
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script language='JavaScript'>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Algo salio mal. Intenta de nuevo',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK',
                timer: 1500
              }).then(() => {
                location.assign('listadeusuario.php');
              });
    });
        </script>";
    }
}

echo json_encode($valido);

?>