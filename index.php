<?php require_once 'header.php'; ?>
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
											echo '<div class = "slider-self__item"><a href="#"><img src="'.$directory.'/'.$file.'" alt="'.$file.'" /></a>
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
						<div class="benefits-item__img-no"><img src="img/ben-no-1.jpg" alt=""></div>
						<div class="benefits-item__img-yes"><img src="img/ben-yes-1.jpg" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Большая, удобная горловина</div>
							<div class="benefits-item__descr-text">Легко заливать продукт и мыть бак.</div>
						</div>
					</div>
					<div class="benefits-item">
						<div class="benefits-item__img-no"><img src="img/ben-no-2.jpg" alt=""></div>
						<div class="benefits-item__img-yes"><img src="img/ben-yes-2.jpg" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Пищевая
						нержавеющая
						сталь</div>
							<div class="benefits-item__descr-text">Гипоаллергенна, не взаимодействует с жидкостью внутри куба.</div>
						</div>
					</div>
					<div class="benefits-item">
						<div class="benefits-item__img-no"><img src="img/ben-no-3.jpg" alt=""></div>
						<div class="benefits-item__img-yes"><img src="img/ben-yes-3.jpg" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Гарантия на все оборудование
					2 года</div>
							<div class="benefits-item__descr-text">Документы приходят вместе с апппаратом.</div>
						</div>
					</div>
					<div class="benefits-item">
						<div class="benefits-item__img-no"><img src="img/ben-no-4.jpg" alt=""></div>
						<div class="benefits-item__img-yes"><img src="img/ben-yes-4.jpg" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Надженость и
					безопасность</div>
							<div class="benefits-item__descr-text">Соотвествует ГОСТам, подтверждено всеми необходимыми сертификатами соответствия.</div>
						</div>
					</div>
					<div class="benefits-item">
						<div class="benefits-item__img-no"><img src="img/ben-no-5.jpg" alt=""></div>
						<div class="benefits-item__img-yes"><img src="img/ben-yes-5.jpg" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Оплата при
					получении. </div>
							<div class="benefits-item__descr-text">Производится наличными курьеру или в пунктах выдачи.</div>
						</div>
					</div>
					<div class="benefits-item">
						<div class="benefits-item__img-no"><img src="img/ben-no-6.jpg" alt=""></div>
						<div class="benefits-item__img-yes"><img src="img/ben-yes-6.jpg" alt=""></div>
						<div class="benefits-item__descr">
							<div class="benefits-item__descr-title">Позволяет готовить любые напитки</div>
							<div class="benefits-item__descr-text">Соотвествует ГОСТам, подтверждено всеми необходимыми сертификатами соответствия.</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="choice">
			<div class="section-container">
				<div class="choice-left"><img src="img/drink-lf.png" alt=""></div>
				<div class="choice-center">
					<div class="choice-title">выбeрeте какой аппарат<br>подойдет именно вам</div>
					<div class="choice-subtitle">ответье на несколько вопросов</div>
					<div class="choice-action"><a href="#podbor-form" class="open-popup-link">подобрать самогонный аппарат</a></div>
				</div>
				<div class="choice-right"><img src="img/drink-rt.png" alt=""></div>
			</div>
		</section>
		<section class="preparation-stage">
			<div class="section-container">
				<div class="preparation-stage-title">
					стадии приготовления самогона<br>в домашних условиях
				</div>
				<hr>
				<div class="preparation-stage-container">
					<div class="preparation-stage__img"><img src="img/stages.png" alt=""></div>
					<div class="preparation-stage__items">
						<div class="preparation-stage__item">
							<div class="preparation-stage__item-title">Выбор и подготовка исходного сырья.
							</div>
							<div class="preparation-stage__item-text">
							Варианты: крахмал, рис, сахар, гречиха, пшеница, овес, рожь, пшено, горох, ячмень и др. Выбранное сырье во многом определяет качество готового продукта.
							</div>
							<div class="preparation-stage__item-link"><a href="#podbor-form-syrja" class="open-popup-link">узнать больше о сырье</a></div>
						</div>
						<div class="preparation-stage__item">
							<div class="preparation-stage__item-title">Брожение.
							</div>
							<div class="preparation-stage__item-text">
							Спиртовое брожение – это процесс преобразования дрожжами сахара в этиловый спирт и углекислый газ. Готовность браги зависит от сырья и температуры, среднее время 
							от 3 до 14 дней.
							</div>
							<div class="preparation-stage__item-link"><a href="#brozhenie-form" class="open-popup-link">узнать больше о сырье</a></div>
						</div>
						<div class="preparation-stage__item">
							<div class="preparation-stage__item-title">Перегонка и очистка самогона.
							</div>
							<div class="preparation-stage__item-text">
							Мутный самогон с "дурным" запахом и вкусом - результат небрежного отношения к технологическим требованиям, предъявляемым на всех без исключения этапах приготовления. Портят вкус и запах самогона содержащиеся в нем ядовитые сивушные масла, являющиеся нервно-паралитическими ядами.
							</div>
							<div class="preparation-stage__item-link"><a href="#peregonka-form" class="open-popup-link">узнать подробнее</a></div>
						</div>
						<div class="preparation-stage__item">
							<div class="preparation-stage__item-title">«Облагораживание» самогона и наслаждение готовым напитком.
							</div>
							<div class="preparation-stage__item-text">
							т.е. придание самогону определенных вкусовых, ароматических и цветовых качеств
							</div>
							<div class="preparation-stage__item-link"><a href="#preparation-form" class="open-popup-link">получить консультацию</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="products-tabs">
			<div class="section-container">
				<ul class="tabs">
					<li class="tab-link" data-tab="tab-1"><span>«Малиновка» капитан</span></li>
					<li class="tab-link" data-tab="tab-2"><span>«Малиновка» щукина</span></li>
					<li class="tab-link" data-tab="tab-3"><span>«Малиновка» щукина PRO</span></li>
					<li class="tab-link" data-tab="tab-4"><span>«Малиновка» Бутлегер</span></li>
					<li class="tab-link" data-tab="tab-5"><span>«Малиновка» муншайн</span></li>
				</ul>
			</div>
			<div class="products-tabs__items">
				<div class="section-container">
					<div id="tab-1" class="tab-content current products-tabs__item">
						<div class="products-tabs__item-left">
							<div class="products-tabs__item-title">СОВЕРШЕННый <span>«Малиновка» капитан</span> У ВАС ДОМА</div>
							<div class="products-tabs__item-form">
								<form action="#">
									<span class="label">Объем</span>
									<div class="form-choice">
										<input id="radio01" type="radio" name="volume" value="12"><label for="radio01"><span><span></span></span> 12л</label>
										<input id="radio02" type="radio" name="volume" value="24"><label for="radio02"><span><span></span></span> 24л</label>
										<span class="price">11900р</span>
										<input type="hidden" name="price" value="11900р">
									</div>
									<div class="form-buttons">
										<a href="#" class="more">Подробнее</a>
										<a href="#product-order-form-kapitan" class="buy open-popup-link">Купить</a>
									</div>
								</form>
							</div>
						</div>
						<div class="products-tabs__item-center">
							<img src="img/product-1.png" alt="Малиновка капитан">
						</div>
						<div class="products-tabs__item-right">
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВСТРОЕННЫЙ ПОПУГАЙ
								</div>
								<div class="products-tabs__option-text">
									для своевременного отбора голов и хвостов
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									2 РЕЖИМА РАБОТЫ
								</div>
								<div class="products-tabs__option-text">
									«Самогонный аппарат» и «Спиртовой»
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВЫСОКАЯ СТЕПЕНЬ ОЧИСТКИ
								</div>
								<div class="products-tabs__option-text">
									очистка от сивушных масел на 100%
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									УСИЛЕННЫЙ БАК
								</div>
								<div class="products-tabs__option-text">
									толщина стенок 1,5мм, дно толщиной 2мм
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									РАБОТАЕТ НА ИНДУКЦИИ
								</div>
								<div class="products-tabs__option-text">
									подходит для всех типов плит
								</div>
							</div>
						</div>
					</div>
					<div id="tab-2" class="tab-content products-tabs__item">
						<div class="products-tabs__item-left">
							<div class="products-tabs__item-title">СОВЕРШЕННый <span>«Малиновка» щукина</span> У ВАС ДОМА</div>
							<div class="products-tabs__item-form">
								<form action="#">
									<span class="label">Объем</span>
									<div class="form-choice">
										<input id="radio01" type="radio" name="volume" value="12"><label for="radio01"><span><span></span></span> 12л</label>
										<input id="radio02" type="radio" name="volume" value="24"><label for="radio02"><span><span></span></span> 24л</label>
										<span class="price">11900р</span>
										<input type="hidden" name="price" value="11900р">
									</div>
									<div class="form-buttons">
										<a href="#">Подробнее</a>
										<input type="submit" value="Купить">
									</div>
								</form>
							</div>
						</div>
						<div class="products-tabs__item-center">
							<img src="img/product-tab-1.png" alt="Малиновка капитан">
						</div>
						<div class="products-tabs__item-right">
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВСТРОЕННЫЙ ПОПУГАЙ
								</div>
								<div class="products-tabs__option-text">
									для своевременного отбора голов и хвостов
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									2 РЕЖИМА РАБОТЫ
								</div>
								<div class="products-tabs__option-text">
									«Самогонный аппарат» и «Спиртовой»
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВЫСОКАЯ СТЕПЕНЬ ОЧИСТКИ
								</div>
								<div class="products-tabs__option-text">
									очистка от сивушных масел на 100%
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									УСИЛЕННЫЙ БАК
								</div>
								<div class="products-tabs__option-text">
									толщина стенок 1,5мм, дно толщиной 2мм
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									РАБОТАЕТ НА ИНДУКЦИИ
								</div>
								<div class="products-tabs__option-text">
									подходит для всех типов плит
								</div>
							</div>
						</div>
					</div>
					<div id="tab-3" class="tab-content products-tabs__item">
						<div class="products-tabs__item-left">
							<div class="products-tabs__item-title">СОВЕРШЕННый <span>«Малиновка» щукина PRO</span> У ВАС ДОМА</div>
							<div class="products-tabs__item-form">
								<form action="#">
									<span class="label">Объем</span>
									<div class="form-choice">
										<input id="radio01" type="radio" name="volume" value="12"><label for="radio01"><span><span></span></span> 12л</label>
										<input id="radio02" type="radio" name="volume" value="24"><label for="radio02"><span><span></span></span> 24л</label>
										<span class="price">11900р</span>
										<input type="hidden" name="price" value="11900р">
									</div>
									<div class="form-buttons">
										<a href="#">Подробнее</a>
										<input type="submit" value="Купить">
									</div>
								</form>
							</div>
						</div>
						<div class="products-tabs__item-center">
							<img src="img/product-tab-1.png" alt="Малиновка капитан">
						</div>
						<div class="products-tabs__item-right">
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВСТРОЕННЫЙ ПОПУГАЙ
								</div>
								<div class="products-tabs__option-text">
									для своевременного отбора голов и хвостов
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									2 РЕЖИМА РАБОТЫ
								</div>
								<div class="products-tabs__option-text">
									«Самогонный аппарат» и «Спиртовой»
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВЫСОКАЯ СТЕПЕНЬ ОЧИСТКИ
								</div>
								<div class="products-tabs__option-text">
									очистка от сивушных масел на 100%
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									УСИЛЕННЫЙ БАК
								</div>
								<div class="products-tabs__option-text">
									толщина стенок 1,5мм, дно толщиной 2мм
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									РАБОТАЕТ НА ИНДУКЦИИ
								</div>
								<div class="products-tabs__option-text">
									подходит для всех типов плит
								</div>
							</div>
						</div>
					</div>
					<div id="tab-4" class="tab-content products-tabs__item">
						<div class="products-tabs__item-left">
							<div class="products-tabs__item-title">СОВЕРШЕННый <span>«Малиновка» Бутлегер</span> У ВАС ДОМА</div>
							<div class="products-tabs__item-form">
								<form action="#">
									<span class="label">Объем</span>
									<div class="form-choice">
										<input id="radio01" type="radio" name="volume" value="12"><label for="radio01"><span><span></span></span> 12л</label>
										<input id="radio02" type="radio" name="volume" value="24"><label for="radio02"><span><span></span></span> 24л</label>
										<span class="price">11900р</span>
										<input type="hidden" name="price" value="11900р">
									</div>
									<div class="form-buttons">
										<a href="#">Подробнее</a>
										<input type="submit" value="Купить">
									</div>
								</form>
							</div>
						</div>
						<div class="products-tabs__item-center">
							<img src="img/product-tab-1.png" alt="Малиновка капитан">
						</div>
						<div class="products-tabs__item-right">
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВСТРОЕННЫЙ ПОПУГАЙ
								</div>
								<div class="products-tabs__option-text">
									для своевременного отбора голов и хвостов
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									2 РЕЖИМА РАБОТЫ
								</div>
								<div class="products-tabs__option-text">
									«Самогонный аппарат» и «Спиртовой»
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВЫСОКАЯ СТЕПЕНЬ ОЧИСТКИ
								</div>
								<div class="products-tabs__option-text">
									очистка от сивушных масел на 100%
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									УСИЛЕННЫЙ БАК
								</div>
								<div class="products-tabs__option-text">
									толщина стенок 1,5мм, дно толщиной 2мм
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									РАБОТАЕТ НА ИНДУКЦИИ
								</div>
								<div class="products-tabs__option-text">
									подходит для всех типов плит
								</div>
							</div>
						</div>
					</div>
					<div id="tab-5" class="tab-content products-tabs__item">
						<div class="products-tabs__item-left">
							<div class="products-tabs__item-title">СОВЕРШЕННый <span>«Малиновка» муншайн</span> У ВАС ДОМА</div>
							<div class="products-tabs__item-form">
								<form action="#">
									<span class="label">Объем</span>
									<div class="form-choice">
										<input id="radio01" type="radio" name="volume" value="12"><label for="radio01"><span><span></span></span> 12л</label>
										<input id="radio02" type="radio" name="volume" value="24"><label for="radio02"><span><span></span></span> 24л</label>
										<span class="price">11900р</span>
										<input type="hidden" name="price" value="11900р">
									</div>
									<div class="form-buttons">
										<a href="#">Подробнее</a>
										<input type="submit" value="Купить">
									</div>
								</form>
							</div>
						</div>
						<div class="products-tabs__item-center">
							<img src="img/product-tab-1.png" alt="Малиновка капитан">
						</div>
						<div class="products-tabs__item-right">
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВСТРОЕННЫЙ ПОПУГАЙ
								</div>
								<div class="products-tabs__option-text">
									для своевременного отбора голов и хвостов
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									2 РЕЖИМА РАБОТЫ
								</div>
								<div class="products-tabs__option-text">
									«Самогонный аппарат» и «Спиртовой»
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									ВЫСОКАЯ СТЕПЕНЬ ОЧИСТКИ
								</div>
								<div class="products-tabs__option-text">
									очистка от сивушных масел на 100%
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									УСИЛЕННЫЙ БАК
								</div>
								<div class="products-tabs__option-text">
									толщина стенок 1,5мм, дно толщиной 2мм
								</div>
							</div>
							<div class="products-tabs__option">
								<div class="products-tabs__option-title">
									РАБОТАЕТ НА ИНДУКЦИИ
								</div>
								<div class="products-tabs__option-text">
									подходит для всех типов плит
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="unpacking">
			<div class="section-container">
				<div class="unpacking-title">
					распаковка самогонных<br>апаратов малиновка
				</div>
				<div class="unpacking-video-items">
					<div class="unpacking-video-item">
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/ggej-C82rI0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="unpacking-video-item">
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/ggej-C82rI0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="unpacking-video-item">
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/ggej-C82rI0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="unpacking-video-item">
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/ggej-C82rI0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</section>
		<section class="delivery">
			<div class="section-container">
				<div class="delivery-title">
					бесплатная ДОСТАВКА ПО РОССИИ<br>с оплатой при получении
				</div>
				<div class="delivery-subtitle">
					при заказе свышее <span>5000 рублей</span>
				</div>
				<div class="delivery-benefits">
					<div class="delivery-benefits__item">
						Оперативная <span>доставка<br>от 1-3 дней</span>
					</div>
					<div class="delivery-benefits__item">
						<span>Гарантия</span> качества<br>2 года
					</div>
					<div class="delivery-benefits__item">
						Возврат товара<br><span>в течение 30 дней</span>
					</div>
					<div class="delivery-benefits__item">
						Возможность оплаты<br>картой <span>VISA, MasterCard</span>
					</div>
				</div>
				<div class="delivery-ways-container">
					<div class="delivery-ways__left">
						<div class="delivery-ways__left-title">
							Способы доставки:
						</div>
						<div class="delivery-ways__left-post-rf">
							<img src="img/post-rf.png" alt="">
						</div>
						<div class="delivery-ways__left-item-text">
							Наложенным платежом!
						</div>
						<div class="delivery-ways__left-item-link">
							курьерскими службами
						</div>
						<div class="delivery-ways__left-item-link">
							транспортными компаниями
						</div>
					</div>
					<div class="delivery-ways__right">
						<div class="delivery-ways__right-title">
							Оплата:
						</div>
						<div class="delivery-ways__right-text">
							Производится: наличными курьеру или в пунктах<br>выдачи - при получении заказа.
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="consultation">
			<div class="section-container">
				<div class="consultation-title">
					Закажите бесплатную консультацию
				</div>
				<div class="consultation-form__container">
					<form action="">
						<input type="text" name="name" id="name" placeholder="Ваше имя" required>
						<input type="text" name="phone" id="phone" placeholder="Ваш телефон">
						<input type="submit" value="Заказать консультацию">
					</form>
				</div>
			</div>
		</section>
		<?php require_once 'footer.php'; ?>
		<?php require_once 'forms.php'; ?>
		<?php require_once 'scripts.php'; ?>
</body>
</html>