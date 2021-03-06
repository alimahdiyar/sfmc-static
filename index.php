<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>مسابقات ملی دانشجویی مکانیک سیالات</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="/static/HomepageStyle.css"/>
        <link rel="stylesheet" href="/static/semantic-ui/2.4.1/semantic.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/static/semantic-ui/2.4.1/semantic.min.js"></script>


        <style>
            .show-news-modal {
                cursor: pointer;
            }
            .news-modal {
                direction: rtl;
                text-align: right !important;
                font-family: Yekan;
            }
            .news-modal .header {
                font-family: Yekan !important;
                font-size: 18px !important;
                line-height: 33px !important;
            }
            .news-modal .content {
                line-height: 28px !important;
                font-size: 16px !important;
            }
            .prizes_main_prizes {
                color: black;
            }
        </style>

    </head>





    <body>





        <div class="ui right sidebar inverted vertical menu">


            <a class="item" href="/register" id="a1_m" style="font-weight: bold;">
                <i class="user icon" id="i1"></i>&nbsp;&nbsp; ثبت نام
            </a>

            <a class="item" href="/" id="a1_m">
                <i class="home icon" id="i1_m"></i> صفحه ی اصلی
            </a>
            
            <a class="item" id="a2_m">
                <i class="tasks icon" id="i0_m"></i> برنامه ی مسابقات
            </a>

            <!-- <a class="item" id="a3_m">
                <i class="check icon" id="i2_m"></i> اهداف
            </a> -->

            <a class="item" id="a4_m">
                <i class="history icon" id="i3_m"></i> تاریخچه
            </a>

            <!-- <a class="item" id="a6_m">
                <i class="users icon" id="i5_m"></i> اعضای هیئت امنا
            </a> -->

            <div class="item" style="
    background-color:white;
    color:black;
    font-family:Yekan;
    border-radius:0px;
    font-weight:500;
    text-align:right;
    border-bottom:1px solid #E5E7E9;
    transition-duration:0.4s;
    direction:rtl;
    font-size:14px;">
                    <div class="header">محور های مسابقات</div>
                    <div class="menu">
                      <a class="item" href="/clipart" style="color: black">نماهنگ</a>
                      <a class="item" href="/virtual_lab" style="color: black">آزمایشگاه مجازی</a>
                      <a class="item" href="/idea_show" style="color: black">ایده شو</a>
                      <div class="item">
                        <div class="header" style="color: black">پروژه عملی</div>
                        <div class="menu">
                            <a class="item" href="/project" style="color: black">ساخت وسیله آزمایشگاهی</a>
                            <a class="item" href="/hovercraft" style="color: black">طراحی و ساخت هاورکرافت</a>
                        </div>
                      </div>
                    </div>
                  </div>
            

            <!-- <a class="item" id="a5_m">
                <i class="file alternate outline icon" id="i4_m"></i> آیین نامه
            </a> -->

            <!-- <a class="item" id="a8_m">
                <i class="dollar sign icon" id="i7_m"></i> حامیان
            </a> -->

            <!-- <a class="item" id="a9_m">
                <i class="flag icon" id="i8_m"></i> کمیته های مسابقات<i class="angle left icon" id="i8_m_corner"></i>
            </a> -->

            <!-- <a class="item" id="a10_m">
                <i class="balance scale icon" id="i9_m"></i> قوانین داوری<i class="angle left icon" id="i9_m_corner"></i>
            </a> -->

            <!-- <a class="item" id="a11_m">
                <i class="paint brush icon" id="i10_m"></i> مسابقه ی طراحی لوگو
            </a> -->

            <!-- <a class="item" id="a12_m">
                <i class="pencil alternate icon" id="i11_m"></i> ثبت نام اولیه<i class="angle left icon" id="i11_m_corner"></i>
            </a> -->
            
            <!-- <a class="item" id="a13_m">
                <i class="id badge icon" id="i12_m"></i> ثبت نام نهایی
            </a> -->

            <a class="item" href="/prizes" id="a14_m">
                <i class="gift icon" id="i13_m"></i> جوایز مسابقات
            </a>

            <a class="item" href="/calendar" id="a15_m">
                <i class="calendar alternate icon" id="i14_m"></i> تقویم مسابقات
            </a>
