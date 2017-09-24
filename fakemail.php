<?php

require_once('PHPMailer/PHPMailerAutoload.php');
include_once('PHPMailer/class.phpmailer.php');

print_r('█▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀█
█░░╦─╦╔╗╦─╔╗╔╗╔╦╗╔╗░░█
█░░║║║╠─║─║─║║║║║╠─░░█
█░░╚╩╝╚╝╚╝╚╝╚╝╩─╩╚╝░░█
█▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄█' . "\r\n");
print_r('Hey! Welcome to FakeMail Sender, totally developed by codingrichard' . "\r\n");
$mailfrom = readline('Insert FROM address: ');
$confirmfrom = readline('Are you sure? [y/N]: ');
if($confirmfrom != 'N' && $confirmfrom != 'n'){
    $mailto = readline('Insert TO address: ');
    $confirmto = readline('Are you sure? [y/N]: ');
    if($confirmto != 'N' && $confirmto != 'n'){
    $message = readline('Message: ');
    $confirmmess = readline('Are you sure? [y/N]: ');
     if($confirmmess != 'N' && $confirmmess != 'n'){
        $subject = readline('Insert Subject: ');
        $name = readline('Insert name from: ');
        $mail = new PHPMailer();
        include('settings.php');
        $mail->CharSet = 'UTF-8';
        $mail->IsSMTP();
        $mail->addAddress($mailto, "Utente");
        $mail->SetFrom("$mailfrom", "$name");
        $mail->isHTML(true);
        $mail->Subject = "$subject";
        $mail->Body = "$message";
        if(!$mail->send()) 
        {
        die('NOPE. PHP CANNOT SEND');
        } 
        else 
            {
            print_r('OK. MESSAGE SENT');
        }
     }else{
         die('Ok. Stopped.' . "\r\n"); 
     }
    }else{
        die('Ok. Stopped.' . "\r\n"); 
    }
    
}else{
   die('Ok. Stopped.' . "\r\n"); 
}


?>