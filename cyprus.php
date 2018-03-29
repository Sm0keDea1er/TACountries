<section class="bg-gradient text-light p-0">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-12">
				<div class="space-lg pb-0">
					<h1 class="display-4 no-wrap">Республика Кипр</h1>
					<div class="lead">
						<b>Столица</b>: Никосия<br>
						<b>Официальный язык</b>: греческий, турецкий<br>
						<b>Валюта</b>: EUR - евро<br>
						<b>Территория</b>: 9 251 кв. км.<br>
						<b>Население</b>: 1 170 000 человек<br>
						<b>Часовой пояс</b>: UTC +2. Разница с Астаной -4 часа
					</div>
				</div>
			</div>
		</div>
	</div>
	<svg class="decorative-divider" preserveAspectRatio="none" viewBox="0 0 100 100">
		<polygon fill="#F8F9FB" points="0 100 100 100 100 0"></polygon>
	</svg>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<p>Республика Кипр — это северная, небольшая часть острова Кипр в восточном Средиземном море. Остров известен своими пляжами с чистейшей водой, белоснежными песками и шумными ночными вечеринками, которые длятся, чуть ли не круглосуточно.</p>   

				<!--Карта-->
				<hr>
				<?= $this->render('_map', $country) ?>
				<hr>   

				<figure class="figure d-block">
					<div class="video-cover box-shadow">
						<img alt="Cyprus Timelapse" src="https://i.ytimg.com/vi/nKP8aaqG6I0/maxresdefault.jpg" class="bg-image"/>
						<div class="video-play-icon">
							<i class="icon-controller-play"></i>
						</div>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/nKP8aaqG6I0?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<figcaption class="figure-caption text-right">Cyprus Timelapse<br>© Иван Иванов 2012</figcaption>
				</figure>

				<hr>

				<figure class="figure d-block">
					<div class="video-cover box-shadow">
						<img alt="Тайны Аббатства Беллапаис. Истории Северного Кипра" src="https://i.ytimg.com/vi/MnPXwyImeTE/maxresdefault.jpg" class="bg-image"/>
						<div class="video-play-icon">
							<i class="icon-controller-play"></i>
						</div>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/MnPXwyImeTE?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<figcaption class="figure-caption text-right">Тайны Аббатства Беллапаис. Истории Северного Кипра<br>© Наш Северный Кипр 2018</figcaption>
				</figure>

			</div>
		</div>
	</div>


</section>

<nav id="scrollspy-navbar" class="bg-white navbar sticky-top">
	<div class="container">
		<ul class="nav nav-pills nav-fill">
			<li class="nav-item"><a class="nav-link" href="#culture">Культура и традиции</a></li>
			<li class="nav-item"><a class="nav-link" href="#visa">Въезд в страну</a></li>
			<li class="nav-item"><a class="nav-link" href="#custom">Таможня</a></li>
			<li class="nav-item"><a class="nav-link" href="#transport">Транспорт</a></li>
			<li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
			<li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
			<li class="nav-item"><a class="nav-link" href="#money">Деньги</a></li>
			<li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
		</ul>
	</div>
</nav>

