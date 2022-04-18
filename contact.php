<?php
	if(isset($_POST['name']))
		$name = $_POST['name'];
	if(isset($_POST['email']))
		$email = $_POST['email'];
	if(isset($_POST['subject']))
		$sub = $_POST['subject'];
	if(isset($_POST['message']))
		$message = $_POST['message'];	

	require 'Mailer.php';
	
	// email setup
	$from = "Red Samurai <redsamurai@domain.net>";
	// email to receive contact from
	$to = "to_email@domain.com";
	$subject = "Someone has contacted you!";
	$content = "<p>Name: ".$name."</p><p>Email: ".$email."</p><p>Subject: ".$sub."</p><p>Message: ".$message."</p>";

	$mailer = new Mailer($from, $to, $subject, $content);
	// send mail
	$mailer->sendMail();
?>