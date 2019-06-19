<?php
require_once ('src/PHPMailer.php');
require_once ('src/Exception.php');

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> SMTPAuth() = true;
$mail -> SMTPSecure ='ssl';
$mail -> Host='smtp.gmail.com'
$mail -> Port='465';
$mail ->isHTML();
$mail ->Username ='misadventuresbymajed@gmail.com';
$mail->Password ='Sps36unead';
$mail ->SetFrom('majed.ghali@hotmail.com');    
$mail ->Subject = 'Hello World';
$mail ->Body = 'A test email'
$mail ->AddAddress('storm.chaser@hotmail.co.uk');
    
$mail ->Send();
    
?>