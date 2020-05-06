<?php require_once 'ti.php' ?>
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

        <?php startblock('styles') ?>
        <?php endblock('styles') ?>

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

        

            <?php startblock('topcontent') ?>
            <?php endblock('topcontent') ?>

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
                <?php startblock('content') ?>
                <?php endblock('content') ?>

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




        <?php startblock('bottomcontent') ?>
        <?php endblock('bottomcontent') ?>

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
        <?php startblock('scripts') ?>
        <?php endblock('scripts') ?>

    </body>






</html>