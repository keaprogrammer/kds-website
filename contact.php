<?php

if (!empty($_POST['Submit'])) {
  $name = $_POST['volunteer-name'];
  $subject = $_POST['volunteer-subject'];
  $mailFrom = $_POST['volunteer-email'];
  $message = $_POST['volunteer-message'];
  $mailTo = "info@keadigitalsolutions.co.za";

  $headers = "Name: ". $name .
  "\r\n Email: " . $mailFrom .
  "\r\n Subject: " . $subject .
  "\r\n message: " . $message . "\r\n";

  if(mail($mailTo, $name, $headers)){
    $message = "Your information is Received Successfully."
  }

}

?>
