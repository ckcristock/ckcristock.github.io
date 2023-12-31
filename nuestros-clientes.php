<!DOCTYPE html>
<html>

<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sse.green</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/fontawesome.min.css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>


    <link rel="shortcut icon" href="imgs/logopestaña.gif">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HFXZGCVPVW"></script>

    <!-- para hacer el Captcha required -->
    <script>
        function validateForm() {
            var recaptcha = document.forms["myForm"]["g-recaptcha-response"].value;
            if (recaptcha == "") {
                swal("", 'Por favor, dale click al cuadro que confirma que no eres un Robot', "info");
                return false;
            }
        }
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HFXZGCVPVW');
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $("#scroll").fadeIn();
                } else {
                    $("#scroll").fadeOut();
                }
            });
            $("#scroll").click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
        });
    </script>

    <script>
        var a = 0;
        $(document).ready(function() {
            if (a == 0) {
                $(".counter-value").each(function() {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({
                        countNum: $this.text(),
                    }).animate({
                            countNum: countTo,
                        },

                        {
                            duration: 3100,
                            easing: "swing",
                            step: function() {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function() {
                                $this.text(this.countNum);
                                //alert('finished');
                            },
                        }
                    );
                });
                a = 1;
            }
        });
    </script>

    <style>
        #hovercreado:hover {
            font-weight: bold;
            color: #01aceb !important;
            text-decoration: underline;
            font-size: 19px;
        }
    </style>

</head>

