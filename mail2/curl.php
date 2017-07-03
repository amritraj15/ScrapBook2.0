<?php
 
 
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
 $url = 'https://api.sendgrid.com/';
 $user = 'azure_aa6a9564165bf5dd8a4355282861e7fd@azure.com';
 $pass = 'asdf1234'; 

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'amritraj1510@gmail.com',
      'subject' => 'Message from '.$name.' from the site',
      'html' => $message,
      'text' => $message,
      'from' => $email_address,
   );

 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
 print_r($response);