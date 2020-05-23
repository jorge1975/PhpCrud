<?php
	$vusuario = $_POST['usuario'];
	$vclave = $_POST['clave'];
	$vdescripcion = $_POST['descripcion'];

	include 'conexion.php';

	$cmd=$db->prepare('insert into usuarios (usuario,clave,descripcion) values (?,?,?)');
	$cmd-> bindparam(1,$vusuario);
	$cmd-> bindparam(2,$vclave);
	$cmd-> bindparam(3,$vdescripcion);
	$cmd->execute();
	$cmd=null;
	echo 'Datos registrados<br>';
	echo '<a href="frmusuarios.html">Volver</a>';
?>