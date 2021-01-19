# phpmailer
Send HTML Email via SMTP Server PHPMailer Library

The easiest way to send email in PHP with SMTP is to use the PHPMailer library. PHPMailer provides an ability to send an email via SMTP server using PHP. Various configuration options of the PHPMailer library allow you to configure and customize the email sending functionality as per your needs. You can send a text or HTML email with single or multiple attachments using PHPMailer. In this tutorial, we will show you how to send HTML email with SMTP in PHP using PHPMailer.

In the example script, we will integrate PHPMailer in PHP and send SMTP mail using PHPMailer library. Use the following example code to send HTML email with attachment using PHP.

#Send HTML Email via SMTP Server
PHPMailer Library:
We will the PHPMailer to send email via SMTP server. So, include the PHPMailer library files and initialize the PHPMailer object.

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 
 
// Create an instance of PHPMailer class 
$mail = new PHPMailer;
Note that: You don’t need to download PHPMailer library separately. All the required PHPMailer library files are included in the source code and you can install PHPMailer without composer in PHP.

SMTP Configuration:
Specify the SMTP server host ($mail->Host), username ($mail->Username), password ($mail->Password), and port ($mail->Port) as per your SMTP server credentials.

// SMTP configuration
$mail->isSMTP();
$mail->Host     = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'user@example.com';
$mail->Password = '******';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
Configure Email:
Specify some basic email settings (like, sender email & name, recipient email, subject, message, etc). Set isHTML() to TRUE for sending email as HTML format.

// Sender info 
$mail->setFrom('sender@example.com', 'SenderName'); 
$mail->addReplyTo('reply@example.com', 'SenderName'); 
 
// Add a recipient 
$mail->addAddress('recipient@example.com'); 
 
// Add cc or bcc  
$mail->addCC('cc@example.com'); 
$mail->addBCC('bcc@example.com'); 
 
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

#Send HTML Email with Attachments
Use addAttachment() method of PHPMailer class to add an attachment to the email. You can attach multiple attachments to the email by adding addAttachment() method multiple times.

// Add attachments
$mail->addAttachment('files/custdeal.pdf');
$mail->addAttachment('files/custdeal.docx');
$mail->addAttachment('images/custdeal.png', 'new-name.png'); //set new name
Send Email to Multiple Recipients
Add addAddress() method multiple times for sending email to the multiple recipients.

// Add multiple recipients
$mail->addAddress('john.doe@gmail.com', 'John Doe');
$mail->addAddress('mark@example.com'); // name is optional

#Are you want to get implementation help, or modify or enhance the functionality of this script? Submit Paid Service Request https://www.custdeal.com/contact
