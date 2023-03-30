


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ETIQUETAS REFERENCIALES -->
	<meta name="description" content="Tienda Online de Tecnología y Más.">
	<meta name="keywords" content="tienda, compras, precio, ventas, ecomerce, comercio, online, store, TEM, tecnología, accesorios,
	    computadoras, impresoras, arduino, cables, teclados, mouses, keyboard, laptop">

	<meta http-equiv="author" content="Abdias Alvarado">

	<title>Horizon Online VideoGames - Tecnología, Videjuegos y Más</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Hoja de estilo personalizada -->
	<link type="text/css" rel="stylesheet" href="css/custom.css" />
	<link type="text/css" rel="stylesheet" href="css/stylesNosotros.css" />
	<link rel="icon" type="image/png" href="img/logoh.png" width="100px">
</head>

<body>
	<!-- HEADER -->
	<header>
		<div id="encabezado-superior">
			<div class="container">
			</div>
		</div>

		<div id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="./img/logoh.png" alt="Logo TEM Store" width="50px">
								HORIZON&#174;
							</a>
						</div>
					</div>

					<!-- BARRA DE BÚSQUEDA -->
					
					<!-- /BARRA DE BÚSQUEDA -->

					<!-- USUARIO -->

							<!-- uSUARIO -->

							<div class="dropdown">
								<ul class="header-links pull-right">
									<?php session_start();
      if (isset($_SESSION['elusuario'])) { // VALIDAMOS QUE EXISTA LA SESIÓN 
      ?>
         <li><a href="salir.php"><i class="fa fa-user-o"></i>Cerrar Sesión</a>
      <?php
      } else { ?>
        <li><a href="./dasborad/panel/inicioSesion.php"><i class="fa fa-user-o"></i> Iniciar Sesion / Registrarse</a>
      
        <?php
      }
      ?>

									</li>

								</ul>
							</div>
								<!-- Menu Toogle -->
	</header>
	<!-- /HEADER -->

	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="index.php">Inicio</a></li>
					<li><a href="sobrenosotros.php">Nosotros</a></li>
					<li><a href="juegos.php">Juegos</a></li>
					<li><a href="contactanos.php">Contactos</a></li>
					<li><a href="perfil.php">Mi Cuenta</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<body>
	<main>
		<div class="anime-principal">
			<div class="contenedor">
			</div>
		</div>

		<!-- SOBRE NOSOTROS -->
		<section class="lista_nosotros">
			<div class="margen">
				<!-- AQUI ES DONDE ESTAN LAS DIVICONES =-->
				<!-- ESTE ES EL  1=-->
				<div>
					<div class="divicion_del_cuadro2">
						<div class="cuadro_de_imagen">
							<div class="img_1">
								<img src="./img/img1.jpg" class="cat" alt="" width="100%" height="100%">
							</div>
						</div>
						<div class="cuadro_de_texto2">
							<!-- ESTE ES DONDE SE ESCRIBE   =-->
							<h2 class="txt_titulo">Nuestra historia</h2>
							<p class="txt_txt">Somos un proyecto para nuestras materias, la cual es sobre la venta de videojuegos </p>
						</div>
					</div>
				</div>
				<!-- ESTE ES EL 2 =-->
				<div>
					<div class="divicion_del_cuadro1">
						<div class="cuadro_de_imagen">
							<div class="img_2">
								<img src="./img/img2.jpg" class="cat" alt="" width="100%" height="100%">
							</div>
						</div>
						<div class="cuadro_de_texto1">
							<!-- ESTE ES DONDE SE ESCRIBE   =-->
							<h2 class="txt_titulo1">Nuestras marcas </h2>
							<p class="txt_txt">Estamos dedicados a enriquecer las vidas de nuestros jugadores mediante la venta de juegos de alta calidad que resuenan con todo tipo de personalidades, unen a las personas y permiten que todos aprendan y crezcan mientras se divierten.</p>
						</div>
					</div>
				</div>
				<!-- ESTE ES EL  3=-->
				<div>
					<div class="divicion_del_cuadro2">
						<div class="cuadro_de_imagen">
							<div class="img_3">
								<img src="./img/img3.jpg" class="cat" alt="" width="100%" height="100%">
							</div>
						</div>
						<div class="cuadro_de_texto2">
							<!-- ESTE ES DONDE SE ESCRIBE   =-->
							<h2 class="txt_titulo">Nuestra gente</h2>
							<p class="txt_txt">Descubre las emocionantes historias de las personas detrás de nuestros juegos.</p>
						</div>
					</div>
				</div>
				<!-- ESTE ES EL 4 =-->
				<div>
					<div class="divicion_del_cuadro1">
						<div class="cuadro_de_imagen">
							<div class="img_4">
								<img src="./img/img4.jpg" class="cat" alt="" width="100%" height="100%">
							</div>
						</div>
						<div class="cuadro_de_texto1">
							<!-- ESTE ES DONDE SE ESCRIBE   =-->
							<h2 class="txt_titulo">Diversidad e inclusión</h2>
							<p class="txt_txt">Obtenga más información sobre cómo estamos poniendo D&I en el corazón de todo lo que hacemos con un enfoque en los colegas, el contenido, la cultura y la comunidad.</p>
						</div>
					</div>
				</div>
				<!-- ESTE ES EL  5=-->
				<div>
					<div class="divicion_del_cuadro2">
						<div class="cuadro_de_imagen">
							<div class="img_5">
								<img src="./img/img5.png" class="cat" alt="" width="100%" height="100%">
							</div>
						</div>
						<div class="cuadro_de_texto2">
							<!-- ESTE ES DONDE SE ESCRIBE   =-->
							<h2 class="txt_titulo">Frace de la empresa</h2>
							<p class="txt_txt">Todo va al final va estar bien, si no esta bien, es que no hemos llegado al final.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!-- /SOBRE NOSOTROS -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Sobre Nosotros</h3>
							<p>Nos dedicamos a ofrecerte los mejores juegos al mejor precio. Contamos con
								sistema de pedidos hacia proveedores en linea.</p>
							<ul class="footer-links">
								<li><a href="https://www.google.com.mx/maps/@40.7437303,-73.9595767,3a,75y,284.63h,92.94t/data=!3m6!1e1!3m4!1sB4GIcUbkYbzcd_a2y5k_zw!2e0!7i16384!8i8192!5m1!1e4"><i class="fa fa-map-marker"></i>2 Calle. 92 Reg. Cancun</a></li>
								<li><a><i class="fa fa-phone"></i>+52 998 865 8849</a></li>
								<li><a href="mailto:temstorehn@gmail.com"><i class="fa fa-envelope-o"></i> HorizonOG@gmail.com</a></li>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Información</h3>
							<ul class="footer-links">
								<li><a href="sobrenosotros.php">Sobre Nosotros</a></li>
								<li><a href="contactanos.php">Contáctanos</a></li>
								<li><a href="politicasdeprivacidad.php">Políticas de Privacidad</a></li>
								<li><a href="terminosycondiciones.php">Términos y Condiciones</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Desarrolladores</h3>
							<ul class="footer-links">
								<li><a href="#">Nahun Issac Pech Garcia</a></li>
								<li><a href="#">Alberto Sanchez Arevalo</a></li>
								<li><a href="#">Jose Angel Perez Couoh</a></li>
								<li><a href="#">Yadira Hernandez Córdova</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Clientes</h3>
							<ul class="footer-links">
								<li><a href="perfil.php">Mi Cuenta</a></li>
								<li><a href="ayuda.php">Ayuda</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<div id="bottom-footer" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<span class="copyright">
							Copyright &copy; 2018 Todos los derechos reservados. 
						</span>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->


	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>

</body>

</html>

<?php

?>