<section id="culture">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-12 col-md-8 col-lg-7">
				<h2>Культура и традиции</h2>

				<p>Находясь на Кипре, вы столкнетесь с историей острова. Здесь сохранились греческие храмы, римские мозаики и фрески, которые, несомненно, влияют на творчество современных художников и ремесленников.</p>
				<p>Несомненно, Кипр,  это не только море и пляжи, это так же место где можно ознакомится с винодельческим ремеслом. Вкусить вкус вина можно на винодельне Василикон или Ayia Mavri.</p>

				<h5>Праздничные и нерабочие дни</h5>

				<div class="card bg-secondary">
					<div class="card-body">
						<h6 class="title-decorative">Нерабочие дни:</h6>
						<ul>
							<li>1 января — Новый год</li> 
							<li>6 января — Крещение</li>  
							<li>25 марта — Национальный день Греции</li>
							<li>1 апреля — Национальный праздник Кипра</li>
							<li>Светлый понедельник (понедельник после Пасхи)</li>
							<li>1 мая — Международный день труда</li>  
							<li>Катаклизмос (фестиваль в честь Великого потопа), понедельник после Троицы</li>  
							<li>15 августа — Успение</li> 
							<li>1 октября — День независимости Кипра</li>  
							<li>28 октября — Национальный праздник Греции</li>
							<li>24 декабря — Канун Рождества</li>     
							<li>25 декабря — Рождество</li>    
							<li>26 декабря — Святки</li>     
						</ul>
					</div>
				</div>
				<p>Первый день недели — воскресенье</p>
			</div>
			<div class="col-12 col-md-4">
				<div class="card">
					<div class="card-header">
						<i class="float-right icon-thermometer"></i>
						<span class="h6"><b>Климат</b></span>
					</div>
					<div class="list-group-item">
						<p>Мягкий субтропический</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Лето</div>
								<span>от +25 до +35 °С</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Зима</div>
								<span>от +10 до +15 °С</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="card">
					<div class="card-header">
						<i class="float-right icon-light-bulb"></i>
						<span class="h6"><b>Электросеть</b></span>
					</div>
					<div class="list-group-item">
						<p>На Кипре используются электрические розетки «британского» формата – с тремя отверстиями.</p>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Напряжение</div>
								<span>240 Вольт</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Частота</div>
								<span>50Hz</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="card">
					<div class="card-header">
						<i class="float-right icon-shield"></i>
						<span class="h6"><b>Безопасность</b></span>
					</div>
					<div class="list-group-item">
						<p>Преступность в Республике Кипр низкая, но, тем не менее, встречаются случаи кражи у туристов.</p>
						<p>Стоит, отметить, что остров Кипр – это не единое государство, крайне нежелательно посещать территории, оккупированные турецкими войсками (две зоны на севере острова), а так же английские военные базы.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="visa" class="bg-white">
	<div class="container">
		<h2>Посещение гражданами Казахстана</h2>

		<div class="row justify-content-between">
			<div class="col-12 col-md-8 col-lg-7">

				<p>Документы необходимые для оформления туристской визы на Кипр:</p>
				<ul>
					<li>Паспорт, действительный не менее 6 месяцев, со дня подачи заявления</li>
					<li>Цветное фото 2 шт.; формата 3,5 × 4,5 см</li>
					<li>Справка с работы с указанием оклада в евро или эквивалент</li>
					<li>Пенсионерам - пенсионное удостоверение</li>
					<li>Студентам – студенческий билет (вместо справки)</li>
					<li>Детям - свидетельство о рождении</li>
					<li>Страховой полис на все время пребывания настоятельно рекомендуется для Вашей безопасности и экономии ваших денег</li>
					<li>Брони авиабилетов туда и обратно</li>
				</ul> 
				<p>Срок оформления от 7 до 12 рабочих дней.</p> 
				<p>Стоимость: 10500 тг + 120 € консульский сбор </p>
				<p>Данная информация является ознакомительной и не является руководством к получению визы.</p>

			</div>
			<div class="col-12 col-md-4">
				<div class="card">
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div><i class="icon-v-card mr-1"></i>Нужна виза</div>
								<span>до 90 дней</span>
							</div>
						</li>
					</ul>
				</div>

				<div class="card">
					<div class="card-header">
						<i class="float-right icon-info"></i>
						<span class="h6"><b>Транспортное сообщение</b></span>
					</div>
					<div class="list-group-item">
						<p>Прямых рейсов из Казахстана, к сожалению, не существует, нужна минимум одна пересадка.</p>
						<p>Перелеты Алматы-Ларнака, Астана-Ларнака с 1 пересадкой через: Москву (Аэрофлот), Киев (МАУ), Астана-Ларнака с 1 пересадкой через Минск (Belavia).</p>
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						<i class="float-right icon-aircraft"></i>
						<span class="h6"><b>Авиарейсы</b></span>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Никосия - Астана</div>
								<span>9 раза/нед</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Никосия - Алматы</div>
								<span>13 раз/нед</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Никосия - Атырау</div>
								<span>8 раза/нед</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Никосия - Актау</div>
								<span>14 раз/нед</span>
							</div>
						</li>
					</ul>
					<div class="card-footer p-3">
						<a href="http://avia.account.travel" class="btn btn-block btn-outline-success">Подобрать рейс</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="custom">
	<div class="container">
		<h2>Таможенный контроль</h2>

		<p>Запрещено ввозить денежные средства, сумма которых превышает 10 000 евро, при не соблюдении данного пункта нарушитель карается штрафом в размере  50 000 евро и конфискацией денежных средств. </p>

		<h5>Ввоз алкогольной и табачной продукции</h5>
		<p>Ввоз спиртных напитков и табачных изделий на территорию Республики Кипр разрешается только для личного пользования.</p>
		<p>Список ограничений на максимальное количество алкоголя и табака:</p>
		<ul>
			<li>1 литр крепких напитков</li>
			<li>2 литра вина</li>
			<li>16 литров пива</li>
			<li>200 сигарет</li>
			<li>100 сигарилл</li>
			<li>50 сигар</li>
			<li>250 г курительного табака</li>
		</ul>

		<h5>Ювелирные украшения и драгоценности</h5>
		<p>Необходимо заполнить декларацию при перевозе ювелирных изделий из драгметаллов или с вкраплениями драгоценных камней.</p>


		<h5>Дополнительные запреты</h5>
		<p>Так же сотрудники таможенной службы не пропустят такие вещи как:</p>
		<ul>
			<li>Наркотики</li>
			<li>Оружие. В том числе выкидные ножи и кинжалы</li>
			<li>Пиратская продукция</li>
			<li>Мёд, молочная продукция</li>
			<li>Цветы и растения</li>
		</ul>

	</div>
