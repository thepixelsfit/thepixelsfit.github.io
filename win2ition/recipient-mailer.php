<?php 
	$to = "thepixelshost@gmail.com";
	$subject = "Recipient Form"; 
	$firstname_field = $_POST['firstname']; 
	$lastname_field = $_POST['lastname'];
	$email_field = $_POST['email']; 
	$phone_field = $_POST['phone'];
	$message = $_POST['message']; 

	$body = "From: $firstname_field\n $lastname_field\n E-Mail: $email_field\n Phone: $phone_field\n Message:\n $message";
	echo "SUCCESS"; 
	mail($to, $subject, $body);
?>