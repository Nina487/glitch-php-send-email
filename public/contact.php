<?php

//These 3 lines implement PHPMailer library
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

    //Creating PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Getting destination mail, subject and mail body from index.php form
    $mailTo = $_POST['mailTo'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    //Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER; //To remove log messages replace PHPMailer\PHPMailer\SMTP::DEBUG_SERVER with number: 0               
    $mail->isSMTP();  //Choosing SMTP server for sending messages                                         
    $mail->Host       = 'smtp.gmail.com'; //Host for SMTP messages (gmail)               
    $mail->SMTPAuth   = true; //SMTP needs authentication                                 
    $mail->Username   = 'email'; //Email  you want to send FROM (gmail)             
    $mail->Password   = 'password';  // Low security application password for your google account, if you don't know how to generate it, just message me                           
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; //Encryption      
    $mail->Port       = 587; //port

    //Recipients
    $mail->setFrom('email'); // Your email address also here
    $mail->addAddress('email'); //Email you're sending TO, in this example specified in index.php form

    $mail->isHTML(true); //Enabling HTML tags in email body
    $mail->Subject = $subject; //Email subject from index.php form
    $mail->Body    = $body; //Email body from index.php form

    $mail->send(); //Sending email here
    echo '<span style="color: green">Message has been sent</span>';
} catch (Exception $e) { //If someting went wrong displaying error below
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}