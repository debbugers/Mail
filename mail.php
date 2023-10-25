<?php
// Check if the required parameters are set
if (
    isset($_GET['to_mail']) &&
    isset($_GET['from_mail']) &&
    isset($_GET['sub_mail']) &&
    isset($_GET['message_mail'])
) {
    // Sanitize input to prevent email injection and other attacks
    $to_send = filter_var($_GET['to_mail'], FILTER_SANITIZE_EMAIL);
    $from_send = filter_var($_GET['from_mail'], FILTER_SANITIZE_EMAIL);
    $subject_send = filter_var($_GET['sub_mail'], FILTER_SANITIZE_STRING);
    $message_send = filter_var($_GET['message_mail'], FILTER_SANITIZE_STRING);

    // Additional headers
    $headers = "From: $from_send\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to_send, $subject_send, $message_send, $headers)) {
        echo "Message sent successfully...";
    } else {
        echo "Message could not be sent...";
    }
} else {
    echo "Missing required parameters.";
}
?>
