<?php
// Incluir conexión a la base de datos
include 'conexion.php';

$conexion = conexion();

// Verificar si se ha enviado el ID
if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Asegurarse de que el ID es un número entero

    // Iniciar una transacción
    $conexion->begin_transaction();

    try {
        // Preparar la sentencia SQL para eliminar detalles de la venta
        $sentenciaDetalles = "DELETE FROM detalle_ventas WHERE venta_id = ?";
        $stmtDetalles = $conexion->prepare($sentenciaDetalles);
        if ($stmtDetalles === false) {
            throw new Exception('Error en la preparación de la consulta de detalles: ' . $conexion->error);
        }
        $stmtDetalles->bind_param('i', $id);
        $stmtDetalles->execute();
        $stmtDetalles->close();

        // Preparar la sentencia SQL para eliminar la venta
        $sentenciaVenta = "DELETE FROM ventas WHERE id = ?";
        $stmtVenta = $conexion->prepare($sentenciaVenta);
        if ($stmtVenta === false) {
            throw new Exception('Error en la preparación de la consulta de venta: ' . $conexion->error);
        }
        $stmtVenta->bind_param('i', $id);
        $stmtVenta->execute();
        $stmtVenta->close();

        // Si todo está bien, confirmar la transacción
        $conexion->commit();
        header('Location: ventas.php?mensaje=Venta y detalles eliminados correctamente');
    } catch (Exception $e) {
        // Si ocurre un error, revertir la transacción
        $conexion->rollback();
        header('Location: ventas.php?mensaje=Error al eliminar la venta: ' . $e->getMessage());
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    // Si no se proporciona un ID, redirigir a la página de ventas con un mensaje de error
    header('Location: ventas.php?mensaje=ID de venta no proporcionado');
}
?>