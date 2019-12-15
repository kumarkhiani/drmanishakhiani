<?php

require("/home/shub103/public_html/phpmailer/PHPMailerAutoload.php");

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

	if (isset($_POST['submit']))
        {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile= $_POST['mobile'];		
		$message = $_POST['message'];		
		$requirement = $_POST['requirement'];
		//$address = $_POST['address'];
		
		$to = 'swagram.in@gmail.com';
    	        $subject = "Customer Enquiry for contact";

          	$body = "Hello Sir,\n my name : ".$name."  \n Email  : ".$email."  \n Mobile no : ".$mobile."   \n Requirement : ".$requirement."   \n Message : ".$message."";

               echo $body;

                $mail = new PHPMailer();
                $mail->IsSMTP(); 
		$mail->SMTPDebug = 1; 
		$mail->SMTPAuth = true; 
		//$mail->SMTPSecure = 'tls'; 
		$mail->Host = "mail.shubhann.in:587";
		$mail->Port = 587;
		$mail->Username = "info@shubhann.in";
		$mail->Password = "23asdlkjmwn$54";
		$mail->SetFrom('info@shubhann.in');
		$mail->Subject = $subject;
		$body_content='sending mail';
		$mail->addAddress($to);

		$mail->Body = $body;

		if($mail->Send()) {header("location:index.html");} 
                else {echo "Mailer Error: " . $mail->ErrorInfo;}
        }

?>