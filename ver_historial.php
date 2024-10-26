<!DOCTYPE html>
<html lang="es">
<head>
<?php 
include 'header.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Historial de Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
include 'php/historial.php';
?>
    <div class="container mt-5">
        <h3>Ver Historial de Citas</h3>
        <form action="ver_historial.php" method="post">
            <div class="mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre del Paciente" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
