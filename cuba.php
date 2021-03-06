<section class="bg-gradient text-light p-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12">
                <div class="space-lg pb-0">
                    <h1 class="display-4 no-wrap">Куба</h1>
                    <div class="lead">
                        <b>Столица</b>: Гавана<br>
                        <b>Официальный язык</b>: испанский<br>
                        <b>Валюта</b>: CUP - национальное песо и CUC - конвертируемое песо<br>
                        <b>Территория</b>: 110 860 км²<br>
                        <b>Население</b>: 11.5 млн человек<br>
                        <b>Часовой пояс</b>: UTC -4. Разница с Астаной -10 часов
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
                <p>Куба расположена на стыке Северной, Центральной и Южной Америки, на острове Куба (самом крупном в Вест-Индии), острове Хувентуд, а также на примыкающих к ним около 1600 мелких островах и коралловых рифах, принадлежащих к группе Больших Антильских островов. Для побережья характерны глубокие заливы и множество удобных бухт. Остров обрамлён рифами и другими коралловыми образованиями.</p>

                <!--Карта-->
                <?= $this->render('_map', $country) ?>

                <p>Название «Куба» имеет происхождение в ныне мёртвых языках индейцев таино, населявших Большие Антильские острова. Точный смысл названия неясен, есть точка зрения, что оно может обозначать «место, где плодородная земля обильна» (cubao), либо «прекрасное место» (coabana). Есть также гипотеза, что Христофор Колумб назвал остров в честь селения Куба в районе Бежа в Португалии.</p>
                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="CUBA" src="https://i.vimeocdn.com/video/606691017_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/194659373?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">CUBA<br>© Benjamin Aubray 2016</figcaption>
                </figure>

                <!--<hr>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Куба-Гавана 2015" src="https://i.vimeocdn.com/video/531031879_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/136495940?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Куба-Гавана 2015<br>© PavlovaLena 2015</figcaption>
                </figure>-->
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
            <li class="nav-item"><a class="nav-link" href="#auto">Авто</a></li>
            <li class="nav-item"><a class="nav-link" href="#health">Здравоохранение</a></li>
            <li class="nav-item"><a class="nav-link" href="#communication">Связь</a></li>
            <li class="nav-item"><a class="nav-link" href="#sight">Что посмотреть</a></li>
        </ul>
    </div>
</nav>

