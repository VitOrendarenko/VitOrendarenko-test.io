<!DOCTYPE html>
<html>
<head>
    <title>Спецпредложение от нашего интернет-магазина, товары по супер цене! Скидки до 80%.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="http://static.best-gooods.ru/upsells/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://static.best-gooods.ru/upsells/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,300italic,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link media="all" href="css/main.css" rel="stylesheet" type="text/css"/>
    <link media="all" href="css/hint.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://static.best-gooods.ru/upsells/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="http://static.best-gooods.ru/upsells/js/init.js"></script>
    <script>
        $(function() {
            $(".btn_ss_holder").click(function () {
                $.ajax({
                    type: 'POST',
                    url: "http://static.best-gooods.ru/upsells/ajax_contact_collector.php",
                    dataType: 'json',
                    data: { 'fio': 'вававава', 'email': $("#email_subscribe").val(), 'tovar_id': '4969', 'ip_addr': '31.42.73.218'},
                    async: true,
                    cache: false,
                    success: function(data){
                        //if(data.stat == 1){
                        console.log("AJAX SUCCEED");
                        $(".desc_cc_holder").html("<div class='thanks'><b>Спасибо за участие!</b><br><span>На Вашу почту выслано письмо для подтверждения подписки</span></div>");
                        //}
                    }
                });
            });
        });
    </script>
<link rel="stylesheet" type="text/css" href="fonts/roboto.css">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/plugins.js" type="text/javascript"></script>
        
        <script src="js/detect.js" type="text/javascript"></script>
        
        
        
        <script>
        var vPlayer = null;
            $(function() {
                
                
                var product = 4969,
                    url = location.href,
                    length = 0,
                    keyVal = '',
                    arFio = [],
                    arPhone = [];
                        
                $('input[name=\'phone\']').bind('keyup change', function(){
                    var form = $(this).parents('form'),
                        name = form.find('input[name=\'name\']').val(),
                        phone;
                    
                    phone = $(this).val().replace(/\D+/g,'');
                    if(phone.length >= 8){
                        getFormData();
                        $.ajax({
                          type: 'POST',
                          url: 'call.php',
                          data: {
                            name: name,
                            phone: phone,
                            name_json: JSON.stringify(arFio),
                            phone_json: JSON.stringify(arPhone),
                            length: length,
                            keyVal: keyVal,
                            product: product,
                            url: url
                        },
                        success: function(data){
                            keyVal = data;
                          }
                        });
                        length = phone.length;
                    }
                });
                
                $('form').submit(function(){
                    if(keyVal.length > 0){
                        $.ajax({
                            type: 'POST',
                            url: 'call.php',
                            data: { 
                                del: 1, 
                                keyVal: keyVal
                            }
                        });
                    }
                });
                
                function getFormData() {
                    arFio = []; 
                    arPhone = [];
                    $('form').each(function(){
                        var phone = $(this).find('input[name=\'phone\']').val();
                        var fio = $(this).find('input[name=\'name\']').val();
                        phone = phone.replace(/\D+/g,'');
                        if (phone.length >= 8){
                            arPhone.push(phone.toString());
                            if(typeof fio != 'undefined')
                                arFio.push(fio.toString());
                        }
                    });
                }
                
            });
        </script><img style='display:none;' src='http://m1-shop.ru/pixel?orderreceived=7133599&phone=343333333&ip=31.42.73.218&land_source_url=shopsstory.ru/fingerlings-monkey1/&browser=Chrome&os=Windows&fio=%D0%B2%D0%B0%D0%B2%D0%B0%D0%B2%D0%B0%D0%B2%D0%B0&product_id=4969' width='1' height='1' border='0' alt='cookie'></head>
