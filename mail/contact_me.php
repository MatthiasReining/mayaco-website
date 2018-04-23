

<?php
// Check for empty fields

if(empty($_POST['name'])                ||
   empty($_POST['email'])               ||
//   empty($_POST['phone'])             ||
   empty($_POST['message'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
        echo "No arguments Provided!";
        return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$from_add = "noreply@mayaco.de";
$to_add = "johanna@mayaco.de"; //<-- put your yahoo/gmail email address here


$subject = "Mayaco Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";


$headers = "From: $from_add \r\n";
$headers .= "Reply-To: $from_add \r\n";
$headers .= "Return-Path: $from_add\r\n";
$headers .= "X-Mailer: PHP \r\n";


mail($to_add,$subject,$body,$headers);
return true;
?>
