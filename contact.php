<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // 👇 Change this to your real email
    $to = "akashaku667@gmail.com"; 
    $subject = "A Square Technologies - Contact Form Message";
    $body = "New message from A Square Technologies:\n\n"
          . "Name: $name\n"
          . "Email: $email\n\n"
          . "Message:\n$message";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
?>
