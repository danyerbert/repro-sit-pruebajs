<?php
require "../../config/conexion.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
	header("Location:index.php");
}else{
    if ($_SESSION['id_roles'] != 1) {
        header("Location: index.php");
    }
}

//obtener el ID del beneficiario a eliminar
$idbeneficiario = $_REQUEST['id'];
$origen = $_REQUEST['origen'];
//Realizamos la consulta para eliminar el benificiario
$sql = "UPDATE datos_del_entregante SET descontinuado = 1 WHERE id_del_entregante = '$idbeneficiario' AND id_origen = '$origen'";

// Obtenemos la respuesta de esa consulta
$respuesta = $mysqli->query($sql);

// Comprobamos si la respuesta se realizo o no y mostramos su respectivo mensaje
if ($respuesta) {
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script language='JavaScript'>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'success',
            title: 'El beneficiario fue eliminado correctamente.',
            showCancelButton: false,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          }).then(() => {

            location.assign('../../listadebeneficiario.php');

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
            confirmButtonText: 'OK'
          }).then(() => {

            location.assign('../../listadebeneficiario.php');

         });
});
    </script>";
}




?>