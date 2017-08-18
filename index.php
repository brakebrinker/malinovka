<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700|Russo+One&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" href="css/style.css">

	<title>Малиновка</title>
</head>
<body>
	<div class="page-wrapper">
		<header>
			<section class="menu-section">
				<nav class="section-container">
					<ul>
						<li><a href="#">Преимущества</a></li>
						<li><a href="#">Каталог товаров</a></li>
						<li><a href="#">Доставка и оплата</a></li>
						<li><a href="#">Инструкция новичкам</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>
				</nav>
			</section>
			<section class="header">
				<div class="section-container">
					<div class="header-container">
						<div class="header-container__logo">
							<a href="#">
								<div class="header-container__logo-img">
									<img src="img/logo.png" alt="Логотип">
								</div>
								<div class="header-container__logo-descr">
									<div class="site-name">Самогонные аппараты «Малиновка»</div>
									<div class="site-subname">официальный дилер УТПЗ</div>
								</div>
							</a>
						</div>
						<div class="header-container__info">
							<div class="header-container__info-phone"><a href="tel:834353456478">8 (3435) 345 64 78</a></div>
							<div class="header-container__info-callback"><a href="#">Написать нам</a></div>
						</div>
					</div>
					<div class="slider-container">
						<div class="slider-info">
							<div class="slider-title">Хороший алкоголь - это просто</div>
							<div class="slider-subtitle">Приготовь отличные напитки вместе с самогонным аппаратом «Малиновка»</div>
							<div class="slider-items">
								<div class="slider-item"><img src="img/sl-icon-1.png" alt=""><div class="slider-item__title">Разнообразие напитков</div></div>
								<div class="slider-item"><img src="img/sl-icon-2.png" alt=""><div class="slider-item__title">Простой и понятный принцип работы</div></div>
								<div class="slider-item"><img src="img/sl-icon-3.png" alt=""><div class="slider-item__title">Доставка в любой регион РФ</div></div>
							</div>
						</div>
						<?php
								$directory = "./img/slider";
								$allowed_types=array("jpg", "png", "gif");
								$file_parts = array();
								$ext="";
								$title="";
								$i=0;

								$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!"); ?>
						<div class="slider-self-container">
							<div class="slider-self">
								<?php
									while ($file = readdir($dir_handle)) {
										if($file=="." || $file == "..") continue;
										$file_parts = explode(".",$file);
										$ext = strtolower(array_pop($file_parts));

										if(in_array($ext,$allowed_types))
										{
											echo '<div class = "slider-self__item">
												<img src="'.$directory.'/'.$file.'" alt="'.$file.'" />
											</div>';
											$i++;
										}

									}
									closedir($dir_handle);  //закрыть папку
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>
		<section class="benefits">
			<div class="section-container">
				<div class="benefits-title">Самогон начинается с браги,<br> а винокур с выбора оборудования</div>
				<hr>
				<div class="benefits-description">
					Выгодные отличия самогонных аппаратов «Малиновка» от других производителей
				</div>
				<div class="benefits-items">
					<div class="benefits-item">
						<div class="benefits-item__img-no"><img src="" alt=""></div>
						<div class="benefits-item__img-yes"><img src="" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Большая, удобная горловина</div>
							<div class="benefits-item__descr-text">Легко заливать продукт и мыть бак.</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" integrity="sha256-SOuLUArmo4YXtXONKz+uxIGSKneCJG4x0nVcA0pFzV0=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slider-self').slick({
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear'
			});
		});
	  </script>
</body>
</html>