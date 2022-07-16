<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$dob = $_POST['dob'];
$phone= $_POST['phone'];
$qualification= $_POST['qualification'];
$email=$_POST['email'];
$address=$_POST['address'];
$sub="Redcross Kottayam-Become An Intern";
$to = "redcrosskottayam@gmail.com";  

$txt ="Name : ". $name . "\r\n dob : " . $dob . "\r\n  phone :" . $phone ."\r\n  address :" . $address .  "\r\n qualification : . $qualification";

$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {
 
echo "<h1>Sent Successfully! Thank you ".$name.", We will contact you shortly!</h1>";
} else {
    echo "The email message was not sent.";
}
require_once "Become-an-intern.html";
?>