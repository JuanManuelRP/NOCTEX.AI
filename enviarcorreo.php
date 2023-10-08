<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "kpareja41@gmail.com"; // Cambia esto por la dirección de correo a la que deseas enviar el mensaje.
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $budget = $_POST["budget"];
    $asunto = "Mensaje desde formulario de contacto";

    $cuerpoMensaje = "Nombre: $name\n";
    $cuerpoMensaje .= "Correo: $email\n";
    $cuerpoMensaje .= "Presupuesto: $budget\n";
    $cuerpoMensaje .= "Mensaje:\n $message";

    // Puedes agregar más encabezados aquí si es necesario, como "From:" o "Reply-To:"
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";

    // Intenta enviar el correo
    if (mail($para, $asunto, $cuerpoMensaje, $headers)) {
        echo "El mensaje ha sido enviado correctamente.";
        header("Location: confirmacion.html"); 
    exit; 
    } else {
        echo "Hubo un problema al enviar el mensaje.";
    }
}
?>
