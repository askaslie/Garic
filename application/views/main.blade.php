<?
/** @var  $news News*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Главная — СРО РОССИИ</title>
<style>
    /*       Избавиться от лишних шрифтов

    Может ли input type="image" не передавать координаты? Если нет - всё ли ок, ничему не помешает?
    Почему, если врубить action="handler.php, эксплорер предлагает скачать, а не переходит по ссылке с параметрами? Все ли параметры получает эксплорер?
    Нет ли более простого способа сделать графическую кнопку?
    Можно ли анимировать такую кнопку без JS?
    Нормально ли использовать JS с точки зрения кроссбраузерности?

    Как выбирать элементы через один?

    Как в фотошопе разгруппировать объекты? Нужно переделать баннер, наложить текст именно на картинку, понять, как сменять кадры

    Изменяемые дивы задаём через id?

    Почему ширина шрифта в разных местах не совпадает?
    */
@font-face {
    font-family: 'proxima_nova_thextrabold';
    src: url('fonts/proximanova-xbold-webfont.eot');
    src: url('fonts/proximanova-xbold-webfont.eot?#iefix') format('embedded-opentype'),
    url('fonts/proximanova-xbold-webfont.woff') format('woff'),
    url('fonts/proximanova-xbold-webfont.ttf') format('truetype'),
    url('fonts/proximanova-xbold-webfont.svg#proxima_nova_thextrabold') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'proxima_nova_rgregular';
    src: url('fonts/proximanova-reg-webfont.eot');
    src: url('fonts/proximanova-reg-webfont.eot?#iefix') format('embedded-opentype'),
    url('fonts/proximanova-reg-webfont.woff') format('woff'),
    url('fonts/proximanova-reg-webfont.ttf') format('truetype'),
    url('fonts/proximanova-reg-webfont.svg#proxima_nova_rgregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'proxima_nova_cn_rgregular';
    src: url('fonts/proximanovacond-reg-webfont.eot');
    src: url('fonts/proximanovacond-reg-webfont.eot?#iefix') format('embedded-opentype'),
    url('fonts/proximanovacond-reg-webfont.woff') format('woff'),
    url('fonts/proximanovacond-reg-webfont.ttf') format('truetype'),
    url('fonts/proximanovacond-reg-webfont.svg#proxima_nova_cn_rgregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'proxima_nova_rgbold';
    src: url('fonts/proximanova-bold-webfont.eot');
    src: url('fonts/proximanova-bold-webfont.eot?#iefix') format('embedded-opentype'),
    url('fonts/proximanova-bold-webfont.woff') format('woff'),
    url('fonts/proximanova-bold-webfont.ttf') format('truetype'),
    url('fonts/proximanova-bold-webfont.svg#proxima_nova_rgbold') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'proxima_nova_blblack';
    src: url('fonts/proximanova-black-webfont.eot');
    src: url('fonts/proximanova-black-webfont.eot?#iefix') format('embedded-opentype'),
    url('fonts/proximanova-black-webfont.woff') format('woff'),
    url('fonts/proximanova-black-webfont.ttf') format('truetype'),
    url('fonts/proximanova-black-webfont.svg#proxima_nova_blblack') format('svg');
    font-weight: normal;
    font-style: normal;

}
    /*Скругление всех блоков, где все углы по 5*/
.admOrder, .infoMenuWrap, .inputwrap, .inputwrap input[type="text"], .inputwrap input[type="image"], .topmenu, .banner, .banner img, nav, .news, .reviews, #content, .floaterLeft, .floaterRight{
    -webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;
}
    /*Дефолтная тень от блоков*/
.topmenu, .banner, nav, .news, .reviews, #content {
    box-shadow: 0 0 10px rgb(200, 200, 200);
}
    /*Дефолтный отступ от предыдущего элемента*/