<!-- 
            {% comment %} <a class="item" id="a16_m">
                <i class="map marker alternate icon" id="i15_m"></i> نقشه ی دانشگاه
            </a>

            <a class="item" id="a17_m">
                <i class="map icon" id="i16_m"></i> نقشه ی محل اسکان
            </a> {% endcomment %} -->

            <a class="item" href="/poster" id="a18_m">
                <i class="image icon" id="i17_m"></i> پوستر و لوگو
            </a>

            <a class="item" href="/contactus" id="a19_m">
                <i class="phone icon" id="i18_m"></i> تماس با ما
            </a>


        </div>






        <div id="fixed_menu">

            <i class="bars icon" id="icon_bars_fm" style="margin-left: 0px;"></i>

            <div id="home_fm" style="display: block; border-bottom: 0px;" href="#">
                <a class="item item_home" style="color: black;" href="/register">ثبت نام</a>
            </div>

            <div id="home_fm" style="display: block; border-bottom: 0px;" href="#">
                <a class="item item_home" style="color: black;" href="http://dorm.sfmc.ir">ثبت نام اسکان</a>
            </div>

            <!-- <a id="sign_fm" href="#">
                ثبت نام
            </a>

            <a id="login_fm" href="#">
                ورود
            </a> -->

        </div>






        <!-- <div class="ui inverted vertical masthead center aligned segment">

            <div class="ui text container">

            </div>

        </div> -->

        <!-- <div id="header">
            <div id="text_header">
                پنجمین دوره ی مسابقات ملّی دانشجویی مکانیک سیالات
            </div>
        </div> -->

        <img style="width:100% !important;height:auto !important;margin-top:60px !important;margin:60px auto 0 !important;" src="/static/banner-2.jpg">












        
        <div id="content">

        

            <div class="prizes ui piled segment">
                
                <h2 class="ui header">
                    <div style="display: flex; text-align: center; width: 200px; margin:auto;">
                        <i class="trophy icon" style="font-size: 30px;"></i>
                        <div>جوایز این دوره</div>
                    </div>
                </h2>

                <div class="main_prizes">

                    <a href="/prizes" class="prizes_main_prizes">
                        <img class="ui centered image" src="/static/trophy2.jpg">
                        معرفی طرح های برتر به شتابدهنده آبان
                    </a>

                    <a href="/prizes" class="prizes_main_prizes">
                        <img class="ui centered image" src="/static/trophy2.jpg">
                        کسر خدمت سربازی
                    </a>

                    <a href="/prizes" class="prizes_main_prizes">
                        <img class="ui centered image" src="/static/trophy2.jpg">
                        جوایز نقدی
                    </a>

                </div>


                
            </div>

            <div id="left_content">

                <div class="competition_date ui raised segment">
                    
                    <h2 class="ui header">

                        <i class="clock outline icon"></i>
                        
                        زمان بندی

                    </h2>

                    <div class="competition_date_content">

                        <i class="pencil alternate icon"></i>
                        &nbsp
                        ثبت نام و ارسال فایل
                        <br>
                        22 اسفند (تمدید شد)

                        <br />
                        ثبت نام اسکان
                        <br>
                        22 اسفند

                    </div>


                </div>

                <div class="ui raised segment" id="location">

                    <h2 id="h_location"><i class="check circle icon"></i> &nbsp&nbspبرگزار کننده</h2>

                    <img class="ui centered medium image" id="location_img" src="/static/shiraz.png">
                    <h5 style="color:rgb(10, 10, 187);width: 90%;text-align:center; margin: 15px auto;font-family:Yekan;font-size:16px;">بخش مهندسی راه، ساختمان و محیط زیست</h5>
                    <div class="ui divider"></div>

                    <div id="address">

                    : آدرس&nbsp&nbsp
                        <i class="map marker alternate icon" id="i19"></i>
                        <br>
                        
                        <div id="address_span">
                            شیراز – خیابان زند - دانشکده مهندسی ۱ - بخش مهندسی راه، ساختمان و محیط زیست 
                        </div>
    
                        <div id="link_location">
                            <a href="https://goo.gl/maps/b3bdVHnMxKLZ749i6" target="blank">
                                <div class="image">
                                    <img id="location_shiraz" src="/static/location3.png">
                                </div>
                            </a>
                        </div>
    
                    </div>
