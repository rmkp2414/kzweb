<?php
if( isset($_POST['miniusername']) )
{
	$to = 'mail@kayblezone.lk'; // Replace with your email
	
	$subject = 'Message From Kayble Zone User';
	$message = $_POST['message'] . "\n\n" . 'Regards, ' . $_POST['miniusername'] . '.';
	$headers = 'From: ' . $_POST['miniemail'] . "\r\n" . 'Reply-To: ' . $_POST['miniemail'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
        echo 'Thank you for contacting Kayble Zone.Please wait, you will be redirected to the home page...';
        echo "<script>setTimeout(\"location.href = 'http://www.kayblezone.lk';\",5000);</script>";
	
}
?>