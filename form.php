<?php
	$User_name = $_POST['name'];
	$User_email = $_POST['email'];
	$recipe  = $_POST['recipe'];
	$message = $_POST['message'];

	$email_from = 'biancak13@hotmail.com'

	$email_subject = "Subject: $recipe. \n"

	$email_body = "User name: $User_name.\n".
					"User email: $User_email.\n".
					"User Message: $message.\n";

	$to = "feedbackuvt@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-to: $User_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: feedback.html");
?>
