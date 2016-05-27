<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>EduHack | Login</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Language" content="Español" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<?php include("includes/head.php"); ?>

	<style>
	body{
		background: url("images/education.jpg");
	}

	</style>
</head>

<body>
<div class="contenedor">

	<div id="formulario" align="center">
	<h1>EduHack</h1>	
		<form id="contactform" method="post" action="send_form_email.php"> 

		<div class="form-group">
		  <label for="first_name">User</label></br>
		  <input  type="text" id="Username" maxlength="20" size="20" placeholder=" Username">
		</div>
		<div class="form-group">
		  <label for="last_name">Password</label></br>
		  <input  type="text" id="Password" maxlength="20" size="20" placeholder=" Password">
		</div>
		<br/>
		<input type="checkbox"> Remember me<br/>
		<div class="form-group">
		  <a href="resume.php"><input value="Enter as a Teacher" class="boton"></a>
		</div>

		<div class="form-group">
		  <a href="student.php"><input value="Enter as a Student" class="boton"></a>
		</div>

		</form>
	</div>
</div>

</body>
</html>