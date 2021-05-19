<html>
<head>
	<title>M&M Messenger</title>
</head>

<link rel="stylesheet" type="text/css" href="ui/css/signup.css">
<body>

	<div id="wrapper">
 
 		<div id="header">
 			M&M Messenger
 			<div style="font-size: 20px;font-family: myFont;">Signup</div>
 		</div>
 		<div id="error" style="">some text</div>
		<form id="myform">
			<input type="text" name="username" placeholder="Username"><br>
			<input type="text" name="email" placeholder="Email"><br>
			<div style="padding: 10px;">
				<br>Gender:<br>
				<input type="radio" value="Male" name="gender_male"> Male<br>
				<input type="radio" value="Female" name="gender_female"> Female<br>
			</div>
			<input type="password" name="password" placeholder="Password"><br>
			<input type="password" name="password2" placeholder="Retype Password"><br>
			<input type="button" value="Sign up" id="signup_button" ><br>

 			<br>
 			<a href="login.php" style="display: block;text-align: center;text-decoration: none">
 				Already have an Account? login here
 			</a>

		</form>
	</div>
</body>
</html>

<script type="text/javascript" src="ui/js/signup.js"></script>