<section id="culture">
    <div class="container">
        <h2>Культура и традиции</h2>

        <p>Карибское государство Куба полно разностороннего, динамического, и талантливого населения. Изначально на территории страны селились испанцы и африканцы, привнесшие смесь культур, и знаменитые, прежде всего, своими музыкальными талантами. Кубинцев часто можно встретить поющими на улицах, или играющими на музыкальных инструментах.</p>

        <p>В стране очень распространена живопись. Известные художники, которые родом из Кубы – Роберто Фабело, Педро Пабло Олива, Мариано Родригес, и многие другие. В музеях, расположенных в Старой Гаване, выставлены разные образцы произведений искусства – мебель, столовое серебро, гончарные изделия, стеклянные изделия, и многие предметы из колониальной эпохи.</p>

        <p>В стране очень популярны разные музыкальные жанры и стили – от кубинской сальсы до латинского джаза, от мамбо до гуагуанко. Сон, румба, ча-ча-ча, бибоп джаз, чаранга, и другие музыкальные формы очень популярны в стране. Благодаря афро-кубинской духовной музыки сохранилась их религия, являющаяся смесью йорубанского мистицизма с католичеством.</p>

        <h5>Праздники и памятные даты</h5>

        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Нерабочие дни:</h6>
                <ul>
                    <li>1, 2 января – День освобождения</li>
                    <li>1 мая — День Труда</li>
                    <li>26 июля — День Национального восстания</li>
                    <li>10 октября — Годовщина начала войны за независимость Кубы</li>
                    <li>25 декабря — Рождество</li>

                </ul>
            </div>
        </div>
        <div class="card bg-secondary">
            <div class="card-body">
                <h6 class="title-decorative">Памятные даты, рабочие дни:</h6>
                <ul>
                    <li>28 декабря – Открытие памятника Эрнесто Че Геваре в городе Санта-Клара</li>
                    <li>14 декабря – ЮНЕСКО объявляет Старую Гавану Достоянием человечества</li>
                    <li>24 февраля – День Конституции</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="visa" class="bg-white">
    <div class="container">
        <h2>Посещение гражданами Казахстана</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Для посещения Республики Куба гражданам Казахстана необходима виза.</p>
                <p>Необходимые документы:</p>
                <ul>
                    <li>Загранпаспорт (действительный не менее 3-х (трёх) месяцев с момента окончания запрашиваемой визы)</li>
                    <li>Цветная фотография 1 шт., формат 3 х 4 см (заказывается в Центре Визовой Поддержки)</li>
                    <li>Медицинский страховой полис (заказывается в Центре Визовой Поддержки)</li>
                    <li>Подтверждение брони отеля (обязательно нужно предоставлять квитанцию об оплате отеля, или от турагенства документы с печатью, что все оплачено) или приглашение на испанском языке (в случае деловой поездки)</li>
                    <li>Копии авиабилетов в оба конца (заказывается в Центре Визовой Поддержки)</li>
                    <li>Студентам и школьникам понадобится справка из учебного заведения, пенсионерам — копия пенсионного удостоверения</li>
                    <li>Если Вы путешествуете с несовершеннолетним ребенком (до 18-летия), нотариально заверенное разрешение на его выезд за границу от второго родителя, нотариально заверенная копия свидительства о рождении. Ребенок в обязательном порядке должен иметь отдельный паспорт</li>
                </ul>
                <p>Срок рассмотрения визы занимает 2 недели, но и этот срок может быть увеличен по решению консула.</p>
                <p>Стоимость: 8 250 тг + 80 $ (Консульский сборы)* + для Алматы и других регионов РК, дополнительно оплачивается отправка и доставка документов.</p>

            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-v-card mr-1"></i> Безвизовый режим</div>
                                <span>до 90 дней</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div><i class="icon-news mr-1"></i> Регистрация</div>
                                <span>обязательна</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-aircraft"></i>
                        <span class="h6"><b>Прямые авиарейсы</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Баку - Астана</div>
                                <span>3 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Баку - Алматы</div>
                                <span>4 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Баку - Атырау</div>
                                <span>3 раза/нед</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Баку - Актау</div>
                                <span>5 раз/нед</span>
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

        <p>Таможенное законодательство Республики Куба, в той его части, которая касается регулирования ввоза и вывоза товаров некоммерческого назначения авиапутешественниками, имеет ряд особенностей, не характерных для многих других государств. Это обусловлено особым социально-экономическим укладом жизни населения, поэтому перед началом путешествия следует подробно изучить правила ввоза и вывоза багажа, обратившись к сайту Министерства иностранных дел, в консульство, а также в турагентство. </p>

        <h5>Спиртное и сигареты</h5>
        <p>На территорию Кубы разрешается ввозить алкогольную продукцию в объеме, не превышающем 3 литра, сигарет в количестве не более 200 шт. или до 250 г табака</p>

        <h5>Валюта</h5>
        <p>Ввоз и вывоз иностранной валюты не ограничен. Сумма свыше $5 тысяч беспрепятственно вывозится в случае, если она отмечена в декларации, заполненной при въезде в страну, или если она была на законных основаниях приобретена в стране (необходима квитанция банка). Разрешен вывоз национальной валюты в количестве до 100 песо в национальной валюте и до 200 в конвертируемых песо.</p>

        <h5>Медикаменты</h5>
        <p>Запрещен ввоз лекарств без указания марки завода-изготовителя.</p>

        <h5>Оружие и боеприпасы</h5>
        <p>Правила, регулирующие ввоз/вывоз оружия и боеприпасов, аналогичны казахстанским.</p>

        <h5>Животные</h5>
        <p>Запрещен вывоз певчих и экзотических птиц.</p>
    </div>
</section>

<section id="transport" class="bg-white">
    <div class="container">
        <h2>Транспорт</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Самым удобным видом транспорта для передвижения по территории острова является автобус.</p>
                <p>Такси является одним из самых популярных средств передвижения у туристов. Разобраться с системой кубинского такси не очень сложно, оно делится на две части: то, которым пользуются местные жители, и то, которым пользуются туристы.</p>


                <h5>Стоимость проезда</h5>
                <p>Доставка на такси из столичного аэропорта Jose Marti в город стоит ориентировочно 15—20 кубинских конв. песо.</p>
                <p>Машину на прокат можно взять, если Вам исполнился 21 год. Стоимость проката автомобиля от 60 долларов США в день в зависимости от класса машины плюс стоимость страховки. Стоимость бензина 1–1,2 доллара США за 1 литр.</p>
                <p>Средняя стоимость проезда в такси для туристов составляет один доллар за один километр.</p>

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
                                <div>Автобус</div>
                                <span>10 песо</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Такси</div>
                                <span>30 песо за час</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="auto">
    <div class="container">
        <h2>Автомобиль</h2>

        <div class="card mb-4">
            <div class="bg-secondary">
                <div class="card-body">
                    <h6 class="title-decorative">Международное водительское удостоверение</h6>
                    <p>Граждане Казахстана имеют право управлять автотранспортом на территории Кубы имея международные водительские права.</p>
                </div>
            </div>
        </div>


        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <p>Дорожное движение на Кубе правостороннее, правила дорожного движения соответствуют европейским.</p>
                <p>При этом качество дорог оставляет желать лучшего, указатели на дорогах практически отсутствуют.</p>
                <p>Машин на дорогах немного, в населенных пунктах на проезжей части множество велосипедистов и гужевых повозок. </p>
                <p>Станции техобслуживания довольно редки.</p>


            </div>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="float-right icon-credit"></i>
                        <span class="h6"><b>Стоимость топлива</b></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Бензин</div>
                                <span>1 CUC/литр</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <figure class="figure d-block">
                    <div class="video-cover box-shadow">
                        <img alt="Куба-2010" src="https://i.vimeocdn.com/video/55082259_1280x720.jpg" class="bg-image"/>
                        <div class="video-play-icon">
                            <i class="icon-controller-play"></i>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" data-src="https://player.vimeo.com/video/10488487?autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </div>
                    <figcaption class="figure-caption text-right">Куба-2010<br>© Katherine Blagova 2010</figcaption>
                </figure>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>Аренда авто</h3>
                <p>Требования прокатных контор на Кубе мало отличаются от европейских: арендовать автомобиль могут водители старше 21 года и с опытом вождения от года, а для того чтобы взять напрокат спортивный автомобиль с объемом двигателя более 1.9 литров нужно быть старше 25 лет и иметь опыт вождения от двух лет. Для заключения договора аренды, как правило, необходим заграничный паспорт, водительское удостоверение и кредитная карточка с необходимой для внесения залога суммой. Однако в некоторых компаниях путешественникам разрешается оставлять страховой депозит наличными. Водительское удостоверение международного образца прокатчики не требуют, дорожным полицейским также будет достаточно национальных прав, так как Куба входит в число стран, подписавших Конвенцию о дорожном движении.</p>
                <p>АВ среднем же прокат машины эконом-класса, на Кубе их относят к категории A, например, Kia Picanto, Hyundai Atos, VW Gol, с механической коробкой передач будет стоить от 60 CUC в сутки, автомобиль с автоматической трансмиссией будет стоить на 4-7 CUC дороже. За автомобиль среднего класса или категории B, например, Hyundai Accent, Kia Rio или Renaut Scala Expression, придется заплатить от 75 CUC за каждый день аренды.</p>
            </div>
        </div>

    </div>
