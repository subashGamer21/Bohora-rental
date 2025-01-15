<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Start session to store messages
session_start();

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Gmail credentials
    $gmailUser = 'subashgiri939@gmail.com'; // Replace with your Gmail address
    $gmailPassword = ''; // Replace with your Gmail app password

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $gmailUser;
        $mail->Password = $gmailPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Send email to the customer (thank you message)
        $mail->setFrom($gmailUser, 'Bohora Car Rental');
        $mail->addAddress($email, $name); // Send to the customer's email address
        $mail->isHTML(true);
        $mail->Subject = 'Thanks for Contacting Us!';
        $mail->Body = "
            <h3>Thank you for contacting Bohora Car Rental:</h3>
            <p>Dear $name,</p>
            <p>We have received your contact form submission, and our team will get back to you as soon as possible.</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
            <p><strong>Phone:</strong> $phone</p>
            <p>Thank you for reaching out!</p>
        ";
        $mail->AltBody = "
            Thank you for contacting Bohora Car Rental:
            Dear $name,
            We have received your contact form submission, and our team will get back to you as soon as possible.
            Subject: $subject
            Message: $message
            Phone: $phone
            Thank you for reaching out!
        ";

        $mail->send();

        // Send email to your Gmail (admin's email)
        $mail->clearAddresses(); // Clear the previous recipient (customer)
        $mail->addAddress($gmailUser, 'Bohora Car Rental'); // Send to your company email

        $mail->Subject = 'New Contact Request';
        $mail->Body = "
            <h3>You have received a new contact request:</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong> $message</p>
            <p>Please review the details for further action.</p>
        ";
        $mail->AltBody = "
            You have received a new contact request:
            Name: $name
            Email: $email
            Phone: $phone
            Subject: $subject
            Message: $message
            Please review the details for further action.
        ";

        $mail->send();

        // Redirect to a thank you page or your contact page
        exit();

    } catch (Exception $e) {
        // Redirect to an error page if something goes wrong
        exit();
    }
} else {
    echo 'Invalid request method.';
}
?>
