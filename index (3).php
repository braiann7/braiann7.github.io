<?php
$conn = new mysqli("sql111.infinityfree.com", "if0_37889269", "nu1DU6piA3", "if0_37889269_XXX");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM reservas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Reserva eliminada exitosamente. <a href='mostrar.php'>Volver a reservas</a>";
} else {
    echo "Error al eliminar: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
