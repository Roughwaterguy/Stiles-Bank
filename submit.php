<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  $to = "s27.jcaldwell@sels.us";
  $subject = "New form submission";
  $body = "Name: " . $name . "\nEmail: " . $email;
  
  if (mail($to, $subject, $body)) {
    echo "Thank you for your submission!";
  } else {
    echo "There was a problem sending your message. Please try again later.";
  }
?>