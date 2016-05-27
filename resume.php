<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>EduHack | Resume</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Language" content="Español" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<?php include("includes/head.php"); ?>

</head>

<body>
<div class="contenedor">

	<div id="site-info">
        <div id="logo3"><h1>RESUME</h1></div>
        <div id="logout"><h3><a href="index.php"><i class="fa fa-power-off" aria-hidden="true"></i> LogOut</a></h3></div>
    </div>

	<div id="calendar">
		<?php include("includes/calendar.php"); ?>
		<br/>
		<br/>
		<br/>
		<br/>
	</div>

	<div id="goals">
		<h2>REMEINDERS</h2>
		<input type="checkbox"> Read with STUDENT A<br/>
		<input type="checkbox"> Check the homework from group B<br/>
		<input type="checkbox"> Filling the pencil cup<br/>
		<i class="fa fa-plus-square" aria-hidden="true"></i>
	</div>	

	<div id="warnings">
			<h2><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> WARNING</h2>

			<ul>
				<li><a href="student-info.php"><b>Student A</b></a> has problems with <a href=""><u>MATHS</u></a></li>
				<li><a href="student-info.php"><b>Student B</b></a> has problems with <a href=""><u>DUTCH</u></a></li>
				<li><a href="student-info.php"><b>Student C</b></a> has problems with <a href=""><u>HISTORY</u></a></li>
			</ul>
	</div>

	<div class="main">
		<div class="slides">
			<img src="images/chart.png" alt="">
			<img src="images/chart2.jpg" alt="">
			<img src="images/chart3.jpg" alt="">
		</div>
	</div>
	
		<script type="text/javascript" src="scripts/jquery.slides.js"></script>
		<script type="text/javascript" src="scripts/jquery.min.slides.js"></script>
		<script>
			$(function(){
				$(".slides").slidesjs({
				play: {
					active: false,
					// [boolean] Generate the play and stop buttons.
					// You cannot use your own buttons. Sorry.
					effect: "slide",
					// [string] Can be either "slide" or "fade".
					interval: 4000,
					// [number] Time spent on each slide in milliseconds.
					auto: false,
					// [boolean] Start playing the slideshow on load.
					swap: true,
					// [boolean] show/hide stop and play buttons
					pauseOnHover: false,
					// [boolean] pause a playing slideshow on hover
					restartDelay: 2500
					// [number] restart delay on inactive slideshow
				}
				});
			});
		</script>

	<div id="next">
		<a href="bubbles.php"><h1>NEXT</h1></a>
	</div>
</div>

</body>
</html>