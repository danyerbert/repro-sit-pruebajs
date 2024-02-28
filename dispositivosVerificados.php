<?php
require "config/app.php";
require "config/conexion.php";
session_start();
if (!isset($_SESSION['id_usuarios'])) {
    header("Location: index.php");
}
$usuario = $_SESSION['usuario'];
$rol = $_SESSION['id_roles'];
$estatus = $_REQUEST['id'];

$sql1 = "SELECT d.ic_dispositivo, d.serial_equipo, d.serial_de_cargador, d.fecha_de_recepcion, d.observaciones_verificador, d.comprobaciones, j.nombre, j.modelo, k.origen, m.estatus, b.tipo_de_motivo FROM datos_del_dispotivo AS d 
INNER JOIN tipo_de_equipo AS j ON j.id_tipo_de_equipo=d.id_tipo_de_dispositivo
INNER JOIN origen AS k ON k.id_origen = d.id_origen
INNER JOIN estatus AS m ON m.id_estatus = d.id_estatus
INNER JOIN motivo AS b ON b.id_motivo = d.id_motivo WHERE d.id_estatus = $estatus";

$resultado1 = $mysqli->query($sql1);

// $sqlComprobaciones = "SELECT comprobaciones FROM datos_del_dispotivo WHERE id_estatus = 5";
// $comprobaciones = array();
// $resultadoComprobaciones = mysqli_query($mysqli, $sqlComprobaciones);

// while ($objeto =  mysqli_fetch_object($resultadoComprobaciones) ) {
//     array_push($comprobaciones, $objeto);
// }
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Inventario OAC</title>
    <!-- FAVICON -->
    <link rel="icon" href="img/Canaima.png">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include "inc/navbarlateral.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include "inc/navbar.php";?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <a href="report/reportedispositivoverificados.php?id=5" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank">
                        <i class="fas fa-print fa-sm text-white-50"></i>
                        Generar Reporte
                        </a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Dispositivos Verificados</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tipo de Dispositivo</th>
                                            <th>Modelo</th>
                                            <th>Serial del Equipo</th>
                                            <th>Serial del Cargador</th>
                                            <th>Fecha de Recepcion</th>
                                            <th>Motivo</th>
                                            <th>Observaciones</th>
                                            <th>Origen</th>
                                            <th>Comprobaciones</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row1 = $resultado1->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row1['nombre']; ?></td>
                                            <td><?php echo $row1['modelo']; ?></td>
                                            <td><?php echo $row1['serial_equipo']; ?></td>
                                            <td><?php echo $row1['serial_de_cargador']; ?></td>
                                            <td><?php echo $row1['fecha_de_recepcion']; ?></td>
                                            <td><?php echo $row1['tipo_de_motivo']; ?></td>
                                            <td><?php echo $row1['observaciones_verificador']; ?></td>
                                            <td><?php echo $row1['origen']; ?></td>
                                            <td><?php echo $row1['comprobaciones']; ?></td>
                                            <td><?php echo $row1['estatus']; ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End of Main Content -->

    <?php require "inc/footer.php";?>
    <?php require "inc/script.php";?>
</body>

</html>