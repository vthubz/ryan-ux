<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" />
<script src="scripts/jquery-min.js"></script>
<script>
	$(document).ready(function(){
		$('#bottom li.active').removeClass('active');
		$('#bottom li.movies').addClass('active');
		$('.leftnav').hide();
		$('.featured').click(function(){
				$('.leftnav').toggle();
				$('#tilewrapper .hidden').toggle('slow');
		});
		$('.categories a').click(function(){
			$('#include').load( this.id + '.php');
			$('span#head').text( this.id );
			//$('.leftnav').toggle();
			//$('#tilewrapper .hidden').toggle('slow');
		});
		$('a.blur').click(function(){
			$('#searchbar').toggle();
			$('input#searchinput').focus();
			$(this).addClass('focus');
			$(this).removeClass('blur');
		});
		$('a.focus').click(function(){
			$('input#searchinput').blur();
			$(this).addClass('blur');
			$(this).removeClass('focus');
		});
		/*var value = $('#searchinput').val();
    	if ( value.length > 3 ){
			$('#autoresults').show();
		}
		else{
			$('#autoresults').hide();
		}*/
		
		/*$( ".searchform" ).submit(function( event ) {
		  $('#searchbar').toggle();
		  event.preventDefault();
		});*/
	});
</script>
<style>

</style>
</head>

<body>

<div id="wrapper">
	<?php include_once "top.php"; ?>
    <div id="middle">
	<h3  style="margin:0 0 0 0;"><a href="#" class="featured"><img src="img/hamburger.png" style="margin-right:10px;"/><span id="head">Featured</span> Movies</a></h3>
    <div class="leftnav">
    	<div style="margin-top:30px;">
    	<?php include_once "leftlist.php"; ?>
          </div>     
            </div>
        <div class="scrollframe">
            <div id="tilewrapper">
                <div class="tile hidden">
                      <?php include_once "leftlist.php"; ?>
                 </div>
                 <div id="include">
                     <?php include_once "featured.php"; ?>
                 </div>
            </div> 
        </div> <!--endscrollframe-->
        </div><!--endwrapper-->
    </div>
    <div style="clear:both;height:0;"></div>
    <?php include_once "footer.php"; ?>
    <?php include_once "searchbar.php"; ?>
    
</div>
</body>
</html>
