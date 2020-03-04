<?php
$name = $_Post['name'];
$visitor _email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'michaelwilliams11123@gmail.com'

$email_subject = "New form Submission";

$email_body = "User Name: $name.\n".
            "User Email:  $visitor_email.\n".    
           "User Message: $message.\n";


$to = "michaelwilliams11123@gmail.com";

$headers = "from; $email_from \r\n" 

$headers .= "reply-To: $visitor_email \r\n";
    
 mail ($to,$email_subject,$email_body,$headers);

header ("Location: index.html");


?>