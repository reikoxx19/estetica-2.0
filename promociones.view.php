<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Promociones!</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="fonts/style.css">
</head>
<body class="body-promos">

	<div class="container">
   

      <div class="row">
      	<div class="col-12 text-center mb-5">
      		<h3 class="display-4 text-white">¡Recibe todas nuestras promociones directamente a tu correo!</h3>
      	</div>
      </div>





		<!-- INICIO FORMULARIO-->
		<div class="row mt-5 mb-4">
			<div class="col-4">
				
			</div>

			<div class="col-4">
				
				<form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>
" method="post">
             <h5 class="mb-4 text-white">Ingresa tus datos</h5>
				<div class="form-group"> 
				<label for="nombre" class="mb-1 text-white">Escriba su nombre:</label>
 				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre*" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
				</div>	
				
				<div class="form-group">
					<label for="correo" class="mb-1 text-white">Escriba su correo:</label>
 				<input type="text" class="form-control" name="correo" id="correo" placeholder="Correo*" value="<?php if (!$enviado && isset($correo)) echo $correo; ?>">
				</div>

				<div class="form-group">
					<label for="provincia" class="mb-1 text-white">Escriba su provincia:</label>
					<input  class="form-control" type="text" name="provincia" id="provincia" placeholder="Provincia*" value="<?php if (!$enviado && isset($provincia)) echo $provincia ; ?>">
				</div>	
 				

					<?php if (!empty($errores)): ?>
						<div class="alert error">
							<?php echo $errores; ?>

						</div>
							
						<?php elseif($enviado): ?>

					             <div class="alert success">
					             	<?php echo 'Enviado correctamente'; ?>
					             </div>    	
				    <?php endif ?>                 


 				<div class="form-group">
 					<input  class="btn btn-info btn-block" type="submit" value="Enviar información" name="submit">
 				</div>
				 </form>

			</div>
			<div class="col-4 mb-5">
				
			</div>
		</div>
		<!--FIN FORMULARIO -->

		<!-- INICIO DE FOOTER-->
		<div class="row bg-footer text-muted mt-5">
	<div class="col-12 ">
		

		<p  class="footer text-white">  Puede contactar conmigo vía: 	<a class="decoration text-white" href="https://www.facebook.com/Dayanna-Valverde-Microblading-332747410929482/" target="_blank"><span class="icon-facebook2"></span></a>  

		<a class="decoration text-white" href="https://www.instagram.com/microblading_dayanna/?hl=es-la" target="_blank"><span class="icon-instagram"></span> </a> </p>
		<p class="text-white">© Derechos reservados</p>
	</div>
</div>
<!-- FIN DE FOOTER-->
	</div>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>	
</body>
</html>