<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Gerekli dosyaları include ediyoruz
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

session_start();
try {
    //SMTP Sunucu Ayarları
    $mail->SMTPDebug = 0;										// DEBUG Kapalı: 0, DEBUG Açık: 2 // Detaylı bilgi için: https://github.com/PHPMailer/PHPMailer/wiki/SMTP-Debugging
    $mail->isSMTP();											// SMTP gönderimi kullan
    $mail->Host       = 'smtp.gmail.com';					// Email sunucu adresi. Genellikle mail.domainadi.com olarak kullanilir. Bu adresi hizmet saglayiciniza sorabilirsiniz
    $mail->SMTPAuth   = true;									// SMTP kullanici dogrulama kullan
    $mail->Username   = 'kelessamet99@gmail.com';				// SMTP sunucuda tanimli email adresi
    $mail->Password   = 'gokbkqpygkqplacm';							// SMTP email sifresi
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;			// SSL icin `PHPMailer::ENCRYPTION_SMTPS` kullanin. SSL olmadan 587 portundan gönderim icin `PHPMailer::ENCRYPTION_STARTTLS` kullanin
    $mail->Port       = 587;									// Eger yukaridaki deger `PHPMailer::ENCRYPTION_SMTPS` ise portu 465 olarak guncelleyin. Yoksa 587 olarak birakin
    $mail->setFrom('kelessamet99@gmail.com', $name." ".$surname); // Gonderen bilgileri yukaridaki $mail->Username ile aynı deger olmali

    //Alici Ayarları
    $mail->addAddress('sametkeles@outlook.com', 'Samet Keles'); // Alıcı bilgileri
    // $mail->addAddress('sametkeles@outlook.com');					// İkinci alıcı bilgileri
    $mail->addReplyTo($email);			// Alıcı'nın emaili yanıtladığında farklı adrese göndermesini istiyorsaniz aktif edin
    //$mail->addCC('CC@domainadi.com');
    //$mail->addBCC('BCC@domainadi.com');

    // Mail Ekleri
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Attachment ekleme
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Opsiyonel isim degistirerek Attachment ekleme

    // İçerik
    $mail->isHTML(true); // Gönderimi HTML türde olsun istiyorsaniz TRUE ayarlayin. Düz yazı (Plain Text) icin FALSE kullanin
	$mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    $alert = array(
        "message" => "SUCCESSFUL!",
        "type" => "primary"
    );
    $_SESSION["alert"] = $alert;
    header("Location:/#fourthPage");

} catch (Exception $e) {
    $alert = array(
        "message" => "Ops! Unsuccessful",
        "type" => "danger"
    );
    $_SESSION["alert"] = $alert;
    header("Location:/#fourthPage");

}