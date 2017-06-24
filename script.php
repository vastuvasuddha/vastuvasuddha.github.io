<?php
if( isset($_POST['name']) && isset($_POST['Email']) && isset($_POST['Comment']) ){
	$n = $_POST['name']; // HINT: use preg_replace() to filter the data
	$e = $_POST['Email'];
	$m = nl2br($_POST['Comment']);
	$to = "parth.psp9@gmail.com";	
	$from = $Email;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$name.' <br><b>Email:</b> '.$Email.' <p>'.$Comment.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>