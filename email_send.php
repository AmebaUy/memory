<?php
require_once('phpmailer/class.phpmailer.php');
//datos del formulario
$nombre = $_POST['nombre'];
$trabajode = $_POST['trabajode'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$mensaje = $_POST['mensaje'];

$mailBody = '<p>Nombre: '.$nombre.'</p>';
if(isset($_POST['empresa']) && $_POST['empresa'] != ''){
$mailBody .= '<p>Empresa: '.$empresa.'</p>';
}
if(isset($_POST['trabajode']) && $_POST['trabajode'] != ''){
$mailBody .= '<p>Trabajo de: '.$trabajode.'</p>';
}
$mailBody .= '<p>Mensaje: <br><br>'.$mensaje.'</p>';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom($email, $nombre);
//Set an alternative reply-to address
$mail->addReplyTo($email, $nombre);
//Set who the message is to be sent to
$mail->addAddress('novoanpablo@gmail.com', 'Pablo');
//encoding utf-8
$mail->CharSet = 'UTF-8';
//Set the subject line
$mail->Subject = 'Contacto | Opinólogos';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($mailBody);
//Replace the plain text body with one created manually

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    header("Location: index.html?send=not");
} else {
    header("Location: index.html?send=yes");
}



?>