<html>
<head>
	<title>ITMotion</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
		<link href="../css/style.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css1/main.css"/>
		<meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-2" id="logo">
				<img src="imagenes/logo2fondo.png"/>
			</div>
			<div class="col-md-10" id="nav">
				<div class="nav nav-tabs">
					<ul>
						<li><a href="../ITMotion/index.php">Inicio</a></li>
						<li><a href="quienes somos/quienes somos.php">Quienes Somos</a></li>
						<li><a href="proyectos/proyectos.php">Proyectos</a></li>
						<li><a href="contacto/contacto.php">Contacto</a></li>
					</ul>
				</div>

			</div>
		</div>
		<br>

		<div class="row">
		<div class="col-md-6" id="media">
			<img src="imagenes/negocios.jpg" />
		</div>
		<div class="col-md-6" id="contenido1">
			<h2>Nuestros Proyectos</h2>
				<p>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
				</p>
				<p>
					Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
				</p>
			<a class="btn" href="proyectos/proyectos.php">detalles »</a>
		</div>
	</div>
		<br>
		<div class="row">
			<div class="col-md-9" id="contenido2">
				<div class="jumbotron">
					<h2>Hola, bienvenido.</h2>
				<p>Somos ITMotion, una nueva empresa con una nueva iniciativa. Dedicados a desarrollo de proyectos informáticos. Desarrolladores con mucha experiencia, una empresa consolidada.</p>
				<p><a class="btn btn-primary btn-large" href="quienes somos/quienes somos.php">conocenos</a></p>
			</div>
		

			</div>
			<div class="col-md-3" id="form">
				<div class="form-group">
					<form>
						<label>Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre" required="required"/>
						<label>Apellidos</label>
						<input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Ingrese sus apellidos" required="required"/>
						<label>Correo</label>
						<input type="text" name="correo" id="correo" class="form-control" placeholder="Ingrese su correo" required="required"/>
						<label>Mensaje</label>
						<textarea name="mensaje" id="mensaje" class="form-control" required="required" placeholder="mensaje"></textarea>
						<br>
						<button type="button" class="btn btn-primary">enviar</button>
					</form>
				</div>
			</div>
		</div>

		
	
	<div class="row" id="footer">
		<div class="col-md-12">
			<div class="nav nav-tabs" align="center">
				<ul>
					<li><a href="../index.php">Inicio</a></li>
					<li><a href="../quienes somos/quienes somos.php">Quienes Somos</a></li>
					<li><a href="../proyectos/proyectos.php">Proyectos</a></li>
					<li><a href="../contacto/contacto.php">Contacto</a></li>
				</ul>
				<p>ITmotions SA.DE.CV todos los derechos reservados</p>
			</div>
		</div>
	</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>