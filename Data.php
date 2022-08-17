 <?php

 // $to_email = "ronakkotiya81@gmail.com";
 // $subject = "Simple Email Test via PHP";
 // $body = "Hi, This is test email send by PHP Script";
 //  $headers = "From: sender email";
$to_email=$_POST["email"];
$subject="Message";
$body=$_POST["data"];
$headers="Senders Email";
$shifts=$_POST["shift"];
// $pt_length=strlen($body);
?>
<?php
  // echo $to_email.'<br>';
  // echo $body.'<br>';
  // echo $shifts.'<br>';
 if(isset($to_email)&&isset($subject)&&isset($body)&&isset($shifts))
 {
   if (mail($to_email, $subject, $body,$headers))
   {
    ?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Thank you</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      </head>
      <body>
        <div class="jumbotron text-center">
          <h1 style="color:grey;">Your Email has been Successfully sent to <h2 ><?php echo $to_email ?></h2>.</h1>
          <p>😀Thank you.😀</p>
        </div>
      </body>
    </html>

  <?php
   }
   else
   {?>
     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title>Sorry</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
       </head>
       <body>
         <div class="jumbotron text-center">
           <h1 style="color:grey;">Invalid Email,Sending failed... </h1>
           <p>Try again!!</p>
         </div>
       </body>
     </html>
   <?php
   }
 }
 else
 {
  ?>
   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <meta charset="utf-8">
       <title>Incomplete Fields</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     </head>
     <body>
       <div class="jumbotron text-center">
         <h1 style="color:grey;">You have not filled all the fields.</h1>
         <p>Try again!!</p>
       </div>
     </body>
   </html>
 <?php
 }
 ?>
