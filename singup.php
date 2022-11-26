<?php
	require "db.php";


$data = $_POST;
$showError = false;


if (isset($data['singup']) )
{
	//здесь регистрация 
	$errors = array();
	$showError = true;
	
	
	if(trim($data['firstname']) == '')
	{
		$errors[] = 'Введіть Им*я ';
	}
	if(trim($data['email']) == '')
	{
		$errors[] = 'Введіть  email';
	}
	if(trim($data['tel']) == '')
	{
		$errors[] = 'Введіть номер телефону';
	}
	if(trim($data['password']) == '')
	{
		$errors[] = 'Введіть пароль';
	}
	if(trim($data['password_2']) != $data['password'] )
	{
		$errors[] = 'Паролі не схожі';
	}
	if (R::count('users', "email = ?", array($data['email']))> 0)
	{
		$errors[]='Пользователь с таким EMAIL уже существует!';
	}
	if (empty($errors) )
	{
		$user = R::dispense('users');

		$user->firstname = $data['firstname'];
		$user->lastname = $data['lasttname'];
		$user->email = $data['email'];
		$user->tel = $data['tel'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT) ;
		R::store($user);
		
			
	}
	$message = 'Ви успішно зареєстровані';

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
	<h1>Реєстрація</h1>
<form action="/singup.php" method ="post">
	
	<p>
		
		<input class="form-control" type="text" name="firstname" placeholder="Ваше ім'я">
	</p>
	<p>
		<input class="form-control" type="text" name="lastname"placeholder= "Ваше прізвище">
	</p>

	<p>
	<input type="text" class="form-control" name="tel" id="tel" placeholder=" Телефон"><br>
	</p>

	<p>
		
		<input class="form-control" type="email" name="email" placeholder="Email" >
	</p>
	<p>
		
		<input class="form-control" type="password" name="password" placeholder=" Пароль">
	</p>
	<p>
		
		<input class="form-control" type="password" placeholder=" Повторіть пароль" name="password_2" >
	</p>

<p>
	<button class="btn-primary-form btn-form" type = "submit" name ="singup">Зареєструватися</button>
</p>
<div class="form-2">
			<span class="vhid">Ви маєте аккаунт? <a href="singin.php"> Вхід</a></span>
		</div>
</form>
<p style="color:green;font-size: 16px;padding-top: 10px;"><?php if ($message){echo $message;}?></p>

<p style="color:red;font-size: 16px;padding-top: 10px;"><?php if ($showError){echo showError($errors);}?></p>

</div>

</body>
</html>