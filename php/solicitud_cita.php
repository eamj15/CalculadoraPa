<?php
include 'php/db_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_paciente = $_POST['nombre_paciente']; // Se recibe el nombre del paciente directamente
    $fecha_hora = $_POST['fecha_hora'];
    $medico = $_POST['medico']; // Aquí se recibe el id_medico seleccionado
    $motivo = $_POST['motivo'];
    $estado = $_POST['estado'];

    // Verificar que el id_medico existe en la tabla medicos
    $verificar_medico = $conn->prepare("SELECT COUNT(*) FROM medicos WHERE id_medico = ?");
    $verificar_medico->bind_param("i", $medico);
    $verificar_medico->execute();
    $verificar_medico->bind_result($existe_medico);
    $verificar_medico->fetch();
    $verificar_medico->close();

    if ($existe_medico == 0) {
        die("El médico seleccionado no existe.");
    }

    // Preparar la consulta para evitar inyección SQL
    $stmt = $conn->prepare("INSERT INTO citas (nombre_paciente, fecha_hora, medico, motivo, estado) VALUES (?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("sssss", $nombre_paciente, $fecha_hora, $medico, $motivo, $estado);

    if ($stmt->execute()) {
        echo "Cita agendada correctamente.";
    } else {
        echo "Error al agendar la cita: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>