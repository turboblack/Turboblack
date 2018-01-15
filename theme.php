<!DOCTYPE html>
<html lang="en">
<head>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function() {
   	   $("body").css("display", "none"); 
	   $("body").fadeIn(1000); 
	 
	   $("a.fade").click(function(event){ 
		   event.preventDefault();
		   linkLocation = this.href;
		   $("body").fadeOut(1000, redirectPage); 
	   });

	   function redirectPage() {
		   window.location = linkLocation;
	   }
   });
   </script>
   <script type="text/javascript">$(document).ready(function(){
$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
$('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
});</script>
</head>
<body>
	<?=wCMS::alerts()?>
	<?=wCMS::settings()?>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-5 text-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
					<a href="./"><h1><?=wCMS::get('config','siteTitle')?></h1></a>
				</div>
			</div>
			<div class="col-sm-7 text-center">
				<div class="collapse navbar-collapse" id="navMobile">
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="./главная">Главная ☑</a></li>
                <li><a href="./блог">Блог 😉</a></li>
                
                <li><a href="./контакты">Контакты ☎</a></li>
                    </ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=wCMS::page('content')?>
			</div>
			***
			<script id="echochamber">
    var EchoChamber = window.EchoChamber || {};
    (function() {
      EchoChamber.discussionURL = window.location;
      var script = document.createElement('script');
      script.src = 'https://s3.amazonaws.com/echochamberjs/dist/main.js';
      script.async = true;
      var entry = document.getElementById('echochamber');
      entry.parentNode.insertBefore(script, entry);
    })();
  </script>

  ***
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="blueBackground padding20 rounded5">
				<?=wCMS::block('subside')?>
				<br><br><b><p style="text-indent:0px"><font size="4" color="#000"><ul class="navbar-1" color="#fff"><?=wCMS::menu()?></font></p></b></ul><br><br>
				
	
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=wCMS::footer()?>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/jquery.autosize/3.0.17/autosize.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=wCMS::js()?>
	<div id="scroller" class="b-top" style="display: none;"><span class="b-top-but">наверх</span></div>
</body>
</html>