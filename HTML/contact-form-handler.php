<?php

$errors = "";

$myemail = 'tomomatt9591@gmail.com';

if(empty($_POST['name']) ||

empty($_POST['subject']) ||

empty($_POST['email']) ||

empty($_POST['message']))

{

$errors .= "\n Error: all fields are required";

}

$name = $_POST['name'];

$email_address = $_POST['email'];

$message = $_POST['message'];

if (!preg_match(

"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address))

{

$errors .= "\n Error: Invalid email address";

}

if( empty($errors))

{

$to = $myemail;

$email_subject = "Tourney Games Contact form submission";

$email_body = "You have received a new message. \n ".

"Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message: \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address\n";

$headers .= 'Cc: mareksieczko@icloud.com, tourneygamesweb@gmail.com' . "\r\n";

mail($to,$email_subject,$email_body,$headers);

//redirect to the ‘thank you’ page

header("Location: contact-form-thank-you.html");


}

?>