<!-- 
                    <br>
                    <div class="ui divider"></div> -->
    
                    <!-- <div id="phone_number">
    
                        : شماره تلفن دبیرخانه
                        &nbsp;
                        <i class="phone icon" id="i2" style="color:cadetblue;"></i></i>
                        <br>
                        <span style="font-size: 16px; font-weight: normal">شنبه تا چهارشنبه از ساعت 12 الی 16</span>
                        <br>
                        
                        <div id="phone_span">
                            36474028 (071)
                        </div>
    
                    </div>
    
                    <div class="ui divider"></div>
    
                    <div id="fax">
                        : فاکس
                        &nbsp
                        <i class="fax icon" id="i3"></i></i>
                        <br>
                        
                        <div id="fax_span">
                            36474027 (071)
                        </div>
    
                    </div>

                    <div class="ui divider"></div>
                    <div id="contact_us">

                        : پست الکترونیک
                        &nbsp;
                        <i class="envelope icon" id="icon_mobile"></i>
                        <br>
    
    
                        <div id="email_span">
                            <i class="paper plane icon"></i>
                            &nbsp;&nbsp;
                            5sfmc@shirazu.ac.ir
                        </div>
    
                    </div> -->







                </div>

            </div>


            <div id="main_content">
                        

                <div class="ui piled segment" id="content_main_content_second">

                    <h2 id="header_main_content_second2">

                        <i class="check icon" style="color: red; font-size: 30px;"></i> اطلاعیه ها

                    </h2>


                    <div style="padding: 15px; line-height: 30px;">
                        
                        <div class="text_content_more_info show-news-modal show_news_modal_6">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item">۱۳۹۸/۱۲/۱۷: تمدید مجدد مهلت ارسال آثار و ثبت نام در مسابقات و ثبت نام اسکان تا 22 اسفندماه</a><br />
                        </div>
                        
                        <div class="text_content_more_info show-news-modal show_news_modal_5">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item">۱۳۹۸/۱۲/۰۵: اطلاعیه تعویق مسابقات سیالات</a><br />
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <span class="item" style="font-weight: bold">۱۳۹۸/۱۱/۲۹: مهلت ارسال آثار و ثبت نام تا 5 اسفند تمدید شد.</span>
                        </div>


                        <div class="text_content_more_info show-news-modal show_news_modal_2">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item">۱۳۹۸/۱۱/۳۰: نحوه داوری محور نماهنگ</a><br />
                        </div>


                        <div class="text_content_more_info show-news-modal show_news_modal_3">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item">۱۳۹۸/۱۱/۳۰: ارائه جدول زمانبندی حضور تیمهای شرکت کننده</a><br />
                        </div>
                        

                        <div class="text_content_more_info show-news-modal show_news_modal_4">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item">۱۳۹۸/۱۱/۳۰: ثبت نام اعضاء محترم هیات علمی دانشگاهها و موسسات آموزش عالی</a><br />
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item" href="/hovercraft#news">۱۳۹۸/۱۱/۲۹: هاورکرافت:</a> از آنجا که ماموریت هاورکرافت آتش نشان است، آتش (شعله شمع) باید دقیقا با پرتاب آب خاموش شود.
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item" href="/static/pressure-gage.pdf">۱۳۹۸/۱۱/۲۷: توضیحات تکمیلی در مورد ساخت وسیله آزمایشگاهی</a>
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <span class="item">۱۳۹۸/۱۱/۲۲: ثبت نام اسکان دانشجویان آغاز شد. <a href="http://dorm.sfmc.ir/">لینک ثبت نام</a></span>
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <span class="item">۱۳۹۸/۱۱/۱۶: مصاحبه دبیر پنجمین مسابقات دانشجویی مکانیک سیالات با خبرگزاری ها: <a href="https://www.isna.ir/news/98110705177/">ایسنا</a>، <a href="https://www.yjc.ir/00UJFk">باشگاه خبرنگاران جوان</a>، <a href="http://mehrnews.com/news/4835439">خبرگزاری مهر</a>.</span><br />
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item" href="/register">۱۳۹۸/۱۱/۰۴: ثبت نام آغاز شد</a><br />
                        </div>

                        <div class="text_content_more_info show-news-modal show_news_modal_1">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item">۱۳۹۸/۱۰/۲۲: تسهیلات‌ ‌مرکز‌ ‌هدایت‌ ‌استعدادهای‌ ‌درخشان‌ ‌دانشگاه‌ ‌شیراز‌ ‌برای‌ ‌دانشجویان‌ ‌برتر‌ ‌مسابقات‌ ‌مکانیک‌ ‌سیالات‌</a><br />
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item" href="/hovercraft#news">۱۳۹۸/۱۰/۲۲: هاورکرافت:</a> مقدار بیشینه مجموع مصرف کننده های مدل از 70به 120 وات ساعت ارتقا یافت.
                        </div>

                        <div class="text_content_more_info">
                            <i class="angle double left icon icon_judgement"></i>
                            <a class="item" href="/clipart#news">۱۳۹۸/۱۰/۲۲: نماهنگ:</a> <a href="/static/clips">کلیپ دوره های قبل</a>
                        </div>
                    </div>

                    </div>

                    <div class="ui piled segment" id="content_main_content_second">
                                            
                    <h2 id="header_main_content_second2">

                        <i class="check icon" id="goal_icon_header2"></i> اهداف

                    </h2>

                    <!-- <div class="ui divider"></div> -->

                    <div style="padding: 15px; line-height: 30px;">
                        مکانیک سیالات امروزه یکی از مهم ترین و پرکاربرد ترین علوم در رشته های مهندسی از جمله مهندسی عمران، مهندسی مکانیک، مهندسی شیمی، مهندسی پزشکی، مهندسی کشاورزی، مهـــندسی معدن و مهندسی مواد می باشد.  این درس بین رشته ای، پرکاربرد و پایه ای،  نظر طیف وسیعی از پژوهشگران و دانشجویان علاقمند را به خود جلب نموده و منجر به انجام تحقیقات گسترده ای در قالب پروژه های عملی یا نظری گردیده است. 
                        <a href="/about">ادامه مطلب</a>
                        <!-- <span id="hidden_content" onload="f()">
                            آموزش مهندسی در سال های اخیر تغییرات زیادی داشته و بر خلاف گذشته که بیشتر استاد محور بوده و یادگیری دانشجویان در کلاس در کنار عوامل دیگر به تطابق دانشجویان با سبک تدریس استاد بستگی داشته و همچنین دانشجویان باید به تنهایی تکالیف را انجام می دادند، به شکل قابل ملاحظه ای دانشجو محور شده، به این معنا که تمرکز فعالیت ها از استاد به دانشجو منتقل می شود و دانشجو نیز در کنار استاد باید مسئولیت ساماندهی آنچه باید فرا گرفته شود را بر عهده بگیرد. تعامل مزبور منجر به ایجاد خلاقیت در دانشجو گردیده، روحیه پرسشگری را در میان دانشجویان تقویت نموده و باعث تفهیم هر چه بهتر مبانی و اصول رشته می گردد. از میان مزیت های عمده این روش می توان به یادگیری سریع با ماندگاری بیشتر، درک عمیق تر مواد درسی، شکوفا شدن استعدادهای ذاتی و مهارت های حل مسئله، تعامل، همکاری و ایجاد دید مثبت نسبت به درس، اشاره کرد. چنانچه دانشجویان فارغ التحصیل در رشته های مهندسی در شناخت کامل مسئله و ارائه ی راه حل، مهارت کافی را داشته باشند قادر خواهند بود که در زمینه های مختلف اقتصادی، کارآفرینی و رفع مشکلات کشور تحولی اساسی به وجود آورند. در همین راستا پنجمین دوره مسابقات ملی دانشجویی مکانیک سیالات به میزبانی بخش مهندسی راه، ساختمان و محیط زیست دانشکده مهندسی دانشگاه شیراز با هدف ارتقاء آموزش طراحی و مهارت حل مسئله و همچنین تقویت خلافیت و نوآوری دانشجویان و افزایش روحیه همکاری در آنها، انگیزه کافی را در دانشجویان برای تحقق این رویکرد ایجاد می کند. از سوی دیگر این مسابقات با ایجاد ارتباط بیشتر میان مفاهیم تئوری و کارکرد های تجربی و همچنین ایجاد ارتباط علمی بین دانشگاه های سراسر کشور دانشجویان را به علم مکانیک سیالات علاقمند می کند.
                        </span> -->
                        <br />
                        <h3 style="font-family:Yekan;font-size: 14px; font-weight: normal;">کلیدواژه ها: مسابقات سیالات, مسابقات مکانیک سیالات</h3>
                    </div>

                    </div>


                    <div class="ui segment" id="middle_content">

                    <h2 id="header_middle_content" style="background-color: white;">
                        
                        <i class="history icon"></i>
                        &nbsp
                        دوره های پیشین مسابقات

                    </h2>

                    <div id="content_middle_content">

                        <div class="competitions">

                            <a href="http://sfmc2015.iut.ac.ir/web/guest/home"><img class="ui centered image" src="/static/comp1.jpg"></a>

                        </div>

                        <div class="competitions">

                            <a href="http://2sfmc.ui.ac.ir:81/fa/"><img class="ui centered image" src="/static/comp2.jpg"></a>

                        </div>

                        <div class="competitions">

                            <a href="http://3sfmc.uk.ac.ir/fa/"><img class="ui centered image" src="/static/comp3.jpg"></a>

                        </div>

                        <div class="competitions">

                            <a href="http://4sfmc.iut.ac.ir/fa/"><img class="ui centered image" src="/static/comp4.jpg"></a>

                        </div>

                    </div>

                    </div>



            </div>


            <div id="main_content2">


            </div>











            <div id="left_content2">

                    <div class="competition_date ui raised segment">
                    
                            <h2 class="ui header">
        
                                <i class="clock outline icon"></i>
                                
                                زمان بندی
        
                            </h2>
        
                            <div class="competition_date_content">
        
                                <i class="pencil alternate icon"></i>
                                &nbsp
                                ثبت نام و ارسال فایل
                                <br>
                                22 اسفند (تمدید شد)

                                <br />
                                ثبت نام اسکان
                                <br>
                                22 اسفند

                            </div>
        
        
                        </div>

                <div class="ui piled segment" id="location2">

                    <h2 id="h_location2"><i class="check circle icon"></i> &nbsp&nbspبرگزار کننده</h2>

                    <img class="ui centered medium image" id="location_img2" src="/static/shiraz.png">
                    <h5 style="color:rgb(10, 10, 187);width: 90%;text-align:center; margin: 15px auto;font-family:Yekan;">بخش مهندسی راه، ساختمان و محیط زیست</h5>
                    
                    <div class="ui divider"></div>

                    <div id="address2">

                        : آدرس&nbsp&nbsp
                        <i class="map marker alternate icon" id="i19_2"></i>
                        <br>
                        
                        <div id="address_span2">
                                شیراز – خیابان زند - دانشکده مهندسی ۱ - بخش مهندسی راه، ساختمان و محیط زیست
                        </div>
    
                        <div id="link_location2">
                            <a href="https://goo.gl/maps/b3bdVHnMxKLZ749i6" target="blank">
                                <div class="image">
                                    <img id="location_shiraz2" src="/static/location3.png">
                                </div>
                            </a>
                        </div>
    
        
                    </div>
    
                </div>

            </div>






            <div id="right_menu">

                <div class="ui vertical menu" id="side_menu">

                    <a class="item" href="/register" id="a1" style="font-weight: bold;">
                        <i class="user icon" id="i1"></i>
                        &nbsp;&nbsp;
                        ثبت نام
                    </a>

                    <a class="item" href="/" id="a1">
                        <i class="home icon" id="i1"></i>
                        &nbsp;&nbsp;
                        صفحه ی اصلی
                    </a>

                    <a class="item" id="a2">
                        <i class="tasks icon" id="i0"></i> برنامه ی مسابقات
                    </a>

                    <!-- <a class="item" id="a3">
                        <i class="check icon" id="i2"></i> اهداف
                    </a> -->

                    <a class="item" href="/history" id="a4">
                        <i class="history icon" id="i3"></i>
                        &nbsp
                        تاریخچه
                    </a>

                    <!-- <a class="item" id="a6">
                        <i class="users icon" id="i5"></i> اعضای هیئت امنا
                    </a> -->

  <div class="item">
        <div class="header">محور های مسابقات</div>
        <div class="menu">
          <a class="item" href="/clipart">نماهنگ</a>
          <a class="item" href="/virtual_lab">آزمایشگاه مجازی</a>
          <a class="item" href="/idea_show">ایده شو</a>
          <div class="item">
            <div class="header">پروژه عملی</div>
            <div class="menu">
                <a class="item" href="/project">ساخت وسیله آزمایشگاهی</a>
                <a class="item" href="/hovercraft">طراحی و ساخت هاورکرافت</a>
            </div>
          </div>
        </div>
      </div>

                    <!-- <a class="item" id="a5">
                        <i class="file alternate outline icon" id="i4"></i> آیین نامه
                    </a> -->

                    <!-- <a class="item" id="a8">
                        <i class="dollar sign icon" id="i7"></i> حامیان
                    </a> -->

                    <!-- <a class="item" id="a9">
                        <i class="flag icon" id="i8"></i> کمیته های مسابقات<i class="angle left icon" id="i8_corner"></i>
                    </a> -->

                    <!-- <a class="item" id="a10">
                        <i class="balance scale icon" id="i9"></i> قوانین داوری<i class="angle left icon" id="i9_corner"></i>
                    </a> -->

                    <!-- <a class="item" id="a11">
                        <i class="paint brush icon" id="i10"></i> مسابقه ی طراحی لوگو
                    </a> -->

                    <!-- <a class="item" id="a12">
                        <i class="pencil alternate icon" id="i11"></i> ثبت نام اولیه<i class="angle left icon" id="i11_corner"></i>
                    </a> -->
                    
                    <!-- <a class="item" id="a13">
                        <i class="id badge icon" id="i12"></i> ثبت نام نهایی
                    </a> -->

                    <a class="item" href="/prizes" id="a14">
                        <i class="gift icon" id="i13"></i> جوایز مسابقات
                    </a>

                    <a class="item" href="/calendar" id="a15">
                        <i class="calendar alternate icon" id="i14"></i> تقویم مسابقات
                    </a>

                    <!-- {% comment %} <a class="item" id="a16">
                        <i class="map marker alternate icon" id="i15"></i> نقشه ی دانشگاه
                    </a>

                    <a class="item" id="a17">
                        <i class="map icon" id="i16"></i> نقشه ی محل اسکان
                    </a> {% endcomment %} -->

                    <a class="item" href="/poster" id="a18">
                        <i class="image icon" id="i17"></i> پوستر و لوگو
                    </a>

                    <a class="item" href="/contactus" id="a19">
                        <i class="phone icon" id="i18"></i> تماس با ما
                    </a>

                    

                </div>

    
            </div>
            
           


        </div>

        <div id="bottom_content">

