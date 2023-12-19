<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer autoloader

// Create a new PHPMailer instance
$mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Your SMTP server
        $mail->Port = 587;                // Port (usually 587 for TLS, 465 for SSL)
        $mail->SMTPSecure = 'tls';        // Enable TLS encryption
        $mail->SMTPAuth = true;           // Enable SMTP authentication
        $mail->Username = 'hello.editinfinite@gmail.com';  // Your SMTP username
        $mail->Password = 'aauo ucir xvia jxrr';  // Your SMTP password
    
        // Sender and recipient
        $mail->setFrom($_POST['email'], $_POST['name']);          
        $mail->addAddress('info@editinfinite.com');
          
        $mail->isHTML(true);                                 
        $mail->Subject = 'Subject';
        $message = '';
        
        $message .= '<div> <b>Hello sir</b></div>';
        $message .= '<div> <b>Name:-</b>'. $_POST['name'].'</div>';
        $message .= '<div> <b>Email:-</b>'.$_POST['email'].'</div>';
        $message .= '<div> <b>Contect no:-</b>'.$_POST['phone'].'</div>';
        $message .= '<div> <b>Ecommerce Platform :-</b>'. $_POST['ecommerceplatform'].'</div>';
        $message .= '<div> <b>Market Places :-</b>'. $_POST['marketplaces'].'</div>';
        $message .= '<div> <b>Number Of  Images :-</b>'. $_POST['numberofimages'].'</div>';
        $message .= '<div> <b>Totle Number Of  Amount :-</b>'. $_POST['total'].'</div>';
        $message .= '<div> <b>Drive link:- </b>' .$_POST['drivelink'].'</div>';
        $message .= '</body></html>';
              
        foreach ($_FILES['files']['name'] as $key => $file_name) {
        $mail->addAttachment($_FILES["files"]["tmp_name"][$key], $_FILES["files"]["name"][$key] );
        }
        $mail->Body = $message;
        
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        header("Location:index.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        die;
    }
 
?>