
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

	</nav> <!-- POLITICAS DE PRIVACIDAD -->
	<div class="contenido-texto">
		<div>
			<h1>Políticas de Privacidad</h1>
			<hr>

			<p><strong>Última actualización: 05 de agosto de 2018</strong></p>

			<p>
				Horizon Online VideoGames&#174; está consciente de la importancia que representa para usted, el uso que le damos a su información personal y el modo en que la compartimos, y agradecemos su confianza de que la tratamos con el debido cuidado y prudencia. El presente aviso describe nuestra política de privacidad.
			</p>

			<p>
				TEM Store está consciente de la importancia que representa para usted, el uso que le damos a su información personal y el modo en que la compartimos, y agradecemos su confianza de que la tratamos con el debido cuidado y prudencia. El presente aviso describe nuestra política de privacidad.
			</p>

			<h2>¿Qué datos personales recaba Horizon Online VideoGames&#174; de sus clientes?</h2>

			<p>
				La información personal que recabamos de nuestros clientes nos ayuda a personalizar y mejorar continuamente su experiencia en TEM Store&#174;. Estos son los tipos de información que recabamos:
			</p>

			<ul>
				<li>
					<p><strong>Información que usted nos proporciona:</strong> Recibimos y almacenamos toda la información que usted introduce en nuestro sitio web o que nos facilita por cualquier otro medio. Puede elegir no proporcionar cierta información, sin embargo, si así lo hace, no podrá disfrutar de muchas de las funciones que le ofrecemos. Utilizamos la información que usted nos proporciona con el objeto de responder a sus peticiones, personalizar futuras compras que vaya a realizar, mejorar nuestras tiendas y ponernos en contacto con usted.</p>
				</li>

				<li>
					<p><strong>Información automática:</strong> Recibimos y almacenamos ciertos tipos de información, cada vez que usted interactúa con nosotros. Por ejemplo, al igual que hacen muchos otros sitios web, utilizamos “cookies” y obtenemos ciertos tipos de información cuando su navegador accede a Horizon Online VideoGames&#174; o a publicidad u otros tipos de contenidos que le son ofrecidos por parte de o en nombre de Horizon Online VideoGames&#174; en otros sitios web.</p>
				</li>

				<li>
					<p><strong>Móvil:</strong> Cuando usted descarga o usa aplicaciones (apps) creadas por Horizon Online VideoGames&#174; o por nuestras subsidiarias, podremos recibir información sobre su ubicación y sobre su dispositivo móvil, incluyendo un identificador único del mismo. Podremos utilizar dicha información para proporcionarle servicios basados en su ubicación, por ejemplo, publicidad, resultados de búsqueda y otro contenido personalizado. La mayoría de dispositivos móviles le permiten desactivar dichos servicios de ubicación.</p>
				</li>

				<li>
					<p><strong>Comunicación por correo electrónico:</strong> Para ayudarnos a hacer que los correos electrónicos que enviamos sean más útiles e interesantes, habitualmente recibimos una confirmación cuando usted abre un correo electrónico que le ha enviado Horizon Online VideoGames&#174; en el caso de que su computadora admita esta característica. Además, en un esfuerzo por evitar el envío innecesario de mensajes a nuestros clientes, comparamos nuestras listas de clientes con las que recibimos de otras compañías. Si no desea recibir más correos electrónicos u otras notificaciones por parte nuestra, le sugerimos que ajuste sus Preferencias de comunicación.</p>
				</li>

				<li>
					<p><strong>Información de otras fuentes:</strong> Es posible que recibamos información sobre usted de otras fuentes, y la añadamos a nuestra información de la cuenta.</p>
				</li>

			</ul>

			<h2>¿Qué son las cookies?</h2>

			<ul>
				<li>
					<p>Las cookies son identificadores únicos que transferimos a su dispositivo para permitir a nuestros sistemas reconocer su dispositivo y para proporcionar funciones tales como Pedidos Rápidos, Recomendaciones para ti, anuncios personalizados sobre otros sitios web que utilicen el servicio de almacenamiento de artículos en su Carrito de compras entre visitas.</p>
				</li>

				<li>
					<p>En la función de Ayuda de la mayoría de los navegadores se indica cómo configurar su navegador para que no acepte cookies, para que le notifique cada vez que reciba una nueva cookie, o para desactivar todas las cookies. Asimismo, puede inhabilitar o eliminar datos similares que fueron utilizados por los complementos de los navegadores, tales como Flash cookies, cambiando los ajustes de las extensiones o visitando el sitio web de su fabricante. Sin embargo, le recomendamos que deje habilitadas las cookies ya que le permiten aprovechar muchas de las funciones esenciales de Horizon Online VideoGames&#174;. Por ejemplo, si rechaza o bloquea nuestras cookies, no podrá añadir productos a su Carrito, ni proceder al pago, ni usar ninguno de los productos o servicios de Horizon Online VideoGames&#174; que requieren que inicie su sesión.</p>
				</li>
			</ul>

			<h2>¿Comparte Horizon Online VideoGames&#174; la información que recibe?</h2>

			<p>
				La información acerca de nuestros clientes es parte fundamental de nuestro negocio y no participamos en el negocio de la venta de dicha información a terceros. Compartimos la información de los clientes únicamente en el modo descrito a continuación y con filiales bajo el control de Horizon Online VideoGames&#174;, las cuales o bien están sujetas a la presente Política de Privacidad o siguen unas prácticas al menos tan protectoras como las descritas en la presente Política de Privacidad.
			</p>

			<ul>
				<li>
					<p><strong>Empresas afiliadas que no están bajo nuestro control:</strong> Trabajamos en estrecha colaboración con empresas afiliadas. En algunos casos, como el de los vendedores de Marketplace, estos negocios operan tiendas en Horizon Online VideoGames&#174; o le venden a usted ofertas en Horizon Online VideoGames&#174;. En otros casos, operamos tiendas, prestamos servicios o vendemos líneas de productos en conjunto con estas empresas. Haga clic aquí para ver algunos ejemplos de ofertas conjuntas y marcas compartidas. Puede percatarse cuando un tercero está relacionado con sus transacciones y compartimos información del cliente relacionada con dichas transacciones con ese tercero. </p>
				</li>

				<li>
					<p><strong>Proveedores de servicios terceros:</strong> Contratamos a otras compañías y personas para realizar ciertas funciones en nuestro nombre. Los ejemplos incluyen despacho de pedidos, entrega de paquetes, envío de correo postal y correos electrónicos, eliminación de información repetitiva de las listas de clientes, análisis de datos, suministro de asistencia relativa a la comercialización, entrega de resultados de búsqueda y enlaces (incluyendo listados pagados y enlaces), procesamiento de pagos con tarjetas de crédito y prestación de servicio al cliente. Tienen acceso a la información personal necesaria para cumplir con sus funciones, pero no podrán utilizarla para otros propósitos. </p>
				</li>

				<li>
					<p><strong>Ofertas promocionales:</strong> Ocasionalmente enviamos ofertas en nombre de otras empresas a algunos grupos de clientes de Horizon Online VideoGames&#174;. En estos casos, ni su nombre ni su dirección les serán proporcionados a dichas empresas. Si no desea recibir d</p>
				</li>

				<li>
					<p><strong>Transferencias de Negocios:</strong> A medida que desarrollamos nuestro negocio, podemos comprar o vender tiendas, subsidiarias o unidades de negocio. En dichas transacciones, la información de los clientes suele ser uno de los activos de los negocios transferidos. Sin embargo, dicha información estará en todo caso sujeta a los compromisos adquiridos en cualquier Aviso de Privacidad preexistente (a menos, claro, que el cliente lo autorice de otro modo). También, en el improbable caso de que Horizon Online VideoGames&#174;, o la mayor parte de sus activos sean adquiridos por un tercero, la información relativa a los clientes sería uno de los activos transferidos.</p>
				</li>

				<li>
					<p><strong>Protección de Horizon Online VideoGames&#174; y otros:</strong> Divulgamos información personal y de las cuentas de nuestros clientes cuando creemos que su divulgación es necesaria para el cumplimiento de la ley, para hacer cumplir o aplicar nuestras Condiciones de Uso y otros acuerdos o para proteger los derechos, la propiedad o seguridad de Horizon Online VideoGames&#174;, sus usuarios o terceros. Esto incluye el intercambio de información con otras compañías y organizaciones para la protección contra el fraude y la reducción del riesgo crediticio. Obviamente, lo anterior no incluye vender, arrendar, compartir o revelar de otro modo la información personalmente identificable de clientes con fines comerciales en violación a los compromisos expresados en el presente Aviso de Privacidad.</p>
				</li>

				<li>
					<p><strong>Con su consentimiento:</strong> Aparte de lo establecido anteriormente, se le informará en el caso de que cualquier información sobre usted sea compartida con terceros, con el objeto de que tenga la oportunidad de decidir si no desea compartir dicha información.</p>
				</li>

			</ul>

			<h2>¿Qué tan segura se encuentra la información en Acerca de mí?</h2>
			<ul>
				<li>
					<p>Trabajamos para proteger la seguridad de su información durante su transmisión utilizando el software Secure Sockets Layer (SSL), el cual codifica la información que usted introduce.</p>
				</li>

				<li>
					<p>Al confirmar un pedido, sólo revelamos los cuatro últimos dígitos de los números de sus tarjetas de crédito. Naturalmente, transmitimos el número completo de la tarjeta de crédito a la compañía de tarjetas de crédito correspondiente para el procesamiento del pedido.</p>
				</li>


				<li>
					<p>Es importante que se proteja contra el acceso no autorizado a su contraseña y a su computadora. Al finalizar, asegúrese de haber cerrado su sesión siempre que esté utilizando una computadora compartida.</p>
				</li>
			</ul>

			<h2>Ejemplos de información recabada</h2>

			<h5>Información que usted nos proporciona</h5>
			<p>Usted nos proporciona la mayor parte de la información al realizar búsquedas, compras, publicar un comentario, participar en un concurso o cuestionario o al ponerse en contacto con nuestro servicio de atención al cliente. Por ejemplo, nos está proporcionando información cuando busca un producto, realiza un pedido a través de Horizon Online VideoGames&#174; o uno de nuestros vendedores, proporciona información en Tu cuenta (puede que usted tenga más de una cuenta si ha utilizado más de una dirección de correo electrónico en sus compras) o en Mi perfil, cuando se pone en contacto con nosotros vía telefónica, por correo electrónico, o por otro medio, cuando completa un cuestionario o un formulario de participación para un concurso. Al realizar las acciones anteriores, nos está proporcionado información como su nombre, dirección y número de teléfono; información de su tarjeta de crédito; personas a las que se han enviado los productos adquiridos, incluyendo direcciones y números de teléfono; nombres de personas (con direcciones y números de teléfono) incluidas en las configuraciones de la herramienta 1-Clic; direcciones de correo electrónico de sus amigos u otras personas; contenido de las opiniones y correos electrónicos que nos envía; descripción personal y fotografía de Mi perfil; y su información financiera, incluyendo números de seguridad social y licencia de conducir.</p>

			<h5>Información Automática</h5>
			<p>Algunos ejemplos de la información que recabamos y analizamos incluye la dirección IP que utiliza para conectarse a Internet con su computadora; datos de identificación; dirección de correo electrónico y contraseña de su cuenta; información sobre su computadora y su conexión a Internet, como la versión y tipo de navegador, su configuración de zona horaria, tipos y versiones de complementos de su navegador, el sistema operativo y plataforma que utiliza; su historial de compras, que en ocasiones combinamos con información similar de otros clientes para crear funciones como Los más vendidos de Horizon Online VideoGames&#174;; el trayecto completo del Localizador Uniforme de Recursos (URL) desde, a través y hacia nuestro sitio web (incluyendo fecha y hora); número de cookie; productos que ha visitado o que ha buscado; y el número de teléfono que haya utilizado para llamar a nuestro número 800. También podemos utilizar datos del navegador tales como cookies, Flash Cookies (también llamadas Objetos Locales Compartidos Flash), o datos similares en ciertos lugares de nuestro sitio web para prevenir el fraude, entre otros propósitos. En sus visitas a nuestro sitio web, podemos utilizar herramientas de software como JavaScript para medir y recabar información de la sesión, incluyendo los tiempos de respuesta de la página, errores de descarga, duración de las visitas a ciertas páginas, información sobre la interacción con la página (clics del mouse, desplazamiento por la página o número de veces que pasa el mouse por encima de determinados elementos), y formas de salir de la página web. Asimismo, podremos también recabar información técnica que nos ayude a identificar su dispositivo con finalidades de análisis diagnóstico y prevención del fraude.</p>

			<p>Referencia: <a href="https://www.amazon.com/gp/help/customer/display.html/ref=footer_privacy?ie=UTF8&nodeId=468496">Amazon.com</a></p>
		</div>
	</div>

	<!-- /POLITICAS DE PRIVACIDAD -->

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