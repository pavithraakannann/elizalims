<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Simple mail test
$to = 'pavithraakannann@gmail.com';
$subject = 'Test Email from Server';
$message = 'This is a test email from your server.';
$headers = 'From: webmaster@elizalims.com' . "\r\n" .
    'Reply-To: webmaster@elizalims.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Try to send email
if (mail($to, $subject, $message, $headers)) {
    echo "Test email sent successfully to $to";
} else {
    echo "Failed to send test email. Error: " . print_r(error_get_last(), true);
}

// Check PHP mail configuration
phpinfo(INFO_MODULES);
