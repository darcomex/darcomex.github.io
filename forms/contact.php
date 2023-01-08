<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  if(!empty($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $toEmail = "mrsmmellouk@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $message, $mailHeaders)) {
      $mail_msg = "Vos informations de contact ont été reçues avec succés.";
      $type_mail_msg = "success";
    }else{
      $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
      $type_mail_msg = "error";
    }
  }

?>
