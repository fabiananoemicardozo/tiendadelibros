<div id="sitio">
<?php include("../template/header.php");


$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$action=(isset($_POST['action']))?$_POST['action']:"";

include("../config/bd.php");

switch ($action) {
	case 'Agregar':
		$sentenciaSQL= $conexion->prepare("INSERT INTO libros (nombre, imagen) VALUES (:nombre, :imagen)");
		$sentenciaSQL->execute();
		echo "Presionado botón agregar";
		break;

	case 'Modificar':
		echo "Presionado botón modificar";
	break;

	case 'Cancelar':
		echo "Presionado botón cancelar";
		break;

	default:
		# code...
		break;
}

?>
</div>

<div class="col-md-5">
	<div class="card">
		<div class="card-header">
		Datos del  Libro
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">

				<div class = "form-group">
					<label for="txtID">ID:</label>
					<input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
				</div>

				<div class = "form-group">
					<label for="txtNombre">Nombre:</label>
					<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre del libro">
				</div>

				<div class = "form-group">
					<label for="txtImagen">Imagen:</label>
					<input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen del libro">
				</div>

				<div class="btn-group" role="group" aria-label="">
					<button type="submit" name="action" value="Agregar" class="btn btn-success">Agregar</button>
					<button type="submit" name="action" value="Modificar" class="btn btn-warning">Modificar</button>
					<button type="submit" name="action" value="Cancelar" class="btn btn-danger">Cancelar</button>
				</div>

			</form>
		</div>
	</div>
</div>








<div class="col-md-7">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>2</td>
				<td>Nombre del libro</td>
				<td>imagen.jpg</td>
				<td>Seleccionar | Borrar</td>
			</tr>
		</tbody>
	</table>
</div>

<?php include("../template/footer.php"); ?>