.banner, aside, .news, .reviews, #content {
    margin-top: 12px;
}
.inputwrap, nav, .news, #content {
    background: white;
}
body {
    font-family: 'proxima_nova_rgregular', sans-serif;
    margin: 0;
    border-top: 7px solid rgb(217, 0, 0);
    background: rgb(245,245,245);
}
.layout {
    width: 980px;
    margin: auto;
}
.logo, .telephone, .infomenu {
    display: table;
    height: 110px;
    float: left;
}
.logo {
    width: 361px;
    font-size: 32pt;
    font-family: 'proxima_nova_thextrabold';
    padding-left: 9px;
}
.logo, .telLeft {color: rgb(23, 58, 160);}
.telRight {
    color: rgb(186, 0, 0);
}
.telephone {
    width: 240px;
    text-align: center;
}
.infomenu {/*Костыль: отступ слева, чтобы ужать блок по ширине*/
    margin-left: 90px;
    width: 280px;
}
.telLeft, .telRight {
    font-family: 'proxima_nova_rgbold';
    font-size: 22.5pt;
}
.menuText {
    font-size: 12pt;
    color: rgb(68,68,68);
    display: block;
    margin-top: -3px;
}
.cell {
    display: table-cell;
    vertical-align: middle;
}
.inner {
}
.clear {
    clear: both;
}
.infoMenuWrap{/*Костыль: красим подложку общего блока, а не почтового, чтобы подложка заходила под красное*/
    background: rgb(252, 252, 252);
}


.admOrder {
    font-family: 'proxima_nova_rgbold';
    display:block;
    font-size: 8pt;
    background: rgb(255,0,0);
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    position: relative;
    z-index: 10;
    float: right;
}
.admOrder:hover {
    text-shadow: 0px -1px 3px rgb(167,15,0);
}
.mailtoWrap {
    height: 29px;/*костыль, чтобы мыло по высоте было таким же, как и "заказать допуск", дублируется в IE-исключениях, -1 высота, чтобыне разъезжалось*/
    font-size: 11pt;
    display: table;
    padding-right: 10px;
    padding-left: 5px;
    vertical-align: middle;
    -webkit-border-radius:5px 0px 0px 5px;-moz-border-radius:5px 0px 0px 5px;border-radius:5px 0px 0px 5px;
    position: relative;
    float: left;
}
.mailtolink {
    color: rgb(0, 89, 167);
}
.inner img {
    position: relative;
    top: 3px;/*Костыль: как иначе выровнять изображение по вертикали? */
}

.inputwrap {
    margin-top: 10px;
    border: 2px solid rgb(217,217,217);
}
.inputwrap input[type="text"] {
    width: 100%;
    float: left;
    margin: 0px;
    border: none;
    font-size: 9pt;
    padding: 3px;
    padding-left: 10px;

}
.inputwrap input[type="image"] {
    display: block;
    float: right;
    zoom: 0.85;
    position: relative;
    top: 1px;
    right: 2px;
}
.inputwrap input[type="image"]:hover {
    zoom: 0.95;
    top: 0px;
    right: 1px;
}
.searchWrap {
    margin-right: 36px;/*Костыль, чтобы строка ввода поиска была нормальной по длине. Число=ширина кнопки ввода + все паддинги и марджины лайна*/
}
.inputwrap form {
    display: inline;
}
.topmenu {
    background: rgb(2,141,216);
}
.topmenu table {
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 8pt;
    padding: 0px 10px;
}

.topmenu td:nth-of-type(2n) {/*Разделители в верхнем меню*/
    font-size: 10pt;
    color: rgb(7,96,167);
    text-shadow: 2px 2px 3px rgba(255,255,255,0.1);
}
.topmenu a {
    display: block;
    color: white;
    text-decoration: none;
    padding: 10px;
}
.topmenu a:hover {
    text-decoration: underline;
}
.banner img {display: block;}



aside {width: 230px;float: left}
nav {padding: 15px 5px;}
nav a {
    padding: 10px;
    display: block;
    border-top: 1px solid rgb(240,240,240);
    font-weight: bold;
    font-size: 10pt;
    text-decoration: none;
    color: rgb(7,129,206);
}
nav a:first-child {border-top: none;}
nav a:hover {color: rgb(187,0,0);}



