<?php
// Iniciar la sesión si es necesario
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laboratorio Bellandi & Barreras</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>Carola Lorenzini 48, Mendoza, Argentina</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Lun-Viernes 09am-5pm</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Carrera</a>
                    <a class="breadcrumb-item small text-body" href="#">Soporte</a>
                    <a class="breadcrumb-item small text-body" href="#">Términos</a>
                    <a class="breadcrumb-item small text-body" href="#">Preguntas Frecuentes</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid text-white pt-4 pb-2 d-none d-lg-flex" style="background: linear-gradient(to bottom, #ffffff 0%, var(--primary) 20%, var(--primary) 100%); background-color: var(--primary);">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2 text-dark"></i>
                    <div class="ms-3">
                        <h5 class="text-dark mb-0">Llamanos</h5>
                        <a href="tel:+542614222428" class="text-dark">+54 261 422-2428</a>
                    </div>
                </div>
                <a href="index.php" class="h1 text-white mb-0">
                    <img src="img/logo.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-none d-lg-block" style="margin: -20px 0;">
                    <img src="img/logo-mobile.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-block d-lg-none img-fluid">
                </a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2 text-dark"></i>
                    <div class="ms-3">
                        <h5 class="text-dark mb-0">Envíanos un correo</h5>
                        <a href="mailto:contacto@lbybsrl.com" class="text-dark">contacto@lbybsrl.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <div class="container">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/logo.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-none d-lg-block">
                    <img src="img/logo-mobile.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-block d-lg-none img-fluid">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <a href="about.php" class="nav-item nav-link">Quienes somos</a>
                        <a href="productos.php" class="nav-item nav-link">Productos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                            <div class="dropdown-menu m-0">
                                <a href="dorignaccorp.php" class="dropdown-item">Dorignac</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contacto</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.facebook.com/share/1CAcZvQ9ky/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.linkedin.com/company/laboratorio-bellandi-barrera/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.instagram.com/lbblaboratorios?igsh=dnZzdWtuODZpcDJw"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">VISION: </h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Ser la empresa líder en los servicios que ofrecemos, manteniendo un nivel de exigencia y con procesos de mejora continua, superando constantemente las expectativas de nuestros clientes. </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">MISION:</h1>
                                    <p class="mb-5 animated slideInLeft"></p>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInLeft">Satisfacer las demandas del mercado local,interpretar las necesidades de los  distintos Centros Asistenciales.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-2.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-3.jpg">
                        </div>
                        <div class="col-6">
                            <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">30</h1>
                                <small class="fs-5 text-white">Años de Experiencia</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">¿Quienes Somos?</h1>
                    <p class="mb-4">Fundada en el año 1994, somos una organización dedicada a la comercialización de equipamientos e insumos de la más alta calidad para laboratorios clínicos y veterinarios, además integramos todos los insumos necesarios para el área de salud.</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Premios Ganados</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">10</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Casos Completados</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">200</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Clientes Felices</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">250</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Premios Ganados</h5>
                        <p class="mb-0">Reconocidos por nuestra excelencia y compromiso en el sector de la salud.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Doctores Expertos</h5>
                        <p class="mb-0">Contamos con un equipo profesional altamente capacitado y en constante formación.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-cash-coin text-dark"></i>
                        </div>
                        <h5 class="mb-3">Precios Justos</h5>
                        <p class="mb-0">Ofrecemos soluciones accesibles sin comprometer la calidad de nuestros productos.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-headphones text-dark"></i>
                        </div>
                        <h5 class="mb-3">Soporte 24/7</h5>
                        <p class="mb-0">Brindamos asistencia personalizada y continua para resolver todas tus consultas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">La Mejor Solución en Pruebas Médicas y Laboratorio</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Somos líderes en ofrecer tecnología de vanguardia y servicios personalizados para garantizar resultados precisos y confiables en cada análisis.</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-person-plus text-dark"></i>
                                </div>
                                <h5 class="mb-3">Microscopía Avanzada</h5>
                                <span>Utilizamos equipos de última generación para obtener imágenes detalladas y diagnósticos precisos.</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-check-all text-dark"></i>
                                </div>
                                <h5 class="mb-3">Advanced Microscopy</h5>
                                <span>We use state-of-the-art equipment to deliver detailed images and accurate diagnostics.</span>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100 align-items-end">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                                <button type="button" class="btn-play" data-bs-toggle="modal"
                                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-primary p-5">
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Preparación de Muestras</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Precisión de Resultados</span>
                                        <span class="text-white">95%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Equipamiento de Laboratorio</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Video institucional</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <video id="video" width="100%" height="auto" controls>
                            <source src="videoinstagram.mp4" type="video/mp4">
                            Tu navegador no soporta la reproducción de video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Productos Destacados Start (Reemplazo de Servicios) -->
    <div class="container-fluid container-service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Producto de Laboratorio Confiable y de Alta Calidad</h1>
                <p class="mb-5">Ofrecemos productos de laboratorio confiables y de alta calidad, pensados para cubrir todas las necesidades de nuestros clientes.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-droplet-half text-dark"></i>
                        </div>
                        <h5 class="mb-3">Hemostasia</h5>
                        <div class="d-flex flex-column gap-2 mt-auto">
                            <a href="productos-hemostasia-semiautomatico.php" class="btn btn-primary mt-auto">Semiautomático</a>
                            <a href="productos-hemostasia-automatico.php" class="btn btn-primary mt-auto">Automático</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-droplet text-dark"></i>
                        </div>
                        <h5 class="mb-3">Hematología</h5>
                        <div class="d-flex flex-column gap-2">
                            <a href="productos-hematologia-3diferencial.php" class="btn btn-primary">3 Diferencial</a>
                            <a href="productos-hematologia-5diferencial.php" class="btn btn-primary">5 Diferencial</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-beaker text-dark"></i>
                        </div>
                        <h5 class="mb-3">Química</h5>
                        <div class="d-flex flex-column gap-2 mt-auto">
                            <a href="productos-quimica.php" class="btn btn-primary mt-auto">Ver productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-shield-check text-dark"></i>
                        </div>
                        <h5 class="mb-3">Inmunoensayos</h5>
                        <a href="productos-inmunoensayos.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-beaker text-dark"></i>
                        </div>
                        <h5 class="mb-3">Química e Inmunoensayos</h5>
                        <a href="productos-quimica-inmunoensayos.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-wind text-dark"></i>
                        </div>
                        <h5 class="mb-3">Gases en Sangre</h5>
                        <a href="productos-gases-sangre.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-lightning-charge text-dark"></i>
                        </div>
                        <h5 class="mb-3">Electrolitos</h5>
                        <a href="productos-electrolitos.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-droplet-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Eritrosedimentación</h5>
                        <a href="productos-eritrosedimentacion.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-cup-straw text-dark"></i>
                        </div>
                        <h5 class="mb-3">Orinas</h5>
                        <a href="productos-orinas.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.0s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-bug text-dark"></i>
                        </div>
                        <h5 class="mb-3">Biología Molecular</h5>
                        <a href="productos-biologia-molecular.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-virus text-dark"></i>
                        </div>
                        <h5 class="mb-3">Enfermedades Infecciosas</h5>
                        <a href="productos-enfermedades-infecciosas.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.2s">
                    <div class="service-item d-flex flex-column h-100">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-box-seam text-dark"></i>
                        </div>
                        <h5 class="mb-3">Insumos Plásticos</h5>
                        <a href="productos-insumos-plasticos.php" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Productos Destacados End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">Aseguramos los mejores resultados</h1>
                    <p>En Laboratorio Bellandi & Barreras, nos dedicamos a brindar soluciones confiables y personalizadas para laboratorios clínicos y veterinarios. Nuestra experiencia, sumada a un equipo capacitado y tecnología de vanguardia, garantiza resultados precisos y un servicio de excelencia.</p>
                    <p class="mb-4">Si desea realizar una consulta, solicitar información o agendar una cita, complete el formulario y nos pondremos en contacto con usted a la brevedad.</p>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Dirección</h5>
                            <span>Carola Lorenzini 48, Mendoza, Argentina</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Horario de Atención</h5>
                            <span>Lun-Viernes 09am-5pm</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Contactá con nosotros</h2>
                    <form action="send_email.php" method="POST">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Su Nombre" 
                                        pattern="[A-Za-zÀ-ÿ\u00f1\u00d1\s]+" 
                                        title="Por favor ingrese solo letras, espacios y acentos"
                                        oninput="this.value = this.value.replace(/[^A-Za-zÀ-ÿ\u00f1\u00d1\s]/g, '')"
                                        required>
                                    <label for="name">Su Nombre</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="mail" name="email" placeholder="Su Email" required>
                                    <label for="mail">Su Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="mobile" name="phone" placeholder="Su Teléfono" required>
                                    <label for="mobile">Su Teléfono</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <select class="form-select" id="service" name="service" required>
                                        <optgroup label="Hemostasia">
                                            <option value="Hemostasia - Semiautomático">Hemostasia - Semiautomático</option>
                                            <option value="Hemostasia - Automático">Hemostasia - Automático</option>
                                        </optgroup>
                                        <optgroup label="Hematología">
                                            <option value="Hematología - 3 Diferencial">Hematología - 3 Diferencial</option>
                                            <option value="Hematología - 5 Diferencial">Hematología - 5 Diferencial</option>
                                        </optgroup>
                                        <option value="Química">Química</option>
                                        <option value="Inmunoensayos">Inmunoensayos</option>
                                        <option value="Química e Inmunoensayos">Química e Inmunoensayos</option>
                                        <option value="Gases en Sangre">Gases en Sangre</option>
                                        <option value="Electrolitos">Electrolitos</option>
                                        <option value="Eritrosedimentación">Eritrosedimentación</option>
                                        <option value="Orinas">Orinas</option>
                                        <option value="Biología Molecular">Biología Molecular</option>
                                        <option value="Enfermedades Infecciosas">Enfermedades Infecciosas</option>
                                        <option value="Insumos Plásticos">Insumos Plásticos</option>
                                        <option value="Presupuesto">Presupuesto</option>
                                        <option value="Servicio Técnico">Servicio Técnico</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <label for="service">Elija un Producto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Deje un mensaje aquí" id="message" name="message" style="height: 130px" required></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar Ahora</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-none d-lg-block">
                        <img src="img/logo-mobile.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-block d-lg-none img-fluid">
                    </a>
                    <p class="fs-5 mb-4">Fundada en 1994, somos una empresa dedicada a la comercialización de equipamiento e insumos de alta calidad para laboratorios clínicos y veterinarios. Brindamos soluciones integrales para el área de salud, con un compromiso constante con la innovación, la excelencia y el servicio personalizado.</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>Carola Lorenzini 48, Mendoza, Argentina</p>
                    <p><i class="fa fa-phone-alt me-2"></i>+54 261 422-2428</p>
                    <p><i class="fa fa-envelope me-2"></i>contacto@lbybsrl.com</p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href="https://www.facebook.com/share/1CAcZvQ9ky/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="https://www.linkedin.com/company/laboratorio-bellandi-barrera/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="https://www.instagram.com/lbblaboratorios?igsh=dnZzdWtuODZpcDJw"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-12 text-center mt-5">
                            <h4 class="text-light mb-4">Enlaces Rápidos</h4>
                            <div class="d-flex flex-column align-items-center">
                                <a class="btn btn-link" href="about.php">Sobre Nosotros</a>
                                <a class="btn btn-link" href="contact.php">Contáctenos</a>
                                <a class="btn btn-link" href="productos.php">Nuestros Productos</a>
                                <a class="btn btn-link" href="#">Términos y Condiciones</a>
                                <a class="btn btn-link" href="#">Soporte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 Laboratorios Bellandi y Barreras S.R.L.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author's credit link/attribution link/backlink. If you'd like to use the template without the footer author's credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a><br>Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <!-- reCAPTCHA v3 Script -->
    <script src="https://www.google.com/recaptcha/api.js?render=6Ld-lForAAAAALF5nLwvd752nKkuqUAT6I1faDju"></script>
    <script>
        grecaptcha.ready(function() {
            document.querySelector('form').addEventListener('submit', function(e) {
                e.preventDefault();
                grecaptcha.execute('6Ld-lForAAAAALF5nLwvd752nKkuqUAT6I1faDju', {action: 'submit'}).then(function(token) {
                    // Add token to form
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'g-recaptcha-response';
                    input.value = token;
                    document.querySelector('form').appendChild(input);
                    // Submit form
                    document.querySelector('form').submit();
                });
            });
        });
    </script>
    <!-- Forzar inicialización del carrusel Bootstrap -->
    <script>
      var myCarousel = document.querySelector('#header-carousel');
      if (myCarousel) {
        var carousel = new bootstrap.Carousel(myCarousel, {
          interval: 5000,
          ride: 'carousel'
        });
      }
    </script>
</body>

</html>