<div class="col-md-4 mx-auto">
        <div class="text-center">
            <form method="post">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="crearusuarioNombre">
                </div>
                <div class="mb-3">
                    <label for="documento" class="form-label">Documento</label>
                    <input type="text" class="form-control" id="documento" name="crearusuarioDocumento">
                </div>
                <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="user" name="crearusuarioUser">
                </div>
                <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="crearusuarioPassword">
                </div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Perfil</option>
                    <option value="admin">Admin</option>
                    <option value="jefe">Jefe</option>
                    <option value="auxiliar">Auxiliar</option>
                </select><br>
                <?php
                    $crearusuario = ControladorFormularios::ctrCrearUsuario();
                    if($crearusuario == "ok" ){
                        echo '<script>
                                if ( window.history.replaceState ) {
                                    window.history.replaceState( null, null, window.location.href );
                                }
                            </script>';
                        echo '<div class="alert alert-success">Creado con éxito </div>';
                    }
                ?>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>