<div class="col-md-4 mx-auto">
        <div class="text-center">
        <form method="post">
                <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigo" name="crearproductoCodigo">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="crearproductoNombre" >
                </div>
                <div class="mb-3">
                    <label for="costo" class="form-label">Costo</label>
                    <input type="text" class="form-control" id="costo" name="crearproductoCosto">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio sin IVA</label>
                    <input type="text" class="form-control" id="precio" name="crearproductoPrecio">
                </div>
                <div class="mb-3">
                    <label for="unidad" class="form-label">Unidades</label>
                    <input type="text" class="form-control" id="unidad" name="crearproductoUnidad">
                </div>                
                <select class="form-select" aria-label="Default select example">
                    <option selected>Estado</option>
                    <option value="activo">Actvio</option>
                    <option value="inactivo">Inactivo</option>
                </select><br>
                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>