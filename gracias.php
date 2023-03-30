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
                    <h1>Gracias por su compra</h1>

                    <div class="perfil-usuario-footer">
                        <h4>Su compra a sido realizado, Se entregara el codigo del juego en su perfil en el partado de Tus pedidos :)</h4>
                        <form action="regresar.php" method="POST">

                            <div class="boton">
                                <input type="submit" name="enviar" value="Mi perfil" class="siuu primaryhh ">
                            </div>

                        </form>

                        <form action="index.php">
                            <div class="boton">
                                <input type="submit" value="Menu pricipal" class="siuu colorD">
                            </div>

                        </form>


                    </div>

                </div>
            </section>


            <!--ES LA IMAGEN QUE DIVIDE LA PARTE DE COMPRA CON LA PARTE DE PERFIL-->



            <!--ES LA PARTE DE COMPRA-->

        </main>


        



    </body>

    </html>

<?php
} else {
    header('location: dasborad/panel/inicioSesion.php');
}
?>