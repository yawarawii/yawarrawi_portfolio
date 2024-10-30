$to = "recipient@example.com"; // Recipient's email
$subject = "Subject"; // Email subject
$message = "Message body"; // Email content
$headers = "From: yawarrawii@gmail.com.com"; // From header

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}
