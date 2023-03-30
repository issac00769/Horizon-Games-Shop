<?php session_start();
if (isset($_SESSION['elusuario'])) { // VALIDAMOS QUE EXISTA LA SESIÓN 

?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
        <link rel="stylesheet" type="text/css" href="css/StylesPerfil.css">
        <link rel="icon" type="image/png" href="img/logoh.png" width="100px">
        <link rel="stylesheet" href="./css/perfiljjj.css">
    </head>

    <body>




        <!--==========================
=            html            =
===========================-->
        <!-- HEADER -->
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
                        <div class="col-md-6">
                            <div class="header-search">
                                <form>

                                </form>
                            </div>
                        </div>
                        <!-- /BARRA DE BÚSQUEDA -->

                        <!-- USUARIO -->
                        <div class="col-md-3 clearfix">
                            <div class="header-ctn">

                                <!-- uSUARIO -->
                                <div class="dropdown">
                                    <ul class="header-links pull-right">

                                        <li><a href="./dasborad/panel/inicioSesion.php"><i class="fa fa-user-o"></i> Cerrar sesion</a></li>
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
        </nav <!-- /HEADER -->

        <section class="seccion-perfil-usuario">
            <?php
            include('./dasborad/conec.php');

            $id = $_SESSION['indentificacion'];

            $consulta = "CALL sp_perfil_consulta1 ('$id');
            ";

            $resultado = mysqli_query($conexion, $consulta);

            $fila = mysqli_fetch_array($resultado);


            ?>
            <div class="perfil-usuario-header">
                <div class="perfil-usuario-portada">

                    <!-- <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button> -->
                </div>
            </div>
            <div class="perfil-usuario-body">
                <div class="perfil-usuario-bio">
                    <h3 class="titulo"><?php echo $fila["NombreUsuario"] ?> <?php echo $fila["ApellidoP"] ?> <?php echo $fila["ApellidoM"] ?></h3>
                    <!-- <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p> -->
                </div>
                <div class="perfil-usuario-footer">
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-map-signs"></i>Usuario</li>
                        <li><i class="icono fas fa-building"></i>Nombre del usuario</li>
                        <li><i class="icono fas fa-building"></i>Apellidos</li>
                        <li><i class="icono fas fa-building"></i>Correo</li>
                        <li><i class="icono fas fa-building"></i>Telefono</li>



                    </ul>
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-map-marker-alt"></i><?php echo $fila["Usuario"] ?></li>
                        <li><i class="icono fas fa-calendar-alt"></i><?php echo $fila["NombreUsuario"] ?></li>
                        <li><i class="icono fas fa-user-check"></i><?php echo $fila["ApellidoP"] ?> <?php echo $fila["ApellidoM"] ?></li>
                        <li><i class="icono fas fa-user-check"></i><?php echo $fila["Correo"] ?></li>
                        
                        <li><i class="icono fas fa-user-check"></i><?php echo $fila["Telefono"] ?></li>



                    </ul>
                </div>

            </div>
        </section>




        <!--ES LA PARTE DE COMPRA-->

        <div class="section-title text-center">
            <h3 class="title">TUS PEDIDOS</h3>
        </div>

        <section class="grid">
            <?php
                 include('./dasborad/conec.php');

                 $id2 = $_SESSION['indentificacion'];


                $consulta2 = "CALL sp_perfilconsulta2 ('$id2')";

                $resultado2 = mysqli_query($conexion, $consulta2);

                   while ($fila2 = mysqli_fetch_array($resultado2)) {



                    ?>

                <div class="card">
                    <?php

                    $foto = './dasborad/assets/productos' . $fila2['foto'];
                    if (file_exists($foto)) {
                    ?>
                        <img src="<?php echo $foto; ?>">
                    <?php } else { ?>

                        SIN FOTO
                    <?php } ?>
                    <form action="detalles.php">
                        <div class="botones">
                            <input type="hidden" name="id" value="<?php echo $fila2['id'] ?>">
                            <button class="boton primario">Ver información</button>
                        </div>
                    </form>

                </div>
            <?php } ?>




        </section>



        </div>

        <script src="js/main.js"></script>
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
} else {
    header('location: dasborad/panel/inicioSesion.php');
}
?>