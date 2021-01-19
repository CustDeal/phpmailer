<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance of PHPMailer class
$mail = new PHPMailer;

// SMTP configuration
$mail->isSMTP();                    // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;             // Enable SMTP authentication
$mail->Username = 'user@gmail.com'; // SMTP username
$mail->Password = '*****';          // SMTP password
$mail->SMTPSecure = 'tls';          // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                  // TCP port to connect to

// Sender info
$mail->setFrom('sender@example.com', 'SenderName');
//$mail->addReplyTo('reply@example.com', 'SenderName');

// Add a recipient
$mail->addAddress('recipient@example.com');

// Add cc or bcc 
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Add attachments
$mail->addAttachment('files/custdeal.pdf');

// Email subject
$mail->Subject = 'Send Email via SMTP using PHPMailer';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '
    <h2>Send HTML Email using SMTP Server in PHP</h2>
    <p>It is a test email by CustDeal, sent via SMTP server with PHPMailer using PHP.</p>
    <p>Read the tutorial and download this script from <a href="https://www.custdeal.com/">CustDeal</a>.</p>';
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
}else{
    echo 'Message has been sent.';
}