<div id="first_user">

    <h2 id="header_users">
        اعضای هیئت امنا
        &nbsp
        <i class="users icon"></i>
    </h2>

    <!-- <div class="ui card" id="card1">///

        <div class="image">
            <img src="1.jpg" id="img_card1">
        </div>

        <div class="content" id="first_card_content">
            <div class="header" id="name_card1">دكتر محمدرضا چمنی &nbsp<i class="user icon" id="icon_user_card1"></i></div>
            <div class="ui divider" id="di1"></div>
            <div class="description" id="description_card1">
            دانشگاه صنعتی اصفهان<br>
            دانشکده مهندسی عمران
            </div>
        </div>///

    </div> -->



</div>

<div id="other_users" dir="rtl">

    <div class="member">

        <img class="ui centered image" src="/static/omana1.jpg">
        <i class="user icon"></i>
        دکتر محمد رضا چمنی
        <br>
        <span>
            دانشگاه صنعتی اصفهان
            <br>
            دانشکده مهندسی عمران
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" src="/static/omana2.jpg">
        <i class="user icon"></i>
        دكتر احمد شانه ساز زاده
        <br>
        <span>
            دانشگاه اصفهان
            <br>
            دانشکده مهندسی عمران و حمل و نقل
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" src="/static/omana3.jpg">
        <i class="user icon"></i>
        دكتر علی محبی
        <br>
        <span>
            دانشگاه شهید باهنر کرمان
            <br>
            دانشکده مهندسی شیمی
        </span>

    </div>

    <div class="member">

            <img class="ui centered image" src="/static/omana11.jpg">
            <i class="user icon"></i>
            مهندس سید حامد حسینی
        </div>

    <div class="member">

        <img class="ui centered image" src="/static/omana6.jpg">
        <i class="user icon"></i>
        دكتر امیرحسین سعیدی دهاقانی
        <br>
        <span>
            دانشگاه تربیت مدرس
            <br>
            دانشکده مهندسی شیمی
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" style="object-fit: contain" src="/static/shadmani.jpg">
        <i class="user icon"></i>
        دکتر رویا شادمانی
        <br>
        <span>
            دانشگاه آزاد اسلامی واحد تهران شمال
            <br>
            گروه مهندسی مکانیک
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" src="/static/omana4.jpg">
        <i class="user icon"></i>
        دكتر محمد جواد عابدینی
        <br>
        <span>
            دانشگاه شیراز
            <br>
            بخش مهندسی راه، ساختمان و محیط زیست
        </span>

    </div>

    
    <div class="member">

        <img class="ui centered image" src="/static/omana9.jpg">
        <i class="user icon"></i>
        دکتر محمد فغفور مغربی
        <br>
        <span>
            دانشگاه فردوسی مشهد
            <br>
            گروه مهندسی عمران
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" src="/static/omana7.jpg">
        <i class="user icon"></i>
        دكتر رامتین معینی
        <br>
        <span>
            دانشگاه اصفهان
            <br>
            دانشکده مهندسی عمران و حمل و نقل
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" style="object-fit: contain; height: 160px;" src="/static/omana10.jpeg">
        <i class="user icon"></i>
        دکتر سید محراب امیری
        <br>
        <span>
            (دبیر پنجمین دوره مسابقات)
            <br />
            دانشگاه شیراز
            <br>
            بخش مهندسی راه، ساختمان و محیط زیست
        </span>

    </div>

    <div class="member">

        <img class="ui centered image" src="/static/omana8.jpg">
        <i class="user icon"></i>
        دکتر کامران عاصمی
        <br>
        <span>
            دانشگاه آزاد اسلامی واحد تهران شمال
            <br>
            گروه مهندسی مکانیک
        </span>

    </div>
    
    <div class="member">

        <img class="ui centered image" src="/static/omana5.jpg">
        <i class="user icon"></i>
        دكتر وحید نورانی
        <br>
        <span>
            دانشگاه تبریز
            <br>
            دانشکده مهندسی عمران
        </span>

    </div>


