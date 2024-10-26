<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio - mi salud</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MiSalud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Servicios Médicos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Especialidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="farmacia.php">Farmacia</a></li>
                    <li class="nav-item"><a class="nav-link" href="inicio.php">Citas</a></li>
                    <li class="nav-item"><a class="nav-link" href="footer.php">Contáctanos</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-success text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Bienvenidos al Hospital MiSalud</h1>
            <p class="lead">Brindando excelencia en atención médica desde 2001.</p>
            <a href="solicitar_cita.php" class="btn btn-light btn-lg">Solicitar una Cita</a>
        </div>
    </header>

    <!-- Sección de Servicios Médicos -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Nuestros Servicios</h2>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img src="https://via.placeholder.com/150" alt="Servicio 1" class="rounded-circle mb-1">
                    <h3>Emergencias 24/7</h3>
                    <p>Atención médica de urgencias y emergencias disponible las 24 horas del día, los 7 días de la semana.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://via.placeholder.com/150" alt="Servicio 2" class="rounded-circle mb-3">
                    <h3>Especialidades Médicas</h3>
                    <p>Ofrecemos una amplia gama de especialidades médicas con profesionales de renombre nacional e internacional.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="https://via.placeholder.com/150" alt="Servicio 3" class="rounded-circle mb-3">
                    <h3>Diagnóstico Avanzado</h3>
                    <p>Contamos con la última tecnología en equipos de diagnóstico y tratamiento para asegurar una atención de calidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Noticias o Actualizaciones -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Noticias y Actualizaciones</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Noticia 1">
                        <div class="card-body">
                            <h5 class="card-title">Nuevo Centro de Oncología</h5>
                            <p class="card-text">El Hospital MiSalud inaugura un nuevo centro de oncología con tecnología avanzada para el tratamiento del cáncer.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Noticia 2">
                        <div class="card-body">
                            <h5 class="card-title">Nueva Área de Pediatría</h5>
                            <p class="card-text">Hemos renovado nuestra área de pediatría para ofrecer mayor confort y seguridad a nuestros pacientes más pequeños.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/350x150" class="card-img-top" alt="Noticia 3">
                        <div class="card-body">
                            <h5 class="card-title">Certificación Internacional</h5>
                            <p class="card-text">El Hospital Paitilla recibe una nueva certificación internacional por la calidad de sus servicios médicos.</p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>


    <!-- Footer -->
    <?php include('footer.php'); ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
