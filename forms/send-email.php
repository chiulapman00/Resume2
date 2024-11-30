<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'assets/vendor/phpmailer/src/Exception.php';
require 'assets/vendor/phpmailer/src/PHPMailer.php';
require 'assets/vendor/phpmailer/src/SMTP.php';



$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];





$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
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