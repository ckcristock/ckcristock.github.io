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
                            duration: 0,
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


    <script>
        $(function() {
            var navMain = $(".navbar-collapse");

            navMain.on("click", "a", null, function() {
                navMain.collapse('toggle');
            });
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

    <script>
        function myFunction() {
            var x, y, y2, suma, text, hsp, fd, prp, pns, co2, reempl;

            x = document.getElementById("cars").value;
            y2 = document.getElementById("num2").value;
            reempl = document.getElementById("reempl").value;

            if (x && typeof x !== 'undefined') {
                if (y2 && typeof y2 !== 'undefined') {
                    if (reempl && typeof reempl !== 'undefined') {


                        if (reempl == 10) {
                            y = y2;
                            co2 = (0.16438) * parseFloat(y) * 12;
                            /////////////////////////////////////////////////////////////////////////////////////////
                            if (x == 1) {
                                hsp = 5.25;
                                fd = 0.77;
                                parseFloat(fd);
                                prp = parseFloat(y) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;

                            } else if (x == 2) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.8;
                                fd = 0.81;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 3) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 5.06;
                                fd = 0.82;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 4) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.38;
                                fd = 0.85;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 5) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.72;
                                fd = 0.84;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            }
                            co2 = (0.16438) * parseFloat(y) * 12;
                            document.getElementById("paneles").innerHTML = Math.ceil(pns);
                            document.getElementById("area").innerHTML = area.toFixed(2);
                            document.getElementById("co2").innerHTML = co2.toFixed(1);
                            /////////////////////////////////////////////////////////////////////////////////////////
                        } else if (reempl == 6) {
                            y = parseFloat(y2) * 0.6;
                            co2 = (0.16438) * parseFloat(y) * 12;
                            /////////////////////////////////////////////////////////////////////////////////////////
                            if (x == 1) {
                                hsp = 5.25;
                                fd = 0.77;
                                parseFloat(fd);
                                prp = parseFloat(y) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;

                            } else if (x == 2) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.8;
                                fd = 0.81;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 3) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 5.06;
                                fd = 0.82;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 4) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.38;
                                fd = 0.85;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 5) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.72;
                                fd = 0.84;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            }
                            co2 = (0.16438) * parseFloat(y) * 12;
                            document.getElementById("paneles").innerHTML = Math.ceil(pns);
                            document.getElementById("area").innerHTML = area.toFixed(2);
                            document.getElementById("co2").innerHTML = co2.toFixed(1);
                            /////////////////////////////////////////////////////////////////////////////////////////


                        } else if (reempl == 4) {
                            y = parseFloat(y2) * 0.4;
                            co2 = (0.16438) * parseFloat(y) * 12;
                            /////////////////////////////////////////////////////////////////////////////////////////
                            if (x == 1) {
                                hsp = 5.25;
                                fd = 0.77;
                                parseFloat(fd);
                                prp = parseFloat(y) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;

                            } else if (x == 2) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.8;
                                fd = 0.81;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 3) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 5.06;
                                fd = 0.82;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 4) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.38;
                                fd = 0.85;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 5) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.72;
                                fd = 0.84;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            }
                            co2 = (0.16438) * parseFloat(y) * 12;
                            document.getElementById("paneles").innerHTML = Math.ceil(pns);
                            document.getElementById("area").innerHTML = area.toFixed(2);
                            document.getElementById("co2").innerHTML = co2.toFixed(1);
                            /////////////////////////////////////////////////////////////////////////////////////////


                        } else if (reempl == 2) {
                            y = parseFloat(y2) * 0.2;
                            co2 = (0.16438) * parseFloat(y) * 12;
                            /////////////////////////////////////////////////////////////////////////////////////////
                            if (x == 1) {
                                hsp = 5.25;
                                fd = 0.77;
                                parseFloat(fd);
                                prp = parseFloat(y) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;

                            } else if (x == 2) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.8;
                                fd = 0.81;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 3) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 5.06;
                                fd = 0.82;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 4) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.38;
                                fd = 0.85;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            } else if (x == 5) {
                                //si no ponemos parseFloat concatenaría x con y  
                                hsp = 4.72;
                                fd = 0.84;
                                parseFloat(fd);
                                prp = (parseFloat(y)) / (parseFloat(hsp) * parseFloat(fd) * 30);
                                pns = parseFloat(prp) / 0.54;
                                area = Math.ceil(pns) * 2.274 * 1.134;
                            }

                            document.getElementById("paneles").innerHTML = Math.ceil(pns);
                            document.getElementById("area").innerHTML = area.toFixed(2);
                            document.getElementById("co2").innerHTML = co2.toFixed(1);
                            /////////////////////////////////////////////////////////////////////////////////////////


                        }



                    }
                }
            }

        }
    </script>




