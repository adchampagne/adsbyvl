<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('widgets/meta.php'); ?>
    <title>Storytelling Through Digits - AdChampagne</title>
</head>
<body>

    <?php include_once('widgets/nav.php'); ?>

    <header class="header main">
        <h1 class="header__title">Storytelling<br>Through Digits</h1>
        <div class="header__footer">
            <a href="terms.php" class="header__footer_link">Terms and conditions</a>
            <p class="header__footer_p">© 2023 All rights reserved</p>
            <a href="mailto:sales@adchampagne.com" class="header__footer_link">sales@adchampagne.com</a>
            <p class="header__footer_p mobile">Scroll to see more</p>
        </div>
    </header>

    <div class="cases">
        <a href="Monobank.php" class="cases__item Services">
            <img src="local/assets/images/cases__monobank.jpg" alt="" class="cases__item_img">
            <p class="cases__item_title">Monobank</p>
            <span class="cases__item_tags">Cases</span>
        </a>
        <a href="NUUM.php" class="cases__item Services">
            <img src="local/assets/images/cases__nuum.jpg" alt="" class="cases__item_img">
            <p class="cases__item_title">NUUM Neobank</p>
            <span class="cases__item_tags">Cases</span>
        </a>
        <a href="Joom.php" class="cases__item Services">
            <img src="local/assets/images/2_JoomMarketplace.jpg" alt="" class="cases__item_img">
            <p class="cases__item_title">Joom Marketplace  </p>
            <span class="cases__item_tags">Cases</span>
        </a>
        <a href="Onfy.php" class="cases__item Services">
            <img src="local/assets/images/Onfy.jpg" alt="" class="cases__item_img">
            <p class="cases__item_title">Onfy Pharmaceutical Marketplace</p>
            <span class="cases__item_tags">Cases</span>
        </a>
        <!--
        <a href="SberServices.php" class="cases__item Ceo">
            <img src="local/assets/images/cases3.png" alt="" class="cases__item_img">
            <p class="cases__item_title">SberServices – Self-Ordering Platform</p>
            <span class="cases__item_tags">Cases</span>
        </a>
        -->
    </div>

    <div class="casesCTA">
        <div class="ui__borderedBlock">
            <div class="casesCTA__block">
                <p>Hi, we are AdChampagne – a unique mobile traffic agency. We create and promote mobile apps and brands worldwide on the leading ad platforms. Our specialists can solve any creative challenge – just tell us about your app.</p>
            </div>
        </div>
        <a href="cases.php" class="casesCTA__link ui__borderedBlock ui__borderedBlock--hover">
            <div>see all our cases</div>
        </a>
    </div>

    <div class="section photoSlider swiper">
        <div class="photoSlider_slideCounter"></div>
        <div class="photoSlider__wrapper swiper-wrapper">
            <div class="photoSlider__wrapper_slide swiper-slide">
                <img src="local/assets/images/officeView.jpg" alt="">
            </div>
            <div class="photoSlider__wrapper_slide swiper-slide">
                <img src="local/assets/images/officeView2.jpg" alt="">
            </div>
            <div class="photoSlider__wrapper_slide swiper-slide">
                <img src="local/assets/images/officeView3.jpg" alt="">
            </div>
        </div>
    </div>

    <?php include_once('widgets/footer.php'); ?>
    <?php include_once('widgets/form.php'); ?>
    <?php include_once('widgets/cookies.php'); ?>
    <?php include_once('widgets/scripts.php'); ?>

</body>
</html>