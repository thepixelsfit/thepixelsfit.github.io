<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php 
if(isset($_POST['submit'])) { 
$to = "huittrabel@gmail.com";
$subject = "755North Form"; 
$firstname_field = $_POST['firstname']; 
$lastname_field = $_POST['lastname'];
$email_field = $_POST['email']; 
$phone_field = $_POST['phone'];
$message = $_POST['message']; 

	
$body = "From: $firstname_field\n $lastname_field\n E-Mail: $email_field\n Phone: $phone_field\n Message:\n $message";

	echo "Success! Your message was sent!"; 
mail($to, $subject, $body);
} else { 
echo "Sorry, than didn't work.";
} 
?>




</body>
</html>