<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require dirname(__FILE__).'/vendor/autoload.php';    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); 

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ericchiu456@gmail.com";
$mail->Password = "xdumhdneqfsyluam";

$mail->setFrom($email, $name);
$mail->addAddress("ericchiu456@gmail.com", "Eric");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

header("Location: sent.html");