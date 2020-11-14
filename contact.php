<?php
//Variable Setting
$name  = $_POST['name'];
$lastname  = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];

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