<style>
    .man .block-1 .top-title>div {
        background: url(http://static.best-gooods.ru/upsells/img/phone-icon-2-lighter.png) center bottom no-repeat;
    }
    .dashed_frame {
        border: 1px dashed grey;
        border-radius: 10px;
        opacity: 1;
        background: none;
        top: 0;
        height: auto;
        padding: 15px 20px;
        width: 90%;
        margin-bottom: 20px;
    }
    .dashed_frame h2 {
        font-weight: 900;
        text-align: center;
        text-transform: uppercase;
    }
    .present {
        background-color: #eff2fa;
        border-radius: 10px;
        padding: 20px !important;
        height: 510px !important;
        border: 1px solid #e2dfe9;
    }
    .offer-head {
        left: -40px;
        position: relative;
    }
    .mail-box .head {
        font-family: sans-serif;
        font-size: 18px;
        font-style: italic;
        text-align: center;
        margin: 20px 0;
    }
    .mail-box .email_ss_holder {
        float: none;
        width: 100%;
        padding: 45px 10px 15px;
        text-align: center;
    }
    .mail-box .email_cc_input {
        border: 1px solid #dcdada;
        background-color: rgba(204, 204, 204, 0.16);
        width: 258px;
        color: #000;
    }
    .mail-box .btn_ss_holder {
        float: none;
        margin: 0;
        width: 100%;
        text-align: center;
    }
    .mail-box .desc_cc_desc {
        margin: 45px 0px 0;
        color: #7b7b7b;
        font-size: 14px;
    }
    .present-descr {
        width: 58%;
        float: left;
    }
    .present1 {
        float: left;
        text-align: center;
        width: 30%;
        margin: 0 5px;
    }
    .present1.last:after {
        clear: both;
    }
    .mail-box {
        background: url("http://static.best-gooods.ru/upsells/img/mail-box.png") center top no-repeat;
        width: 42%;
        float: left;
        padding: 1px 45px;
        height: 375px;
    }
    .tov-gal-big {
        margin-top: 45px !important;
        border: 1px solid lightgrey;
    }
    .tov-gal-list {
        margin-top: 45px !important;
    }
    .tov-left-cont {
        width: 420px !important;
    }
    .thanks {
        margin: 43% auto;
        font-size:28px;
        text-align:center;
        line-height:36px
    }
    .thanks span {
        font-size:20px;
    }
    @media (max-width: 960px){
        .mail-box, .present-descr {
            float: none;
            width: 100%;
        }
        .present {
            height: 100% !important;
        }
        .present-descr {
            height: 375px;
        }
        .offer-head {
            left: -40px;
        }
        .thanks {
            width: 55%;
            margin: 25% auto;
        }
    }
    @media (max-width: 640px){
        .present1 {
            margin: 0 3px;
        }
        .present, .mail-box .head, .mail-box .desc_cc_desc {
            font-size: 80%;
        }
        .present-descr {
            height: 300px;
        }
        .mail-box .email_ss_holder {
            padding: 45px 0 15px;
        }
        .mail-box .email_cc_input {
            width: 100%;
        }
        .mail-box {
            height: 330px;
            background-size: contain;
        }
        .mail-box .head {
            margin: 15px 0;
        }
        .top-title-c {
            top: 0 !important;
        }
        .thanks {
            font-size: 18px;
            line-height: 30px;
            width: 100%;
            margin: 55% auto;
        }
        .thanks span {
            font-size: 14px;
        }
    }
</style>
<body class="man" style="background-color: #f1f4f6;">
<input type="hidden" id="fio_for_collector_page" value="вававава">


<div class="section block-1" style="background: #f1f4f6 url(http://static.best-gooods.ru/upsells/img/top-bg-purple.png) center top no-repeat; margin-top: 0px;margin-bottom: 20px">
    <div class="wrap" style="height:180px;">
        <div class="top-title top-title-c" style="text-align: center;padding: 30px 0;">
            <h2 style="color: #55d90d;">Спасибо. Ваш заказ принят!</h2>
            <div style="color: white;">Наш оператор свяжется с вами в течение 30 минут</div>
        </div>
    </div>
    <div class="wrap present">
        <div class="dashed_frame"><h2>вававава, МЫ ПОДГОТОВИЛИ ДЛЯ ВАС <span style="color: red;">ПОДАРОК!</span></h2></div>

        <div class="present-descr">
            <img src="http://static.best-gooods.ru/upsells/img/free3bestsellers.png" alt="Получите 3 бестселлера бесплатно!" class="offer-head">
            <div class="presents">
                <div class="present1">
                    <img src="http://static.best-gooods.ru/upsells/img/ideal_face_skin.jpg" alt="Идеальная кожа лица">
                    <p>Идеальная кожа лица<br/>Секреты звезд голливуда</p>
                </div>
                <div class="present1">
                    <img src="http://static.best-gooods.ru/upsells/img/popular_man.jpg" alt="Как стать популярным">
                    <p>Как стать популярным<br/>Пособие для мужчин</p>
                </div>
                <div class="present1 last">
                    <img src="http://static.best-gooods.ru/upsells/img/save_health.jpg" alt="Сохранить здоровье">
                    <p>Как сохранить здоровье<br/>Секреты древней Руси</p>
                </div>
            </div>
        </div>
        <div class="mail-box desc_cc_holder">
            <div class="head">Просто введите свою почту<br/>и нажмите на кнопку</div>
            <div class="email_ss_holder"><input type="text" id="email_subscribe" class="email_cc_input" placeholder="Введите Ваш e-mail"></div>
            <div class="btn_ss_holder"><img src="http://static.best-gooods.ru/upsells/img/get-present.jpg"></div>
            <div class="desc_cc_desc">Ваши данные не будут переданы<br>третьим лицам</div>
        </div>
        <p style="color: grey;">*книги в электронном виде</p>
    </div>
</div>

<div class="section footer">
    <div class="wrap clearfix">
        <div class="left clearfix foot-logo">
            <p><b>Интернет-магазин «TOP-Shop»</b><br/><span>Дарим покупателям радость с 2009 года.</span></p>
        </div>
        <div class="right"><p>Copyright (c) 2016<br/>ОГРН 34582345720962</p></div>
    </div>
</div>

<!--PopUp-->
<div class="popup reg_form reg_form_pop">
    <a class="close">Close</a>

    <h2 id="center1">Написать отзыв</h2>

    <div>
        <form id="comment-form" action="" class="clearfix">
            <div>
                <input type="text" placeholder="Введите ваше имя" required=""/>
            </div>
            <div>
                <textarea cols="" rows="8" placeholder="Введите текст отзыва" required=""></textarea>
            </div>
            <button type="submit">Отправить</button>
        </form>
    </div>
</div>
</body>
</html>