<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Change these variables according to your email setup
    $to = "michtobbacaresinc@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    // Send the email
    $mailSuccess = mail($to, $subject, $message, $headers);
    
    if ($mailSuccess) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "This script is not intended to be accessed directly.";
}
?>