</head>

<body>
    <div id="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="index.php" style="text-align:center;"><img src="imgs/logo.png" alt="#" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="show-menu" style="text-align: center;">
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
                            <a class="nav-link" id="hovercreado" href="nuestros-clientes.php">Nuestros Clientes</a>
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
                            <a class="nav-link" style="font-weight: bold; color:#01aceb !important; text-decoration: underline;" href="calculadora.php">Calculadora</a>
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

    <div style="margin-top: 20px; display: block;   position: relative;">
        <div class="container" style="text-align: center; ">
            <h3>Calculadora</h3>
        </div>
        <div class="container" style="text-align: center; ">
            <p style="font-size:25px; ">Calcular el número de paneles en un sistema solar fotovoltaico</p>
        </div>


    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <p style="margin-right: 10px; margin-top: 20px !important; font-size:31px;font-weight: bold;">1. Ingrese sus datos de energia, por favor: </p>

                <p style="margin-right: 10px; margin-top: 20px !important; font-size:20px;font-weight: bold;"><b>Seleccione su ubicación:</b></p>

                <select id="cars" required>
                    <option value="">Seleccionar..</option>
                    <option value="1">NORTE</option>
                    <option value="2">SUR</option>
                    <option value="3">ORIENTAL</option>
                    <option value="4">OCCIDENTAL</option>
                    <option value="5">CENTRAL</option>
                </select>
                <br>
                <br>

                <p style="margin-right: 5px; margin-top: 10px !important; font-size:20px;font-weight: bold;"><b>Cual es su consumo de energía por mes (kWh/mes):</b></p>
                <input id="num2" type="number">

                <p style="margin-right: 10px; margin-top: 20px !important; font-size:20px;font-weight: bold;"><b>Cuanto desea ahorrar en energia:</b></p>

                <select id="reempl" required>
                    <option value="">Seleccionar..</option>
                    <option value="10">100%</option>
                    <option value="6">60%</option>
                    <option value="4">40%</option>
                    <option value="2">20%</option>

                </select>
                <br>
                <br>




            </div>
            <div class="col-md-6">

                <p style="margin-right: 10px; margin-top: 20px !important; font-size:30px;font-weight: bold;">2. Resultados (clic en botón Calcular): </p>
                <p style="margin-right: 10px; margin-top: 20px !important; font-size:20px;font-weight: bold;"><img class="img-responsive" src="imgs/iconops.gif" style="margin-right: 3px;" /> Número de paneles: </p>

                <p id="paneles" style="font-size:30px;">&nbsp; </p>
                <p style="margin-right: 5px; margin-top: 10px !important; font-size:20px;font-weight: bold;"><img class="img-responsive" src="imgs/iconoar.gif" style="margin-right: 3px;" />Área necesaria (m<sup>2</sup>): </p>
                <p id="area" style="font-size:30px;">&nbsp; </p>
                <p style="margin-right: 5px; margin-top: 10px !important; font-size:20px;font-weight: bold;"><img class="img-responsive" src="imgs/iconoco2.gif" style="margin-right: 3px;" />Kg de CO<sub>2</sub> equivalente al año: </p>
                <p id="co2" style="font-size:30px;">&nbsp; </p>

            </div>

            <div class="container" style="text-align: center; "><a type="button" href="calculadora.php" class="btn btn-secondary btn-lg" style="font-size:20px; margin-right:3px;">Borrar</a><button type="button" onclick="myFunction()" class="btn btn-dark btn-lg" style="font-size:28px;">Calcular</button></div>
        </div>
    </div>




    <div class="hiw_section layout_padding" style="background: #eeefef; margin-top: 18px;">
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
                        <form name="myForm" action="scripts/correocalculadora.php" method="post" onsubmit="return validateForm()">
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
                                        window.location = "calculadora.php";
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
                            <li><a href="https://www.youtube.com/channel/UCArRTZxY2uXE8cUt8KhwlSg" target="_blank">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <p>Copyright 2019 Design by <a href="https://html.design">Free Html Templates</a></p>
            <div>Iconos diseñados por <a href="https://www.flaticon.es/autores/dighital" title="Dighital">Dighital</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>

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