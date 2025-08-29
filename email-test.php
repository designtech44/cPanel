<?php
echo "Testing basic email functionality...<br><br>";

$to = "dean@reliableaerialservice.com";
$subject = "Simple Test Email";
$message = "This is a basic test email to see if mail() function works.";
$headers = "From: dean@reliableaerialservice.com";

echo "Attempting to send email to: $to<br>";
echo "Subject: $subject<br>";
echo "Message: $message<br><br>";

if (mail($to, $subject, $message, $headers)) {
    echo "<strong style='color: green;'>SUCCESS: Email sent successfully!</strong><br>";
} else {
    echo "<strong style='color: red;'>ERROR: Email failed to send!</strong><br>";
}

echo "<br>Mail function exists: " . (function_exists('mail') ? 'YES' : 'NO');
?>