<?php 
require "db.php";
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
<link rel="stylesheet" type="text/css" href="okno.css">
</head>
<body>

<!-- Шапка -->
<header class="navbar">
	<div class="container">
		<a href="index.php">
			<img src="img/logo007.jpg" width="110px">
			<a href="index.php"></a></a>
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
					<a href="singin.php" class="btn">УВІЙТИ</a>

				</li>
				
				<li>
					<a href="page_website/forms_2.php" target="_blank" class="btn btn-primary">ПІДТРИМАТИ</a>
				</li>
			</ul>
		</nav>
	</div>
</header>

<main>
	<!--Гл стр-->
	<section class="hero" style="background-image: url('img/img04.jpg');">
		<div class="container">
			<h1>Разом допомагаємо Україні</h1>
			<p>Ми віримо, що добра дія має велику силу та прагнемо дати<br>можливість кожному відчути її змінотворчий ефект.<BR>Піклуючись про щастя інших - знаходимо своє власне</p>
			<a href="singup.php
			" class="btn btn-primary">Долучитися</a>
		</div>
	 </section>
	 <!-- LENTA-->
	 <section class="section-padding">
	 	<div class="container">
	 		<div class="services">

	 			<div class="services-col">
	 				<div class="servis">
	 					<img src="img/logo-03.jpg">
	 					<h4>Хочу допомогти!</h4>
	 					<p>Ви хочете допомогти і не знаєте, куди звернутися?Приєднуйтесь до нас та у вас буде вибір перевірених нами волонтерських вакансій!</p>
	 					<button id="myBtn" class="btn btn-primary">Приєднатися</button>
	 				</div>
	 			</div>
	 			
	 			<div class="services-col">
	 				<div class="servis">
	 					<img src="img/logo-04.jpg">
	 					<h4>Потрібна допомога!</h4>
	 					<p>Ви – некомерційна організація?Вам потрібні волонтери?Ви опинились у складній ситуації?Приєднуйтесь до нас та волонтери самі знайдуть вас!</p>
	 					<button  id="myBtn2" class="btn btn-primary">Приєднатися</button>
	 				</div>
	 			</div>

	 		</div>
	 	</div>
	 </section>
<!-- Модальный -->
<div id="myModal" class="modal">

  <!-- Модальное содержание -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Для доступу до цієї функції потрібна авторизація, бажаєте <a href="singup.php">Зареєструватися  </a>?</p>
  </div>


</main>

<!-- Подвал -->
<footer>
	<div class="container">
		<div class="footer-row">
			<small class="footer-copyright"> 2022 Help-Ua  Волонтерьський рух "Ластівка"</small>
			<ul class="footer-social">
				<li>
	            <a href="#">
	              <img src="icons_soc/facebook.svg" alt="WebDev on Facebook">
	            </a>
	          </li>
	          <li>
	            <a href="#">
	              <img src="icons_soc/instagram.svg" alt="WebDev on Instagram">
	            </a>
	          </li>
	          <li>
	            <a href="#">
	              <img src="icons_soc/youtube.svg" alt="WebDev on Youtube">
	            </a>
	          </li>
	          <li>
	            <a href="#">
	              <img src="icons_soc/twitter.svg" alt="WebDev on Twitter">
	            </a>
	          </li>
			</ul>
		</div>
	</div>
</footer>
<script src="main-cursova.js"></script>

<script src="oknojs.js"></script>

</body>
</html>