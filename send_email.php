<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verify reCAPTCHA
    $recaptcha_secret = "6Ld-lForAAAAAInYLBmqas2BB5jhY1W2huj0BS__";
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $response_data = json_decode($verify_response);

    // Check if the score is above 0.5 (you can adjust this threshold)
    if (!$response_data->success || $response_data->score < 0.5) {
        echo "<script>
            alert('Lo sentimos, no pudimos verificar que no eres un robot. Por favor intente nuevamente.');
            window.history.back();
        </script>";
        exit;
    }

    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($service) || empty($message)) {
        echo "<script>
            alert('Por favor complete todos los campos requeridos.');
            window.history.back();
        </script>";
        exit;
    }

    // Set email headers
    $to = "contacto@lbybsrl.com";
    $subject = "Nueva solicitud de cita - " . $service;
    
    // Prepare email body
    $email_body = "Se ha recibido una nueva solicitud de cita:\n\n";
    $email_body .= "Nombre: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Teléfono: " . $phone . "\n";
    $email_body .= "Servicio solicitado: " . $service . "\n\n";
    $email_body .= "Mensaje:\n" . $message . "\n";

    // Set headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<script>
            alert('¡Gracias! Su mensaje ha sido enviado correctamente.');
            window.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('Lo sentimos, hubo un error al enviar el mensaje. Por favor intente nuevamente.');
            window.history.back();
        </script>";
    }
} else {
    // If not a POST request, redirect to home page
    header("Location: index.php");
    exit;
}
?> 