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
	<link rel="stylesheet" href="./css/pg.css">
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

 <!-- CONTENIDO -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="title">TODOS LOS JUEGOS </h3>
					</div>
				</div>


				<?php
				# Incluimos la conexión
				include_once "./dasborad/conec.php";

				# Cuántos productos mostrar por página
				$productosPorPagina = 4;
				// Por defecto es la página 1; pero si está presente en la URL, tomamos esa
				$pagina = 1;
				if (isset($_GET["pagina"])) {
					$pagina = $_GET["pagina"];
				}
				# El límite es el número de productos por página
				$limit = $productosPorPagina;
				# El offset es saltar X productos que viene dado por multiplicar la página - 1 * los productos por página
				$offset = ($pagina - 1) * $productosPorPagina;
				# Necesitamos el conteo para saber cuántas páginas vamos a mostrar
				$sentencia = $base_de_datos->query("SELECT count(*) AS conteo FROM producto");
				$conteo = $sentencia->fetchObject()->conteo;
				# Para obtener las páginas dividimos el conteo entre los productos por página, y redondeamos hacia arriba
				$paginas = ceil($conteo / $productosPorPagina);

				# Ahora obtenemos los productos usando ya el OFFSET y el LIMIT
				$sentencia = $base_de_datos->prepare("SELECT producto.IdProducto, producto.NombreProducto, producto.Precio, producto.stock, producto.foto, marca.NombreMarca FROM producto 
                    INNER JOIN marca ON producto.Id_Marca = marca.IdMarca  LIMIT ? OFFSET ?");
				$sentencia->execute([$limit, $offset]);
				$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
				# Y más abajo los dibujamos...
				?>





				<?php foreach ($productos as $producto) { ?>
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<?php

								$foto = './dasborad/assets/productos' . $producto->foto;
								if (file_exists($foto)) {
								?>
									<img src="<?php echo $foto; ?>" alt="">

								<?php } ?>
							</div>
							<div class="product-body">
								<p class="product-category"><?php echo $producto->NombreMarca ?></p>
								<h3 class="product-name"><?php echo $producto->NombreProducto ?></a></h3>
								<h4 class="product-price">$ <?php echo $producto->Precio ?></h4>
								<div class="product-btns">
									<button class="add-to-wishlist"><a href="informacion_del_producto.php ?id=<?php echo $producto->IdProducto ?>">COMPRAR</a></i></button>
								</div>
							</div>
						</div>
					</div>

				<?php } ?>



				<nav>
					<div class="row">

					</div>
					<ul class="pagination ">
						<!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
						<?php if ($pagina > 1) { ?>
							<li>
								<a href="juegos.php ?pagina=<?php echo $pagina - 1 ?>">
									<span  aria-hidden="true">&laquo;</span>
								</a>
							</li>
						<?php } ?>

						<!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->
						<?php for ($x = 1; $x <= $paginas; $x++) { ?>
							<li class="<?php if ($x == $pagina) echo "active" ?>">
								<a  href="juegos.php ?pagina=<?php echo $x ?>">
									<?php echo $x ?></a>
							</li>
						<?php } ?>
						<!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->
						<?php if ($pagina < $paginas) { ?>
							<li>
								<a  href="juegos.php  ?pagina=<?php echo $pagina + 1 ?>">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav>




			</div>
			<?php ?>

			<!-- product -->


			<!-- /product -->

			<!-- product -->
			<!-- /product -->

			<!-- product -->

			<!-- /product -->

			<!-- <div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">JUEGOS GRATIS</h3>
				</div>
			</div> -->

			<?php 
			/*
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego5.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CELULARES</p>
						<h3 class="product-name"><a href="#">Moto G6 - 32GB</a></h3>
						<h4 class="product-price">L.5,999.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist"><a href="RainSix.html">COMPRAR</a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego6.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CELULARES</p>
						<h3 class="product-name"><a href="#">Moto Z3 Play</a></h3>
						<h4 class="product-price">L.10,799.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist"><a href="JustDance.html">COMPRAR</a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<div class="clearfix visible-sm visible-xs"></div> 

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego7.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CELULARES</p>
						<h3 class="product-name"><a href="#">LG Stylo 4 - 32GB</a></h3>
						<h4 class="product-price">L.6,999.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist"><a href="Mario.html">COMPRAR</a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego8.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CELULARES</p>
						<h3 class="product-name"><a href="#">LG V35 ThinQ</a></h3>
						<h4 class="product-price">L.16,800.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist"><a href="RainBowSix.html">COMPRAR</a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">JUEGOS PROXIMAMENTES</h3>
				</div>
			</div>

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego9.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CÁMARAS</p>
						<h3 class="product-name"><a href="#">Sony A7 III</a></h3>
						<h4 class="product-price">L.47,999.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist" onclick="swal( 'Oops' ,  'Aun no esta disponible, pero estará proximamente!' ,  'error' );">COMPRAR</button></a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego10.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CÁMARAS</p>
						<h3 class="product-name"><a href="#">Sony Parent A5 100</a></h3>
						<h4 class="product-price">L.12,000.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist" onclick="swal( 'Oops' ,  'Aun no esta disponible, pero estará proximamente!' ,  'error' );">COMPRAR</button></a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<div class="clearfix visible-sm visible-xs"></div>

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego11.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CÁMARAS</p>
						<h3 class="product-name"><a href="#">Canon T6i</a></h3>
						<h4 class="product-price">L.14,500.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist" onclick="swal( 'Oops' ,  'Aun no esta disponible, pero estará proximamente!' ,  'error' );">COMPRAR</button></a></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/juego12.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">CÁMARAS</p>
						<h3 class="product-name"><a href="#">Fujifilm HDR 324</a></h3>
						<h4 class="product-price">L.32,930.00</h4>
						<div class="product-btns">
							<button class="add-to-wishlist" onclick="swal( 'Oops' ,  'Aun no esta disponible, pero estará proximamente!' ,  'error' );">COMPRAR</button></a></i></button>
						</div>
					</div>
				</div>
			</div>
			*/
			?>

			-->
			<!-- /product -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	</div>
	<!-- /Section -->



	<!-- /CONTENIDO -->



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
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>

<?php

?>