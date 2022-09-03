<?php
error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
    //   
		$to='redcrosskottayam@gmail.com';
		$to='info@redcrosskottayam.org';
		$subject='RedCross Kottayam';
        $txt ="Name : ". $name . "\r\n email : " . $email . "\r\n  phone :" . $phone . "\r\n  msg :" . $msg;
		$headers="From: ".$email;

		if(mail($to,$subject,$txt,$headers)){
			echo "<h1>Sent Successfully! Thank you ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}

require_once "contact.html";
?>