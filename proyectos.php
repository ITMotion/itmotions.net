<html>
<head>
	<title>Proyectos</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
	<link type="text/css" rel="stylesheet" href="css/proyectos.css"/>
	<link href="css/style.css" rel="stylesheet">
	<meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="container">
	<?php include("menu.html") ?>
		<div class="row">
			<div class="col-md-12" id="contenido1">
				<div class="jumbotron">
					<h1>Empieza a planear tu proyecto</h1>
					<p>
						Estas en manos de profecionales, se llevará de la mano todo el desarrollo con un equipo calificado y con los mejores estándares. Usted puede estar seguro que su proyecto tendra las caracteristicas mas altas de calidad de software.
					</p>
					<p>Solo hace falta empezar a planear un futuro brillante... </p>	
					<a href="#ventana" class="btn btn-primary" data-toggle="modal">aqui »</a>
					<div class="modal fade" id="ventana" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<form class="form-horizontal">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
									<h4 class="modal-title" id="myModalLabel">contacto</h4>
								</div>
								<div class="modal-body">
									<div class="form-group" id="nombre">
										<label for="nombre" class="col-lg-2 control-lable">Nombre</label>
										<div class="col-lg-10">
											<input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese su nombre completo" required="required"/>
										</div>
									</div>

									<div class="form-group" id="proyecto">
										<label for="proyecto" class="col-lg-2 control-lable">proyecto</label>
										<div class="col-lg-10">
											<input type="text" name="proyecto" id="proyecto" class="form-control" placeholder="Ingrese el nombre de su proyecto" required="required"/>
										</div>
									</div>

									<div class="form-group" id="correo">
										<label for="correo" class="col-lg-2 control-lable">correo</label>
										<div class="col-lg-10">
											<input type="email" name="correo" id="correo" class="form-control" placeholder="ejemplo@ejemplo.com" required="required"/>
										</div>
									</div>

									<div class="form-group" id="opciones">
										<label for="desarrollo" class="col-lg-2 control-lable">desarrollo</label>
										<div class="col-lg-10">
											<input type="checkbox" name="sitio web" value="sitio web"> sitio web<br>
											<input type="checkbox" name="aplicacion web" value="aplicacion web"> aplicacion web<br>
											<input type="checkbox" name="aplicacion movil" value="aplicacion movil"> aplicacion movil<br>
											<input type="checkbox" name="aplicacion escritorio" value="aplicacion escritorio"> aplicacion de escritorio<br>
											<input type="checkbox" name="aplicacion ria" value="aplicacion ria"> aplicacion RIA<br>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-default" data-dismiss="modal">cerrar</a>
									<button class="btn btn-primary" type="submit" >enviar</button>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" id="contenido2">
				<h2>Un poco de nosotros</h2>
					<p>
						Desarrollo creativo en manos de jovenes con experiencia. Este proyecto "ITMotions" nace del aprendizaje, conocimiento y desarrollo en el area. En un principio el desarrollo era para plataformas web.
					</p>
					<p>
						Hoy, gracias al desempeño y conocimiento exponencialmente estamos en crecimiento. Algunos de nuestros trabajos son:
					</p>
			</div>
		</div>

		<br>

		<div class="row">
				<div class="col-md-4" id="thumb1">
					<div class="thumbnail">
						<img src="imagenes/pia.png"/>
						<div class="caption">
							<h3>PIA</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4" id="thumb2">
					<div class="thumbnail">
						<img src="imagenes/pizza.png"/>
						<div class="caption">
							<h3>restaurante</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4" id="thumb3">
					<div class="thumbnail">
						<img src="imagenes/publi.jpg" />
						<div class="caption">
							<h3>PubliPrint</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div>
		</div>
		<?php include("footer.html") ?>
	</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>