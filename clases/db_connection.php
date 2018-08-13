<?php
	$ruta = 'mysql:host=localhost; dbname=muu_db';
	$usuario = 'root';
	$password = '';
	$opciones = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
		$db = new PDO($ruta, $usuario, $password, $opciones);
  }
	catch( PDOException $Exception ) {
		echo $Exception->getMessage();
	}
?>
