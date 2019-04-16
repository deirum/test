<?php
	// Формирование заголовка письма
$sendto  = "steam.azar@mail.ru"; // почта, на которую будет приходить письмо
$subject  = "Тестовое письмо от ".' '.$username;
$un=$_POST['username'];
$em=$_POST['useremail'];
$msg=$_POST['mesg'];

		$message="Hi Admin..<p>".$un." ".$em."</p><p>Query is : ".$msg."</p>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <support@himanshusofttech.com>' . "\r\n";
// отправка сообщения
		if(mail($sendto,$subject,$message,$headers ))
		{
		echo '1#<p style="color:green;">Mail has been sent successfully.</p>';
		}
		else
		{
		echo '2#<p style="color:red;">Please, Try Again.</p>';
		}
?>