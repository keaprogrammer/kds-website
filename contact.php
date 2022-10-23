<?php

if (isset($_POST['volunteer-submit'])) {
  $name = $_POST['volunteer-name'];
  $subject = $_POST['volunteer-subject'];
  $mailFrom = $_POST['volunteer-email'];
  $message = $_POST['message'];

  $mailTo = "info@keadigitalsolutions.co.za";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");
}

?>