</section>

<section id="transport" class="bg-white">
	<div class="container">
		<h2>Транспорт</h2>

		<div class="row justify-content-between">
			<div class="col-12 col-md-8 col-lg-7">
				<p>Самым распространенным видом транспорта является такси их можно вызвать либо по телефону, либо обратившись к управляющему отеля. Стоимость такси взимается по фиксированной оплате в размере 5 евро за вызов такси и плюс 0,38 за каждый километр пройденного пути.</p>
				<p>Рейсовые автобусы курсируют между городами, билеты можно приобрести на вокзалах. Стоимость составляет 10 – 15  евро, в зависимости от расстояния.</p>
				<p>На острове между городами также ходят маршрутные такси, стоимость проезда на которых не превышает 15 евро. Маршрутки совершают несколько остановок в городах, что может стать альтернативой такси в некоторых случаях.</p>
				<p>Маршрутное междугороднее такси делает несколько остановок в каждом городе.</p>

				<h5>Дорожное движение</h5>
				<p>На острове левосторонне движение. Руль у автомобилей расположен справа.</p>
			</div>
			<div class="col-12 col-md-4">
				<div class="card">
					<div class="card-header">
						<i class="float-right icon-credit"></i>
						<span class="h6"><b>Стоимость проезда</b></span>
					</div>
					<ul class="list-group list-group-flush">                    

						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Рейсовый автобус</div>
								<span>15 EUR</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Маршрутное такси</div>
								<span>15 EUR</span>
							</div>
						</li>
						<li class="list-group-item">
							<div class="d-flex justify-content-between">
								<div>Такси</div>
								<span>6 EUR</span>
							</div>
						</li>

					</ul>
				</div>
				<figure class="figure d-block">
					<div class="video-cover box-shadow">
						<img alt="Общественный транспорт на Кипре. Лимассол. Все об автобусах: расписание, цены, правила" src="https://i.ytimg.com/vi/WhGm7IMq0BQ/maxresdefault.jpg" class="bg-image"/>
						<div class="video-play-icon">
							<i class="icon-controller-play"></i>
						</div>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" data-src="https://www.youtube.com/embed/WhGm7IMq0BQ?autoplay=1&rel=0&showinfo=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<figcaption class="figure-caption text-right">Общественный транспорт на Кипре. Лимассол. Все об автобусах: расписание, цены, правила<br>© Milya's Blog 2017</figcaption>
				</figure>
			</div>
		</div>
	</div>
</section>

