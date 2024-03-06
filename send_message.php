<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate data (add more validation as needed)

    // Send email
    $to = "oleslukasz7@gmail.com"; // Replace with the actual recipient email address
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";

    // Mail body
    $mailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully. Thank you!";
    } else {
        echo "Error sending message. Please try again later.";
    }
}
?>