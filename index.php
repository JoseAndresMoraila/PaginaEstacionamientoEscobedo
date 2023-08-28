<?php
     $servidorDB = "localhost";
     $usuarioDB = "root";
     $contrasenaDB = "";
     $baseDeDatos = "paginaestacionamiento";
     $conexion = "";
 
     $conexion = mysqli_connect($servidorDB, $usuarioDB, $contrasenaDB, $baseDeDatos);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="es">
    <title>Estacionamiento Escobedo</title>
    <link rel="icon" href="https://raw.githubusercontent.com/JoseAndresMoraila/PaginaEstacionamientoEscobedo/main/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="scripts.js"></script>
</head>



<body style="background-color: rgb(219, 219, 136);">
    <header>Estacionamiento Escobed
        <img class="Encabezado" src="https://i.ibb.co/j8zcsG2/Estacionamiento-Escobedo-Logo-Transparente.png" alt="LogoEstacionamientoEscobedo">
    </header>

    <main> Estacionamiento Escobedo es un estacionamiento público que como su nombre lo indica está en la calle Mariano Escobedo entre Morelos y Rubí en la colonia Centro cerca de Casa Ley, así como de papelerías Tony.
    </main> 
    <br>
    <nav>
        <a class="NavLink" href="#PaginaPrincipal" data-position="0">Principal</a>
        <a class="NavLink" href="#QueOfrecemos" data-position="-100%">¿Qué ofrecemos?</a>
        <a class="NavLink" href="#Contactanos" data-position="-200%">Contactanos</a>
    </nav>
    
    <br>
    <br>
    <div class="ContendorPadre"> <!--Empieza Contendor Padre-->
        <div class="contenedor-divs" id="PaginaPrincipal"> <!--Contenedor que tiene los elementos de Principal-->
            <div class="Mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.6817476467486!2d-107.39957272482701!3d24.80634894742098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd140f1cff13d%3A0xfb64f8ae0324cf38!2sEstacionamiento%20Escobedo!5e0!3m2!1sen!2smx!4v1691463174814!5m2!1sen!2smx" width="400" height="450" style="border:10; border-radius: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contenedor-texto">
                <!--Imagenes de dezlizador comienza-->
        <div class="Deslizador">
            <div class="Deslizadores">
                <!--Botones de radio comienzan-->
                <input type="radio" name="BotonRadio" id="Radio1">
                <input type="radio" name="BotonRadio" id="Radio2">
                <input type="radio" name="BotonRadio" id="Radio3">
                <!--Botones de radio finalizan-->
                <!--Deslizamiento de imagenes comienza-->
                <div class="PrimeraFoto"> <!--Aqui es el contenedor de la primera foto-->
                    <img src="https://github.com/JoseAndresMoraila/PaginaEstacionamientoEscobedo/blob/main/images/Calle%20Escobedo%20trafico.jpg?raw=true" alt="Calle Escobedo">
                </div>
                <div class="FotoEstacionamiento"> <!--Aqui es el contenedor de la segunda foto-->
                    <img src="https://github.com/JoseAndresMoraila/PaginaEstacionamientoEscobedo/blob/main/images/Calle%20amplia%20Escobedo.jpg?raw=true" alt="Calle Escobedo Otro Angulo">
                </div>
                <div class="FotoEstacionamiento"> <!--Aqui es el contenedor de la tercera foto-->
                    <img src="https://github.com/JoseAndresMoraila/PaginaEstacionamientoEscobedo/blob/main/images/Calle%20Entrada%20Escobedo.jpg?raw=true" alt="Calle Escobedo Entrada">
                </div>
                <!--Delizamiento de imagenes finaliza-->
                <!--Navegación automatica comienza-->
                <div class="NavegacionAuto">
                    <div class="AutoBoton1"></div>
                    <div class="AutoBoton2"></div>
                    <div class="AutoBoton3"></div>
                </div>
                <!--Navegación automatica finaliza-->
            </div>
            <!--Navegación manual comienza-->
                <div class="NavegacionManual">
                    <label for="Radio1" class="BotonManual"></label>
                    <label for="Radio2" class="BotonManual"></label>
                    <label for="Radio3" class="BotonManual"></label>
                </div>    
            <!--Navegación manual finaliza-->
        </div>
        <!--Imagenes de dezlizador finaliza-->


            </div>
        </div>
        <div class="ContenedorQueOfrecemos"> <!--Empieza Contenedor de Que Ofrecemos-->
            <img src="https://github.com/JoseAndresMoraila/PaginaEstacionamientoEscobedo/blob/main/images/Almacen%20Estacionamiento.jpg?raw=true">
            <div class="ContenedorTituloOfrecemos">
                <h1>¿Que ofrecemos?</h1>
            </div>
            <div class="ContenedoresTextoOfrecemos">
                <p>Lo que ofrecemos es un almacenamiento de mercancia a comerciantes del centro ya que ademas contamos con un perro que cuida los carros y carritos de mercancia durante la noche.</p>
                <p>Además Estacionamiento Escobedo se encuentra cerca de Casa Ley donde puedes comprar despensa, también queda a una cuadra de Rbí donde se compran uniformes y a una cuadra de Colón donde se compran y arreglan aparatos electronicos.</p>
            </div>
        </div> <!--Finaliza Contenedor de Que Ofrecemos-->

        <div class="ContenedorContactanos"><!--Empieza contenedor Contactanos-->
            <div class="ContenedorImagenContac">
            <img src="https://static.vecteezy.com/system/resources/previews/006/417/311/original/outline-email-icon-isolated-on-grey-background-open-envelope-pictogram-line-mail-symbol-for-website-design-mobile-application-ui-illustration-eps10-free-vector.jpg">
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


                <div class="ContenedorFormulario"><!--Contenedor del formulario-->
                    <div><!--Contenedor donde se puntua el servicio-->
                        <p><strong>¿Cómo calificas el servicio? </strong></p>
                        <label> <input type="radio" name="ranking" value="5" required> Muy bueno </label>
                        <br>
                        <br>
                        <label> <input type="radio" name="ranking" value="4" required> Bueno </label>
                        <br>
                        <br>
                        <label> <input type="radio" name="ranking" value="3" required> Regular </label>
                        <br>
                        <br>
                        <label> <input type="radio" name="ranking" value="2" required> No bueno </label>
                        <br>
                        <br>
                        <label> <input type="radio" name="ranking" value="1" required> Malo </label>
                    </div><!--Finaliza contenedor donde se puntua servicio-->
                    <div class="ContendorOpinion"><!--Empieza contenedor dar opinión-->
                        <p><strong>¿Tienes alguna opinión relacionado al servicio?</strong></p>
                        <textarea name="mensaje" maxlength="250" placeholder="Escribe tu reseña aquí" required></textarea>
                        <input type="submit" class="BotonEnviar" name="mandarinfo" value="Mandar">
                    </div><!--Finaliza contenedor dar opinión-->
                     <div class="ContenedorBoton"><!--Contenedor de boton enviar-->
            </form>
        </div> <!--Finaliza contenedor Contactanos-->
        
    </div> <!--Aquí finaliza el contendor padre de todos los contenedores-->
</html>

<?php
        if(isset($_POST["mandarinfo"])){
                
                $ranking = intval($_POST["ranking"]);
                $mensaje = filter_input(INPUT_POST, "mensaje", FILTER_SANITIZE_SPECIAL_CHARS);

                $sql = "INSERT INTO formulario (rankingdb, mensajedb) VALUES ('$ranking', '$mensaje')";

                mysqli_query($conexion, $sql);
                mysqli_close($conexion);
                
            }
?>