<div id="hamian" dir="rtl">

    <h2 id="header_hamian">

        <!-- <i class="handshake outline icon"></i> -->
        حامیان

    </h2>

    <div id="hamian_content">


        <div class="sponsor">

            <img class="ui centered image" style="width:200px !important;" src="/static/moavenat.png">

            <!-- <div>
                معاونت علمی و فناوری ریاست جمهوری
            </div> -->

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="width:250px !important; margin-top: 40px; object-fit: fill;" src="/static/nokhbegan.png">

            <!-- <div>
                بنیاد ملی نخبگان
            </div> -->

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="width:210px !important;" src="/static/marine_industrial3.png">

            <div>
                سازمان صنایع دریایی
            </div>

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="width:210px !important;" src="/static/idro4.png">

            <div>
                سازمان گسترش و نوسازی صنایع ایران
            </div>

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="padding-top: 10px;" src="/static/park.jpeg">

            <!-- <div>
                پارک علم و فناوری استان فارس
            </div> -->

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="padding-top: 10px;" src="/static/nezam-mohandesi.jpeg">

            <!-- <div>
                سازمان نظام مهندسی ساختمان استان فارس
            </div> -->

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="padding-top: 5px;" src="/static/amouzesh-mohandesi.jpeg">

            <!-- <div>
                انجمن آموزش مهندسی ایران
            </div> -->

        </div>

        <div class="sponsor">

            <img class="ui centered image" style="width:140px !important; margin-top: 20px; object-fit: fill;" src="/static/radman.png">

            <!-- <div>
                شرکت رادمان صنعت
            </div> -->

        </div>

        <!-- <div class="sponsor">

            <img class="ui centered image" src="/static/nokhbegan.png">

        </div> -->
                                            
        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="shiraz.png" class="hamian_card_logo">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه شیراز</div>
            </div>

        </div> -->

        <!-- <div class="sponsor">

            <img class="ui centered image" src="shiraz.png">

        </div> -->
        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="isfahan.png">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه اصفهان</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/isfahan.png">

        </div>

        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="industrial_isfahan.png">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه صنعتی اصفهان</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/industrial_isfahan.png">

        </div>

        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="bahonar.png">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه شهید باهنر کرمان</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/bahonar.png">

        </div>

        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="ferdosi.png">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه فردوسی مشهد</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/tarbiat-modares.png">

            <div>
                دانشگاه تربیت مدرس
            </div>

        </div>
        
        <div class="sponsor">

            <img class="ui centered image" src="/static/ferdosi.png">

        </div>

        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="amirkabir.png">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه صنعتی امیرکبیر</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/amirkabir.png">

        </div>

        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img uni1">
                <img src="Tarbiat-Modarres.jpg">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه تربیت مدرس</div>
            </div>

        </div> -->


        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img uni2">
                <img src="sistan.jpg">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه سیستان و بلوچستان</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/sistan.png">

        </div>

        <!-- <div class="ui centered card hamian_card">

            <div class="image hamian_card_img">
                <img src="tabriz.png">
            </div>

            <div class="content">
                <div class="header hamian_card_header">دانشگاه تبریز</div>
            </div>

        </div> -->

        <div class="sponsor">

            <img class="ui centered image" src="/static/tabriz.png">

        </div>


    </div>

