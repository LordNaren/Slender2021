<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SLENDER</title>
	<!-- boostrap 5-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- fontawesome-->
	<script src="https://kit.fontawesome.com/9d974f2354.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		<h3 class="text-center py-2">SLENDER</h3>
	</div>
	<!-- botones -->
	<div class="container-fluid bg-dark justify-content-center">
		<div class="container">
			<ul class="justify-content-center text-center py-2 nav-pills">
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<a class="btn btn-primary" href="index.php?pagina=inicio" >Inicio</a>		  
					<div class="btn-group" role="group">
					  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						Gestion Usuarios
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						<li><a class="dropdown-item" href="index.php?pagina=crearusuario">Crear Usuario</a></li>
						<li><a class="dropdown-item" href="index.php?pagina=listausuarios">Lista Usuarios</a></li>
					  </ul>
					  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						Gestion Productos
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
						<li><a class="dropdown-item" href="index.php?pagina=crearproducto">Crear Productos</a></li>
					  </ul>
					  <a class="btn btn-primary" href="index.php?pagina=inventario">Inventario</a>
					</div>
					<a class="btn btn-danger" href="index.php?pagina=salir">Salir</a>
				</div>
			</ul>
		</div>		
	</div>
    <?php
    if(isset($_GET['pagina'])){
        if($_GET['pagina'] == "inicio" ||
           $_GET['pagina'] == "crearusuario" ||
           $_GET['pagina'] == "listausuarios" ||
           $_GET['pagina'] == "crearproducto" ||
           $_GET['pagina'] == "inventario" ||
		   $_GET['pagina'] == "error404" ||
           $_GET['pagina'] == "salir"){
            include "paginas/".$_GET['pagina'].".php";
        }else{
			include "paginas/error404.php";
		}

    
		
		}else{
        	include "paginas/inicio.php";
		} 
    ?>	
</body>
</html>