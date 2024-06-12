<!DOCTYPE html>
<html lang="es" prefix="og: https://ogp.me/ns#">

<head>
    <?php require "head.php"; ?>
    <title>INVER PROPI - Agencia de inversión mobiliaria</title>
    <link rel="canonical" href="https://inverpropi.com/" />
    <meta property="og:title" content="INVER PROPI - Agencia de inversión mobiliaria"/>
    <meta property="og:url" content="https://inverpropi.com/" />
    <meta property="og:image" content="https://inverpropi.com/images/og/og-image.png" />
</head>

<body>
    <?php require "header.php"; ?>

    <main>
        <!-- -- CAROUSEL DE IMAGENES ------- -->
        <section class="p-3">
            <div class="row align-items-center mb-5 carouselContainer">
                <div class="col-md-6 mb-2 container-fluid align-items-center carouselText">
                    <span class="fs-4 mb-5 title1"><strong>INVERSIONES INMOBILIARIAS CON POCO DINERO!</strong></span><br><br>
                    
                    <span class="firstText mt-4">En Inver Propi, te ofrecemos la oportunidad de invertir en bienes raíces con una inversión inicial accesible. Aprovecha nuestras opciones de compra colectiva y proyectos diseñados para maximizar tus rendimientos sin necesidad de grandes sumas de dinero.</span><br><br>
                    <span class="firstText mt-4">Empieza a construir tu futuro financiero hoy mismo, incluso con un presupuesto reducido. ¡Únete a nosotros y descubre cómo puedes obtener ingresos pasivos y aumentar tu patrimonio con inversiones inteligentes!</span><br>
                    <div class="container row mt-4 mb-3">
                        <div class="col-md-3 mb-2 containerDatos">
                            <span class="text-center contadorNum fs-3 fw-bold colorAcil" id="negocio"></span><br>
                            <span class="contadorLugar fs-5 fw-bold colorAcil">Inversionistas</span>
                        </div>
                        <div class="col-md-3 mb-2 containerDatos">
                            <span class="contadorNum fs-3 fw-bold colorAcil" id="hogares"></span><br>
                            <span class="contadorLugar fs-5 fw-bold colorAcil">Proyectos exitosos</span>
                        </div>
                        <div class="col-md-3 mb-2 containerDatos">
                            <span class="contadorNum fs-3 fw-bold colorAcil" id="empresas"></span><br>
                            <span class="contadorLugar fs-5 fw-bold colorAcil">Tasa de reinversión</span>
                        </div>
                    </div>
                    <div class="mt-4 row container-fluid btnCotizacionContainer">
                        <a href="#kit"><button class="btnCotizacion col-sm-6 mb-2 fw-bold fs-6">¡ Contáctanos hoy mismo !</button></a>
                    </div>
                    
                </div>
                
                <div class="col-md-6 mb-2 p-2">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <center><img src="images/carousel/Banner 1.jpg" class="d-block w-100" alt="..."></center>
                            </div>

                            <div class="carousel-item">
                            <center><img src="images/carousel/Banner 2.jpg" class="d-block w-100" alt="..."></center>
                            </div>

                            <div class="carousel-item">
                            <center><img src="images/carousel/Banner 3.jpg" class="d-block w-100" alt="..."></center>
                            </div>

                            <div class="carousel-item">
                            <center><img src="images/carousel/Banner 4.jpg" class="d-block w-100" alt="..."></center>
                            </div>

                            <div class="carousel-item">
                            <center><img src="images/carousel/Banner 5.jpg" class="d-block w-100" alt="..."></center>
                            </div>

                            <div class="carousel-item">
                            <center><img src="images/carousel/Banner 6.jpg" class="d-block w-100" alt="..."></center>
                            </div>
                            
                        </div>

                        
                    </div> 
                </div>
            </div>
        </section>
    </main>
    
    <?php require "footer.php"; ?>

</body>

</html>

<script>
    $(document).ready(function(){
        var startNegocios = 0;
        var endNegocios = 400;
        var startHogares = 0;
        var endHogares = 36;
        var startEmpresas = 0;
        var endEmpresas = 85;
        var time = 25;

        var intervalNegocios = setInterval(function() {
            startNegocios += 5; // Incremento en segundos
            if (startNegocios >= endNegocios) {
                clearInterval(intervalNegocios);
                startNegocios = endNegocios; // Asegurarse de que no se exceda del límite
            }
            $("#negocio").text("+"+startNegocios);
        }, time);

        var intervalHogares = setInterval(function() {
            startHogares += 1; // Incremento en segundos
            if (startHogares >= endHogares) {
                clearInterval(intervalHogares);
                startHogares = endHogares; // Asegurarse de que no se exceda del límite
            }
            $("#hogares").text("+"+startHogares);
        }, time);

        var intervalEmpresas = setInterval(function() {
            startEmpresas += 1; // Incremento en segundos
            if (startEmpresas >= endEmpresas) {
                clearInterval(intervalEmpresas);
                startEmpresas = endEmpresas; // Asegurarse de que no se exceda del límite
            }
            $("#empresas").text("+"+startEmpresas);
        }, time);
    });

    
</script>