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
				<h3>Listado de usuarios</h3>				
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table default">
					<thead>
						<td>Id</td>
						<td>Usuario</td>
						<td>Descripcion</td>
					</thead>
					<?php
						include 'conexion.php';
						$stm = $db->prepare("select * from usuarios");
						$stm -> execute();
						while ($registro = $stm->fetch()){
					?>
					<tr>
						<td>
							<?php
								echo ($registro['idusuario']);
							?>	
						</td>
						<td>
							<?php
								echo ($registro['usuario']);
							?>	
						</td>
						<td>
							<?php
								echo ($registro['descripcion']);
							?>	
						</td>
					</tr>						
					<?php
						}
					?>
				</table>
				<?php
					echo '<br>';
					echo '<a href="frmusuarios.html">Volver</a>';				
				?>
			</div>			
		</div>
	</div>
</body>
</html>