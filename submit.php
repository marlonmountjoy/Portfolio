<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // Validate input
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill in all required fields.";
    exit;
  }

  // Compose email message
  $to = 'marlonmountjoy@gmail.com';
  $subject = 'New message from website contact form';
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo "Thank you for your message. We will get back to you soon.";
  } else {
    echo "Sorry, an error occurred while sending your message. Please try again later.";
  }
}
?>
