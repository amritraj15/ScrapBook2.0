<?php
error_reporting(0);
if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	if(isset($_POST['phone']))
	{
		$phone = $_POST['phone'];
	}
	else
	{
		$phone = "Not provided";
	}
	if(!empty($name)&&!empty($email)&&!empty($message))
	{
		require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		$mail->isSMTP();                                  
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;              
		$mail->Username = 'rajamrit1510@gmail.com';
		$mail->Password = 'ASDF1234';
		$mail->SMTPSecure = 'tls';                 
		$mail->Port = 587;          

		$mail->setFrom($email, $name);
		$mail->addAddress('amritraj1510@gmail.com', 'Amrit Raj');
		$mail->isHTML(true); 

		$mail->Subject = "Contact feedback for amritraj.azurewebsites.in by $name ($email)";
		$mail->Body    = "<b>Name: </b>$name<br><b>Email: </b><i>$email</i><br><b>Phone: </b>$phone<br><b>Message: </b><br>$message";
		$mail->AltBody = "The feedback is sent by $name ($email). The phone number is - $phone. The message is $message";

		if($mail->send())
		{
			echo "<script>
                        setTimeout(function() {
                                swal({
                                        title: 'Thank you $name!',
                                        text: 'I will reach out to you soon.',
					type: 'success'
                                }, function() {
                        window.location = '../index.html';
                        });
                        }, 1000);
                        </script>";
		}
		else
		{
			echo "<script>
    			setTimeout(function() {
        			swal({
            				title: 'Sorry $name!',
            				text: 'Network error. Please try again later.',
            				imageUrl: '../img/error.jpg'
        			}, function() {
            		window.location = '../index.html';
        		});
    			}, 1000);
			</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="../css/sweetalert.css" rel="stylesheet">
	<script src="../js/sweetalert-dev.js"></script>
</head>
</html>