</div>


</div>


<div class="ui small modal news-modal" id="news_modal_1">

<div class="header">تسهیلات‌ ‌مرکز‌ ‌هدایت‌ ‌استعدادهای‌ ‌درخشان‌ ‌دانشگاه‌ ‌شیراز‌ ‌برای‌ ‌دانشجویان‌ ‌برتر‌ ‌مسابقات‌ ‌مکانیک‌ ‌سیالات‌</div>
<div class="content">
    طبق مقررات مرکز هدایت استعدادهای درخشان دانشگاه شیراز حداقل معدل برای عضویت دانشجویان دانشگاه شیراز در این مرکز معدل کل 18 می‌باشد. بر اساس مصوبه جدید این مرکز، چنانچه دانشجویان دانشگاه شیراز در مسابقات ملی دانشجویی مکانیک سیالات توسط کمیته علمی مسابقات به عنوان تیم برتر تشخیص داده شده و معرفی گردند، یک نمره تخفیف در معدل برای عضویت در این مرکز برای ایشان لحاظ شده، و می‌توانند با معدل 17 عضو مرکز استعدادهای درخشان شوند.
</div>
<div class="actions" style="text-align: center;">
    <div class="ui primary right labeled icon button" id="close_news_modal_1">
      بستن
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="ui small modal news-modal" id="news_modal_2">