.news, .reviews {padding: 25px 20px;font-size: 10pt;}
#news_time, .news > span, .reviews > span, #review_author {font-size: 9pt;}
#news_title, #news_time, #review_body, #review_author {margin-bottom: 7px;}
.news > span, .reviews > span {
    display: block;
    font-weight: bold;
    margin-bottom: 15px;
}
#news_time {color: rgb(119,119,119);}
#news_title a {color: rgb(1,108,189);}
#news_preview {color: rgb(84,84,84);text-align: justify;}

.reviews {
    background: white url("img/quote.png") 16px 43px no-repeat;
}
.reviews > span {
    margin-bottom: 18px;
}
#review_body, #review_author {
    margin-left: 24px;
}
#review_body {
    font-style: italic;
}
#review_author {
    font-weight: bold;
}


#content {
    margin-left: 242px;
    font-size: 11pt;
    padding: 28px 32px;
}
#content b {
    font-family: 'proxima_nova_rgbold';
    font-weight: normal;
}
#content h1 {
    font-size: 14pt;
    font-family: 'proxima_nova_rgbold';
    font-weight: normal;
}
.floaterLeft, .floaterRight{
    font-family: 'proxima_nova_cn_rgregular';
    float: left;
    width: 220px;
    text-align: center;
    font-size: 16pt;
    padding: 35px 45px;
    background: rgb(245,245,245);
    margin-right: 38px;
}
.floaterRight {
    float: right;
    margin-left: 38px;
    margin-right: 0px;
}


</style>

<!--[if lt IE 8]><style>
    .logo, .cell, .mailtoWrap {
        display: block;
    }
    .cell {
        position: relative;
        top: 50%;
        vertical-align: baseline;/*Костыль. При выставленном выравнивании в middle, как выставляется в основных стилях, кнопка поиска и строка поиска разъезжаются. Так же, там важен порядок следования в коде (сначала кнопка, потом - строка, но не наоборот). Почему?*/
    }
    .cell, .inner {
        height: auto;
        zoom: 1;
    }
    .inner {
        position: relative;
        top: -50%;
    }
    .mailtoWrap {
        height: 28px;
    }
</style><![endif]-->

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


