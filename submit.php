<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $email = $_POST['oth'];
  
  $to = "s27.jcaldwell@sels.us";
  $subject = "New form submission";
  $body = "Name: " . $name . "\nEmail: " . $email;
  
  if (mail($to, $subject, $body)) {
    echo "There was an issue Please try again";
  } else {
    echo "Please try again later.";
  }
?>