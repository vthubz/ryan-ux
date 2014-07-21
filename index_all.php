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
    </style>
    <script src="js/modernizr.js"></script>
    <script src="scripts/jquery-min.js"></script>
    <script>
  	 $(document).ready(function(){
  		$('.work').addClass('active');
       if (window.matchMedia("(min-width: 1024px)").matches) {
          //greater than 1024px
          $('.panel a').hover(function(){
            $('span.caption', this).slideDown('fast');
          }, function(){
            $('span.caption', this).slideUp('fast');
          });
      } else {
          //less than 1024px  
      }

  	 });

     

	  </script>
  </head>
  <body class="home"  >
  
    <?php include_once "header.php"; ?>
    <div class="row hello">
      <div class="medium-12 columns" style="text-align:center" >
       
        <h1>Hello</h1>
        <p style="margin:0 auto;max-width:360px;">I'm Ryan, a UX Designer in Washington, DC. <br/>Here's some of my work.</p>
      </div> 
    </div>
  <!--WORK-->
  <?php include_once "work-grid.php"; ?>
  <!--ABOUT-->
  <div style="background:#fff;width:100%;margin:4em 0;padding:4em 0;">
    <div  class="row">
      <div class="medium-12 columns">
        <div style="text-align:center;max-width:560px;margin:0 auto;">
          <h1 style="margin:0;">About Me</h1>
           <img class="profile" src="img/ryanhuberprofile.jpg" style="margin: 1em auto 1.6em auto">
          <p> I'm a fan of clean design, sneakers, dogs, football, and road cycling. Along with full-time UX, I freelance as a designer and front-end developer. 
            Feel free to contact me <a href="contact.php">here</a>, or follow me on <a href="http://www.ryanhuber.tumblr.com">Tumblr</a>, <a href="http://www.twitter.com/ryanhuber2">Twitter</a>, and <a href="http://www.linkedin.com/ryanhuber2">LinkedIn</a>.</p>
        </div>
      </div>
    </div>
  </div>
  <!--RESUME-->
  <div class="row">
    <a id="resume"></a>
      <div class="medium-12 columns">
        <h1 style="text-align:center;">Résumé</h1>
        <h2 class="resumesection" style="border:none">Proficiencies</h2>
      </div>
        <div class="medium-6 columns">
          <div class="employer" style="padding:2em 0">
            <img src="img/logos/design.jpg"/><p>User Experience Design (UX, IA, ID) </p>
          </div>
        </div>
        <div class="medium-6 columns">
          <div class="employer" style="padding:2em 0">
            <img src="img/logos/code.jpg"/><p>Front-End Development (HTML, CSS, JS)</p>
          </div>
        </div>
      <div class="columns medium-12" >  
        <h2 class="resumesection">Employment</h2>
      </div>
      <div class="columns medium-6" style="margin-bottom:1.22rem">
        <div class="employer">
          <img src="img/logos/AKQA.jpg"/>
          <h3 class="employ"><strong>AKQA</strong> | Washington, DC</h3>
          <p>User Experience Designer<br>
          November 2011 - Present</p>
        </div>
      </div>
      <div class="columns medium-6" style="margin-bottom:1.22rem">
          <div class="employer">
             <img src="img/logos/tribalddb.jpg"/>
            <h3 class="employ"><strong>Tribal DDB</strong> | Dallas, TX</h3>
            <p>User Experience Designer<br>
            October 2010 - November 2011
            </p>
          </div>
      </div>
      <div class="columns medium-6" style="margin-bottom:1.22rem">
          <div class="employer">
             <img src="img/logos/sq1.jpg"/>
            <h3 class="employ"><strong>Sq1 Agency</strong> | Dallas, TX</h3>
            <p>Interaction Director<br/>
            August 2009 - October 2010
            </p>
          </div>
      </div>
      <div class="columns medium-6" style="margin-bottom:1.22rem">
          <div class="employer">
             <img src="img/logos/bev.jpg"/>
            <h3 class="employ"><strong>Blacksburg Electronic Village</strong> | Blacksburg, VA</h3>
            <p>Lead Web Designer / Developer<br />
            Fall 2007 - May 2009
            </p>
          </div>
      </div>
      <div class="medium-12 columns">
        <h2 class="resumesection">Education</h2>
      </div>
    </div>
    <div class="row">
      <div class="medium-3 columns">&nbsp;</div>
      <div class="medium-6 columns">
        <div class="employer">
          <img src="img/logos/vt.jpg"/>
          <h3 class="employ"><strong>Virginia Tech</strong> | Blacksburg, VA</h3>
          <p>Bachelor in Fine Arts<br />
          Major: Visual Communication and Design<br />
          Minor: Business</p>
        </div>
      </div>
       <div class="medium-3 columns">&nbsp;</div>
    </div>
    <!--CONTACT-->
    <div style="border-top:1px solid #ccc;width:100%;margin-top:4em;margin-bottom:0;padding:4em 0;">
      <div class="row">
        <a id="contact"></a>
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
    </div>
  <?php include_once "footer.php"; ?>
    
  </body>
</html>
