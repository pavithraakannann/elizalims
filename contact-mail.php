<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log form hit
file_put_contents('log.txt', "Form hit at: " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

// Load config and PHPMailer
require_once 'config.php';
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $designation = htmlspecialchars($_POST['designation']);
    $labname = htmlspecialchars($_POST['labname']);
    $email = htmlspecialchars($_POST['email']);
    $country_code = htmlspecialchars($_POST['country_code']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = htmlspecialchars($_POST['message']);
    $captcha_input = $_POST['captcha_input'];

    // Check captcha
    if (!isset($_SESSION['captcha_value']) || $captcha_input !== $_SESSION['captcha_value']) {
        echo 'Captcha is incorrect.';
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email address.';
        exit;
    }

    try {
        $mail = new PHPMailer(true);

        // SMTP configuration (Gmail)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pavithraakannann@gmail.com';         // Your Gmail
        $mail->Password = 'luycbbizghkcxdap';                   // Gmail app password (not Gmail login password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email setup
        $mail->setFrom('pavithraakannann@gmail.com', 'ElizaLIMS Contact'); // Optional: replace with domain email
        $mail->addAddress('pavithraakannann@gmail.com'); // ✅ Your recipient

        $mail->isHTML(false);
        $mail->Subject = 'ElizaLIMS - Contact Form Submission';

        // Only include mobile if provided
        $mobileLine = '';
        if (!empty($telephone)) {
            $mobileLine = "Mobile: $country_code $telephone\n";
        }

        $mail->Body = "Dear Admin,\n\nPlease find the contact form details:\n\n"
            . "Name: $name\n"
            . "Designation: $designation\n"
            . "Lab Name: $labname\n"
            . "Email: $email\n"
            . $mobileLine
            . "Message: $message\n\n"
            . "Submitted on: " . date('Y-m-d H:i:s');

        $mail->send();
        echo 'success';

    } catch (Exception $e) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
