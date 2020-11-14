<?php
//Variable Setting
$name  = $_REQUEST['name'];
$lastname  = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

#check input fields
if (empty($name) || empty($lastname) || empty($email) || empty($message))
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