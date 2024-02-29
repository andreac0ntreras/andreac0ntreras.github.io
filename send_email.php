<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'andrea.contreras.fernandez90@gmail.com';
    $subject = 'New message from ' . $fullname;
    $body = 'From: ' . $fullname . "\n";
    $body .= 'Email: ' . $email . "\n";
    $body .= 'Message: ' . $message;

    mail($to, $subject, $body);
}
?>
