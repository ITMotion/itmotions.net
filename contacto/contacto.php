<html>
<head>
	<title>Contacto</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
	<link href="../css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css1/main.css"/>
	<meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="row" id="header">
			<div class="col-md-2" id="logo">
				<img src="../imagenes/logo2fondo.png"/>
			</div>
			<div class="col-md-10" id="nav">
				<div class="nav nav-tabs">
					<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../quienes somos/quienes somos.php">Quienes Somos</a></li>
						<li><a href="../proyectos/proyectos.php">Proyectos</a></li>
						<li><a href="../contacto/contacto.php">Contacto</a></li>
					</ul>
				</div>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="col-md-6" id="logoContacto">
				<img src="../imagenes/logo2.png"/>
			</div>
			<div class="col-md-6" id="formularioContacto">
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


		<div class="row">
			<div class="col-md-6">
			</div>
			<div class="col-md-6">
				<div class="jumbotron" id="iconos">
					<h2>Contacto</h2>
					<div class="num"> <img src="../imagenes/telefono.png"/> (998)2574858/8842345</div>
					<div class="email"> <img src="../imagenes/correo.png"/> contacto@itmotions.com</div>
					<div class="direccion"> <img src="../imagenes/direccion.png"/> paseo de la reforma #45 CP77543</div>
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