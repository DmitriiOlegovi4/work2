<!DOCTYPE>
<html lang="uk">
<head>
<meta charset="utf-8">
<title>Допомога Україні</title>
<link rel="stylesheet" type="text/css" href="../css/main-cursova.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet">

</head>
<body>
<!-- Шапка -->
<header class="navbar">
	<div class="container">
		<a href="../index.php">
			<img src="../img/logo007.jpg" width="110px">
			</a>
		<nav class="navbar-nav">
			<ul>
				<li>
					<a href="praci.php" class="btn">ЯК ЦЕ ПРАЦЮЄ</a>
				</li>
				<li>
					<a href="zrobu.php" class="btn">ЗРОБИТИ ДОБРО</a>
				</li>
				<li>
					<a href="pro-platformu.php" class="btn">ПРО ПЛАТФОРМУ</a>
				</li>
				<li>
					<a href="contacs.php" class="btn">КОНТАКТИ</a>
				</li>
				
				<li>
					<a href="forms_2.php" target="_blank" class="btn btn-primary">ПІДТРИМАТИ</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<!--РЕГИСТАРАЦИЯ\ВХОД-->

<div class="form-1"  >
	<h1>Реєстрація</h1>

	<form action="/forms_1" method="post">
		
    	

		<input type="text" class="form-control" name="name" id="name" placeholder=" Ім'я"><br>
		
		<input type="text" class="form-control" name="prizv" id="prizv" placeholder=" Прізвище"><br>

		<input type="email" class="form-control" name="email" placeholder="Email" ><br>

		<input type="text" class="form-control" name="tel" id="tel" placeholder=" Телефон"><br>
		
		<input type="password" class="form-control" name="pass" id="pass" placeholder=" Пароль"><br>
	
		<input type="password" class="form-control" name="pas" id="pas" placeholder=" Повторіть пароль"><br>
		<div class="res"><span id ="error"></span></div>
		
		
		<button type="submit" class="btn-primary-form btn-form" >Зареєструватися</button>
		

		</form>
		
		<div class="form-2">
			<span class="vhid">Ви маєте аккаунт? <a href="forms_3.php"> Вхід</a></span>
		</div>
	</div>

	

<script src="../main.js"> </script>
</body>
</html>