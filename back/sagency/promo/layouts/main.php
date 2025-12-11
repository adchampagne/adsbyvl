<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AdChampagne — Get your 200$ bonus deposit</title>
    <meta name="description" content="Our partners choose AdChampagne for our decades of media-buying experience and 3.6+ Billion downloads delivered.">
    <meta property="og:title" content="AdChampagne — We create and promote advertising on social networks">
    <meta property="og:site_name" content="AdChampagne">
    <meta property="og:description" content="Our partners choose AdChampagne for our decades of media-buying experience and 3.6+ Billion downloads delivered.">

    <link rel="apple-touch-icon" sizes="57x57" href="<?= $baseURL; ?>local/assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $baseURL; ?>local/assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $baseURL; ?>local/assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $baseURL; ?>local/assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $baseURL; ?>local/assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $baseURL; ?>local/assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $baseURL; ?>local/assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $baseURL; ?>local/assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $baseURL; ?>local/assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= $baseURL; ?>local/assets/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $baseURL; ?>local/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $baseURL; ?>local/assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $baseURL; ?>local/assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?= $baseURL; ?>local/assets/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $baseURL; ?>local/assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?= $baseURL; ?>local/assets/fonts/stylesheet.css?ver=2.0">

    <link rel="stylesheet" href="<?= $baseURL; ?>local/css/style.css?ver=2.0">

</head>
<body>

    <a href="" class="logo">
        <img src="<?= $baseURL; ?>local/assets/images/logo.svg" alt="">
    </a>

    <!-- Main -->
    <main>
        <div class="wrapper">
            <img src="local/assets/images/logo__bottom.svg" alt="" class="main__preimg--mobile">
            <div class="main__block1">
                <h1 class="main__title">Thank you for&nbsp;choosing us</h1>
                <p class="main__desc">We are&nbsp;looking forward to&nbsp;start our cooperation!</p>
                <div class="main__button">Get your 200$&nbsp;bonus deposit</div>
            </div>
            <?php if($_GET['g'] == 'contact') { ?>
               <?php
               if(!empty($_POST)){
                  $to  = 'sales@adchampagne.com';
                  $subject = 'adChampagne.com > Promo';
                  $message = '
                              <html>
                              <head>
                              <title>adChampagne.com > Promo</title>
                              </head>
                              <body>
                                 <p>Hey, There!</p>
                                 <hr />
                                 <p><b>Code:</b> ' . (!empty($_POST["form__code"]) ? strip_tags($_POST["form__code"]) : 'Empty') . '</p>
                                 <p><b>Name:</b> ' . (!empty($_POST["form__name"]) ? strip_tags($_POST["form__name"]) : 'Empty') . '</p>
                                 <p><b>URL:</b> ' . (!empty($_POST["form__url"]) ? strip_tags($_POST["form__url"]) : 'Empty') . '</p>
                                 <p><b>Feedback email:</b> ' . (!empty($_POST["form__email"]) ? nl2br(strip_tags($_POST["form__email"])) : 'Empty') . '</p>
                                 <p><b>Phone:</b> ' . (!empty($_POST["form__phone"]) ? nl2br(strip_tags($_POST["form__phone"])) : 'Empty') . '</p>
                              </body>
                              </html>
                              ';
                  $headers  = 'MIME-Version: 1.0' . "\r\n";
                  $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                  $headers .= 'To: adChampagne.com <sales@adchampagne.com>' . "\r\n";
                  $headers .= 'From: ' . (!empty($_POST["form__name"]) ? strip_tags($_POST["form__name"]) : 'Empty') . ' <' . (!empty($_POST["form__email"]) ? nl2br(strip_tags($_POST["form__email"])) : 'sales@adchampagne.com') . '>' . "\r\n";
                  mail($to, $subject, $message, $headers);
               ?>
                  <div class="main__block3 openned">
                     <img src="<?= $baseURL; ?>local/assets/images/thanks.png" alt="" class="main__img">
                     <p>Thank you for choosing us</p>
                     <p>We will contact you as soon as possible</p>
                     <p>While you are waiting for an answer, you can view <a href="https://adchampagne.com/">our website</a></p>
                     <img src="<?= $baseURL; ?>local/assets/images/logo__bottom.svg" alt="" class="main__preimg">
                  </div>
               <?php } else { ?>
                  <div class="main__block3 openned">
                     <p style="margin-top: auto;">Connection Error. Go back!</p>
                     <p>Please, try again.</p>
                     <a href="" class="main__button">Go back</a>
                     <img src="<?= $baseURL; ?>local/assets/images/logo__bottom.svg" alt="" class="main__preimg">
                  </div>
               <?php } ?>
         <?php } elseif(!empty($_GET['g']) &&  $_GET['g'] != 'contact') { ?>
               <div class="main__block3 openned">
                  <p style="margin-top: auto;">Something goes wrong!</p>
                  <p>Please, try again.</p>
                  <img src="<?= $baseURL; ?>local/assets/images/logo__bottom.svg" alt="" class="main__preimg">
               </div>
         <?php } else { ?>
            <div class="main__block3">
                  <img src="<?= $baseURL; ?>local/assets/images/thanks.png" alt="" class="main__img">
                  <p>Thank you for choosing us</p>
                  <p>We will contact you as soon as possible</p>
                  <p>While you are waiting for an answer, you can view <a href="https://adchampagne.com/">our website</a></p>
                    
                  <img src="<?= $baseURL; ?>local/assets/images/logo__bottom.svg" alt="" class="main__preimg">
               </div>
         <?php } ?>
            <div class="main__block2">
                <div class="main__post_title">Get started our cooperation</div>
                <form method="post" action="<?php $nav_link = explode($_SERVER['REQUEST_URI'], '?'); echo $nav_link[0]; ?>g=contact">
                    <label>
                        <input type="text" name="form__code" value="<?= empty($_GET['code']) ? '' : $_GET['code']; ?>" required>
                        <span <?= empty($_GET['code']) ? '' : 'class="inputed"'; ?>>Сode from the&nbsp;gift card</span>
                        <p>This code will activate a&nbsp;$200&nbsp;discount for&nbsp;your advertising campaign&nbsp;🥂</p>
                    </label>
                    <label>
                        <input type="text" name="form__name" required>
                        <span>Name</span>
                    </label>
                    <label>
                        <input type="text" name="form__url" required>
                        <span>Company Link</span>
                    </label>
                    <label>
                        <input type="email" name="form__email" required>
                        <span>E-mail</span>
                    </label>
                    <label>
                        <input type="tel" name="form__phone">
                        <span>Telephone</span>
                    </label>
                    <button type="submit">SEND</button>
                </form>
            </div>
            
            
        </div>
        <footer>
            <div class="wrapper">
                <div class="footer__links">
                    <p>© 2021 All rights reserved</p>
                    <a href="https://adchampagne.com/agreement.html">Privacy policy</a>
                    <a href="https://adchampagne.com/agreement.html">Terms and conditions</a>
                </div>
            </div>
        </footer>
    </main>
    <!-- Main END -->

    <footer>
        <div class="wrapper">
            <div class="footer__links">
                <p>© 2021 All rights reserved</p>
                <a href="https://adchampagne.com/agreement.html">Privacy policy</a>
                <a href="https://adchampagne.com/agreement.html">Terms and conditions</a>
            </div>
        </div>
    </footer>


    <script src="<?= $baseURL; ?>local/js/jquery.min.js"></script>
    <script src="<?= $baseURL; ?>local/js/main.js?ver=2.0"></script>

</body>
</html>