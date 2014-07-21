<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" />
<script src="scripts/jquery-min.js"></script>
<script>
	$(document).ready(function(){
		$('#bottom .active').removeClass('active');
		$('#bottom .search').addClass('active');
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
		/*$( ".searchform" ).submit(function( event ) {
		  $('#searchbar').toggle();
		  event.preventDefault();
		});*/
	});
</script>
<style>
#searchbar{position:fixed;bottom:60px;width:100%;background:#333;}
#searchwrap{padding:30px;}
#searchbar input{font-size:3em;font-weight:lighter;color:#fff;display:block;width:100%;border:none;outline:none;margin:0;background:none;}
#searchbar input:focus{border:none;}
</style>
</head>

<body>

<div id="wrapper">
	<?php include_once "top.php"; ?>
    <div id="middle">
	<h3  style="margin:0 0 0 0;"><a href="#" class="featured"><img src="img/hamburger.png" style="margin-right:10px;"/><span id="head">All</span> Results: <?php

	echo $_POST["keyword"];

	?></a></h3>
    <div class="leftnav">
    	<div style="margin-top:30px;">
    	<?php include_once "leftlist-searchresults.php"; ?>
          </div>     
            </div>
        
        <div class="scrollframe">
            <div id="tilewrapper">
                <div class="tile hidden">
                       <?php include_once "leftlist.php"; ?>
                 </div>
                 <div id="include">
                     <?php include_once "resulttiles.php"; ?>
                 </div>
            </div> 
        </div> <!--endscrollframe-->
        
        </div><!--endwrapper-->
    </div>
    <div style="clear:both;height:0;"></div>
    <?php include_once "footer.php"; ?>
    <div id="searchbar">
    	<div id="searchwrap">
        	<form method="post" action="searchresults.php" class="searchform">
    			<input name="keyword" id="searchinput" type="text" placeholder="Search" />
            </form>
    	</div>
        <div id="keyboard"><img src="img/keyboard.jpg" style="width:100%;"/></div>
   	</div>
    
</div>
</body>
</html>