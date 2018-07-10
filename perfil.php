<?php
	require_once('funciones.php');

	if (!estaLogueado()) {
		header('location: index.php');
		exit;
	}

	$usuario = traerPorId($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>User Profile</title>
	</head>
	<body>
		<div class="container">
			<h1>Hello <?=$usuario['name']?></h1>
			<img class="img-rounded" src="<?=$usuario['foto']?>" width="200">
			<br><br>
			<a class="btn btn-warning" href="logout.php">Sign out</a>
		</div>
	</body>
</html>
