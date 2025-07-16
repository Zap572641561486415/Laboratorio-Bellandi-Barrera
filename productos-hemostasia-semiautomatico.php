<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Hemostasia Semiautomático | Laboratorio Bellandi & Barreras</title>
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
    <div class="container-fluid text-white pt-4 pb-5 d-none d-lg-flex" style="background: linear-gradient(to bottom, #ffffff 0%, var(--primary) 20%, var(--primary) 100%); background-color: var(--primary);">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2 text-dark"></i>
                    <div class="ms-3">
                        <h5 class="text-dark mb-0">Llamanos</h5>
                        <a href="tel:+542614222428" class="text-dark">+54 261 422-2428</a>
                    </div>
                </div>
                <a href="index.php" class="h1 text-white mb-0"><img src="img/logo.jpg" alt="Laboratorio Bellandi & Barreras" style="height: 150px; object-fit: contain; margin: -20px 0;"></a>
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
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <img src="img/logo.jpg" alt="Laboratorio Bellandi & Barreras" style="height: 80px; object-fit: contain;">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link">Inicio</a>
                        <a href="about.php" class="nav-item nav-link">Quienes somos</a>
                        <a href="productos.php" class="nav-item nav-link active">Productos</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Páginas</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="dorignaccorp.php" class="dropdown-item">DorignacCorp</a>
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
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Hemostasia Semiautomático</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="productos.php">Productos</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hemostasia Semiautomático</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Productos Section Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-6">Productos de Hemostasia Semiautomático</h2>
        </div>
        <div class="row g-4" id="productos-lista">
            <!-- Aquí puedes agregar tus productos en formato cards modernos -->
            <!-- Producto: ECL 412 -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/ecl-412.jpg" class="card-img-top object-fit-cover" style="object-fit: contain; height: 180px; background: #fff; padding: 10px; width: 100%; border-radius: .5rem .5rem 0 0;" alt="ECL 412 - Analizador de coagulación">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">ECL 412</h5>
                        <p class="card-text">
                            Analizador de coagulación semiautomatizado de 4 canales, ideal para laboratorios que buscan eficiencia y precisión en pruebas de hemostasia.
                        </p>
                        <ul>
                            <li>4 canales de medición independientes</li>
                            <li>12 posiciones para reactivos</li>
                            <li>20 posiciones para incubación de cubetas</li>
                            <li>Inicio automático con pipetas estándar</li>
                            <li>Operación manual sencilla y confiable</li>
                        </ul>
                        <a href="mailto:contacto@lbybsrl.com?subject=Consulta%20por%20ECL%20412" class="btn btn-primary mt-auto">+ Información</a>
                    </div>
                </div>
            </div>
            <!-- Producto: BFT II -->
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow rounded">
                    <img src="img/bft-ii.jpg" class="card-img-top object-fit-cover" style="object-fit: contain; height: 180px; background: #fff; padding: 10px; width: 100%; border-radius: .5rem .5rem 0 0;" alt="BFT II - Analizador de coagulación">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">BFT II</h5>
                        <p class="card-text">
                            El Analizador BFT II de Siemens es un coagulómetro semiautomatizado de dos canales, diseñado para realizar pruebas de coagulación de rutina como PT, APTT, fibrinógeno, tiempo de trombina y otros ensayos usando plasma citrado.
                        </p>
                        <ul>
                            <li>Tipo de funcionamiento: Semiautomático</li>
                            <li>Número de canales: 2</li>
                            <li>Tecnología: Mecánica y fotoóptica</li>
                            <li>Pruebas: PT, APTT, fibrinógeno, tiempo de trombina, tiempo de batroxobina, factores de coagulación, anticoagulante lúpico, proteína C, factor V Leiden</li>
                            <li>Capacidad: ~60 pruebas de PT/hora, ~30 pruebas de APTT/hora</li>
                            <li>Peso: 3,8 kg</li>
                            <li>Dimensiones: 200 mm de ancho x 100 mm de alto</li>
                        </ul>
                        <a href="mailto:contacto@lbybsrl.com?subject=Consulta%20por%20BFT%20II" class="btn btn-primary mt-auto">+ Información</a>
                    </div>
                </div>
            </div>
            <!-- Fin productos Hemostasia Semiautomático -->
        </div>
    </div>
    <!-- Productos Section End -->
    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo.jpg" alt="Laboratorio Bellandi & Barreras" style="height: 80px; object-fit: contain;">
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
                    <p class="mb-0">Designed by <a href="https://htmlcodex.com">HTML Codex</a><br>Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
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