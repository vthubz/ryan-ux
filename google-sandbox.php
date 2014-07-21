<!doctype html>
<html class="no-js" lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ryan Huber - User Experience Designer, Interaction Designer, Information Architect, Washington, D.C. & Maryland</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/modernizr.js"></script>
    <script src="scripts/jquery-min.js"></script>
    <script>
  	 $(document).ready(function(){
  		$('.work').addClass('active');
      $('.google-sandbox').hide();
      

      $('.scrollydown').hover(function(){
        $('.scrolly img').css('margin-top', '-2482px');
      }, function(){ 
        $('.scrolly img').css('margin-top', '0');
      });
      $('.scrollyup').hover(function(){
        $('.scrolly img').css('margin-top', '0');
      }, function(){ 
        $('.scrolly img').css('margin-top', '-2482px');
      });

     


      
  	 });
      function goBack() {
    window.history.back()
}
	  </script>
    <style>
    .scrollyup, .scrollydown{height:200px;width:100%;}
    .scrollyup{position:absolute;top:0;cursor:n-resize;}
    .scrollydown{position:absolute;top:200px;cursor:s-resize;}
    h2{text-align:center;}
    </style>
  </head>
  <body class="">
    <!--<div style="background:#1e616a">-->
    <div style="background:#eee">
      <?php include_once "header.php"; ?>
      <div class="work-bg work-bg-sandbox" style="overflow:hidden">
        <div class="row">
          <div class="medium-12 columns" style="text-align:center" >
            <h2 style="margin-bottom:2rem">Google Creative Sandbox</h2>
            <img src="img/pieces/google-sandbox/front-2.png" class="hero-sandbox"/>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="medium-12 columns" style="text-align:center" >
        <div class="description">
            <h2>Concept</h2>
            <p>Our goal was to fuel creativity among Google’s Agency Partners 
              by creating an awe-inspiring platform to showcase the awesome innovations in digital media. Visitors can view, rate, and comment on projects uploaded from across the industry elite.  </p>
        </div>
      </div> 
    </div>
    
    <div class="row">
      <div class="medium-12 columns" style="text-align:center" >
        <div class="description" style="border-top:1px solid #ccc;">
            <h2>Process</h2>
            <p>This project went through many rounds of concepting, exploring powerful technology, like web GL. 
              After settling on a concept, we produced annotated wireframes to communicate the user experience. 
              The team explored specific animation and interactions by building and refining a prototype. The desktop experience was coupled with a mobile optimized site.
            </p>
        </div>
      </div> 
    </div>
    
    <div class="row">
      <div class="medium-12 columns" style="text-align:center;background:#fff;">
          <img src="img/pieces/google-sandbox/site-map.jpg">
      </div>
    </div>
    <div class="row" style="padding:2em 0;">      
      <div class="medium-6 columns ">
        <img src="img/pieces/google-sandbox/ux-front-2.jpg"/>
      </div>
      <div class="medium-6 columns ">
        <img src="img/pieces/google-sandbox/ux-front-3.jpg"/>
      </div>
      <div class="medium-6 columns ">
        <img src="img/pieces/google-sandbox/ux-front-4.jpg"/>
      </div>
      <div class="medium-6 columns ">
        <img src="img/pieces/google-sandbox/ux-front-5.jpg"/>
      </div>
    </div>
    <div class="row" style="padding-bottom:4em">
      <div class="medium-4 columns" style="text-align:center;">
          <img src="img/pieces/google-sandbox/ux-mobile-2.png"/>
      </div>
      <div class="medium-4 columns" style="text-align:center;">
          <img src="img/pieces/google-sandbox/ux-mobile-3.png"/>
      </div>
      <div class="medium-4 columns" style="text-align:center;">
          <img src="img/pieces/google-sandbox/ux-mobile-1.png"/>
      </div>
    </div>
   <style>
    .scrolly{overflow:hidden;}
    .scrolly img{
    -webkit-transition: all 5s ease;
     -moz-transition: all 5s ease;
       -o-transition: all 5s ease;
      -ms-transition: all 5s ease;
          transition: all 5s ease;


    }
   </style>
    <!--<div style="height:430px;width:100%;background: url(img/pieces/vzw-prepaid/stacked-4.png) center no-repeat;">&nbsp;</div>-->
    <div style="background:#fff;">
      <div class="row grid" style="text-align:center;padding:4em 0" >
        <div class="medium-12 columns" >
            <h2>Final Design</h2>
        </div> 
        <div class="medium-12 columns" style="margin-bottom:4em;">
          <img src="img/pieces/google-sandbox/front-animation.gif"/>
        </div>
        <div class="medium-12 columns">
          <div class="scrolly" style="height:400px;overflow:hidden;">
              <img style="width:100%;max-width:720px" src="img/pieces/google-sandbox/front-full.jpg"/>
              <div class=" scrollyup"></div>
              <div class=" scrollydown"></div>
          </div>
        </div>
        <!--<div class="medium-12 columns">
          <img src="img/pieces/google-sandbox/front-animation2.gif"/>
        </div>-->
        <div class="medium-12 columns">
          <img src="img/pieces/google-sandbox/front-mobile-1.jpg"/>
        </div>
      </div>
    </div>
    <div class="end">&nbsp;</div>
   <h2 style="text-align:center;margin-bottom:1em;">More Work</h2>
 
  <?php include_once "work-grid.php"; ?>

  <?php include_once "footer.php"; ?>
    
  </body>
</html>
