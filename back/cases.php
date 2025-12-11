<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('widgets/meta.php'); ?>
    <title>Cases - AdChampagne</title>
</head>
<body>

    <?php include_once('widgets/nav.php'); ?>

    <header class="header min">
        <h1 class="header__title" data-cases-count="4">Cases</h1>
        <p class="header__desc">Our mission is to help your business scale up using the full power of the leading advertising sources.</p>
    </header>

    <div class="filterTags" style="display: none !important">
        <div class="filterTags__item active" data-filter="*">All</div>
        <div class="filterTags__item" data-filter="Financicals">Financicals</div>
        <div class="filterTags__item" data-filter="Services">Services</div>
        <div class="filterTags__item" data-filter="Ceo">Ceo</div>
        <div class="filterTags__item" data-filter="Analitic">Analitic</div>
        <div class="filterTags__item" data-filter="Entertaiment">Entertaiment</div>
    </div>

    <div class="cases">
        <a href="NUUM.php" class="cases__item Services">
            <img src="local/assets/images/cases__nuum.jpg" alt="" class="cases__item_img">
            <p class="cases__item_title">NUUM Neobank</p>
            <span class="cases__item_tags">Cases</span>
        </a>
        <a href="Monobank.php" class="cases__item Services">
            <img src="local/assets/images/cases__monobank.jpg" alt="" class="cases__item_img">
            <p class="cases__item_title">Monobank</p>
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
        <a href="SberServices.php" class="cases__item Services">
            <img src="local/assets/images/cases3.png" alt="" class="cases__item_img">
            <p class="cases__item_title">SberServices – Self-Ordering Platform</p>
            <span class="cases__item_tags">Cases</span>
        </a>
        -->
    </div>

    <?php include_once('widgets/footer.php'); ?>
    <?php include_once('widgets/form.php'); ?>
    <?php include_once('widgets/cookies.php'); ?>
    <?php include_once('widgets/scripts.php'); ?>

</body>
</html>