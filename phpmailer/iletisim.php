
<?php

	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username = "sametkeles421@gmail.com";
	$mail->Password = "slqdekycegbumyqu";
	$mail->From = "sametkeles421@gmail.com";
	$mail->Fromname = "Samet";
	$mail->AddAddress("sametkeles421@gmail.com","Mail gönderimi");
	$mail->AddReplyTo('sametkeles421@gmail.com', 'Reply to name');
	$mail->Subject ="php mail calistirma";
	$mail->Body = "merhaba php mail";
	$mail->CharSet = "UTF-8";
	$mail->SetLanguage( 'en', 'PHPMailer_5.2.0/language/' );

	if($mail->Send())
	{
		echo "gonderildi";
	}
	
	 else {
		echo $mail->ErrorInfo;
	}

?>
