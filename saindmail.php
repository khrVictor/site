<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

$mail->setForm('info@fls.guru', Вітька дурак);
$mail->addAddress('naprinte1@gmail.com');

$mail->Subject = 'Здарова Атец!';


$body = '<h1>!!!</h1>';
if(trim (!empty($POST['name']))){
    $body.='<p><strong>Ім я:</strong>'.$_POST['name'].'</p>'
}
if(trim (!empty($POST['email']))){
    $body.='<p><strong>E-mail:</strong>'.$_POST['email'].'</p>'
}
if(trim (!empty($POST['message']))){
    $body.='<p><strong>Сообщение:</strong>'.$_POST['message'].'</p>'
}

if(!$mail->send()) {
    $message ='Ошибка'; 
}else {
    $message ='Сообщение отправленно';
}
$responce =['message' => $message];
header('Content-type: application/json');
echo json_encode($responce);
?>


