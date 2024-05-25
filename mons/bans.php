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
				<li><a href="/org.php" class="">Сайты организаций</a></li>
				<li class="dropdown">
					<a href="#" class="active">Мониторинг</a>
					<ul class="dropdown-menu">
						<li><a href="/mons/admins.php">Администрация</a></li>
						<li><a href="/mons/bans.php" class="active">Бан-лист</a></li>
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
			<h1>Бан-лист</h1>
			<p>Список заблокированных игроков</p>

			<div id="monitoring">
				<table class="mon-table bans-table">
					<tr class="list" data-listid="1">
						<td class="bold nick ">1. De_Morgan</td>
						<td class=""><i class="time"></i> Заблокирован: 04.08.15 / Окончание: 04.12.15</td>
						<td class="woutline" style="float: right"><i class="down" id="list-1" style="margin-top: 10px"></i></td>
					</tr>
					<tr style="display: none;" id="reason-1">
						<td colspan="3" class="reason">Причина блокировки: Использование сторонних программ</td>
					</tr>
					<tr class="list" data-listid="2">
						<td class="bold nick">2. De_Morgan</td>
						<td><i class="time"></i> Заблокирован: 04.08.15 / Окончание: 04.12.15</td>
						<td class="woutline" style="float: right"><i class="down" id="list-2" style="margin-top: 10px"></i></td>
					</tr>
					<tr style="display: none;" id="reason-2">
						<td colspan="3" class="reason">Причина блокировки: Использование сторонних программ</td>
					</tr>
				</table>
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
				<li><a href="#" class="">Сайты организаций</a></li>
				<li><a href="#" class="active">Мониторинг</a></li>
				<li><a href="#" class="">Донат</a></li>
				<li><a href="#" class="">Как начать играть?</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="/js/scroll.js"></script>
	<script src="/js/maksa988.js"></script>
</body>
</html>