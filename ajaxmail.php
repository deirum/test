<?php
$un=$_POST['username'];
$em=$_POST['useremail'];
$msg=$_POST['mesg'];
$sendto='80291240882@mail.ru';
$subject  = "Вам новое письмо от ".' '.$un;
if(trim($un)!="" && trim($msg)!="" && trim($em)!="")
{
	if(filter_var($em, FILTER_VALIDATE_EMAIL))
	{
		$message="Новое письмо от<p>".$un." с почты ".$em." и текстом:</p><p> ".$msg."</p>";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <viki.pro>' . "\r\n";

		if(mail($sendto,$subject,$message,$headers ))
		{
		echo '1#<p style="color:green;">Ваш запрос успешно отправлен! Спасибо :)</p>';
		}
		else
		{
		echo '2#<p style="color:red;">Попробуйте еще раз.</p>';
		}
	}
	else
		echo '2#<p style="color:red">Введите корректный емейл!</p>';
}
else
{
echo '2#<p style="color:red">Пожалуйста, заполните все поля.</p>';
}?>ч