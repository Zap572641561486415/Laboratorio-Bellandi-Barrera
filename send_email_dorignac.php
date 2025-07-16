<?php
// Procesar el formulario de contacto de DorignacCorp
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validar campos requeridos
    if (empty($name) || empty($email) || empty($message)) {
        echo "<script>alert('Por favor complete todos los campos requeridos.'); window.history.back();</script>";
        exit;
    }

    $to = "contacto@dorignac-corp.com";
    $subject = "Consulta desde DorignacCorp";
    $email_body = "Se ha recibido una nueva consulta desde DorignacCorp:\n\n";
    $email_body .= "Nombre: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n\n";
    $email_body .= "Mensaje:\n" . $message . "\n";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>alert('¡Gracias! Su mensaje ha sido enviado correctamente.'); window.location.href = 'dorignaccorp.php';</script>";
    } else {
        echo "<script>alert('Lo sentimos, hubo un error al enviar el mensaje. Por favor intente nuevamente.'); window.history.back();</script>";
    }
} else {
    header("Location: dorignaccorp.php");
    exit;
} 