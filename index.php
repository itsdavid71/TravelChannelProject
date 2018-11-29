    <?php include('templates/header.php') ?>
    <div class="slide-back">
        <div class="slide-main">
            <div class="slide">
                <div class="window-slide">
                    Если у вас возникли вопросы<br>
                    Позвоните нам
                    <h2>+7 (999)-123-23-23 <br>
                    <a href="#" class="link-2" id="close">Закрыть</a>
                </div>
            </div>
        </div>
    </div>  
    <main>
        <div class="photo">
            <div class="black">
                <div class="title">
                    <span>Добро пожаловать</span>
                    <h1>на Travel Channel</h1>
                    <div class="button">
                        <a href="#information" id="information-btn">Информация</a>
                    </div>
                    <div class="social-main">
                        <div class="social-buttons">
                            <div class="vk">
                                <button class="link" id="vk-btn">Мы Вконтакте</button> <br>
                                <div class="vk-div">
                                    <button class="link-2" id="vk-link">Перейти в ВК</button>
                                </div>
                            </div>
                            <div class="instagram">
                                <button class="link" id="inst-btn">Мы в Инстаграме</button> <br>
                                <div class="inst-div">
                                    <button class="link-2" id="inst-link">Перейти в Инстаграм</button>
                                </div>
                            </div>
                            <div class="facebook">
                                <button class="link" id="facebook-btn">Мы на Facebook</button> <br>
                                <div class="facebook-div">
                                    <button class="link-2" id="facebook-link">Перейти на FB</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-box" style="opacity: 0;">
            <div class="name">Окунись в атмосферу</div>
            <div class="slider-area">
                <div class="slider-center">
                    <div class="slider-text">Хочешь увидеть всю эту красоту вживую? <br><a class="slider-button" href="">Напиши нам</a></div>
                </div>
            </div>
            <div class="slider">
                <img src="img/photo6.jpg" alt="6">
                
                <img src="img/photo.jpg" alt="1">
                <img src="img/photo2.jpg" alt="2">
                <img src="img/photo3.jpg" alt="3">
                <img src="img/photo4.jpg" alt="4">
                <img src="img/photo5.jpg" alt="5">
                <img src="img/photo6.jpg" alt="6">
    
                <img src="img/photo.jpg" alt="1"> 
                
            </div>
            
        </div> 
        <div id="faq" style="opacity: 0;">
            <div class="name">Вопросы - ответы</div>
            <div class="content">
                <div class="jquery">
                    <?php include('templates/faq.php'); ?>    
                </div>
            </div>
        </div>
        <div id="information" style="opacity: 0;">
            <div class="name">Путешествуй красиво! Блог в фотографиях</div>
            <div class="content">
                <p>Представьте себе все лучшее, что есть в России: широкие просторы, разнообразная природа, щедрая душа, девушки особой красоты, баня в конце концов. Добавьте к этому все то, чем так привлекательна Москва: гастрономические рестораны, безудержные вечеринки, звезды ТВ и инстаграмма вокруг. Взболтайте но не смешивайте и получите Розу Хутор 2018 - правильный баланс здорового лайфстайла и роскоши.</p><br>
                <p>Красная поляна также радует своей доступностью: перелет занимает 2,5 часа, иметь визу необходимости нет, заказать такси можно через привычное приложение за 1400 руб., а время в пути от аэропорта до отеля составляет менее часа! Ну, где еще такое есть? При этом местная инфраструктура не просто ничуть не уступает Альпам, но и даже предвосхищает ожидания: здесь вкуснее, уютнее и веселее. Я уже не говорю об удивительном контрасте температур - наверху зима, а внизу лето!</p> <br>
                <p>Более того, несмотря на весну за окном, успеть все это оценить лично совсем не поздно - рекордное количество снега обещает продлить сезон на весь апрель, а курорт тем временем предлагает на этот период очень привлекательные цены!</p> <br>
                <p>В общем, какое бы время вы не выбрали, Роза Хутор удивит и подарит желание говорить о России с восторгом!</p>
                <div class="country-btn">
                    <button id="country" style="background: white; color: black;">Больше информации</button>
                </div>
            </div>
        </div>
        <div class="hide">
            <div class="trips">
                <div class="trips-block">
                    <img class="trips-img" src="img/moscow.png" alt=""><br>
                    <h3> Путешствие по России</h3>
                    <div class="trips-strip"></div>
                    <p>Самые интересные уголки России <br>Самые необычные маршруты</p>
                </div>
                <div class="trips-block">
                    <img class="trips-img" src="img/big-ben.png" alt=""><br>
                    <h3> Путешствие по Европе</h3>
                    <div class="trips-strip"></div>
                    <p>Разные страны, разные культуры, исторические места и все самое интересное в современно Европе!</p>
                </div>
                <div class="trips-block">
                    <img class="trips-img" src="img/pyramids.png" alt=""><br>
                    <h3> Путешствие по Африке</h3>
                    <div class="trips-strip"></div>
                    <p>Дикая природа,крокодилы, обезьяны, сафари на джипах, гостиницы на деревьях и самые опасные приключения ждут тебя!</p>
                </div>
                <div class="trips-block">
                    <img class="trips-img" src="img/north-america.png" alt=""><br>
                    <h3> Путешствие по Северной Америке</h3>
                    <div class="trips-strip"></div>
                    <p>Конечно, мы проедем через всю Америку и побываеи как в главных туристических местах, так и в уголках, где почти не ступала нога человека.</p>
                </div>
                <div class="trips-block">
                    <img class="trips-img" src="img/south-america.png" alt=""><br>
                    <h3> Путешствие по Южной Америке</h3>
                    <div class="trips-strip"></div>
                    <p>Южная Америка - место, где хочет побывать каждый. Богатые районы и заброшенные фавелы, опасности и приключения, темпераментные люди и многое другое на страницах наших путешествий.</p>
                </div>
                <div class="trips-block">
                    <img class="trips-img" src="img/kangaroo.png" alt=""><br>
                    <h3> Путешствие по Австралии</h3>
                    <div class="trips-strip"></div>
                    <p>Мы побываем на отдельном континенте. Почему думая об Австралии, сразу представляешь кенгуру, хотя это совершенно не символ страны.</p>
                </div>
            </div>
        </div>
    </main>
    
    <?php include('templates/footer.php') ?>