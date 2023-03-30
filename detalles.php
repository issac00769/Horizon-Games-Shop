<?php session_start();
if (isset($_SESSION['elusuario'])) { // VALIDAMOS QUE EXISTA LA SESIÓN 

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/stylesCryh.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/custom.css" />
        <link rel="icon" type="image/png" href="img/logoh.png" width="100px">
        <link rel="stylesheet" href="css/stylesCryh.css">
        <link rel="stylesheet" href="css/perfiljjj.css">
        <link rel="stylesheet" href="css/boton.css">

        <title>Pago</title>
    </head>

    <body>
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

        <main>
            <section class="seccion-perfil-usuario">

                <div class="perfil-usuario-header">


                    <!-- <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button> -->

                </div>

                <a href="http://" target="_blank" rel="noopener noreferrer"></a>
                <div class="perfil-usuario-body">
                    <h1>Detalles de venta </h1>
                    <div class="perfil-usuario-bio">
                        <?php
                        include('./dasborad/conec.php');

                        $id = $_GET['id'];



                        $consulta = "SELECT venta.id_producto, venta.id_usuario,venta.Cantidad, producto.foto, producto.NombreProducto, producto.Precio, marca.NombreMarca, usuario.NombreUsuario, producto.codigo FROM venta
                        INNER JOIN producto ON venta.id_producto = producto.IdProducto
                        INNER JOIN marca ON producto.Id_Marca = marca.IdMarca 
                        INNER JOIN usuario ON venta.id_usuario = usuario.IdUsuario
                        WHERE id = '$id';";
            
                        $resultado = mysqli_query($conexion, $consulta);
            
                        $fila = mysqli_fetch_array($resultado);
        
            
                        ?>
                        <table class="margen">
                            <thead>
                                <tr>
                                    <th class="margen">Nombre del producto</th>
                                    <th class="margen">Precio</th>
                                    <th class="margen">Desarrolladora</th>
                                    <th class="margen">Foto</th>
                                    <th class="margen">Cantidad</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $fila["NombreProducto"] ?></p>
                                    </td>


                                    <td class="align-middle  text-sm">
                                        <span class="badge badge-sm bg-gradient-success">$ <?php echo $fila["Precio"] ?></span>
                                    </td>
                                    <?php

                                    $precio = $fila["Precio"];

                                    ?>

                                    <td class="align-middle ">
                                        <span class="text-secondary text-xs font-weight-bold"><?php echo $fila["NombreMarca"] ?></span>
                                    </td>





                                    <td class="align-middle ">
                                        <?php

                                        $foto = './dasborad/assets/productos' . $fila["foto"];
                                        if (file_exists($foto)) {
                                        ?>
                                            <img src="<?php echo $foto; ?>" width="80" height="100">
                                        <?php } ?>
                                    </td>
                                    <td class="align-middle ">
                                        <span class="text-secondary text-xs font-weight-bold"><?php echo $fila["Cantidad"] ?></span>
                                    </td>

                                    
                                    
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div class="perfil-usuario-footer">
                        <?php
                       $idU = $_SESSION['indentificacion'];

                        $consulta2 = "CALL sp_perfil_consulta1 ('$idU')";

                        $resultado2 = mysqli_query($conexion, $consulta2);

                        $fila2 = mysqli_fetch_array($resultado2);


                        ?>
                        <?php
                        include('./dasborad/conec.php');

                        $id = $_GET['id'];



                        $consulta = "SELECT venta.id_producto, venta.id_usuario,venta.Cantidad, producto.foto, producto.NombreProducto, producto.Precio, marca.NombreMarca, usuario.NombreUsuario, producto.codigo FROM venta
                        INNER JOIN producto ON venta.id_producto = producto.IdProducto
                        INNER JOIN marca ON producto.Id_Marca = marca.IdMarca 
                        INNER JOIN usuario ON venta.id_usuario = usuario.IdUsuario
                        WHERE id = '$id';";
            
                        $resultado = mysqli_query($conexion, $consulta);
            
                        $fila3 = mysqli_fetch_array($resultado);
        
            
                        ?>
                        <ul class="lista-datos">
                            <li><i class="icono fas fa-map-signs"></i>Usuario</li>
                            <li><i class="icono fas fa-building"></i>Nombre del usuario</li>
                            <li><i class="icono fas fa-building"></i>Apellidos</li>
                            <li><i class="icono fas fa-building"></i>Correo</li>
                            <li><i class="icono fas fa-building"></i>Telefono</li>
                            <li><i class="icono fas fa-building"></i>CODIGO DEL JUEGO</li>




                        </ul>
                        <ul class="lista-datos">
                            <li><i class="icono fas fa-map-marker-alt"></i><?php echo $fila2["Usuario"] ?></li>
                            <li><i class="icono fas fa-calendar-alt"></i><?php echo $fila2["NombreUsuario"] ?></li>
                            <li><i class="icono fas fa-user-check"></i><?php echo $fila2["ApellidoP"]?> <?php echo $fila2["ApellidoM"] ?></li>
                            <li><i class="icono fas fa-user-check"></i><?php echo $fila2["Correo"] ?></li>
                            <li><i class="icono fas fa-user-check"></i><?php echo $fila2["Telefono"] ?></li>

                            <li><i class="icono fas fa-user-check"></i><?php echo $fila3["codigo"] ?></li>
                        </ul>
                        <form action="perfil.php" method="POST">


                         

                            

                            <div class="boton">
                                <input type="submit" name="enviar" value="regresar al perfil" class="siuu primaryhh ">
                            </div>

                        </form>

                        


                    </div>

                </div>
            </section>


            <!--ES LA IMAGEN QUE DIVIDE LA PARTE DE COMPRA CON LA PARTE DE PERFIL-->



            <!--ES LA PARTE DE COMPRA-->

        </main>


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



    </body>

    </html>

<?php
} else {
    header('location: dasborad/panel/inicioSesion.php');
}
?>