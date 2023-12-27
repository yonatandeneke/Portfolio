<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "yonatandeneke@gmail.com";
    $subject = "New Contact Form Submission";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html\r\n";

    $mailBody = "Name: $name<br>Email: $email<br>Message: $message";

    mail($to, $subject, $mailBody, $headers);

    echo "Thank you! Your message has been sent.";
} else {
    header("HTTP/1.1 403 Forbidden");
    echo "Access Forbidden";
}
?>
