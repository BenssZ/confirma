<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $confirmados = $_POST['confirmados'];

    // Validación básica
    if (empty($nombre) || empty($email) || empty($confirmados)) {
        echo "Por favor, complete todos los campos.";
        exit;
    }

    // Dirección de correo a la que se enviará la información
    $destinatario = "ben31_rc@hotmail.com"; // Cambia esto a tu dirección de correo electrónico
    $asunto = "Confirmación de Asistencia a la Boda";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo electrónico: $email\n";
    $mensaje .= "Número de confirmados: $confirmados\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Confirmación enviada con éxito. ¡Gracias!";
    } else {
        echo "Hubo un problema al enviar la confirmación. Inténtalo de nuevo más tarde.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
