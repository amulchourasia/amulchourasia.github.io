<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $description = htmlspecialchars($_POST['description']);

    // Recipient email (your email)
    $to = "soniamoirangthem123@gmail.com"; // Replace with your email address

    // Subject of the email
    $subject = "New message from: $name";

    // Message body
    $message = "
    Name: $name\n
    Email: $email\n
    Subject: $subject\n
    Message:\n$description
    ";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again.";
    }
}
?>
