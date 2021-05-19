<!DOCTYPE html>
<html>
<head>
	<title>M&M Messenger</title>
</head>
<link rel="stylesheet" type="text/css" href="ui/css/style.css">
<body>

	<div id="wrapper">
		
		<div id="left_pannel">

			<div id="user_info" style="padding: 10px;">
				<img id="profile_image" src="ui/images/user_male.jpg" style="height: 100px;width: 100px;">
				<br>
				<span id="username">Username</span>
				<br>
				<span id="email" style="font-size: 12px;opacity: 0.5;">email@gmail.com</span>
				
				<br>
				<br>
				<br>
				<div>
					<label id="label_chat" for="radio_chat">Chat <img src="ui/icons/chat.png"></label>
					<label id="label_contacts" for="radio_contacts">Contacts <img src="ui/icons/contacts.png"></label>
					<label id="label_settings" for="radio_settings">Settings <img src="ui/icons/settings.png"></label>
					<label id="logout" for="radio_logout">Logout <img src="ui/icons/logout.png"></label>
				</div>

			</div>

		</div>
		<div id="right_pannel">
			<div id="header">
				<div id="loader_holder" class="loader_on"><img style="width:70px;" src="ui/icons/giphy.gif"></div>

				<div id="image_viewer" class="image_off" onclick="close_image(event)"></div>
				M&M Messenger
			</div>
			
			<div id="container" style="display: flex;">
 				
				<div id="inner_left_pannel">
			 
				</div>

				<input type="radio" id="radio_chat" name="myradio" style="display: none;">
				<input type="radio" id="radio_contacts" name="myradio" style="display: none;">
				<input type="radio" id="radio_settings" name="myradio" style="display: none;">
				
				<div id="inner_right_pannel">
					
				</div>

			</div>
		</div>

	</div>
</body>
</html>

<script type="text/javascript" src="ui/js/script.js"></script>