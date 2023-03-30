
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
	<link type="text/css" rel="stylesheet" href="css/stylesUsuariosjj.css" />
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

	<!-- AYUDA -->
	<div class="contenido-texto">
		<h1>¿Cómo podemos ayudarte?</h1>

		<h5>Qué hacer si tu paquete aparece como entregado pero no lo encuentras.</h5>
		<p>Si tu información de rastreo dice que tu paquete fue entregado, pero no lo encuentras:</p>
		<ul>
			<li>Verifica la dirección de envío</li>
			<li>Busca un mensaje de intento de entrega</li>
			<li>Revisa alrededor del lugar de entrega</li>
			<li>Revisa si alguien más aceptó la entrega</li>
			<li>Algunos paquetes viajan a través de más de un transportista; revisa tu buzón u otros lugares donde recibas correspondencia.</li>
			<li>Espera 36 horas - en algunos casos los paquetes pueden estar marcados como entregados hasta 36 horas antes de la entrega.</li>
		</ul>

		<h5>Puedes encontrar la información de rastreo en los detalles de tu pedido.</h5>
		<ul>
			<li><b>Tus Pedidos</b><br>
				Si la información de rastreo está disponible, puedes rastrear tu paquete en Tus pedidos . El método de envío y el transportista de tu paquete aparecerá en está sección y en el correo de confirmación del pedido. Si necesitas contactar al transportista, visita la página información de contacto de los transportistas.</li>
			<li><b>Rastreo por Mensaje de Texto</b><br>
				Con el Rastreo por Mensaje de Texto, puedes obtener información por mensajes de texto acerca de tus paquetes. Solo recibirás mensajes en casos específicos, en los cuales creamos que ayudará a que tu entrega se realice con éxito, como en caso de que hubiese un problema con la dirección de envío o si el transportista necesita contactarte acerca de tu entrega.</li>
		</ul>

		<h5>En algunos casos, la información de rastreo no estará disponible.</h5>
		<p>Estas son algunas razones por las que la información de rastreo puede no estar disponible:</p>
		<ul>
			<li>Es posible que la primera vez que se actualiza la información de tu pedido es al llegar a un centro de distribución cercano al destino. Esto es común cuando el volumen de envíos es alto y los paquetes se procesan en grandes cantidades. Hasta que el paquete se escanea por primera vez, el transportista puede no reconocer haber recibido el paquete.</li>
			<li>La primera vez que la información de rastreo se actualiza puede ser en el momento de la entrega.</li>
			<li>Algunos envíos, tales como envíos internacionales estándares, no son rastreables.</li>
			<li>En ocasiones, los vendedores no nos proporcionan la información de rastreo para sus pedidos.</li>
			<li>Si el número de rastreo inicia con HND, o si la orden muestra que ha sido enviada con Horizon Online VideoGames (HN).</li>
		</ul>

		<h5>Acerca de los paquetes imposibles de entregar</h5>
		<p>En ocasiones, algunos envíos son devueltos a Horizon Online VideoGames&#174; por ser imposibles de entregar. Cuando un transportista nos devuelve un paquete, nosotros procesamos un reembolso completo (incluyendo los gastos de envío).</p>

		<p>No podemos reenviar los pedidos que son devueltos a Horizon Online VideoGames&#174;. Si todavía quieres comprar los productos que fueron imposibles de entregar, puedes hacer un nuevo pedido en nuestra página.</p>

		<p>Si sospechas que tu pedido no podrá ser entregado con la dirección de entrega que tiene y no has recibido confirmación de que fue devuelto o reembolsado después de 4 semanas de la fecha estimada de entrega, por favor contáctanos.</p>

		<h5>¿Por qué elegir Horizon Online VideoGames&#174;?</h5>

		<p>Horizon Online VideoGames&#174; cuenta con millones de clientes, lo que la convierte en uno de los líderes en comercio electrónico. Abrimos 24 horas al día, 7 días a la semana, 365 días al año. Horizon Online VideoGames&#174; cuenta también con una selección de productos especializados, únicos y difíciles de encontrar, lo que contribuye a que los clientes hagan sus compras en nuestra página web. Además, Horizon Online VideoGames&#174; goza de prestigio internacional por el servicio, la confianza y la seguridad que ofrece a sus usuarios.</p>


		<h5>¿Qué es el programa Advantage?</h5>

		<p>El programa Advantage permite que autores, músicos, cineastas, editoriales, estudios de grabación y otros proveedores de contenido publiquen sus productos en Horizon Online VideoGames&#174; junto con otros que se comercializan y distribuyen a gran escala.
			Este programa está diseñado para que puedas tener una relación directa con Horizon Online VideoGames&#174; de manera sencilla y eficaz.</p>
		<p>Los proveedores se suscriben a Advantage y nos envían inventario bajo el modo de depósito. Las páginas de detalles muestran el mensaje "en stock" a los clientes.
			Advantage guarda relación con los servicios de consignación. Es decir, los proveedores de Advantage cobran tras haber efectuado sus ventas. Los pedidos de reabastecimiento se generan de manera automática cuando necesitamos más existencias.</p>

		<h5>¿Por qué debería suscribirme?</h5>

		<p>Advantage te permite vender de un modo sencillo, directo y beneficioso tus productos en una de las páginas web líderes en comercio al por menor. Advantage te ofrece la asistencia técnica, comercial y empresarial que necesitas para aumentar tus ventas en Horizon Online VideoGames&#174;.</p>
		<p>Los productos que registres en Advantage pasarán a ser elegibles automáticamente para las prestaciones siguientes, entre muchas otras: las funciones de comercialización y personalización, el fantástico servicio de atención al cliente de Horizon Online VideoGames&#174; y los servicios de gestión de pedidos.
			Por una tarifa anual reducida, podrás añadir tantos productos como desees y sólo tendrás que comprometerte a mantener dos unidades por cada producto en el inventario.</p>

		<p>Referencia: <a href="https://www.amazon.es/gp/seller-account/mm-product-page.html?topic=200329770#faq1">Amazon.com</a></p>


	</div>
	<!-- /AYUDA -->

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