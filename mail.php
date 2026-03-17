<?php
$name = htmlspecialchars($_POST["name"] ?? "er gaat wat fout kanker neger" );
$email = htmlspecialchars($_POST["email"] ?? "er gaat wat fout kanker neger" );
$message = htmlspecialchars($_POST["message"] ?? "er gaat wat fout kanker neger" );

$to = "lucas.bussink@student.graafschapcollege.nl"; // zet hier je schoolmail
$subject = "Contact formulier dinges";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: noreply@lucasbussink.gc-webhosting.nl\r\n"; // Zet hier je eigen domein (niet e-mail)
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
  echo "Mailtje gestuurd ouleh";
} else {
  echo "Niet gelukt niffo";
}