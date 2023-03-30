<?php session_start();

?>



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
  <link rel="stylesheet" href="css/stylesCryh.css">
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
          
          <div class="con">
            <div class="btn-menu">
              <label for="btn-menu">☰</label>
            </div>
            <nav class="menu"></nav>
          </div>
  </header>
  <div class="capa"></div>
  <!--  --------------->
  <input type="checkbox" id="btn-menu" />
  <div class="con-menu">
    <div class="cont-menu">
      <nav>
        <a href="index.php">Inicio</a>
        <a href="sobrenosotros.php">Nosotros</a>
        <a href="juegos.php">Juegos</a>
        <a href="contactanos.php">Contáctanos</a>
        <a href="perfil.php">Mi Perfil</a>
        <a href="./dasborad/acciones/cerrar_usuario.php">Cerrar sesión</a>
      </nav>
      <label for="btn-menu">✖️</label>
    </div>
  </div>

  <!-- /BARRA DE BÚSQUEDA -->

  <body>

    <!-- uSUARIO -->

    <!-- Menu Toogle -->
    </header>
    <!-- /HEADER --
    <nav id="navigation">
      -- container --
      <div class="container">
        <div id="responsive-nav">
          <ul class="main-nav nav navbar-nav">
            <li class="active"><a href="index.php">Inicio</a></li>
            <li><a href="sobrenosotros.html">Nosotros</a></li>
            <li><a href=".html">Juegos</a></li>
            <li><a href="contactanos.html">Contactos</a></li>
            <li><a href="accesorios.html">Mi Cuenta</a></li>
          </ul>
        </div>
      </div>
    </nav> -->


    <main>
      <?php
      include('./dasborad/conec.php');

      $id = $_GET['id'];

      $consulta = "CALL ps_mostrarproducto ('$id')";

      $resultado = mysqli_query($conexion, $consulta);

      $fila = mysqli_fetch_array($resultado);


      ?>
      <div class="anime-principal">
        <div class="contenedor">
              <div class="product-img">
								<?php

								$foto = './dasborad/assets/productos' . $fila["foto"];
								if (file_exists($foto)) {
								?>
									<img src="<?php echo $foto; ?>" width="160px" height="200px">

								<?php } ?>
							</div>
          <h3 class="titu"><?php echo $fila["NombreProducto"] ?></h3>
          <p class="descripcion"><?php echo $fila["descripcion"] ?></p>
          <p class="descripcion">$<?php echo $fila["Precio"] ?></p>

          <form action="pago.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <button role="button" class="boton" >Comprar</button>
          </form>
          
        </div>
      </div>
      <div class="cont">
        <iframe width="1336px" height="768px" src="<?php echo $fila["link"] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="frase">
        <p class="titulos"></p>
      </div>

      <!-- CONTENIDO -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">



          
            <!-- /product -->
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>

    </main>
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