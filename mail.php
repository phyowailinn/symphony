<?php
  
  // include phpmailer class
  require 'PHPMailer-master/PHPMailerAutoload.php';
  // creates object
  $mail = new PHPMailer(true); 
  
  
  $name   = strip_tags($_POST['name']);
  $email  = strip_tags($_POST['email']);
  $subject= "Sending From Robot.";
  $unit   = strip_tags($_POST['unit']);
   
   
   // HTML email starts here
   
   $message  = "<html><body>";
    
   $message .= "<p style='font-size:20px;'>Good day ".$name.",</p>
   				<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>Unit Type : ".$unit.".</p>
       			<p>Appreciate your interest enquiry on Symphony Suites. <br>
					Kindly click on the download link below FULL floorplans and sitemap.<br><br></p>
		        <a href='https://www.dropbox.com/s/pqwywsf8je0z13x/%5BSymphony%20Suites%5D%20eBrochure_TPN.pdf?dl=0'>Symphony Suites E-brochure</a><br>
				<a href='http://era.blob.core.windows.net/media/Sym392/pdf/41b234a.pdf'>Symphony Suites Site Plan</a><br><br>
				<p>For more information, latest price promotions or schedule sales gallery viewing appointment, kindly contact us at <strong>6844 5845</strong>.<br>
				You will expect satisfactory customer service and latest updates from us, your requests are our main priority.<br><br>

				You will be contacted soonest by our professional sales representative.<br>
				For direct reference, can either call <strong>Hyde @ 8222 3338</strong> or <strong>Marvin @ 9236 0836</strong>.<br><br>

				Thank you.<br><br></p>
				";
    
   $message .= "Warmest Regards,<br>
				Developer Appointed Sales Agency <br>
				<i>“ERA is your number one preferred choice for new launches & luxury projects”</i><br><br>

				<img src='http://thesymphonysuites-official.com/img/emailLogos.png'><br><br>

				<strong>Sales Hotline: 6844 5845</strong><br>
				www.thesymphonysuites-official.com";
   
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
    $mail->Username   ="your_mail_address";  
    $mail->Password   ="your_mail_password";            
    $mail->SetFrom('noreply@gmail.com','Robot');
    $mail->Subject    = $subject;
    $mail->Body    	  = $message;
    $mail->AltBody    = $message;
     
    if($mail->Send())
    {	
    	$return_url = './index.php';
    	header("Location: ".$return_url);
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  
  
?>
