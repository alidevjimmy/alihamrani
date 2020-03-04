<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali Hamrani - Web Developer & Programmer</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset("/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset('/css/desktop.css')}}">
    <link rel="stylesheet" href="{{ asset("/css/tablet.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/mobile.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/animation.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/all.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap-grid.min.css")}}">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap-reboot.min.css")}}">
</head>
<body>
<div class="splash row" style="margin: 0 !important;">
    <div class="loading" style="margin: auto">
        <div class="loadingio-spinner-bean-eater-88n6pg3v6cb">
            <div class="ldio-dmc0fbn5cdd">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['status']) && $_SESSION['status'] == 'success' && isset($_SESSION['message'])) {
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert"
     style="direction: rtl;text-align: right;background-color: #4caf50 !important;color: white !important;border-radius: 3px;border-bottom: 8px solid rgba(0,0,0,0.1) !important;    position: fixed;
    top: 87px;
    left: 20px;
    width: 50%;
    border: none;
    z-index: 10000000000000000;">
    <i class="fa fa-check ml-2 justify-content-center"></i>
    <?php echo $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } else if (isset($_SESSION['error']) && $_SESSION['status'] == 'error' && isset($_SESSION['message'])) { ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert"
     style="direction: rtl;text-align: right;background-color: #f44336 !important;color: white !important;border-radius: 3px;border-bottom: 8px solid rgba(0,0,0,0.1) !important;position: fixed;
    top: 87px;
    left: 20px;
    width: 50%;
    border: none;
    z-index: 10000000000000000;">
    <i class="fa fa-info-circle ml-2 justify-content-center"></i>
    <?php echo $_SESSION['message'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php } ?>
<div id="goup"><i class="fa fa-mouse text-white"></i></div>
<nav class="navbar navbar-expand-lg navbar-light header fixed-top">
    <header class="container">
        <a class="navbar-brand logo-text-head-mob" href="{{ route('index') }}">
            <img src="{{ asset('/images/ali2.jpg') }}" style="border-radius: 50%" class="logo" alt="لوگو">
            <span class="font_mj_c text-logo"> علی حمرانی</span>
        </a>
        <a class="navbar-toggler btn-menu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="text-white fa fa-bars"></i>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 10px">
            <ul class="navbar-nav mr-auto ui-mob">
                <li class="nav-item header-link">
                    <a class="nav-link" href="#about" id="aboutbtn">درباره من</a>
                </li>
                <li class="nav-item header-link">
                    <a class="nav-link" href="#refrence" id="refrencebtn">آخرین کارها</a>
                </li>
                <li class="nav-item header-link">
                    <a class="nav-link" href="#contact" id="contactbtn">تماس</a>
                </li>
                <li class="nav-item header-link">
                    <a class="nav-link yellow_color" style="color: #f0d691 !important;" href="#" id="gome">بلاگ</a>
                </li>
            </ul>
        </div>
    </header>
</nav>
<div class="jumbotron me" style="margin: 0">
    <img src="{{ asset('/images/me.jpeg') }}" style="border-radius: 50%" class="img-me" alt="من" data-aos="fade-down">
    <p>
    <h2 class="display-4 font_mj_c text-white titles" data-aos="fade-in">
        <a href="http://t.me/ali_jimmyX" class="social-media-header" target="_blank"><i
                class="fab fa-telegram-plane"></i></a>
        <a href="tel:09384720059" class="social-media-header"><i class="fa fa-phone"></i></a>
        علی حمرانی
        <a href="https://www.instagram.com/ali_jimmyx/" class="social-media-header" target="_blank"><i
                class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/ali-hamrani-4a7718197" class="social-media-header" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
    </h2></p>
    <br>
    <h5 class="text-white" data-aos="fade-in">من عاشق برنامه نویسی هستم<i class="fa fa-heart mr-1"
                                                                          style="color: #ed5a64"></i></h5></i>
    <br>
    <a class="btn know_me" href="#" id="knowme" data-aos="fade-left" role="button">مرا بهتر بشناسید</a>
    <a class="btn sefarsh" id="sefaresh" href="#contact" role="button"> سفارش</a>
</div>
<section class="jumbotron about pb-0 mb-0" id="about">
    <div class="col-md-6 col-sm-12 d-flex offset-sm-3" data-aos="fade-left">
        <div class="col-sm-2 myimgabout">
            <img src="{{ asset('/images/ali2.jpg') }}" style="border-radius: 50%" class="about-img" alt="من">
        </div>
        <div class="col-sm-10 hidden-xs d-block pt-2">
            <div class="div-border position-relative" style="top: 35px"></div>
            <h5 class="text-white float-right">علی حمرانی</h5>
            <p class="text-white d-inline-block position-relative" style="top: 10px;direction: rtl;text-align: right">
                من توسعه دهنده فول استک هستم که بهش میگن <a href="http://vrgl.ir/BkaD6" target="_blank" class="roboto-font red-color"> Full Stack Web Developer </a> .
                <br>
                ۵ ساله که برنامه نویسی میکنم که ۳ سال اون بصورت حرفه در بازار کار بوده.
                در چارت <span class="red-color"> مهارت های من </span> بیشتر میتونید با مهارت های من آشنا بشید.
            </p>
        </div>
    </div>
    <div  class="col-md-6 col-sm-12 d-flex offset-3">
        <img src="{{ asset('/images/arr-w.png') }}" alt="arrow" class="show-arr offset-8">
    </div>
    <div style="width: 100%;height: auto;text-align: center;margin-top: 10px">
        <a class="btn my-skills" id="my_skills" data-toggle="collapse" href="#collapseExample" role="button"
           aria-expanded="false"
           aria-controls="collapseExample">
            مهارت های من
        </a>
    </div>
</section>
<div class="collapse" id="collapseExample">
    <div class="card card-body my-skills-div radius_zero">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12 col-sm-6 skil-item" style="text-align: center">
                    <span class="text-white roboto-font skill-language">Php 95%</span>
                    <span class="chart roboto-font text-white" data-percent="95">
                <span class="percent"></span>
            </span>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 skil-item" style="text-align: center">
                    <span class="text-white roboto-font skill-language">React 80%</span>
                    <span class="chart roboto-font" data-percent="80">
                <span class="percent"></span>
            </span>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 skil-item" style="text-align: center">
                    <span class="text-white roboto-font skill-language">Laravel 95%</span>
                    <span class="chart roboto-font" data-percent="95">
                <span class="percent"></span>
            </span>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-6 skil-item" style="text-align: center">
                    <span class="text-white roboto-font skill-language">Django 70%</span>
                    <span class="chart roboto-font" data-percent="70">
                <span class="percent"></span>
            </span>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="whatido" class="whatido">
    <div class="container">
        <h1 class="text-white" align="center" data-aos="fade-up">آنچه که من انجام می دهم</h1>
        <div class="b_shadow"></div>
        <div class='row'>
            <br>
            <div class="col-md-3 col-sm-3" data-aos="fade-left" style="text-align: center">
                <img src="./images/ico-seo.png" alt="بهینه">
                <div class="b_shadow" style="margin-top: 39px"></div>
                <h4 align="center" class="text-white">طراحی بهینه برای موتور های جستوجو</h4>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" data-aos="fade-left" style="text-align: center">
                <img class="whatido_images" src="./images/reliable.svg" alt="بی">
                <div class="b_shadow"></div>
                <h4 align="center" class="text-white">نوشتن وب سرویس استاندارد</h4>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" data-aos="fade-right" style="text-align: center">
                <img class="whatido_images" src="./images/pwa.svg" alt="پیشرو">
                <div class="b_shadow"></div>
                <h4 align="center" class="text-white">پیاده سازی اپلیکشن های پیشرو</h4>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" data-aos="fade-right" style="text-align: center">
                <img src="./images/secure.svg" alt="امن" style="position: relative;bottom: 37px;">
                <div class="b_shadow"></div>
                <h4 align="center" class="text-white">امنیت حرف اول رو میزنه</h4>
            </div>
        </div>
    </div>
</section>
<section id="billy" class="billy">
    <div class="container">
        <div class="row align-content-center text-white" data-aos="fade-in" style="font-size: 22px">
            <div class="col-sm-7 offset-2" style="border-left: 4px solid #553436">
                <p>من در رقابت با هیچکس جز خودم نیستم، هدف من مغلوب کردن آخرین کاریست که انجام داده ام.</p>
                <p style="color: #d41b3f;font-size: 18px">بیل گیتس --</p>
            </div>
        </div>
    </div>
</section>
<section id="refrence" class="whatido">
    <div class="container">
        <h1 class="text-white" align="center" data-aos="fade-up"> آخرین کارها</h1>
        <div class="b_shadow"></div>
        <div class='row'>
            <br>
            <div class="col-md-4 col-sm-6 col-xs-12 align-content-center align-items-center mt-3" id="pasbede"
                 data-aos="fade-left"
                 style="text-align: center;cursor: pointer;height: 300px">
                <div class="row fit-div m-0 ref1" id="pasbede_img" data-aos="flip-left">
                    <div style="margin: auto">
                        <div id="pasbede_content" class="content-div-style">
                            <h4><a href="http://pasbede.com/" class="roboto-font red-color font-weight-bold roboto-font"
                                   target="_blank">pasbede.com</a></h4>
                            <p class='text-white font-weight-bold'>سایت اجاره منزل و اجناس پس بده.</p>
                            <p class='text-white font-weight-bold'>پیاده سازی شده با فرمورک قدرتمند <span
                                    class="red-color">لاراول</span></p>
                        </div>
                        <button class="btn my-skills float-right info-icon" id="pasbede_info" style="opacity: 1"
                                type="submit"><i class="fa fa-info mt-1" style="font-size: 28px"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 align-content-center align-items-center mt-3" id="mehrgram"
                 data-aos="fade-left"
                 style="text-align: center;cursor: pointer;height: 300px">
                <div class="row fit-div m-0 ref1" id="mehrgram_img" data-aos="flip-right">
                    <div style="margin: auto">
                        <div id="mehrgram_content" class="content-div-style">
                            <h4><a href="http://mehrgram.com/"
                                   class="roboto-font red-color font-weight-bold roboto-font" target="_blank">mehrgram.com</a>
                            </h4>
                            <p class='text-white font-weight-bold'>شبکه اجتماعی مهرگرام.</p>
                            <p class='text-white font-weight-bold'>پیاده سازی شده با زبان <span class="red-color">پی اچ پی</span>
                            </p>
                        </div>
                        <button class="btn my-skills float-right info-icon" id="mehrgram_info" style="opacity: 1"
                                type="submit"><i class="fa fa-info mt-1" style="font-size: 28px"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 align-content-center align-items-center mt-3" id="pishgam"
                 data-aos="fade-left"
                 style="text-align: center;cursor: pointer;height: 300px" >
                <div class="row fit-div m-0 ref1" id="pishgam_img" data-aos="flip-up">
                    <div style="margin: auto">
                        <div id="pishgam_content" class="content-div-style">
                            <h4><a href="http://pishgamcomposite.ir/"
                                   class="roboto-font red-color font-weight-bold roboto-font" target="_blank">pishgamcomposite.com</a>
                            </h4>
                            <p class='text-white font-weight-bold'>وبسایت شرکت پیشگام کاموزیت اروند.</p>
                            <p class='text-white font-weight-bold'>پیاده سازی شده با فرمورک قدرتمند <span
                                    class="red-color">لاراول</span></p>
                        </div>
                        <button class="btn my-skills float-right info-icon" id="pishgam_info" style="opacity: 1"
                                type="submit"><i class="fa fa-info mt-1" style="font-size: 28px"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 align-content-center align-items-center mt-3" id="rest"
                 data-aos="fade-left"
                 style="text-align: center;cursor: pointer;height: 300px">
                <div class="row fit-div m-0 ref1" id="rest_img" data-aos="flip-down">
                    <div style="margin: auto">
                        <div id="rest_content" class="content-div-style">
                            <p class='text-white font-weight-bold'>اپلیکیشن رستوران گردی</p>
                            <p class='text-white font-weight-bold'>پیاده سازی شده با فرمورک قدرتمند <span
                                    class="red-color">فلاتر</span></p>
                        </div>
                        <button class="btn my-skills float-right info-icon" id="rest_info" style="opacity: 1"
                                type="submit"><i class="fa fa-info mt-1" style="font-size: 28px"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 align-content-center align-items-center mt-3" id="adminpanel"
                 data-aos="fade-left"
                 style="text-align: center;cursor: pointer;height: 300px">
                <div class="row fit-div m-0 ref1" id="adminpanel_img" data-aos="flip-left">
                    <div style="margin: auto">
                        <div id="adminpanel_content" class="content-div-style">
                            <p class='text-white font-weight-bold'>پنل ادمین حرفه ای برای مدریت انبارها.</p>
                            <p class='text-white font-weight-bold'>پیاده سازی شده با فرمورک قدرتمند <span
                                    class="red-color">لاراول</span></p>
                        </div>
                        <button class="btn my-skills float-right info-icon" id="adminpanel_info" style="opacity: 1"
                                type="submit"><i class="fa fa-info mt-1" style="font-size: 28px"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 align-content-center align-items-center mt-3" id="ramanmarket"
                 data-aos="fade-left"
                 style="text-align: center;cursor: pointer;height: 300px" data-aos="flip-right">
                <div class="row fit-div m-0 ref1" id="ramanmarket_img">
                    <div style="margin: auto">
                        <div id="ramanmarket_content" class="content-div-style">
                            <h4><a href="http://ramanmarket.com/"
                                   class="roboto-font red-color font-weight-bold roboto-font" target="_blank">ramanmarket.com</a>
                            </h4>
                            <p class='text-white font-weight-bold'>فروشگاه اینترنتی رامان مارکت.</p>
                            <p class='text-white font-weight-bold'>فروشگاه محصولات کشاورزی.</p>
                            <p class='text-white font-weight-bold'>پیاده سازی شده با فرمورک قدرتمند <span
                                    class="red-color">لاراول</span></p>
                        </div>
                        <button class="btn my-skills float-right info-icon" id="ramanmarket_info" style="opacity: 1"
                                type="submit"><i class="fa fa-info mt-1" style="font-size: 28px"></i></button>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="row">
            <div style="margin: auto"><i class="fa fa-ellipsis-h text-white"></i></div>
        </div>
    </div>
</section>
<section id="contact" class="billy">
    <div class="container">
        <h1 class="text-white" align="center" data-aos="fade-up"> تماس با من</h1>
        <div class="b_shadow"></div>
        <div class="row align-content-center text-white desktop_mac" style="font-size: 22px">
            <div class="container" style="padding: 0 132px">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="mac_title offset-1">ارسال پیغام</h3>
                        <form action="php/contact.php" method="post" class="offset-1">
                            <input name="name" required id="name" type="text" class="form-control contact-input"
                                   placeholder="نام کامل">
                            <input name="phone" required id="phone" type="text" class="form-control contact-input"
                                   placeholder="تلفن">
                            <input name="title" required id="title" type="text" class="form-control contact-input"
                                   placeholder="موضوع">
                            <textarea name="body" required id="body" type="text" class="form-control contact-input"
                                      rows="5"
                                      placeholder="توضیحات"></textarea>
                            <button class="btn my-skills float-right" type="submit">ارسال پیغام</button>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-number">
                            <p style="position: relative;top: 10px;font-size: 16px;border-bottom: 2px dashed #ad3740;padding-bottom: 10px">
                                علی حمرانی</p>
                            <p style="position: relative;top: 10px;font-size: 16px;border-bottom: 2px dashed #ad3740;padding-bottom: 10px">
                                09384720059</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mob-form mt-5">
            <div class="col-sm-12">
                <form action="php/contact.php" method="post" class="offset-1">
                    <input name="name" required id="name1" type="text" class="form-control contact-input"
                           placeholder="نام کامل">
                    <input name="phone" required id="phone1" type="text" class="form-control contact-input"
                           placeholder="تلفن">
                    <input name="title" required id="title1" type="text" class="form-control contact-input"
                           placeholder="موضوع">
                    <textarea name="body" id="body1" type="text" class="form-control contact-input" rows="5"
                              placeholder="توضیحات"></textarea>
                    <button class="btn my-skills float-right" type="submit">ارسال پیغام</button>
                </form>
            </div>

        </div>
    </div>
</section>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row" style="text-align: center">
            <div style="margin: auto">
                <a href="http://t.me/ali_jimmyX" class="social-media" target="_blank"><i
                        class="fab fa-telegram-plane"></i></a>
                <a href="tel:09384720059" class="social-media"><i class="fa fa-phone"></i></a>
                <a href="https://ponisha.ir/profile/ali00hamrani" target="_blank" class="social-media" style=""><img style="width: 28px;
    margin-bottom: 4px;" src="{{ asset('/images/logo-sm.png') }}" alt="پونیشا"></a>
                <a href="https://www.instagram.com/ali_jimmyx/" class="social-media" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ali-hamrani-4a7718197" class="social-media" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <br>
        <div class="row pt-2">
            <div style="margin: auto">
                <span><i class="fa fa-copyright text-white"></i></span>
                <span class="text-white">2020</span>
                <span class="text-white"> | </span>
                <span class="text-white">تمامی حقوق برای <a href="{{ route('index') }}" class="alicopy">علی حمرانی</a> محفوظ است.</span>
            </div>
        </div>
        <br>
        <div class="row pt-2">
            <div style="margin: auto">
                <p class="text-white" style="font-size: 5px !important;">طرح از سید مصطفی موسوی</p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{ asset("/js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("/js/animation.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("/js/jimmyx.js")}}"></script>
<script type="text/javascript" src="{{ asset("/js/jquery.easypiechart.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("/js/popper.min.js")}}"></script>
<script type="text/javascript" src="{{ asset("/js/bootstrap.bundle.min.js")}}"></script>
</body>
</html>
