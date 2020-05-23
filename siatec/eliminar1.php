<?php
	include 'conexion.php';
	$stm = $db->prepare("select idusuario,usuario from usuarios");
	$stm -> execute();

	if(isset($_POST['usuario'])){
		$est = $_POST['usuario'];
		echo $est; 
		$stm = $db->prepare("delete from usuarios where idusuario=?");
		$stm -> bindparam(1,$est);
		$stm -> execute();
		header("Location: frmusuarios.html");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Pagina responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Link de bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Siatec</h1>
				<h2>Acceso al sistema</h2>
				<h3>Eliminar usuarios</h3>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">			
				<form action="eliminar1.php" method="POST">
					<select name="usuario">
	       				<option value="0">Seleccione:</option>
		        		<?php
							while ($registro = $stm->fetch()){
						?>
						<option 
							value=" <?php echo $registro['idusuario'] ?> "> <?php echo $registro['usuario'] ?>
						</option>
						<?php
							}
						?>
					</select>
					<input type="submit" value="Eliminar" class="btn btn-primary">	
				</form>					
				<?php
					echo '<br>';
					echo '<a href="frmusuarios.html">Volver</a>';	
				?>					
			</div>			
		</div>
	</div>
</body>
</html>