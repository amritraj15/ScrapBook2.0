<?php

require_once('./vendor/autoload.php');
use Postmark\PostmarkClient;

// Example request
$client = new PostmarkClient("664bb426-d53c-4abc-a480-d3c4864ec686");


if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Make a request

$sendResult = $client->sendEmailWithTemplate(
  "amritraj@acm.org",
  $email_address, 
  603923,
  [
  "product_name" => "amritraj.azurewebsites.com",
  "name" => $name,
  "sender_name" => "Amrit Raj",
  "product_address_line1" => "amritraj@acm.org",
  "product_address_line2" => "amritraj1510@gmail.com",
  "action_url" => "action_url_Value",
  "username" => $name,
]);

// Make a request
$sendResult = $client->sendEmailWithTemplate(
  "amritraj@acm.org",
  "amritraj1510@gmail.com", 
  603702,
  [
  "product_name" => "amritraj.azurewebsites.com",
  "name" => $name,
  "email" => $email_address,
  "phone" => $phone,
  "message" => $message,
  "action_url" => "action_url_Value",
  "username" => "username_Value",
  "sender_name" => $name,
  "product_address_line1" => "amritraj@acm.org",
  "product_address_line2" => "amritraj1510@gmail.com",
]);

return true;
?>