<div class="header">نحوه داوری محور نماهنگ</div>
<div class="content">
    برای محور نماهنگ پس دریافت آثار و ارسال آنها به داوران، بهترین نماهنگها انتخاب شده و در روز افتتاحیه مسابقات به اکران عمومی در می آیند. پس از امتیاز دهی توسط حضار، بهترین نماهنگها بر اساس جدول امتیازبندی نماهنگ انتخاب میشوند.    
</div>
<div class="actions" style="text-align: center;">
    <div class="ui primary right labeled icon button" id="close_news_modal_2">
      بستن
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="ui small modal news-modal" id="news_modal_3">

<div class="header">ارائه جدول زمانبندی حضور تیمهای شرکت کننده</div>
<div class="content">
    به دلیل محدودیت زمانی مسابقات، قرعه کشی برای زمان حضور هر یک از تیمهای شرکت کننده در کلیه محورهای مسابقات (به جز نماهنگ) توسط تیم داوری انجام شده و یک روز قبل از شروع مسابقات، اطلاع رسانی می گردد.
</div>
<div class="actions" style="text-align: center;">
    <div class="ui primary right labeled icon button" id="close_news_modal_3">
      بستن
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="ui small modal news-modal" id="news_modal_4">

<div class="header">ثبت نام اعضاء محترم هیات علمی دانشگاهها و موسسات آموزش عالی</div>
<div class="content">
    سلام و عرض ادب<br />
