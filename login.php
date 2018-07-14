
<?php
	require_once('funciones.php');

	if (estaLogueado()) {
		header('location: perfil.php');
		exit;
	}

	// Variables para persistencia
	$email = '';

	// Array de errores vacío
	$errores = [];

	// Si envían algo por $_POST
	if ($_POST) {
		$email = trim($_POST['email']);
		$errores = validarLogin($_POST);
		if (empty($errores)) {
			$usuario = existeEmail($email);
			loguear($usuario);

			// Seteo la cookie
			if (isset($_POST["recordar"])) {
	        setcookie('id', $usuario['id'], time() + 3600 * 24 * 30);
	      }
			header('location: perfil.php');
			exit;
		}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>LOG IN</title>
  </head>
  <body>
    <div class="login-form, col-md-6">
      <div class="photo-logo">
      <a href="index.php"><img src="images/Logo.png" alt="logotipo" class="logo"></a>
      </div>
      <h2>Login</h2>
      <form class="login" method="post" enctype="multipart/form-data">
      <div class="form-group">
     			  <label for="name">Email:</label>
     				<input class="form-control" type="Email" name="email" value="<?=$email?>" placeholder="Email address" required autofocus>
     					<?php if (isset($errores['email'])): ?>
     							<span style="color: red;">
     		  					<b class="glyphicon glyphicon-exclamation-sign"></b>
     			  				<?=$errores['email'];?>
     							</span>
     					<?php endif; ?>
     	 </div>

       <div class="form-group">
 						<label for="name">Contraseña:</label>
 						<input class="form-control" type="password" name="pass" value="">
 							<?php if (isset($errores['pass'])): ?>
 						 		<span style="color: red;">
 									<b class="glyphicon glyphicon-exclamation-sign"></b>
 									<?=$errores['pass'];?>
 								</span>
 							<?php endif; ?>
 		            </div>
       <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" name="recordar"> Remember me
          </label>
       </div>
			 <button type="submit" name="button">Log in</button>
     </form>
     <a href="#">Forgot the password?</a>
     <a href="register.php">Create an account</a>
    </a>
    </div>
    <footer>

    </footer>
  </body>
</html>
