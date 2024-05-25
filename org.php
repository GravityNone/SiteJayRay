<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>JayRay RolePlay</title>

	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<div id="header">
		<div class="bar">
			<div class="container">
				<div class="status">Статус сервера: <b>Работает</b></div>
				<a class="login" href="#"><i class="user"></i> Войти в аккаунт</a>
				<div class="clear"></div>
			</div>
		</div>
		<div class="container">
			<div class="logo">
				<i class="logo rotate"></i> 
				<h1>JayRay</h1> <h4>RolePlay</h4>
			</div>

			<ul class="navbar">
				<li><a href="/" class="">Главная</a></li>
				<li><a href="/news.php" class="">Новости</a></li>
				<li><a href="/org.php" class="active">Сайты организаций</a></li>
				<li class="dropdown">
					<a href="#" class="">Мониторинг</a>
					<ul class="dropdown-menu">
						<li><a href="/mons/admins.php">Администрация</a></li>
						<li><a href="/mons/bans.php">Бан-лист</a></li>
						<li><a href="/mons/leaders.php">Руководители</a></li>
						<li><a href="/mons/fraction.php">Состав фракций</a></li>
						<li><a href="/mons/money.php">Богачи</a></li>
						<li><a href="/mons/lvl.php">Старики</a></li>
					</ul>
				</li>
				<li><a href="/donate.php" class="">Донат</a></li>
				<li><a href="/howtoplay.php" class="">Как начать играть?</a></li>
			</ul>

			<div class="clear"></div>
		</div>
	</div>

	<div id="content">
		<div class="container">
			<h1>Сайты организаций</h1>
			<p>Выберите интересующую вас организацию</p>

			<div id="org">
				<p>
					Мы разработали уникальную систему веб-структурирования для каждой фракции на сервере. На этих 
					страницах вы сможете ознакомиться со всей необходимой информацией, которая так или иначе связана с той 
					или иной фракцией.
				</p>

				<form>
					<select name="org">
						<option value="1">Полицейский Департамент Лос Сантоса</option>
						<option value="1">Полицейский Департамент Лос Сантоса</option>
						<option value="1">Полицейский Департамент Лос Сантоса</option>
						<option value="1">Полицейский Департамент Лос Сантоса</option>
					</select>

				    <input type="submit" name="button" value="Продолжить">
				</form>
			</div>

		</div>
	</div>

	<div id="footer">
		<div class="container">
			<div class="left">
				JayRay Roleplay © 2015. Все права защищены
				<a href="#" class="vk-btn">Группа ВКонтакте</a>
				Партнёры проекта: <a href="#">diesel.zt.ua</a> / <a href="#">LIVE SAMP</a>
			</div>
			<ul class="navbar-footer">
				<li><a href="#" class="">Главная</a></li>
				<li><a href="#" class="">Новости</a></li>
				<li><a href="#" class="active">Сайты организаций</a></li>
				<li><a href="#" class="">Мониторинг</a></li>
				<li><a href="#" class="">Донат</a></li>
				<li><a href="#" class="">Как начать играть?</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="/js/scroll.js"></script>
</body>
</html>