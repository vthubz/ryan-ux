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
  <body>
  
    <?php include_once "header.php"; ?>
    <div class="row hello">
      <div class="medium-12 columns" style="text-align:center" >
       
        <h1>Hello</h1>
        <p style="margin:0 auto;max-width:360px;">I'm Ryan, a UX Designer in Washington, DC. <br/>Here's some of my work.</p>
      </div> 
    </div>
  
  <?php include_once "work-grid.php"; ?>

  <div  class="row" style="margin-top:4em">

      <div class="medium-12 columns">
        <div style="text-align:center;max-width:560px;margin:0 auto;">
          <h1 style="margin:0">About Me</h1>
           <img class="profile" src="img/ryanhuberprofile.jpg" style="margin: 1em auto 1.6em auto">
          <p> I'm a fan of clean design, sneakers, dogs, football, and road cycling. Along with full-time UX, I freelance as a designer and front-end developer. 
            Feel free to contact me <a href="contact.php">here</a>, or follow me on <a href="http://www.ryanhuber.tumblr.com">Tumblr</a>, <a href="http://www.twitter.com/ryanhuber2">Twitter</a>, and <a href="http://www.linkedin.com/ryanhuber2">LinkedIn</a>.</p>
        </div>
      </div>
    </div>

  <?php include_once "footer.php"; ?>
    
  </body>
</html>
