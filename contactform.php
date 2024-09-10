<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject =  $_POST['subject'];
$message = $_POST['message'];
$to = $_POST['mubiitoedward@gmail.com'];

$headers = "From :".$name."\r\n" .
"CC: support@bmaxigraphics.com";

$text = "you have received an email from ".$name. "\r\nEmail : ".$email. "\r\n Message :". 
          $message;

          if($email!= Null){
            mail($to, $subject, $text, $headers);
          }
           else
          return;