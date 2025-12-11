<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AdChampagne — We create and promote advertising on social networks</title>
    <meta name="description" content="Our partners choose AdChampagne for our decades of media-buying experience and 3.6+ Billion downloads delivered.">
    <meta property="og:title" content="AdChampagne — We create and promote advertising on social networks">
    <meta property="og:site_name" content="AdChampagne">
    <meta property="og:description" content="Our partners choose AdChampagne for our decades of media-buying experience and 3.6+ Billion downloads delivered.">

    <link rel="apple-touch-icon" sizes="57x57" href="local/assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="local/assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="local/assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="local/assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="local/assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="local/assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="local/assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="local/assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="local/assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="local/assets/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="local/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="local/assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="local/assets/images/favicon-16x16.png">
    <link rel="manifest" href="local/assets/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="local/assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="local/css/style.css?ver=7.0">
</head>
<body class="mainPAGE">

<style>
        nav .lang {
            margin-left: auto;
            padding-left: 10px;
            font-size: 14px;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 20px;
        }
    </style>
    <!-- Nav -->
    <nav>
        <a href="#" class="nav__logo">
            <img src="local/assets/images/logo.svg" alt="">
        </a>
        <a href="#" class="nav__logo_mini">
            <img src="local/assets/images/logo_mini.svg" alt="">
        </a>
        <ul class="nav__menu">
            <li class="nav__menu_item">
                <a href="#about" class="js__scroll">About</a>
            </li>
            <li class="nav__menu_item">
                <a href="#services" class="js__scroll">Services</a>
            </li>
            <li class="nav__menu_item">
                <a href="#cases" class="js__scroll">Cases</a>
            </li>
            <li class="nav__menu_item">
                <a href="#whyUs" class="js__scroll">Why us</a>
            </li>
            <li class="nav__menu_item">
                <a href="#blog" class="js__scroll">Blog</a>
            </li>
            <li class="nav__menu_item">
                <a href="#philosophy" class="js__scroll">Philosophy</a>
            </li>
            <li class="nav__menu_item">
                <a href="#cta" class="js__scroll">Contact</a>
            </li>
            <li class="nav__menu_item">
                <a target="_blank" href="https://hh.ru/search/vacancy?st=searchVacancy&from=employerPage&employer_id=4795601">Job &#8599;</a>
            </li>
            <li class="nav__menu_close">
                <img src="local/assets/images/icon-close.svg" alt="">
            </li>
        </ul>
        <a href="#cta" class="nav__button js__scroll">Get clients</a>
        <div class="nav__burger">
            <img src="local/assets/images/burger.svg" alt="">
        </div>
    </nav>
    <!-- Nav END -->

    <!-- Header -->
    <header class="new">
        <div class="wrapper">
            <div class="header__bg">
                <div class="header__bg_circle">
                    <img src="local/assets/images/header__circle1.svg" alt="">
                </div>
                <div class="header__bg_circle2">
                    <img src="local/assets/images/header__circle2.svg" alt="">
                </div>
                <div class="header__bg_circle3">
                    <img src="local/assets/images/header__circle3.svg" alt="">
                </div>
            </div>
            <div class="header__text">
                <h1 class="header__text_title">Mobile <br>Advertising <br>Agency</h1>
                <?php if($_GET['g'] == 'contact') { ?>
                    <?php
                    if(!empty($_POST)){
                        $to  = 'sales@adchampagne.com';
                        $subject = 'adchampagne.com > Contact';
                        $message = '
                                    <html>
                                    <head>
                                    <title>adchampagne.com > Contact</title>
                                    </head>
                                    <body>
                                        <p>Hey, There!</p>
                                        <hr />
                                        <p><b>Name:</b> ' . (!empty($_POST["form__name"]) ? strip_tags($_POST["form__name"]) : 'Empty') . '</p>
                                        <p><b>Company Name:</b> ' . (!empty($_POST["form__company_name"]) ? strip_tags($_POST["form__company_name"]) : 'Empty') . '</p>                                            
                                        <p><b>Feedback email:</b> ' . (!empty($_POST["form__email"]) ? nl2br(strip_tags($_POST["form__email"])) : 'Empty') . '</p>
                                        <p><b>Phone:</b> ' . (!empty($_POST["form__phone"]) ? nl2br(strip_tags($_POST["form__phone"])) : 'Empty') . '</p>
                                        <p><b>Message:</b> ' . (!empty($_POST["form__message"]) ? strip_tags($_POST["form__message"]) : 'Empty') . '</p>
                                    </body>
                                    </html>
                                    ';
                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                        $headers .= 'To: adchampagne.com <sales@adchampagne.com>' . "\r\n";
                        $headers .= 'From: ' . (!empty($_POST["form__company_name"]) ? strip_tags($_POST["form__company_name"]) : 'Empty') . ' <' . (!empty($_POST["form__email"]) ? nl2br(strip_tags($_POST["form__email"])) : 'sales@adchampagne.com') . '>' . "\r\n";
                        mail($to, $subject, $message, $headers);
                        ?>
                        <p class="header__text_desc">We create and promote <br>advertising on social networks</p>
                        <?php } else { ?>
                            <p class="header__text_desc">We create and promote <br>advertising on social networks</p>
                        <?php } ?>
                    <?php } elseif(!empty($_GET['g']) &&  $_GET['g'] != 'contact') { ?>
                        <p class="header__text_desc">We create and promote <br>advertising on social networks</p>
                    <?php } else { ?>
                        <p class="header__text_desc">We create and promote <br>advertising on social networks</p>
                <?php } ?>
                <a href="#cta" class="header__text_button js__scroll">Get clients<span> →</span></a>
            </div>
            <div class="header__videos">
                <div class="header__videos_wrapper">
                    <div class="header__slider swiper">
                        <div class="header__slider_wrapper swiper-wrapper">
                            <div class="header__slider_item swiper-slide">
                                <video autoplay="autoplay" playsinline="" loop="loop" muted="muted" id="myvideo1">
                                    <source src="local/assets/videos/N3_Animation_VP8.webm" type="video/webm">
                                    <source src="local/assets/videos/N3_Animation.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="header__slider_item swiper-slide">
                                <video autoplay="autoplay" playsinline="" loop="loop" muted="muted" id="myvideo2">
                                    <source src="local/assets/videos/N1_Animations_VP8.webm" type="video/webm">
                                    <source src="local/assets/videos/N1_Animations.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="header__slider_item swiper-slide">
                                <video autoplay="autoplay" playsinline="" loop="loop" muted="muted" id="myvideo3">
                                    <source src="local/assets/videos/N2_Animation_VP8.webm" type="video/webm">
                                    <source src="local/assets/videos/N2_Animation.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.getElementById('myvideo1').play();
                document.getElementById('myvideo2').play();
                document.getElementById('myvideo3').play();
                setTimeout(function(){
                    document.getElementById('myvideo1').play();
                    document.getElementById('myvideo2').play();
                    document.getElementById('myvideo3').play();
                }, 2000)
            </script>
        </div>
    </header>
    <!-- Header END -->



    <!-- Main -->
    <main>

        <section class="about" id="about">
            <div class="wrapper-min">
                <h2>About</h2>
                <p>Our partners choose AdChampagne for our decades of&nbsp;media-buying experience and&nbsp;3.6+ Billion downloads delivered. </p>
                <div class="about__video" style="background-image: url(local/assets/images/about__video1.jpg);">
                    <img src="local/assets/images/play-button.svg" alt="" class="about__video_button">
                    <div class="about__video_item">
                        <video playsinline="" controls="controls" id="aboutvideo">
                            <source src="local/assets/videos/showreelNEW_VP8.webm" type="video/webm">
                            <source src="local/assets/videos/showreelNEW_x264.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .services .services__list_item p {
                font-size: inherit;
                margin: 0;
                line-height: 100%;
                margin-bottom: 12px;
            }
            .services .services__list_item span {
                font-size: 22px;
                line-height: 1.7;
                display: block;
                opacity: .6;
            }
            @media screen and (max-width: 768px) {
                .services .services__list_item span {
                    font-size: 15px;
                }
            }
        </style>
        <section class="services" id="services" data-action="play">
            <div class="wrapper-min">
                <h2>Services</h2>
                <p>We have a significant staff of specialists in multiple spheres, so we can decide any creative problem.</p>
                <div class="services__list">
                    <div class="services__list_item">Promo</div>
                    <div class="services__list_item">Motion</div>
                    <div class="services__list_item">Leads</div>
                    <div class="services__list_item">Banners</div>
                    <div class="services__list_item">Reels</div>
                    <div class="services__list_item">Art</div>
                    <div class="services__bgs">
                        <div data-scroll data-scroll-direction="horizontal"></div>
                        <svg viewBox="0 0 850 748" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="f1" d="M740.963 245.777C711.705 386.476 546.346 557.597 371.618 627.989C196.896 698.383 78.9681 641.396 108.224 500.693C137.482 359.997 302.846 188.874 477.572 118.481C652.3 48.0926 770.222 105.085 740.963 245.777ZM492.889 44.8129C267.637 135.563 54.4531 356.174 16.7381 537.554C-20.982 718.937 131.045 792.413 356.298 701.657C581.55 610.906 794.735 390.306 832.449 208.918C870.172 27.5331 718.142 -45.9376 492.889 44.8129Z" fill="#C8E1D7"/>
                            <path class="f2" d="M485.166 748C477.003 588.832 564.531 429.664 577.683 405.66C590.835 381.659 646.037 288.368 664.759 312.812C672.014 322.288 673.152 361.813 618.953 450.506C528.249 598.939 430.744 628.623 380.857 615.36C317.585 598.536 288.041 470.813 340.04 325.444C397.281 165.426 471.146 118.766 501.946 146.064C528.996 170.037 519.152 297.858 415.323 398.083C283.804 525.037 177.989 430.682 181.31 286.286C185.392 108.8 281.537 3.95123 334.598 0.161499C387.661 -3.63043 398.09 60.1643 393.556 105.642L370.427 120.167C374.508 70.9023 360.449 50.691 343.216 45.0052C282.274 24.9041 194.804 184.373 214.87 308.391C236.639 442.927 332.993 431.516 372.694 403.767C491.968 320.394 501.04 207.332 481.992 189.017C445.416 153.843 379.497 273.652 360.903 346.92C342.308 420.188 331.878 546.513 397.637 574.304C511.965 622.622 662.944 384.818 641.629 358.921C621.789 334.818 501.04 564.829 518.726 710.736L485.166 748Z" fill="#D29BD2"/>
                            <path class="f3" d="M513.014 602.782C434.488 672.3 354.331 672.805 287.973 608.43C253.467 574.958 233.139 510.893 222.901 441.578C213.564 378.368 212.19 311.108 210.158 269.053C205.895 180.884 190.617 102.011 201.35 83.9459C215.15 60.7195 281.388 118.655 393.985 159.056C506.651 199.484 603.104 200.936 623.191 294.193C643.28 387.447 591.537 533.265 513.014 602.782ZM678.214 216.372C660.221 173.445 596.351 172.708 514.388 162.907C462.525 156.71 407.687 143.964 357.814 122.915C228.485 68.3358 169.137 0.573425 160.656 8.66095C150.764 18.0947 188.244 79.9775 192.439 252.625C196.639 425.476 149.554 684.913 355.785 736.44C445.543 758.864 533.06 696.068 595.394 603.243C672.271 488.768 715.092 304.356 678.214 216.372Z" fill="#E6E6AF"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>


        <section class="portfolioItems" id="cases">
            <div class="wrapper-min">
                <h2>Cases</h2>
                <a href="nuum.php" class="portfolioItems__item">
                    <h4>NUUM. Break the&nbsp;Idea of&nbsp;Traffic for&nbsp;Neobank</h4>
                </a>
            </div>
        </section>


        <section class="whyUs" id="whyUs">
            <div class="wrapper-min">
                <h2>Why Us</h2>
                <div class="whyUs__cards">
                    <div class="whyUs__cards_column">
                        <div class="whyUs__cards_item big" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 765px; background-image: url(local/assets/images/card_1.png);">
                            <p>Premium and exclusive traffic sources</p>
                        </div>
                        <div class="whyUs__cards_item small" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 382px; background-image: url(local/assets/images/card_2.jpg);">
                            <p>Experienced creative production team</p>
                        </div>
                        <div class="whyUs__cards_item big" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 765px; background-image: url(local/assets/images/card_3.jpg);">
                            <p>Soft launch ad campaigns. Low starting budgets</p>
                        </div>
                    </div>
                    <div class="whyUs__cards_column">
                        <div class="whyUs__cards_item small" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 382px; background-image: url(local/assets/images/card_4.jpg);">
                            <p class="black">Flexible <br>payment terms</p>
                        </div>
                        <div class="whyUs__cards_item big" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 765px; background-image: url(local/assets/images/card_5.jpg);">
                            <p>Long-term client goals are priorities</p>
                        </div>
                        <div class="whyUs__cards_item small" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 382px; background-image: url(local/assets/images/card_6.jpg);">
                            <p class="black">ML Analytics and media planning</p>
                        </div>
                        <div class="whyUs__cards_item small" data-scroll data-scroll-call="addOpacity" data-scroll-repeat style="height: 382px; background-image: url(local/assets/images/card_7.jpg);">
                            <p class="black">Millions of delivered app installs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="blogItems" id="blog">
            <div class="wrapper-min">
                <h2>Blog</h2>
                <a href="remote-working-world.php" class="blogItems__item">
                    <img src="local/assets/images/blog1.png" alt="">
                </a>
            </div>
        </section>


        <section class="phylosophy" id="philosophy">
            <div class="wrapper-min">
                <h2>Philosophy</h2>
                <div class="phylosophy__text">
                    <p>At AdChampagne we strive to enrich the lives of our employees, clients and community members, and in turn make our lives more meaningful. <span class="first"></span></p>
                    <p>We continuously improve our services, making them    <span class="second"></span>     best practices in the media buying market. We lead the market with our professionalism and high ethical standards.</p>
                    <p>We are honest and transparent in all our dealings. We work to improve the professional and day-to-day lives of everyone we touch. This is our *ikigai.&nbsp;<span id="scene" class="third"><span data-depth="10"></span></span></p>
                    <span>*is the Japanese concept meaning "a reason for being"</span>
                </div>
            </div>
        </section>

    </main>
    <!-- Main END -->


    <!-- Footer -->
    <footer id="cta">
        <div class="wrapper-min">
            <h2>Contact</h2>
            <?php if($_GET['g'] != 'contact') { ?>
                <form method="post" action="<?php $nav_link = explode($_SERVER['REQUEST_URI'], '?'); echo $nav_link[0]; ?>g=contact">
                    <div class="form__block">
                        <h3>Get Clients</h3>
                        <label>
                            <input type="text" required name="form__name">
                            <span>Name</span>
                        </label>
                        <label>
                            <input type="text" required name="form__company_name">
                            <span>Company</span>
                        </label>
                        <label>
                            <input type="email" required name="form__email">
                            <span>E-mail</span>
                        </label>
                        <label>
                            <input type="tel" required name="form__phone">
                            <span>Telephone</span>
                        </label>
                        <label class="w100">
                            <input type="text" name="form__message">
                            <span>Message</span>
                        </label>
                        <label class="policy w100">
                            <input type="checkbox" required checked>
                            <span>I have read and accepted the Terms and Conditions and Privacy Policy.</span>
                        </label>
                        <button type="submit">SEND</button>
                    </div>
                    <div class="form__info">
                        <h3>If you have questions</h3>
                        <p>For any questions or additional information feel free to contact us at:</p>
                        <a href=""><img src="local/assets/images/teleram.svg" alt=""><span>adchampagne</span></a>
                        <a href="mailto:sales@adchampagne.com"><img src="local/assets/images/mail icon.svg" alt=""><span>sales@adchampagne.com</span></a>
                    </div>
                </form>
            <?php } else { ?>
                <form method="post" action="<?php $nav_link = explode($_SERVER['REQUEST_URI'], '?'); echo $nav_link[0]; ?>g=contact">
                    <div class="form__block">
                        <h3>Get Clients</h3>
                        <label>
                            <input type="text" required name="form__name">
                            <span>Name</span>
                        </label>
                        <label>
                            <input type="text" required name="form__company_name">
                            <span>Company</span>
                        </label>
                        <label>
                            <input type="email" required name="form__email">
                            <span>E-mail</span>
                        </label>
                        <label>
                            <input type="tel" required name="form__phone">
                            <span>Telephone</span>
                        </label>
                        <label class="w100">
                            <input type="text" name="form__message">
                            <span>Message</span>
                        </label>
                        <label class="policy w100">
                            <input type="checkbox" required checked>
                            <span>I have read and accepted the Terms and Conditions and Privacy Policy.</span>
                        </label>
                        <button type="submit">SEND</button>
                    </div>
                    <div class="form__info">
                        <h3>If you have questions</h3>
                        <p>For any questions or additional information feel free to contact us at:</p>
                        <a style="display: none !important;" href=""><img src="local/assets/images/teleram.svg" alt=""><span>adchampagne</span></a>
                        <a href="mailto:sales@adchampagne.com"><img src="local/assets/images/mail icon.svg" alt=""><span>sales@adchampagne.com</span></a>
                    </div>
                </form>
            <?php } ?>
            <div class="footer__links">
                <p>© 2023 All rights reserved</p>
                <a href="agreement.html">Privacy policy</a>
                <a href="agreement.html">Terms and conditions</a>
            </div>
            <div class="footer__links" style="margin-top: 20px; font-size: 13px; color: #6f7c77;">
                ADC MEDIA FOR ADVERTISING AGENCY L.L.C
            </div>
        </div>
    </footer>
    <!-- Footer END -->

    <?php if($_GET['g'] == 'contact') { ?>
        <div class="done_pop-up openned">
            <div class="wrapper">
                <div class="block">
                    <img src="local/assets/images/galc.png" alt="">
                    <p>Thanks, we got your request!</p>
                </div>
            </div>
        </div>
        <script>
            setTimeout(function(){
                $('.done_pop-up').removeClass('openned');
            }, 4000);
        </script>
    <?php } ?>

    <script src="local/js/jquery.min.js"></script>
    <script src="local/js/in-view.min.js"></script>
    <script src="local/js/TweenMax.min.js"></script>
    <script src="local/js/morph.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="local/js/main.js?ver=7.0"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(87241306, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/87241306" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>