<?php   
        
        $mail->CharSet = 'UTF-8';
        $mail->Host       = "serv.yoursmtphost.com";     //Insert here your SMTP Host 
        $mail->SMTPDebug  = 0;                     
        $mail->SMTPAuth   = true;                  
        $mail->Port       = 25;                     //Insert your SMTP port
        $mail->Username   = "mail@yourmail.com";  //Insert your username
        $mail->Password   = "yourpassword";          //Insert your password

?>