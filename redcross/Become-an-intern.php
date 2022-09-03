<?php
// ini_set( 'display_errors', 1 );
// error_reporting( E_ALL );
error_reporting(E_ERROR | E_PARSE);
$name = $_POST['name'];
$dob = $_POST['dob'];
$call= $_POST['call'];
$qualification= $_POST['qualification'];
$email=$_POST['email'];
$address=$_POST['address'];
$sub="Redcross Kottayam-Become An Intern";
// $to = "redcrosskottayam@gmail.com";  
$to = "ehasalpha@gmail.com";  
$txt ="Name : ". $name . "\r\n dob : " . $dob . "\r\n  contact Number :" . $call ."\r\n  address :" . $address .  "\r\n qualification : . $qualification";

$headers = "From:" . $email;
 
if(mail($to,$sub,$txt,$headers)) {
 

} else {
   
}
require_once "Become-an-intern.html";
?>