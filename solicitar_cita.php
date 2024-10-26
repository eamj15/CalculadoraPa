<?php
include 'php/solicitud_cita.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php 
include 'header.php';
?>
</head>
<body>
    <div class="container mt-5">
        <h3>Solicitar Cita</h3>
        <form action="solicitar_cita.php" method="post">
            <div class="mb-3">
                <input type="text" name="nombre_paciente" class="form-control" placeholder="Nombre del Paciente" required>
            </div>
            <div class="mb-3">
                <input type="datetime-local" name="fecha_hora" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="medico" class="form-label">Médico</label>
                <select name="medico" id="medico" class="form-control" required>
                    <option value="">Seleccione un médico</option>
                    <?php
                    // Consulta para obtener los médicos disponibles
                    $resultado = $conn->query("SELECT id_medico, nombre FROM medicos");
                    if ($resultado->num_rows > 0) {
                        // Rellenar el select con los médicos
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<option value='" . $fila['id_medico'] . "'>" . $fila['nombre'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No hay médicos disponibles</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="motivo" class="form-control" placeholder="Motivo de la cita" required></textarea>
            </div>
            <div class="mb-3">
                <input type="text" name="estado" class="form-control" placeholder="Estado de la cita" required>
            </div>
            <button type="submit" class="btn btn-primary">Agendar Cita</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
