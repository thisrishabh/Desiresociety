<?php
$user='root';
$pass='';
$db='register';
$db=new mysqli('localhost',$user,$pass,$db) or die("Unable to Connect");
echo "";
?>
<html>
<head>
<style type="text/css">
* {
	box-sizing: border-boxborder-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);		
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height:100vh;
}

.screen {		
	background: linear-gradient(90deg, #5D54A4, #7C78B8);		
	position: relative;	
	height: 600px;
	width: 360px;	
	box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;
}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);
	}
	.screen_background_shape {
	transform: rotate(45deg);
	position: absolute;
	}
	
	.screen_background_shape1 {
	height: 100px;
	width: 100px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
	}
	
	.screen_background_shape2 {
	height: 100px;
	width: 100px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
	}
	.screen_background_shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
	}
	
	.screen_background_shape4 {
	height: 100px;
	width: 100px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
	}.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
	}
	
	.login__field {
	padding: 20px 0px;	
	position: relative;	
	}
	
	.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
	}
	
	.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
	}
	
	.login__input:active,
	.login__input:focus,
	.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
	}
	.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
	}
	.login__submit:active,
	.login__submit:focus,
	.login__submit:hover {
	border-color: #6A679E;
	outline: none;
	}
	.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
	}
</style>
</head>
<body>
		<?php
if(isset($_POST["b1"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"register");
$a = $_POST["t1"];
$b = $_POST["t2"];
$query="INSERT INTO `ulogin` (`User name / Email`, `Password`) VALUES ('$a', '$b')";
echo "";
mysqli_query($link, $query);
}
?>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form  method="post" class="login">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="t1" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" name="t2" placeholder="Password">
				</div>
				<button class="button login__submit" name="b1">
					<div class="button__text">Log In</div>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
		</div>
		</div>
		</div>
		</body>
		</html>