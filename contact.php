<?php
if ( $_SERVER["REQUEST_METHOD"]=="POST"){
		$name=trim(filter_input(INPUT_POST,"name", FILTER_SANITIZE_STRING));
		$Last_name=trim($_POST["Last_name"]);
		$Email= trim($_POST["email"]);
		$Phone=trim($_POST["phone"]);
		$country= trim($_POST["country"]);
		$Message= trim($_POST["message"]);

	if ($name== "" || $Email== "" || $Message == ""){
	echo "Please enter the required data: name";
	exit;
		}
		echo "<pre>";
		$email_inquiry= " ";
		$email_inquiry.= "Name" .$name. "\n";
		$email_inquiry.= "Last Name" .$Last_name ."\n";
		$email_inquiry.= "Email". $Email. "\n";
		$email_inquiry.= "Phone". $Phone. "\n";
		$email_inquiry.= "Country". $country. "\n";
		$email_inquiry.= "Inquiry".$Message ."\n";
		echo $email_inquiry;
		echo "</pre>";
		// to send email.

		//Redirect
		header("location:Contact.php?status=thanks");}
$pageTitle= "Contact Us";

include ("inc/Header.php");?>