</section>

<section id="health" class="bg-white">
    <div class="container">
        <h2>Здравоохранение</h2>

        <p>Эпидемиологическая обстановка в стране спокойная, тропических болезней не отмечается. </p>
        <p>В летне-осенний период есть риск заболеть лихорадкой денге (вирусное заболевание, передающееся комарами).</p>
        <p>Из-за климатических особенностей острова лицам, страдающим гипертонической болезнью, ишемической болезнью сердца, бронхиальной астмой, пребывание в стране не рекомендуется.</p>
        <p>Из животных, представляющих опасность для человека, следует отметить скорпионов, а также медуз «португальский кораблик», часто встречающихся в зимнее время.</p>
        <p>Солнце на Кубе чрезвычайно активное. Солнечные ожоги можно легко получить даже в пасмурную погоду. Поэтому следует пользоваться защитными кремами с высоким фактором защиты. </p>
        <p>Каких-либо специфических прививок перед прибытием на Кубу не требуется.</p>

        <a href="http://medical.account.travel" class="btn btn-outline-success">Оформить туристическую страховку</a>

        <!--<script src="//f.sravni.ru/f/apps/build/widgets/sravni-widgets.js"></script>
        <sravni-micro-widget type="mantravel" logo="false" partner="tonkosti.ru" theme="tonkosti.ru" data-countries="Азербайджан"><link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"><style>sravni-micro-widget{text-align: center;display: block;position:relative}a.sravni-dl{font: 300 14px 'Open Sans', sans-serif; max-width:100%px; display:inline-block; color: #a7a7a7; text-decoration: none;border-bottom:1px solid #a7a7a7;}</style></sravni-micro-widget>-->
    </div>
</section>

<section id="communication">
    <div class="container">
        <h2>Связь и коммуникации</h2>

        <div class="row justify-content-between">
            <div class="col-12 col-md-8 col-lg-7">
                <h5>Телефонная связь</h5>
                <p>Самый дешевый способ связи на Кубе. Оплачивать разговоры можно монетками или воспользоваться телефонными картами.</p>
                <p>Приобрести карты можно в аэропортах, отелях, на почте, в туристических центрах и в офисах ETECSA.</p>

                <h5>Мобильная связь</h5>
                <p>Работает роуминг, а также имеется возможность аренды сотовых телефонов местного оператора <a href="http://www.etecsa.cu/?page=inicio" target="_blank">перейти на сайт</a>.</p>

                <h5>Интернет</h5>
                <p>Многие отели Гаваны и Варадеро имеют доступ к интернету и Wi-Fi. Цены за один час подключения к интернету в отеле колеблются между $0,32 и $0,4. Доступ в интернет предоставляется по специальной карточке, которую необходимо купить.</p>
                <p>Несмотря на развитие интернета на Кубе, он не очень стабилен и имеет медленную скорость передачи данных, от 150 Кб/с до 1 Мб/с, в зависимости от места подключения и времени суток.</p>
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
                                <div>Пожарная служба</div>
                                <span>881-11-15</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Полиция</div>
                                <span>867-77-77</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Скорая помощь</div>
                                <span>204-28-11</span>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div>Аэропорт</div>
                                <span>649-55-66</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sight" class="bg-white">
    <div class="container">
        <!--Блок экскурсий-->
        <?= $this->render('_excursions', $country) ?>
    </div>
</section>