لطفا اعضاء محترم هیات علمی دانشگاهها و موسسات آموزش عالی که علاقه مند به حضور در مسابقات هستند (به جز اعضاء محترم هیات امنا و داوران گرامی مسابقات) با مراجعه به قسمت ثبت نام آزاد   سازمانی، اقدام به ثبت نام نمایند تا تدارکات مورد نیاز برای حضور سروران گرانقدر تثبیت شود.
</div>
<div class="actions" style="text-align: center;">
    <div class="ui primary right labeled icon button" id="close_news_modal_4">
      بستن
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="ui small modal news-modal" id="news_modal_5">

<div class="header">اطلاعیه تعویق مسابقات سیالات</div>
<div class="content">
    با سلام و دعای خیر<br />
    احتراما با توجه به بخشنامه وزارت علوم، تحقیقات و فناوری، برگزاری مسابقات تا اطلاع ثانوی ملغی شده و زمان برگزاری آن با رعایت فاصله زمانی لازم، در همین وب سایت اطلاع رسانی خواهد شد. همچنین با توجه به تعطیلی برخی دانشگاههای کشور در هفته جاری، مهلت ارسال آثار نیز تا 15 اسفندماه تمدید میگردد.<br />
    با آرزوی سلامتی و توفیق الهی<br />
    سید محراب امیری<br />
    دبیر پنجمین دوره مسابقات مکانیک سیالات    
</div>
<div class="actions" style="text-align: center;">
    <div class="ui primary right labeled icon button" id="close_news_modal_5">
      بستن
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

<div class="ui small modal news-modal" id="news_modal_6">

<div class="header">اطلاعیه تعویق مسابقات سیالات</div>
<div class="content">
    با توجه به تقاضای تعدادی از دانشجویان محترم برای شرکت در پنجمین دوره مسابقات، امکان ثبت نام و ارسال آثار و همچنین ثبت نام برای اسکان، تا تاریخ 22 اسفندماه تمدید می گردد. خواهشمند است تا زمان مذکور ثبت نام خود را نهایی فرمایید چراکه این مهلت مجددا تمدید نخواهد شد.
</div>
<div class="actions" style="text-align: center;">
    <div class="ui primary right labeled icon button" id="close_news_modal_6">
      بستن
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>



        <!-- </div> -->


        <script src="/static/HomepageJs.js"></script>
        <script>
            $(document).ready(function(){
                $('#main_content2').html(
                    $('#main_content').html()
                ).children('.ui.segment')
                .removeClass('piled')
                .addClass('raised');
                
                // {% if request.path != '/' %}
                // $([document.documentElement, document.body]).animate({
                //     scrollTop: Math.max($("#main_content").offset().top, $("#main_content2").offset().top) - 50
                // }, 10);
                // {% endif %}
            })
        </script>
        
    <script>
        $(document).ready(function(){
            $(".show_news_modal_1").click(function(){
                $("#news_modal_1").modal('show');
            })
            $("#close_news_modal_1").click(function(){
                $("#news_modal_1").modal('hide');
            })
            $(".show_news_modal_2").click(function(){
                $("#news_modal_2").modal('show');
            })
            $("#close_news_modal_2").click(function(){
                $("#news_modal_2").modal('hide');
            })
            $(".show_news_modal_3").click(function(){
                $("#news_modal_3").modal('show');
            })
            $("#close_news_modal_3").click(function(){
                $("#news_modal_3").modal('hide');
            })
            $(".show_news_modal_4").click(function(){
                $("#news_modal_4").modal('show');
            })
            $("#close_news_modal_4").click(function(){
                $("#news_modal_4").modal('hide');
            })
            $(".show_news_modal_5").click(function(){
                $("#news_modal_5").modal('show');
            })
            $("#close_news_modal_5").click(function(){
                $("#news_modal_5").modal('hide');
            })
            $(".show_news_modal_6").click(function(){
                $("#news_modal_6").modal('show');
            })
            $("#close_news_modal_6").click(function(){
                $("#news_modal_6").modal('hide');
            })
        })
    </script>

    </body>






</html>