<body>
    <div id="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="nav navbar-nav ">
                        <li class="nav-item active"></li>
                        <li class="nav-item active">
                            <a class="nav-link" id="hovercreado" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-weight: bold; color:#01aceb !important; text-decoration: underline;" href="nuestros-clientes.php">Nuestros Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="nuestros-aliados.php">Nuestros Aliados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="beneficios.php">Beneficios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="preguntasfrecuentes.php">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="experiencia.php">Experiencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="casos-exito.php">Casos de Exito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="calculadora.php">Calculadora</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hovercreado" href="contacto.php">Contacto</a>
                        </li>

                        <li class="nav-item .search-container">
                            <a class="nav-link search" href="#"><i class="fas fa-search"></i></a>
                            <form>
                                <input type="search" placeholder="Search" />
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>




    <div id="nuestrosclientes" class="container" style="background-color: #f3f3f4; width: 100%; padding-bottom: 2px; margin-top: 109px; margin-bottom:10px;">
        <div class="row">
            <div class="col-md-2">
                <p class="counter-value" data-count="3659" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                <p style="display: inline-block; margin: 4px;">kWp</p>
            </div>

            <div class="col-md-3">
                <div id="counter">
                    <p class="counter-value" data-count="9017" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                    <p style="display: inline-block; margin: 4px;">Paneles Instalados</p>
                </div>
            </div>

            <div class="col-md-3">
                <div id="counter">
                    <p class="counter-value" data-count="15" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                    <p style="display: inline-block; margin: 4px;">Proyectos Implementados</p>
                </div>
            </div>

            <div class="col-md-4">
                <div id="counter">
                    <p class="counter-value" data-count="260" style="display: inline-block; font-weight: bold; font-size: 35px;"></p>
                    <p style="display: inline-block; margin: 4px;">Colectores Solares Instalados</p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <div class="hiw_section layout_padding" style="background: #1a2428; margin-top:10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="white_font">Algunos de nuestros Clientes</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/universidadnacional.jpg" alt="#" />
                    <h3 class="blog_head">Universidad Nacional - Bogotá</h3>
                </div>

                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/pricesmart.jpg" alt="#" />
                    <h3 class="blog_head">Bogotá - Cali - Medellin - Pereira</h3>
                </div>

                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/hospitalmederi.jpg" alt="#" />
                    <h3 class="blog_head">Hospital Méderi</h3>
                </div>




                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/hotelpuntadiamante.gif" alt="#" />
                    <h3 class="blog_head">Hotel Punta Diamante</h3>
                </div>

                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/fundaciongrupoenergia.jpg" alt="#" />
                    <h3 class="blog_head">Fundación Grupo Energia de Bogotá</h3>
                </div>

                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/granestacion.jpg" alt="#" />
                    <h3 class="blog_head">Centro Comercial Gran Estación</h3>
                </div>

                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="imgs/ua.png" style="padding: 30px;
                    background-color:white" alt="#" />
                    <!-- <img src="imgs/33.png" class="card-img-top" style="padding: 30px;" alt="..." /> -->
                    <h3 class="blog_head">Universidad del Atlántico</h3>
                </div>

            </div>
        </div>
    </div>






    <div id="contact" class="hiw_section layout_padding" style="background: #eeefef; margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 style="margin-top: 20px; font-size:40px;"><b>CONTÁCTANOS POR WHATSAPP (A TU DERECHA) Ó TAMBIEN POR AQUÍ:</b></h3>
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form">
                        <form name="myForm" action="scripts/correonuestrosclientes.php" method="post" onsubmit="return validateForm()">
                            <input type="text" placeholder="Nombre" name="nombre" required />
                            <input type="email" placeholder="Correo" name="correo" required />
                            <input type="text" placeholder="Telefono de contacto" name="telefono" required />
                            <input type="text" placeholder="Asunto" name="asunto" required />
                            <textarea placeholder="Mensaje" name="mensaje" required></textarea>
                            <div class="g-recaptcha" data-sitekey="6LfUdzchAAAAAD_geeg8hQqZb8_Tz0YDTk3N2jZv"></div>
                            <input type="submit" value="Enviar" />
                            <?php
                            $correo = 0;
                            if (isset($_REQUEST['correo'])) {
                                $correo = $_REQUEST['correo'];
                            }

                            if ($correo === '1') {

                            ?>
                                <p><strong>Mensaje enviado.</strong></p>
                                <script>
                                    swal("Mensaje Enviado", 'Mensaje enviado <b style="color:green;">Éxitosamente!</b>', "success").then(function() {
                                        window.location = "nuestros-clientes.php";
                                    });
                                </script>
                            <?php
                            }
                            $correo = 0;
                            ?>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 text_align_center">
                    <img class="img-responsive" src="imgs/ps22.jpg" alt="#" />
                </div>
            </div>
        </div>
    </div>

    <div class="subcribe">
        <div class="container"></div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="footer_blog_section">
                        <img src="imgs/logo.png" alt="#" />
                        <p style="margin-top: 5px;">Comprometidos con el Ambiente.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">Navegación</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="contacto.php">Contacto</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">Información de Contacto</h4>
                        <p><strong>Dirección Oficinas:</strong></p>
                        <p><img src="imgs/location.png" alt="#" /> Calle 93 No 12-14 ofc. 701 Edif. Tempo</p>
                        <p>Bogotá, Colombia</p>
                        <p><strong>Atención al Cliente:</strong></p>
                        <p><img src="imgs/phone_icon.png" alt="#" /> 317 3700 639</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">Síguenos</h4>
                        <ul>
                            <li><a href="https://www.facebook.com/Ssegreen-101933321835308" target="_blank">Facebook</a></li>
                            <li><a href="https://www.instagram.com/sse.green/" target="_blank">Instagram</a></li>
                            <li><a href="https://www.linkedin.com/in/ssegreen/" target="_blank">Linkedin</a></li>
                            <li><a href="https://www.youtube.com/channel/UCArRTZxY2uXE8cUt8KhwlSg" target="_blank">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <p>Copyright 2019 Design by <a href="https://html.design">Free Html Templates</a></p>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div class="container">
        <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
        <a href="https://wa.me/573173700639?text=Me%20gustaría%20obtener%20información%20sobre%20la%20instalación%20de%20los%20paneles%20solares.%20Gracias" class="whatsapp" target="_blank">
            <i class="fa fa-whatsapp whatsapp-icon"></i>
        </a>
    </div>
</body>

</html>