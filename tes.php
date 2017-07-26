<?php
  
  // include phpmailer class
  require_once 'mailer/class.phpmailer.php';
  // creates object
  $mail = new PHPMailer(true); 
  
  if(isset($_POST['btn_send']))
  {
   $name  = strip_tags($_POST['name']);
   $email      = strip_tags($_POST['email']);
   $subject    = "Sending HTML eMail using PHPMailer.";
   $text_message    = "Hello $full_name, <br /><br /> This is HTML eMail Sent using PHPMailer. isn't it cool to send HTML email rather than plain text, it helps to improve your email marketing.";      
   
   
   // HTML email starts here
   
   $message  = "<html><body>";
   
   $message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
   $message .= "<tr><td>";
   
   $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
   $message .= "<thead>
      <tr height='80'>
       <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Coding Cage</th>
      </tr>
      </thead>";
    
   $message .= "<tbody>
      <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/PDO' style='color:#fff; text-decoration:none;'>PDO</a></td>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/jQuery' style='color:#fff; text-decoration:none;'>jQuery</a></td>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/PHP OOP' style='color:#fff; text-decoration:none;' >PHP OOP</a></td>
       <td style='background-color:#00a2d1; text-align:center;'><a href='http://www.codingcage.com/search/label/MySQLi' style='color:#fff; text-decoration:none;' >MySQLi</a></td>
      </tr>
      
      <tr>
       <td colspan='4' style='padding:15px;'>
        <p style='font-size:20px;'>Hi' ".$full_name.",</p>
        <hr />
        <p style='font-size:25px;'>Sending HTML eMail using PHPMailer</p>
        <img src='https://4.bp.blogspot.com/-rt_1MYMOzTs/VrXIUlYgaqI/AAAAAAAAAaI/c0zaPtl060I/s1600/Image-Upload-Insert-Update-Delete-PHP-MySQL.png' alt='Sending HTML eMail using PHPMailer in PHP' title='Sending HTML eMail using PHPMailer in PHP' style='height:auto; width:100%; max-width:100%;' />
        <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>".$text_message.".</p>
       </td>
      </tr>
      
      <tr height='80'>
       <td colspan='4' align='center' style='background-color:#f5f5f5; border-top:dashed #00a2d1 2px; font-size:24px; '>
       <label>
       Coding Cage On : 
       <a href='https://facebook.com/CodingCage' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-facebook-m.png' /></a>
       <a href='https://twitter.com/CodingCage' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-twitter-m.png' /></a>
       <a href='https://plus.google.com/+PradeepKhodked' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-googleplus-m.png' /></a>
       <a href='https://feeds.feedburner.com/cleartutorials' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-rss-m.png' /></a>
       </label>
       </td>
      </tr>
      
      </tbody>";
    
   $message .= "</table>";
   
   $message .= "</td></tr>";
   $message .= "</table>";
   
   $message .= "</body></html>";
   
   // HTML email ends here
   
   try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port       = 465;             
    $mail->AddAddress($email);
    $mail->Username   ="indepentdent.89@gmail.com";  
                         $mail->Password   ="phyowailinn90";            
                         $mail->SetFrom('indepentdent.89@gmail.com','Coding Cage');
                         $mail->AddReplyTo("your_gmail_id@gmail.com","Coding Cage");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {
     
     $msg = "<div class='alert alert-success'>
       Hi,<br /> ".$name." mail was successfully sent to ".$email." go and check, cheers :)
       </div>";
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  } 
  
?>
