<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = $_POST['name'] ?? 'No name';
    $email = $_POST['email'] ?? 'No email';
    $phone = $_POST['phone'] ?? 'No phone';
    $service = $_POST['service'] ?? 'No service';
    $message = $_POST['message'] ?? 'No message';
    
    // Create professional email
    $to = "dean@reliableaerialservice.com";
    $subject = "New Website Contact: " . $name;
    $headers = "From: dean@reliableaerialservice.com\r\nReply-To: " . $email;
    
    $email_body = "=== NEW CONTACT REQUEST ===\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    $email_body .= "Phone: " . $phone . "\n";
    $email_body .= "Service Interest: " . $service . "\n\n";
    $email_body .= "MESSAGE:\n";
    $email_body .= "----------------------------------------\n";
    $email_body .= $message . "\n";
    $email_body .= "----------------------------------------\n\n";
    $email_body .= "Submitted: " . date('Y-m-d H:i:s') . "\n";
    $email_body .= "From: reliableaerialservice.com";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        header("Location: index.html?success=1");
    } else {
        header("Location: index.html?error=1");
    }
    exit();
}
?>