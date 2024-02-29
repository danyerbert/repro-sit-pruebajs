<!-- Modal -->
<div class="modal fade" id="editarUser<?php echo $row['id_usuarios'];?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-titlen text-dark mx-auto" id="title-head-modal">Editar Usuario</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
<<<<<<< HEAD
                <form id="editarusuario">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" aria-describedby="nameHelp" name="usuario" pattern="[a-zA-Z]{4,15}"
                            value="<?php echo $row['usuario'];?>">
=======
                <form action="php/update/editarusuario.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" aria-describedby="nameHelp" name="usuario"
                            value="<?php echo $row['usuario'];?>" pattern="[a-zA-Z]{4,30}">
>>>>>>> 2dfb02405d598528e48dd00c20002ed959e9b603
                    </div>
                    <div class="form-group">
                        <label for="nombre">Contraseña</label>
                        <input type="text" class="form-control" id="password" aria-describedby="nameHelp" name="password" pattern="(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre" pattern="[a-z-A-Z\s]"
                            value="<?php echo $row['nombre'];?>">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" pattern="[0-9]{8}"
                            value="<?php echo $row['cedula'];?>">
=======
                        <input type="text" class="form-control" id="nombre" aria-describedby="nameHelp" name="nombre"
                            value="<?php echo $row['nombre'];?>" pattern="[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]{4,30}">
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula"
                            value="<?php echo $row['cedula'];?>" pattern="[0-9]{8}">
>>>>>>> 2dfb02405d598528e48dd00c20002ed959e9b603
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="correo"
                            value="<?php echo $row['correo'];?>">
                    </div>
                    <div class="form-group">
                        <label for="perfil">Perfil</label>
                        <select name="perfil" id="perfil" class="form-control form-control-lg">
                            <option value="1">Administrador</option>
                            <option value="2">Presidencia</option>
                            <option value="3">Analista</option>
                            <option value="4">Técnico</option>
                            <option value="5">Verificador</option>
                        </select>
                    </div>
                    <input type="hidden" name="idEdit" id="idEdit" value="<?php echo $row['id_usuarios'];?>">
                    <hr>
                    <!-- <button type="submit" class="btn btn-success" name="Update">Enviar</button> -->
                    <input type="button" class="btn btn-success" onclick="editarUsuario()" value="Actualizar">
                    <button type="reset" class="btn btn-danger">Refrescar</button>
                </form>
            </div>


        </div>
    </div>
</div>

</html>