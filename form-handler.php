<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$emil_from = 'creativetell@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "Use Email: $visitor_email.
                \n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'creativetell@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>