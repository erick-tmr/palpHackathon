<?php
require_once "PHPMailerAutoload.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$message = $_POST['mensagem'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAth = true;
$mail->Username = 'ericktm93@gmail.com';
$mail->Password = '753951lloh';

$mail->setFrom('ericktm93@gmail.com', 'Contato Palp');
$mail->addAddress('ericktm93@gmail.com');
$mail->Subject = 'Email de contato do Palp';
$mail->msgHTML('<html>de: {$nome}<br>email: {$email}<br>Mensagem: {$message}</html>');
$mail->AltBody = 'de: {$nome}\nemail: {$email}\nmensagem: {$message}';

if($mail->send()){
  header('Location: sucesso.html');
}else{
  header('Location: contato.html');
}