<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['enviar'])){
    $mail = new PHPMailer(true);

try {

    #$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'hellem.souza@acessorias.com';                     
    $mail->Password   = 'Ac3ss0r1as.com';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('hellem.souza@acessorias.com', 'Hellem');
    $mail->addAddress('hellem.souza@acessorias.com', 'Joe User');    
    $mail->addAddress('ellen@example.com');               
    $mail->addReplyTo('hellem.souza@acessorias.com', 'Hellem');

    $mail->addAttachment('/var/tmp/file.tar.gz');         
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  

    $mail->isHTML(true);                              
    $mail->Subject = 'Devolução de Livro';

    $envio = "O Livro que havia sido locado foi devolvido com sucesso " . $nome;

    $mail->Body = $envio;

    $mail->send();
    $mail->Body = $envio;
    echo 'E-mial enviado para o Locador!';
} catch (Exception $e) {
    echo "Erro ao enviar e-mail!: {$mail->ErrorInfo}";
}

}