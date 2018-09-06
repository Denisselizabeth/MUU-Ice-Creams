<?php
<<<<<<< HEAD
	$ruta = 'mysql:host=localhost; dbname=muudb';
=======
	$ruta = 'mysql:host=localhost; dbname=muu_db';
>>>>>>> origin/master
	$usuario = 'root';
	$password = '';
	$opciones = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

	try {
		$db = new PDO($ruta, $usuario, $password, $opciones);
  }
	catch( PDOException $Exception ) {
		echo $Exception->getMessage();
<<<<<<< HEAD
		header('location: admin.php');
=======
>>>>>>> origin/master
	}
?>
