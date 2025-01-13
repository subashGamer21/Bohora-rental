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
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $location = htmlspecialchars($_POST['location']);
    $pickup_date = htmlspecialchars($_POST['pickup_date']);
    $dropoff_date = htmlspecialchars($_POST['dropoff_date']);
    $car_name = htmlspecialchars($_POST['car_name']);

    // Gmail credentials
    $gmailUser = 'subashgiri939@gmail.com'; // Replace with your Gmail address
    $gmailPassword = 'bwso nqdm rlri dpmj'; // Replace with your Gmail app password

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

        // Send email to the customer
        $mail->setFrom($gmailUser, 'Bohora Rental');
        $mail->addAddress($email, $name); // Send to the customer's email address
        $mail->isHTML(true);
        $mail->Subject = 'Booking Confirmation';
        $mail->Body = "
    <h3>Your booking request has been received:</h3>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Car Name:</strong> $car_name</p>  <!-- Car Name Added -->
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Address:</strong> $address</p>
    <p><strong>Pick-up Location:</strong> $location</p>
    <p><strong>Pick-up Date:</strong> $pickup_date</p>
    <p><strong>Drop-off Date:</strong> $dropoff_date</p>
    <p>Thank you for your booking! We will contact you shortly for further details.</p>
";
        $mail->AltBody = "
            Your booking request has been received:
            Name: $name
            Phone: $phone
            Address: $address
            Pick-up Location: $location
            Pick-up Date: $pickup_date
            Drop-off Date: $dropoff_date
            Thank you for your booking! We will contact you shortly for further details.
        ";

        $mail->send();

        // Send email to your Gmail (admin's email)
        $mail->clearAddresses(); // Clear the previous recipient (customer)
        $mail->addAddress($gmailUser, 'Your Company'); // Send to your company email

        $mail->Subject = 'New Booking Request';
        $mail->Body = "
        <h3>You have received a new booking request:</h3>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Car Name:</strong> $car_name</p>  <!-- Car Name Added -->
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Address:</strong> $address</p>
        <p><strong>Pick-up Location:</strong> $location</p>
        <p><strong>Pick-up Date:</strong> $pickup_date</p>
        <p><strong>Drop-off Date:</strong> $dropoff_date</p>
        <p>Please review the details for further action.</p>
    ";
        $mail->AltBody = "
            You have received a new booking request:
            Name: $name
            Email: $email
            Phone: $phone
            Address: $address
            Pick-up Location: $location
            Pick-up Date: $pickup_date
            Drop-off Date: $dropoff_date
            Car name : $car_name
            Please review the details for further action.
        ";

        $mail->send();
        
        header('Location: car-grid.php'); // Redirect back to the form page after submission
        exit();


    } catch (Exception $e) {

        header('Location: car-grid.php'); // Redirect back to the form page
        exit();
    }
} else {
    echo 'Invalid request method.';
}
?>
