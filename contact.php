<?php
//Variable Setting
$name  = $_REQUEST['name'];
$last  = $_REQUEST['last'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

#check input fields
if (empty($name) || empty($last) || empty($email) || empty($phone) || empty($message))
{
	echo "Please fill all the fields";
}

else
{
	mail("manojnath382@gmail.com", "Bhojan Tatva", $message, "From: $name < $email>");
	echo "<script type='text/javascript'>alert('your message sent successfully');
	window.history.log(-1);
	</script>";
}	