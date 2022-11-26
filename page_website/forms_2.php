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
<div id="donate" class="donate">
  <div class="donate__row">
    <div class="donate-label">Сума Пожертвування</div>
    <div class="donate-btn">
      10
    </div>
    <div class="donate-btn donate-btn--active">
      50
    </div>
    <div class="donate-btn">
      100
    </div>
    <input name="sum" type="text" placeholder="Інша сума" class="donate-btn donate-sum">
  </div>

  <div class="donate__row">
    <div class="donate-label">Благодійна програма</div>
    <div class="donate__field">
      <input id="program-2" type="radio" name="orderDetails" value="Допомога біженцям" class="donate-radio" checked>
      <label for="program-2" class="donate-radiolabel">Допомога захисникам</label>
    </div>
    <div class="donate__field">
      <input id="program-1" type="radio" name="orderDetails" value="Лікування дітей" class="donate-radio" checked>
      <label for="program-1" class="donate-radiolabel">Лікування дітей</label>
    </div>

    <div class="donate__field">
      <input id="program-2" type="radio" name="orderDetails" value="Допомога біженцям" class="donate-radio" checked>
      <label for="program-2" class="donate-radiolabel">Допомога біженцям</label>
    </div>
    <div class="donate__field">
      <input id="program-3" type="radio" name="orderDetails" value="На роботу фонду" class="donate-radio" checked>
      <label for="program-3" class="donate-radiolabel">На роботу фонду</label>
    </div>
  </div>

  <div class="donate__row">
    <div class="donate-label">Контактна інформація</div>
    <div class="donate__field">
      <input name="custName" type="text" class="donate-btn donate-name" placeholder="Прізвище, ім'я, по батькові">
      <input name="custEmail" type="text" class="donate-btn donate-name" placeholder="Эл. почта">
    </div>
  </div>

  <div class="donate__row">
    <div class="donate-label">Спосіб оплати</div>
    <div class="donate__field">
      <div class="donate-btn donate-btn--active">
        Банківська карта
      </div>
      <div class="donate-btn">
        ПРИВАТБАНК
      </div>
      <div class="donate-btn">
        Укрэксимбанк
      </div>
      <div class="donate-btn">
        Ощадбанк
      </div>
      <div class="donate-btn">
        Яндекс.Гроші
      </div>
      <div class="donate-btn">
      	 PayPal
    
      </div>
    </div>
    <div class="donate__field hidden">
      <input id="donate-recurring" name="recurring" type="checkbox">
      <label for="donate-recurring">Повторювати щомісяця</label>
    </div>
    <div class="donate__field">
      
Платіжна система бере комісію 2% від суми пожертвування
    </div>
  </div>

  <button type="submit" class="donate-sumbit">Пожертвувати</button>
</div>

</body>
</html>