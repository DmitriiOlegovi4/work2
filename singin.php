<?php
	require "db.php";

	$data = $_POST;
	$showError = false;
	

	if (isset($data['singin']) )
	{
		$errors = array();
		$showError = true;
		$user = R::findOne('users', 'email = ?', array($data['email']));
			
	if($user){
		if(password_verify($data['password'],$user-> password)){
			
			$_SESSION['logget_user'] = $user;
			
		}
		else{
			$errors[] = 'Не вірний пароль!';
		}
	
	}else{
		$errors[] = 'Користувач не існує!';
	}	
$message = 'Ви авторизовані! ';
}

?>
<!DOCTYPE>
<html lang="uk">
<head>
<meta charset="utf-8">
<title>Допомога Україні</title>
<link rel="stylesheet" type="text/css" href="css/main-cursova.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
<!-- Шапка -->
<header class="navbar">
	<div class="container">
		<a href="index.php">
			<img src="../img/logo007.jpg" width="110px">
			</a>
		<nav class="navbar-nav">
			<ul>
			
				<li>
					<a href="page_website/zrobu.php" class="btn">ЗРОБИТИ ДОБРО</a>
				</li>
				<li>
					<a href="page_website/pro-platformu.php" class="btn">ПРО ПЛАТФОРМУ</a>
				</li>
				<li>
					<a href="page_website/contacs.php" class="btn">КОНТАКТИ</a>
				</li>
				
				<li>
					<a href="page_website/forms_2.php" target="_blank" class="btn btn-primary">ПІДТРИМАТИ</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<!--РЕГИСТАРАЦИЯ\ВХОД-->
<div class="form-1">
	<h1>Вхід</h1>

<form action="/singin.php" method ="post">
<p>
	
		<input class="form-control" type="text" name="email" placeholder="Email">
	</p>
	
	<p>
		
		<input class="form-control" type="password" name="password" placeholder="Пароль" >
	</p>

	<p>

	<button class="btn-primary-form btn-form" type = "submit" name ="singin"> Увійти</button></br>
	<span class="vhid">Немає аккаунта?<a href="singup.php"> Зареєструйтесь</a></span>
</p>


</form>
<p style="color:green;font-size: 16px;padding-top: 10px;"><?php if ($message){echo $message;}?></p>
<p style="color:red;font-size: 16px;padding-top: 10px"><?php if ($showError){echo showError($errors);}?></p>
</div>
</body>
</html>