<?php
	require_once('funciones.php');

	if (estaLogueado()) {
		header('location: perfil.php');
		exit;
	}

		// Variables para persistencia
	$name = '';
	$email = '';
	$address = '';

	// Array de errores vacío
	$errores = [];

	// Si envían algo por $_POST
	if ($_POST) {
		//var_dump($_POST);
		// Persisto los datos con la información que envía el usuario por $_POST
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$addres = trim($_POST['address']);

		// Valido y guardo en errores
		$errores = validar($_POST, 'avatar');

		//var_dump($errores); die;
		// Si el array de errorres está vacío, es porque no hubo errores, por lo tanto procedo con lo siguiente
		if (empty($errores)) {

			$errores = guardarImagen('avatar');

			if (empty($errores)) {
				// En la variable $usuario, guardo al usuario creado con la función crearUsuario() la cual recibe los datos de $_POST y el avatar
				$usuario = guardarUsuario($_POST, 'avatar');

				// Logueo al usuario y por lo tanto no es necesario el re-direct
				loguear($usuario);
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body class="register-body">
    <?php if (!empty($errores)): ?>
  			<div class="div-errores alert alert-danger">
  				<ul>
  					<?php foreach ($errores as $value): ?>
  					<li><?=$value?></li>
  					<?php endforeach; ?>
  				</ul>
  			</div>
  		<?php endif; ?>
    <div class="login-form, col-md-6">
      <div class="photo-logo">
      <a href="index.php"><img src="images/Logo.png" alt="logotipo" class="logo"></a>
      </div>
      <h2>Register</h2>
     <form class="login" action="" method="post" enctype="multipart/form-data">
       <div class="form-group <?= isset($errores['name']) ? 'has-error' : null ?>">
							<label class="control-label">Name and Last Name:</label>
							<input type="text" class="form-control" name="name" value="<?=$name?>" placeholder="Ronaldo Da Silva">
							<span class="help-block" style="<?= !isset($errores['name']) ? 'display: none;' : ''; ?>">
								<b class="glyphicon glyphicon-exclamation-sign"></b>
								<?= isset($errores['name']) ? $errores['name'] : ''; ?>
							</span>
				</div>

       <div class="form-group <?= isset($errores['email']) ? 'has-error' : null ?>">
           <label class="control-label">Email:</label>
           <input class="form-control" type="text" name="email" value="<?=$email?>" placeholder="email@email.com">
           <span class="help-block" style="<?= !isset($errores['email']) ? 'display: none;' : ''; ?>">
             <b class="glyphicon glyphicon-exclamation-sign"></b>
             <?= isset($errores['email']) ? $errores['email'] : ''; ?>
           </span>
       </div>

       <div class="form-group <?= isset($errores['name']) ? 'has-error' : null ?>">
             <label class="control-label">Address:</label>
             <input type="text" class="form-control" name="address" value="<?=$address?>" placeholder="Address">
             <span class="help-block" style="<?= !isset($errores['address']) ? 'display: none;' : ''; ?>">
               <b class="glyphicon glyphicon-exclamation-sign"></b>
               <?= isset($errores['address']) ? $errores['address'] : ''; ?>
             </span>
       </div>

       <div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
							<label class="control-label">Password:</label>
							<input class="form-control" type="password" name="pass" value="">
							<span class="help-block" style="<?= !isset($errores['pass']) ? 'display: none;' : ''; ?>">
								<b class="glyphicon glyphicon-exclamation-sign"></b>
								<?= isset($errores['pass']) ? $errores['pass'] : ''; ?>
							</span>
		   </div>

       <div class="form-group <?= isset($errores['pass']) ? 'has-error' : null ?>">
         <label class="control-label">Repeat Password:</label>
         <input class="form-control" type="password" name="rpass" value="">
         <span class="help-block" style="<?= !isset($errores['pass']) ? 'display: none;' : ''; ?>">
           <b class="glyphicon glyphicon-exclamation-sign"></b>
           <?= isset($errores['pass']) ? $errores['pass'] : ''; ?>
         </span>
      </div>

      <div class="form-group <?= isset($errores['avatar']) ? 'has-error' : null ?>">
            <label for="name" class="control-label">Profile Picture:</label>
            <input class="form-control" type="file" name="avatar" value="<?= isset($_FILES['avatar']) ? $_FILES['avatar']['name'] : null ?>">
            <span class="help-block" style="<?= !isset($errores['avatar']) ? 'display: none;' : '' ; ?>">
              <b class="glyphicon glyphicon-exclamation-sign"></b>
              <?= isset($errores['avatar']) ? $errores['avatar'] : '' ;?>
            </span>
     </div>
		 <button type="submit" name="button">Register</button>
     </form>
     <a href="login.php">Have an account?</a>

    </div>
  </body>
</html>
