<?php
// Email settings


  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  $to = "lucasbussink16@gmail.com"; // Replace with your email
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: noreply@lucasbussink.gc-webhosting.nl\r\n"; 
  $headers .= "Reply-To: $email\r\n";

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email.";
  }

