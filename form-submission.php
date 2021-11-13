<?php
if(!isset($_POST['submit'])) {
    echo "error; please submit";
}

/* php 'getters' */
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

/* validation */
if(empty($name) || empty($visitor_email) || empty($message)) {
    echo "Missing items.  Please review.";
    exit;
}

/* appearance */
$email_from = 'adaledehazz@Gmail.com';
$email_subject = "New Form Submission";
$email_body = "New Message, recipient:  $name \n". "Email address:  $visitor_email \n".

    $to = "adaledehazz@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

/* send email */
mail($to,$email_subject,$email_body,$headers);
?>


/*
https://html.form.guide/email-form/html-email-form/
php docs:  https://www.php.net/manual/en/function.isset.php
NOTE:  some email servers will reject a visitor email
if it is not your own, in assumption of impersonation
thus, 'from' and 'to' = your email
*/