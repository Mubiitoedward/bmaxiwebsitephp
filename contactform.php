<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Set SMTP credentials from environment variables or secure config
    $mail->Username = getenv('SMTP_USERNAME'); // use an environment variable or config file
    $mail->Password = getenv('SMTP_PASSWORD'); // use an environment variable or config file

    // Set the sender address and name
    $mail->setFrom('mubiitoedward6@gmail.com', 'Alq'); // Use your verified Gmail
    $mail->addReplyTo($email, $name); // Add user's email to reply-to

    // Add a recipient
    $mail->addAddress("passionstars2@gmail.com", "Passions");

    // Email subject and body
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    $mail->send();

    // Redirect to a "sent" confirmation page
    header("Location: sent.html");
    exit();
} catch (Exception $e) {
    // Handle any errors here
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
