<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali Hamrani - Web Developer & Programmer</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/desktop.css">
    <link rel="stylesheet" href="./style/tablet.css">
    <link rel="stylesheet" href="./style/mobile.css">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/animation.min.css">
    <link rel="stylesheet" href="./style/all.min.css">
    <link rel="stylesheet" href="./style/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./style/bootstrap-reboot.min.css">
</head>
<body>
<div class="splash row" style="margin: 0 !important;">
    <div class="loading" style="margin: auto">
        <div class="loadingio-spinner-bean-eater-88n6pg3v6cb"><div class="ldio-dmc0fbn5cdd">
                <div><div></div><div></div><div></div></div><div><div></div><div></div><div></div></div>
            </div></div>
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
        <a class="navbar-brand logo-text-head-mob" href="http://alihamrani.ir">
            <img src="./images/ali.png" style="border-radius: 50%" class="logo" alt="لوگو">
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
    <img src="./images/ali.png" style="border-radius: 50%" class="img-me" alt="من" data-aos="fade-down">
    <p><
    <h1 class="display-4 font_mj_c text-white titles" data-aos="fade-in">
        <a href="http://t.me/ali_jimmyX" class="social-media-header" target="_blank"><i
                    class="fab fa-telegram-plane"></i></a>
        <a href="tel:09384720059" class="social-media-header"><i class="fa fa-phone"></i></a>
        علی حمرانی
        <a href="https://www.instagram.com/ali_jimmyx/" class="social-media-header" target="_blank"><i
                    class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/ali-hamrani-4a7718197" class="social-media-header" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a>
    </h1></p>
    <br>
    <h4 class="text-white" data-aos="fade-in">من عاشق برنامه نویسی هستم<i class="fa fa-heart mr-1"
                                                                          style="color: #ed5a64"></i></h4></i>
    <br>
    <a class="btn know_me" href="#" id="knowme" data-aos="fade-left" role="button">مرا بهتر بشناسید</a>
    <a class="btn sefarsh" id="sefaresh" href="#contact" role="button"> سفارش</a>
</div>
<section class="jumbotron about pb-0 mb-0" id="about">
    <div class="col-md-6 col-sm-12 d-flex offset-sm-3" data-aos="fade-left">
        <div class="col-sm-2 myimgabout">
            <img src="./images/ali.png" style="border-radius: 50%" class="about-img" alt="من">
        </div>
        <div class="col-sm-10 hidden-xs d-block pt-2">
            <div class="div-border position-relative" style="top: 35px"></div>
            <h5 class="text-white float-right">علی حمرانی</h5>
            <p class="text-white d-inline-block position-relative" style="top: 10px;direction: rtl;text-align: right">
                ۵ سال هست که برنامه نویسی رو شروع کردم.
                ۳ سال برنامه نویسی حرفه ای میکنم که ۱ سال اون بصورت همکاری با شرکت ها و دوسال هم برنامه نویسی آزاد بوده.
            </p>
        </div>
    </div>
    <br>
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
        <h1 class="text-white" align="center">آنچه که من انجام می دهم</h1>
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
        <h1 class="text-white" align="center"> آخرین کارها</h1>
        <div class="b_shadow"></div>
        <div class='row'>
            <br>
            <div class="col-md-6 col-sm-12 align-content-center align-items-center" data-aos="fade-left"
                 style="text-align: center">
                <div class="refrence_image">
                    <img src="./images/raman.png" alt="">
                </div>
                <div class="b_shadow" style="margin-top: 39px"></div>
                <h4 align="center" class="text-white">فروشگاه محصولات کشاورزی</h4>
                <p style="text-align: center" class="text-white">
                    <a href="http://ramanmarket.com" target="_blank" style="color: #3a2a2a">رامان مارکت</a>
                </p>
            </div>
            <div class="col-md-6 col-sm-12" data-aos="fade-right" style="text-align: center">
                <div class="refrence_image" style="width: 226px">
                    <div style="width: 190px;height: 190px;background-color: white;margin: auto;">
                        <img src="./images/pasbede.png" alt=""
                             style="width: 150px;height: 150px;top: 20px;position:relative;">
                    </div>
                </div>
                <div style="height: 22px"></div>
                <div class="b_shadow"></div>
                <h4 align="center" class="text-white">وبسایت اجاره اجناس</h4>
                <p style="text-align: center" class="text-white">
                    <a href="http://pasbede.com" target="_blank" style="color: #3a2a2a">پس بده</a>
                </p>
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
                <span class="text-white">تمامی حقوق برای <a href="http://alihamrani.ir" class="alicopy">علی حمرانی</a> محفوظ است.</span>
            </div>
        </div>
        <br>
        <div class="row pt-2">
            <div style="margin: auto">
                <p class="text-white" style="font-size: 8px">طرح از سید مصطفی موسوی</p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/animation.min.js"></script>
<script type="text/javascript" src="./js/jimmyx.js"></script>
<script type="text/javascript" src="./js/jquery.easypiechart.min.js"></script>
<script type="text/javascript" src="./js/popper.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php //session_abort() ?>