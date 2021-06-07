<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>Спецпредложение от нашего интернет-магазина, товары по супер цене!</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="upsell/img/favicon.ico" rel="icon" type="image/x-icon">
	<link href="upsell/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<script src="upsell/js/jquery.min.js" type="text/javascript"></script>
	<script src="upsell/js/jquery.placeholder.js" type="text/javascript"></script>
	<script src="upsell/js/init.js" type="text/javascript"></script>
	<script src="index_files/jquery.cookie.js"></script>
	<link href="upsell/css/index.css" media="all" rel="stylesheet" type="text/css">

</head>
<body class="man">
<?php
$only_phone = preg_replace("/[^0-9]/", '', $_REQUEST['phone']); 
?>
<script type="text/javascript">
$.cookie('duble', <?=$only_phone?>, { expires: 1 });
</script> 
	<img alt="cookie" border="0" height="1" src="index.php" style="display: none;" width="1">
	<div class="section block-1" style='background:rgb(241, 244, 246) none repeat scroll 0% 0%;    '>
		<div class="wrap" style=' height: 415px;'>
			<div class="top-title"> 
				<h2>Спасибо, Ваш заказ принят!</h2> 
				<div>
					Наш оператор свяжется с вами в течение 30&nbsp;минут
				</div>
				<div>
					<p>Вы указали следующие контактные данные:</p>
					<p><b style='font-weight: bold;'>Имя:</b> <?=$_REQUEST['name']?></p>
					<p><b style='font-weight: bold;'>Телефон:</b> <?=$_REQUEST['phone']?></p>
				</div>										
				<p>Если вы допустили ошибку, <br>вернитесь на сайт и оставьте заказ еще раз</p>
				<button style='    background: transparent linear-gradient(to bottom, #14b1f1 0%, #14b1f1 100%) repeat scroll 0 0;border: none;border-bottom: 2px solid #055029;outline: 0 none;padding: 15px 25px;text-transform: uppercase;color: #fff;font-weight: bold;border-radius: 4px;cursor: pointer;}' class=" button thankyou__button" onclick="history.back()">Вернуться</button>  
				
			</div>
		</div>
	</div>
	<div class="section block-2" id="1">
		<div class="wrap">
			<h1>Для новых клиентов у нас есть эксклюзивные предложения!</h1>
			<p>С индивидуальной скидкой вы можете заказать следующие товары:</p>
		</div>
	</div>
	<div class="section block-3">
		<div class="wrap">	
			<div class="tov-item tov-rate-1 clearfix">
				<span class="tov-item-sale">-50%</span> 
				<div class="tov-left-cont"> 
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image4" src="upsell/img/111.jpeg?2"></div>
						<div class="tov-gal-list">
							<span class="animate active" data-target=".image4"><img alt="" src="upsell/img/111.jpeg?2"></span>
							<span class="animate active" data-target=".image4"><img alt="" src="upsell/img/112.jpeg?2"></span>
							<span class="animate active" data-target=".image4"><img alt="" src="upsell/img/113.jpeg?2"></span>
							<span class="animate active" data-target=".image4"><img alt="" src="upsell/img/114.jpeg?2"></span>
							<span class="animate active" data-target=".image4"><img alt="" src="upsell/img/115.jpeg?2"></span>
						</div>
					</div>
					<ul class="tov-adv clearfix">
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul> 
				</div>
				<div class="tov-info"> 
					<h3>Женская шляпа</h3>  
					<div class="tov-info-rate"></div>
					<div class="tov-info-cost">
						<span class="old-cost"><small>2180 руб</small></span> <span class="new-cost">1090 <small>руб</small></span> 
					</div>
					<p class="tov-info-text"></p>
					<p> 

Хлопок 60%, полиэстер 40%
<br>Вариации: белая с синей лентой; белая с белой лентой; серая с серой лентой;  белая в голубую полоску
</p>
				</div>
			</div>
				<div class="tov-item tov-rate-1 clearfix">
				<span class="tov-item-sale">-50%</span>
				<div class="tov-left-cont">
					<div class="tov-gal clearfix">
						<div class="tov-gal-big1"><img alt="" class="image3" src="upsell/img/221.jpeg?2"></div>
						<div class="tov-gal-list">
							<span class="active animate" data-target=".image3"><img alt="" src="upsell/img/221.jpeg?2"></span> 
						</div>
					</div>
					<ul class="tov-adv clearfix">
						<li class="hint hint--top hint--info" data-hint="Гарантия возврата 14 дней"></li>
						<li class="hint hint--top hint--info" data-hint="Доставка в течение 5-10 рабочих дней"></li>
						<li class="hint hint--top hint--info" data-hint="Оплата товара при получении"></li>
					</ul>
				</div>
				<div class="tov-info">
					<h3>Корректирующие трусики   </h3>
					<div class="tov-info-rate"></div>
					<div class="tov-info-cost">
						<span class="old-cost"> <small>1980 руб</small></span> <span class="new-cost">990 <small>руб</small></span>
					</div>
					<p class="tov-info-text"></p>
					<p>
<br>Преобразят вашу фигуру
<br>Трусики для дам с пышными формами
<br>Цвет - бежевый/черный  - в комментарии
<br>Размер - L, XL, 2XL, 3XL - в комментарии
<br><br>Делают живот плоским и приподнимают ягодицы
Идеально сглаживают линии фигуры
Визуально стройнят на 1-2 размера
Состоит из натуральных компонентов, таких как хлопок (70%) и бамбук (30%), что говорит о защищенности самого нежного участка прекрасного тела.

</p>
				</div>
			</div>



			





	</div>

</body>
</html>