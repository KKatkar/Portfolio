<?php
 
  $receiving_email_address = 'k.katkar@ufl.edu';

	$name =$_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['Message'];
   
  $headers = "From: $receiving_email_address \r\n";
  $headers .= "Reply to: $visitor_email \r\n";
  mail($receiving_email_address, $subject, $message, $headers);
?>
