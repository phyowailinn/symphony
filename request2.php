<?php

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "info@thesymphonysuites-official.com";
    $email_subject = "Interest Form Submitted";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['level']) ||
        !isset($_POST['email']) ||
        !isset($_POST['unit'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $level = $_POST['level']; // required
	$property = $_POST['property']; // required
    $email_from = $_POST['email']; // required
    $unit = $_POST['unit']; // not required
	$comment = $_POST['comment']; // not required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
	$email_message .= "Property: Symphony Suites \n";
    $email_message .= "Interest in Unit Type: ".clean_string($unit)."\n";
    $email_message .= "Level of Interest: ".clean_string($level)."\n";
    $email_message .= "Message: ".clean_string($comment)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
<?php
 $url='thankyou2.php';

    echo '<script>window.location = "'.$url.'";</script>';
    die;
?> 
<?php
 
}
?>