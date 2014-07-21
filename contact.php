<?php
    /****SET THE MAX CHARS FOR EACH MESSAGE***************/
      
      //it is recommended not to set the max too high, to prevent extremely long messages
      // from stalling your server
      
      $EMAIL_MAX = 2500;
      $SMS_MAX = 120;
    
    /*****************************************************/

    //function for stripping whitespace and some chars
    function cleanUp($str_to_clean, $newlines, $spaces){
    
      //build list of whitespace chars to be removed
      $bad_chars = array('\r', '\t', ';');
    
      //if newlines are false, add that to the list of bad chars
      if(!$newlines){array_push($bad_chars, '\n');}
      
      //if spaces are false, strip them too
      if(!$spaces){array_push($bad_chars, ' ');}
      
      $str_to_clean_a = str_replace($bad_chars, '', $str_to_clean);
      $str_to_clean_b = strip_tags($str_to_clean_a);
      return $str_to_clean_b;
    }
    
    //function to check for valid email address pattern
    function checkEmail($email) {
      if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {return false;}
      return true;
    }
    //function to check for valid url pattern
    function checkURL($url) {
      if(!eregi("^http:\/\/", $url)) {return false;}
      return true;
    }
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ryan Huber - User Experience Designer, Interaction Designer, Information Architect, Washington, D.C. & Maryland</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
      img.profile{border-radius:50%;width:115px;/*box-shadow:0px 1px 1px #ccc*/}
      p a{color:#666;}
      #form_errors{color:#db0000; display:none; text-align:center; padding:20px;max-width:420px;}
      #form_thanks{color:#333; font-weight:bold; text-align:center; padding:20px; border:1px solid #333; display:none; max-width:420px;}
    </style>
    <script src="js/modernizr.js"></script>
    <script src="scripts/jquery-min.js"></script>
    <script>
  	 $(document).ready(function(){
  		$('.contact').addClass('active');
  	 });
    </script>
    <script type="text/javascript">
v_fields = new Array('sender_email','sender_phone','sender_message');alert_on = false;thanks_on = true; thanks_message = "Thanks for the message. I'll get back to you ASAP.";  
  function validateForm(){
    
    //alert(v_fields);
    
    //init errors
    var err = "";
    
    //start checking fields
    for(i=0;i<v_fields.length;i++){
      
      //store the field value
      var _thisfield = eval("document.contact."+v_fields[i]+".value");
      
      //check the field value
      if(v_fields[i] == "sender_name"){
        if(!isAlpha(_thisfield)){ err += "Please enter a valid name\n";}
      }else if(v_fields[i] == "sender_subject"){
        if(!isAlpha(_thisfield)){ err += "Please enter a valid subject\n";}
      }else if(v_fields[i] == "sender_email"){
        if(!isEmail(_thisfield)){ err += "Please enter a valid email address\n";}
      }else if(v_fields[i] == "sender_url"){
        if(!isURL(_thisfield)){ err += "Please enter a valid URL\n";}
      }else if(v_fields[i] == "sender_phone"){
        if(!isPhone(_thisfield)){ err += "Please enter a valid phone number\n";}
      }else if(v_fields[i] == "sender_message"){
        if(!isText(_thisfield)){ err += "Please enter a message\n";}
      }
      
    }//end for
    
    if(err != ""){ 
      if(alert_on){
        alert("The following errors have occurred\n"+err);
      }else{
        showErrors(err);
      }
      
      return false;
    
    }
    
    return true;
  }
  
  //function to show errors in HTML
  function showErrors(str){
    var err = str.replace(/\n/g,"<br />");
    document.getElementById("form_errors").innerHTML = err;
    document.getElementById("form_errors").style.display = "block";
  
  }
  
  //function to show thank you message in HTML
  function showThanks(str){
    var tym = str.replace(/\n/g,"<br />");
    document.getElementById("form_thanks").innerHTML = tym;
    document.getElementById("form_thanks").style.display = "block";
  
  }
  
  function isEmail(str){
  if(str == "") return false;
  var regex = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i
  return regex.test(str);
  }
  
  function isText(str){
    if(str == "") return false;
    return true;
  }
  
  function isURL(str){
    var regex = /[a-zA-Z0-9\.\/:]+/
    return regex.test(str);
  }
  
  // returns true if the number is formatted in the following ways:
  // (000)000-0000, (000) 000-0000, 000-000-0000, 000.000.0000, 000 000 0000, 0000000000
  function isPhone(str){
    var regex = /^\(?[2-9]\d{2}[\)\.-]?\s?\d{3}[\s\.-]?\d{4}$/
    return regex.test(str);
  }
  
  // returns true if the string contains A-Z, a-z or 0-9 or . or # only
  function isAddress(str){
    var regex = /[^a-zA-Z0-9\#\.]/g
    if (regex.test(str)) return true;
    return false;
  }
  
  // returns true if the string is 5 digits
  function isZip(str){
    var regex = /\d{5,}/;
    if(regex.test(str)) return true;
    return false;
  }
  
  // returns true if the string contains A-Z or a-z only
  function isAlpha(str){
    var regex = /[a-zA-Z]/g
    if (regex.test(str)) return true;
    return false;
  }
  
  // returns true if the string contains A-Z or a-z or 0-9 only
  function isAlphaNumeric(str){
    var regex = /[^a-zA-Z0-9]/g
    if (regex.test(str)) return false;
    return true;
  }

</script>

  <?php
  if(isset($_POST["submitForm"])){

    $_name = cleanUp($_POST["sender_name"], false, true);

    $_email = cleanUp($_POST["sender_email"], false, false);

    

    $_message = cleanUp($_POST["sender_message"], true, true);

    

    $_phone = cleanUp($_POST["sender_phone"], false, true);
    
    

    
    $_body = "You have been sent this message from your contact form\n\n";
    
    if($_name){
      $_body .= "NAME: $_name\n\n";
    }
    
    
    
    if($_email){
      $_body .= "EMAIL: $_email\n\n";
    }
    
    
    
    if($_phone){
      $_body .= "PHONE: $_phone\n\n";
    }
    
    
    
    if($_message){
    
      //check length of body, reduce to max chars
      if(strlen($_message) > $EMAIL_MAX){$_message= substr($_message, 0, $EMAIL_MAX);}else{$_message = $_message;}
      if(strlen($_message) > $SMS_MAX){$_message2 = substr($_message, 0, $SMS_MAX);}else{$_message2 = $_message;}
    }
    
    

    //store the recipient(s)
    $_to = array();

    //now get the recipient(s)
    $_to[] = "ryan@ryanux.com"; //note comma for multiple recipients
  
    
    //define the subject
    if(!$_subject){$_subject = "E-Mail from your contact form";}

    
    if(!$_name){$_name = "CONTACT FORM";}
    if(!$_email){$_email = $_name;}
    
    //set the headers
    $_header = "From: $_name < $_email >" . "\r\n" .
    "Reply-To: ".$_email."\r\n" .
    "Super-Simple-Mailer: supersimple.org";
    
    //we can send up to 2 emails (EMAIL and/or SMS)
    
    
    for($i=0;$i<count($_to);$i++){
      
      //get the correct message, based on where it is delivering to
      if(strstr($_to[$i],"teleflip.com")){$_text = $_body.$_message2;}else{$_text = $_body.$_message;}
      
      //send the email(s)
      mail($_to[$i], 'Hubz Design | Contact Form Submission', $_text, $_header);
      
    }
    
    echo "<script type=\"text/javascript\">window.onload = function(){showThanks(thanks_message);}</script>";
  }
  ?>
  
  </head>
  <body>
  
    <?php include_once "header.php"; ?>
      <div class="row">
        <div class="columns medium-12">
          <h1 style="text-align:center;margin-bottom:2rem">Contact</h1>
          <fieldset style="max-width:420px; margin:0 auto;">
            <p id="form_errors"></p>
            <p id="form_thanks"></p>    
            <form name="contact" action="<?=$_SERVER['PHP_SELF']?>" method="post" onSubmit="return validateForm();">
              <div class="label">NAME</div><div class="input"><input type="text" class="txt_input" name="sender_name" /></div>
              <div class="clear"></div>
              <div class="label">EMAIL</div><div class="input"><input type="text" class="txt_input" name="sender_email" /></div>
              <div class="clear"></div>
              <!--<div class="label">PHONE</div><div class="input"><input type="text" class="txt_input" name="sender_phone" /></div>-->
              <div class="clear"></div>
              <div class="label" style="vertical-align:top">MESSAGE</div><div class="input"><textarea cols="20" rows="20" name="sender_message"></textarea></div>
              <div class="clear"></div>
              <input type="submit" class="submit_button link-box" name="submitForm" value="SEND" style="cursor:pointer;"/>
            </form>
          </fieldset>
        </div>
      </div>

    <?php include_once "footer.php"; ?>
    
  </body>
</html>
