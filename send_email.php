<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST["user_email"];
    $message = $_POST["contact-message"];

    // Send email
    $to = "nathaliaserranoa@hotmail.com";
    $subject = "New Message from Website";
    $headers = "From: $user_email";

    mail($to, $subject, $message, $headers);

    // Display a pop-up message
    echo "<script>alert('Thank you for your message!');</script>";
}
?>

