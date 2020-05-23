<?php
	// Elaborar la cadena de conexion
	$servidor = 'localhost';
	$base = 'siatec';
	$usuario = 'root';
	$clave = '';
	try {
		$db = new PDO('mysql:host=localhost;dbname=siatec',$usuario,$clave);		
	}
	catch(Exception $e){
		die ($e->getMessage());
	}
?>