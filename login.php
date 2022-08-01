<?php
	
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	session_start(); //Iniciar una nueva sesión o reanudar la existente
	

    if(isset($_SESSION['tipo_usuario']))
    {
        switch($_SESSION['tipo_usuario']){
        case 1:
            header('location: views/admin/index.php');
        break;
        case 2:
            header('location: vistas/medico/index.php');
        break;
        default:
            header('location: vistas/medico/index.php');
        break;
        }
    }
    
	
	$errors = array(); 
	

	if(!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		if(isNullLogin($usuario, $password))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		$errors[] = login($usuario, $password);	
	}
	
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index/main.css">
    <link rel="stylesheet" href="index/back.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
	<script src="js/bootstrap.min.js" ></script>
  </head>
<body class="home" style="margin: 0px;">
  <div id="main">
    <header>
      <span class="fix-overlay"></span>
      <div class="container">
        <a class="logo animated zoomIn" href="index.php">
          <img class="mostrar" src="assets/img/logo.png" width="351px" height="120px">
          <img class="ocultar" src="assets/img/logo.png" width="90px" height="55px">
        </a>
        <div class="h-main animated fadeInDown">
          <div class="h-blockUp">
            <ul class="options">
              <li class="dir"> (248) 182·3447 / (248) 345·6789</li>
              <li class="dir">  Camino, Real San Mateo S/N, 74169 Santa Ana Xalmimilulco, Pue.</li>            
            <ul>
          </div>
        </div>
      </div>
    </header>
    
  <main class="content-home">
  <div class="container">    
			<div id="loginbox" style="margin-top:120px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesión</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Se te olvid&oacute; tu contraseña?</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="Usuario" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
								</div>
							</div>
						</form>
						<?php echo resultBlock($errors); ?>
					</div>                     
				</div>  
			</div>
		</div>
    
  </main>
  <br><br><br><br><br><br>

  <!-- Footer -->
  <footer class="text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 178, 169, 0.937);">
        © 2022 Sistemas para el monitoreo de signos vitales   
    </div>
  </footer>
  <!-- Footer FIN-->

    
</body>
</html>