<?php
// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

if (isset($_POST['submit'])) {
    // Fetch form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $interests = htmlspecialchars($_POST['interests']);
    $messageContent = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = '<div class="text-red-500">Invalid email format!</div>';
    } else {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();                                         // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';                      // Specify main SMTP server
            $mail->SMTPAuth = true;                                  // Enable SMTP authentication
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;       // Enable TLS encryption
            $mail->Port = 587;                                       // TCP port to connect to

            // Recipient
            $mail->setFrom($email, $name);                           // Sender's email and name
            $mail->addAddress('rupi8803@gmail.com', 'Contact Team');       // Add a recipient (your email)

            // Content
            $mail->isHTML(true);                                     // Set email format to HTML
            $mail->Subject = 'New Contact Form Submission';
            $mail->Body    = "<h3>New Contact Form Submission</h3>
                              <p><strong>Name:</strong> $name</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Phone:</strong> $phone</p>
                              <p><strong>Interests:</strong> $interests</p>
                              <p><strong>Message:</strong> $messageContent</p>";
            $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nInterests: $interests\nMessage: $messageContent";

            // Send email
            if ($mail->send()) {
                $message = '<div class="text-green-500">Thank you! Your message has been sent successfully.</div>';
            } else {
                $message = '<div class="text-red-500">Message could not be sent. Please try again later.</div>';
            }
        } catch (Exception $e) {
            $message = '<div class="text-red-500">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</div>';
        }
    }
}
?>
