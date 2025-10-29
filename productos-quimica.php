<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Química | LBB Laboratorios</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!--Spinner End-->
    <!--Brand Start-->
         <div class="container-fluid text-white pt-4 pb-2 d-none d-lg-flex" style="background: linear-gradient(to bottom, #ffffff 0%, var(--primary) 20%, var(--primary) 100%); background-color: var(--primary);">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex brand-contact">
                    <i class="bi bi-telephone-inbound fs-2 text-dark"></i>
                    <div class="ms-3">
                        <h5 class="text-dark mb-0">Llamanos</h5>
                        <a href="tel:+542614222428" class="text-dark">+54 261 422-2428</a>
                    </div>
                </div>
                <a href="index.php" class="h1 text-white mb-0">
                    <img src="img/logoConLab.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-none d-lg-block img-fluid" style="max-width: 300px; margin: 10px 0;">
                    <img src="img/logolaboratorio.png" alt="Laboratorio Bellandi & Barreras" class="logo-img d-block d-lg-none img-fluid">
                </a>
                <div class="d-flex brand-contact">
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
                    <img src="img/logoConLab.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-none d-lg-block">
                    <img src="img/logolaboratorio.png" alt="Laboratorio Bellandi & Barreras" class="logo-img d-block d-lg-none img-fluid">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Botones de llamada y mail solo en pantallas chicas -->
                <div class="d-lg-none d-flex align-items-center ms-2">
                    <a href="tel:+542614222428" class="btn btn-sm-square btn-primary me-2" title="Llamar">
                        <i class="bi bi-telephone"></i>
                    </a>
                    <a href="mailto:contacto@lbybsrl.com" class="btn btn-sm-square btn-primary" title="Enviar mail">
                        <i class="bi bi-envelope"></i>
                    </a>
                </div>
                <!--Fin botonos de llamada y mail solo en pantallas chicas-->
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
                        <a href="index.php#contacto" class="nav-item nav-link">Contacto</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.facebook.com/share/1CAcZvQ9ky/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.linkedin.com/company/laboratorio-bellandi-barrera/"target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="https://www.instagram.com/lbblaboratorios?igsh=dnZzdWtuODZpcDJw" target="_blank>"><i class="fab fa-instagram"> </i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Química</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="productos.php">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Química</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Productos Section Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-6">Productos de Química</h2>
        </div>
        <a href="#" class="btn btn-secondary mb-3" onclick="history.back(); return false;"><i class="bi bi-arrow-left"></i> Volver</a>
        <div class="row g-4" id="productos-lista">
            <!-- Producto: XL 200 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/xl-200.jpg" class="card-img-top object-fit-cover" style="object-fit: contain; height: 180px; background: #fff; padding: 10px; width: 100%; border-radius: .5rem .5rem 0 0;" alt="XL 200 - Analizador de química clínica">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">XL 200</h5>
                        <p class="card-text">
                        Analizador que ofrece un muestreo de 200mtras/hs, ideal para laboratorios que buscan resultados confiables y rapidos.
                        </p>
                        <ul>
                            <li>Permite realizar 200 tests fotométricos por hora</li>
                            <li>Módulo avanzado de control de calidad</li>
                            <li>Fácil operación y mantenimiento</li>
                            <li>Resultados precisos y consistentes</li>
                            <li>Fabricante: AP Biotech
                        </ul>
                            <div class="d-flex gap-2 mt-auto">
                                <a href="fichasTecnicas/XL200.pdf" target="_blank" class="btn btn-primary" download>Ficha tecnica</a>
                                <a href="mailto:contacto@lbybsrl.com?subject=Compra%20XL%20200%20-%20Quimica&body=Hola,%20quiero%20comprar%20el%20producto%20XL%20200." class="btn btn-primary">Comprar</a>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Producto: XL 640 Plus -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/xl-640.jpg" class="card-img-top object-fit-cover" style="object-fit: contain; height: 180px; background: #fff; padding: 10px; width: 100%; border-radius: .5rem .5rem 0 0;" alt="XL 640 Plus - Analizador de química clínica">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">XL 640 Plus</h5>
                        <p class="card-text">
                            Analizador de química clínica de alta productividad, diseñado para laboratorios que requieren resultados de calidad con la mayor sensibilidad y linealidad.
                        </p>
                        <ul>
                            <li>Mayor productividad y tiempo de entrega</li>
                            <li>Resultados de calidad con alta sensibilidad</li>
                            <li>Fácil integración en el flujo de trabajo del laboratorio</li>
                            <li>Operación intuitiva y mantenimiento sencillo</li>
                            <li>Fabricante: AP Biotech </li>
                        </ul>
                        <div class="d-flex gap-2 mt-auto">
                                <a href="fichasTecnicas/xl640.pdf" target="_blank" class="btn btn-primary" download>Ficha tecnica</a>
                                <a href="mailto:contacto@lbybsrl.com?subject=Compra%20XL%20640%20Plus%20-%20Quimica&body=Hola,%20quiero%20comprar%20el%20producto%20XL%20640%20Plus." class="btn btn-primary">Comprar</a>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Producto: XL 1000 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/xl-1000.jpg" class="card-img-top object-fit-cover" style="object-fit: contain; height: 180px; background: #fff; padding: 10px; width: 100%; border-radius: .5rem .5rem 0 0;" alt="XL 1000 - Analizador de química clínica">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">XL 1000</h5>
                        <p class="card-text">
                        Analizador recomendado para laboratorios con un alto numero de muestras.
                        </p>
                        <ul>
                            <li>Alta capacidad de procesamiento</li>
                            <li>Resultados precisos y reproducibles</li>
                            <li>Interfaz amigable y fácil de usar</li>
                            <li>Ideal para laboratorios de alto volumen</li>
                            <li>Fabricante: AP Biotech</li>
                        </ul>
                       <div class="d-flex gap-2 mt-auto">
                                <a href="fichasTecnicas/xl1000.pdf" target="_blank" class="btn btn-primary" download>Ficha tecnica</a>
                                <a href="mailto:contacto@lbybsrl.com?subject=Compra%20XL%201000%20-%20Quimica&body=Hola,%20quiero%20comprar%20el%20producto%20XL%201000." class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin productos Química -->
        </div>
    </div>
    <!-- Productos Section End -->
    <img src="img/logoConLab.jpg" alt="Laboratorio Bellandi & Barreras" class="logo-img d-block d-lg-none img-fluid">
    
    <!-- Footer Start -->
   <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Columna izquierda: logo + contacto -->
            <div class="col-lg-5">
                <a href="index.php" class="navbar-brand mb-3 d-block">
                    <img src="img/LogoFooterSinFondo.png" alt="Laboratorio Bellandi & Barreras" class="img-fluid d-none d-md-block" style="max-width: 200px;">
                </a>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2">
                        <i class="fa fa-map-marker-alt me-2 text-white"></i>
                        <a href="https://www.google.com/maps?q=Carola+Lorenzini+48,+Mendoza,+Argentina" style="color: inherit; text-decoration: none;">
                            Carola Lorenzini 48, Mendoza, Argentina
                        </a>
                    </li>
                    <li class="mb-2">
                        <i class="fa fa-phone-alt me-2 text-white"></i>
                        <a href="tel:+542614222428" style="color: inherit; text-decoration: none;">+54 261 422-2428</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope me-2 text-white"></i>
                        <a href="mailto:contacto@lbybsrl.com" class="text-white-50">contacto@lbybsrl.com</a>
                    </li>
                </ul>
                <div class="d-flex mt-3">
                    <a class="btn btn-outline-light btn-social rounded-circle me-2" href="https://www.facebook.com/share/1CAcZvQ9ky/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle me-2" href="https://www.linkedin.com/company/laboratorio-bellandi-barrera/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href="https://www.instagram.com/lbblaboratorios?igsh=dnZzdWtuODZpcDJw"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <!-- Columna derecha: enlaces -->
             
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column align-items-start">
                            <h5 class="text-light mb-3">Enlaces Rápidos</h5>
                            <a class="btn btn-link" href="about.php">Sobre Nosotros</a>
                            <a class="btn btn-link" href="index.php#contacto">Contáctenos</a>
                            <a class="btn btn-link" href="productos.php">Nuestros Productos</a>
                            <a class="btn btn-link" href="#">Términos y Condiciones</a>
                            <a class="btn btn-link" href="#">Soporte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Créditos -->
        <div class="row mt-4 pt-4 border-top border-secondary copyright">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; 2025 Laboratorios Bellandi y Barreras S.R.L. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <!-- Créditos obligatorios del template -->
                <p class="mb-0">
                    Designed by <a href="https://htmlcodex.com" class="text-white">HTML Codex</a><br>
                    Distributed by <a href="https://themewagon.com" class="text-white">ThemeWagon</a>
                </p>
            </div>
        </div>
    </div>
</div>
    <!-- Footer End -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html> 