<section id="health" >
	<div class="container">
		<h2>Здравоохранение</h2>

		<p>Перед поездкой на Кипр, каких либо вакцинаций делать не нужно.</p>
		<p>В непредвиденных ситуациях связанных с угрозой вашему здоровью вам окажу медицинскую помощь в государственных лечебных заведениях Кипра. Помощь является бесплатной.</p>

		<a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>

                    <!--<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
                    	<sravni-micro-widget type="mantravel" logo="false" partner="tonkosti.ru" theme="tonkosti.ru" data-countries="Азербайджан"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px 'Open Sans', sans-serif; max-width:100%px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style></sravni-micro-widget>-->
                    </div>
                </section>

                <section id="communication" class="bg-white">
                	<div class="container">
                		<h2>Связь и коммуникации</h2>

                		<div class="row justify-content-between">
                			<div class="col-12 col-md-8 col-lg-7">                       

                				<h5>Мобильная связь</h5>
                				<p>В отрасли сотовой связи присутствуют два крупных оператора — CYTA и MTN.</p>
                				<p>Чтобы приобрести сим-карту, не нужны, какие-либо документы.</p>
                				<p>Стоимость:</p>
                				<ul>
                					<li>CYTA – 25 евро</li>
                					<li>MTN – 12,5 евро</li>
                				</ul>

                				<h5>Интернет</h5>
                				<p>За интернетом на Кипре далеко ходить не нужно. Очень много интернет кафе, можно найти Wi-Fi в ресторанах и в отелях, в последних он не всегда бесплатен.</p>
                				<p>Если вам нужен мобильный интернет, то можете выбрать тарифный план у одного из операторов:</p>
                				<ul>
                					<li>Cyta Vodafone – <a href="https://cyta.com.cy/personal">https://cyta.com.cy</a></li>
                					<li>MTN – <a href="http://www.mtn.com.cy/en/prepaid/top-up-information/">http://www.mtn.com.cy/en</a></li>
                					<li>PrimeTel – <a href="https://my.primetel.com.cy/Mobile/MobileItems.aspx?lang=en">https://my.primetel.com.cy</a></li>
                				</ul>

                			</div>
                			<div class="col-12 col-md-4">
                				<div class="card">
                					<div class="card-header">
                						<i class="float-right icon-old-phone"></i>
                						<span class="h6"><b>Полезные телефоны</b></span>
                					</div>
                					<ul class="list-group list-group-flush">
                						<li class="list-group-item">
                							<div class="d-flex justify-content-between">
                								<div>Аэропорт Ларнаки</div>
                								<span>24-643-000</span>
                							</div>
                						</li>
                						<li class="list-group-item">
                							<div class="d-flex justify-content-between">
                								<div>Аэропорт Пафоса</div>
                								<span>26-422-833</span>
                							</div>
                						</li>
                						<li class="list-group-item">
                							<div class="d-flex justify-content-between">
                								<div>Справочная служба</div>
                								<span>118-92</span>
                							</div>
                						</li>
                						<li class="list-group-item">
                							<div class="d-flex justify-content-between">
                								<div>Телефон спасения</div>
                								<span>199 или 112</span>
                							</div>
                						</li>                              
                					</ul>
                				</div>


                			</div>
                		</div>

                	</div>
                </section>

                <section id="money">
                	<div class="container">
                		<h2>Деньги</h2>

                		<p>Официальной валютой Республики Кипр является евро (EUR)</p>

                		<h5>Банкоматы</h5>
                		<p>Кипр имеет довольно обширную сеть банкоматов, которые обслуживают такие карты как: Visa, American Express, Master Card.</p>

                		<h5>Уровень цен</h5>
                		<p>Уровень цен на Кипре находится на уровень ниже средних европейских расценок. Так сытный обед из трех блюд в хорошем ресторане обойдется в 40 евро.</p>
                		<p>Стоимость табачной и алкогольной продукции немного завышенная, пачка сигарет будет стоить 4,5 евро, а бутылка местного вина 3 евро.</p>
                		<p>Если вы собираетесь прибывать на острове долгий срок, то продукты будет дешевле покупать в супермаркетах. К примеру, килограмм говядины стоит 8,9 евро, а килограмм сыра 7,71 евро.</p>

                	</div>
                </section>


                <section id="sight" class="bg-white">
                	<div class="container">
                		<!--Блок экскурсий-->
                		<?= $this->render('_excursions', $country) ?>
                	</div>
                </section>