</head>
<body>
<div class="layout">
    <header>
        <div class="logo">
            <div class="cell">
                <div class="inner">СРО РОССИИ</div>
            </div>
        </div>
        <div class="telephone">
            <div class="cell">
                <div class="inner">
                    <span class="telLeft">8-800 </span>
                    <span class="telRight">100-00-00</span>
                    <span class="menuText">Звонок по России бесплатный</span>
                </div>
            </div>
        </div>
        <div class="infomenu">

            <div class="cell">
                <div class="inner">
                    <div class="infoMenuWrap">
                        <a class="admOrder" href="ya.ru">ЗАКАЗАТЬ ДОПУСК</a>

                        <div class="mailtoWrap">
                            <div class="cell">
                                <div class="inner">
                                    <img width="18px" src="">
                                    <a class="mailtolink" href="mailto:info@vse-sro.ru">info@vse-sro.ru</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="inputwrap">
                        <form>
                            <input type="image" src="{{ URL::to_asset('img/search_icon.jpg') }}" width="20px">
                            <div class="searchWrap">
                                <input name="search" type="text" placeholder="Поиск по сайту">
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="topmenu">
            <table>
                <tr>
                    <td><a href="">ВСТУПЛЕНИЕ В СРО</a></td>
                    <td>|</td>
                    <td><a href="">ЛИЦЕНЗИРОВАНИЕ</a></td>
                    <td>|</td>
                    <td><a href="">СЕРТИФИКАЦИЯ</a></td>
                    <td>|</td>
                    <td><a href="">РАСЧЕТ СТОИМОСТИ</a></td>
                    <td>|</td>
                    <td><a href="">НОВОСТИ</a></td>
                    <td>|</td>
                    <td><a href="">УСЛУГИ</a></td>
                    <td>|</td>
                    <td><a href="">КОНТАКТЫ</a></td>
                </tr>
            </table>
        </div>


        <div class="banner">
            <img src="{{ URL::to_asset('img/banner/iso.jpg') }}">
        </div>
    </header>

    <aside>
        <nav>
            <a href="">Вступление в СРО</a>
            <a href="">СРО строителей</a>
            <a href="">СРО проектировщиков</a>
            <a href="">СРО изыскателей</a>
            <a href="">СРО энергоаудит</a>
            <a href="">Лицензии МЧС</a>
            <a href="">Сертификация ИСО</a>
            <a href="">Страхование СМР</a>
            <a href="">Повышение квалификации</a>
            <a href="">СРО пожарной безопасности</a>
        </nav>


        <div class="news">
            <span>НОВОСТИ</span>
            <div id="news_time">{{ $news->created_at->format('d.m.Y') }}</div>
            <div id="news_title"><a href="">{{ $news->header }}</a></div>
            <div id="news_preview"><span>{{ $news->text }}</span></div>
        </div>


        <div class="reviews">
            <span>ОТЗЫВЫ КЛИЕНТОВ</span>
            <div id="review_body"><span>Компания ООО “Тепловые системы” благодарит за оперативное выполнение поставленных перед ними задач.<span></div>
            <div id="review_author"><span>Исполнительный директор Шок Э.Н.</span></div>
        </div>
    </aside>

    <div id="content">
        <h1>В какую саморегулируемую организацию вступить и как её выбрать?</h1>
        <p>В какой из них – наиболее лояльные требования и умеренная стоимость услуг? Что делать, если допуск в СРО нужен срочно? Наличие каких специалистов необходимо для вступления в СРО и получения допуска на определенные виды работ? Какие документы необходимо подготовить для вступления в СРО и как они должны быть оформлены? Не возникнет ли проблем с получением допусков на особо опасные виды работ?</p>
        <div class="floaterLeft">Солидный опыт работы позволяет нам грамотно решать абсолютно любые вопросы в максимально сжатые сроки с минимальными затратами</div>
        <p><b>«Единый Центр Лицензирования»</b> предлагает вам получить все ответы быстро и в одном месте. Наш центр качественно отличается от других аналогичных организаций, поскольку мы придерживаемся принципа прозрачной системы расчетов с клиентами.</p>
        <p>Вы всегда будете знать, сколько будет стоить вступить в СРО, какая сумма потребуется на членские взносы, какие затраты повлечет за собои получение допуска СРО и какова стоимость наших услуг.</p>
        <p>В какой из них – наиболее лояльные требования и умеренная стоимость услуг? Что делать, если допуск в СРО нужен срочно? Наличие каких специалистов необходимо для вступления в СРО и получения допуска на определенные виды работ? Какие документы необходимо подготовить для вступления в СРО и как они должны быть оформлены? Не возникнет ли проблем с получением допусков на особо опасные виды работ? </p>
        <p>Солидный опыт работы позволяет нам грамотно решать абсолютно любые вопросы в максимально сжатые сроки с минимальными затратами. Какие документы необходимо подготовить для вступления в СРО и как они должны быть оформлены? Не возникнет ли проблем с получением допусков на особо опасные виды работ? </p>
        <div class="floaterRight">Наш центр качественно отличается от других аналогичных организаций, поскольку мы придерживаемся принципа прозрачной системы расчетов с клиентами</div>
        <p>Вы всегда будете знать, сколько будет стоить вступить в СРО, какая сумма потребуется на членские взносы, какие затраты повлечет за собои получение допуска СРО и какова стоимость наших услуг.</p>
        <p>В какой из них – наиболее лояльные требования и умеренная стоимость услуг? Что делать, если допуск в СРО нужен срочно? Наличие каких специалистов необходимо для вступления в СРО и получения допуска на определенные виды работ? Какие документы необходимо подготовить для вступления в СРО и как они должны быть оформлены? Не возникнет ли проблем с получением допусков на особо опасные виды работ? </p>
        <p>Солидный опыт работы позволяет нам грамотно решать абсолютно любые вопросы в максимально сжатые сроки с минимальными затратами. Какие документы необходимо подготовить для вступления в СРО и как они должны быть оформлены? Не возникнет ли проблем с получением допусков на особо опасные виды работ? </p>
    </div>
    <div class="clear"></div>

</div>
</body>
</html>