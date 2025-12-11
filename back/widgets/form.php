<div class="getClients form">
    <div class="overlay">
        <svg class="getClients__close js__closeForm">
            <use xlink:href="local/assets/icons.svg#icon-close"></use>
        </svg>
        <h3 class="getClients__title">Get clients</h3>
        <p class="getClients__desc">We offer high-quality analytics and development. If you would like to see it for yourself, contact us – and we will do something for you.</p>
        <form class="getClients__form" method="post" action="<?php $nav_link = explode($_SERVER['REQUEST_URI'], '?'); echo $nav_link[0]; ?>g=contact">
            <label for="formName">Name<span>*</span></label>
            <input type="text" id="formName" name="form__name" required>
            <label for="formEMail">E-mail<span>*</span></label>
            <input type="email" id="formEMail" name="form__email" required>
            <label for="formCompany">Company<span>*</span></label>
            <input type="text" id="formCompany" name="form__company_name" required>
            <label for="formMessage">Message</label>
            <input type="text" id="formMessage" name="form__message">
            <div class="checkbox">
                <input type="checkbox" id="formCheckbox" checked required>
                <label for="formCheckbox">
                    <p>I have read and accepted the <a href="terms.php">Terms and Conditions</a> and <a href="terms.php">Privacy Policy</a>.</p>
                </label>
            </div>
            <div class="getClients__buttons">
                <button type="submit" class="getClients__buttons_item ui__borderedBlock ui__borderedBlock--gray ui__borderedBlock--hover">
                    <span>Send</span>
                </button>
            </div>
        </form>
    </div>
</div>
<?php if($_GET['g'] == 'contact') { ?>
    <?php if(!empty($_POST)){
        $to  = 'sales@adchampagne.com';
        $subject = '[AdChampagne] Contact Form';
        $message = '
            <html>
            <head>
            <title>[AdChampagne] Contact Form</title>
            </head>
            <body>
                <p>Hey, There!</p>
                <hr />
                <p><b>Name:</b> ' . (!empty($_POST["form__name"]) ? strip_tags($_POST["form__name"]) : 'Empty') . '</p>
                <p><b>Company Name:</b> ' . (!empty($_POST["form__company_name"]) ? strip_tags($_POST["form__company_name"]) : 'Empty') . '</p>                                            
                <p><b>Feedback email:</b> ' . (!empty($_POST["form__email"]) ? nl2br(strip_tags($_POST["form__email"])) : 'Empty') . '</p>
                <p><b>Message:</b> ' . (!empty($_POST["form__message"]) ? strip_tags($_POST["form__message"]) : 'Empty') . '</p>
            </body>
            </html>
        ';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'To: sales@adchampagne.com <sales@adchampagne.com>' . "\r\n";
        $headers .= 'From: ' . (!empty($_POST["form__company_name"]) ? strip_tags($_POST["form__company_name"]) : 'Empty') . ' <' . (!empty($_POST["form__email"]) ? nl2br(strip_tags($_POST["form__email"])) : 'sales@adchampagne.com') . '>' . "\r\n";
        ?>
        <?php if(mail($to, $subject, $message, $headers)) { ?>
            <div class="getClients request openned">
                <div class="overlay">
                    <svg class="getClients__close js__closeForm">
                        <use xlink:href="local/assets/icons.svg#icon-close"></use>
                    </svg>
                    <h3 class="getClients__title">Message sent!</h3>
                    <p class="getClients__desc">We offer high-quality analytics and development. If you would like to see it for yourself, contact us – and we will do something for you.</p>
                    <div class="getClients__buttons">
                        <a href="" class="getClients__buttons_item ui__borderedBlock ui__borderedBlock--gray ui__borderedBlock--hover js__closeForm">
                            <span>back to main</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <div class="getClients request openned">
                <div class="overlay">
                    <svg class="getClients__close js__closeForm">
                        <use xlink:href="local/assets/icons.svg#icon-close"></use>
                    </svg>
                    <h3 class="getClients__title">Message hasn't sent!</h3>
                    <p class="getClients__desc">Something go wrong. Try again in 5 minutes.</p>
                    <div class="getClients__buttons">
                        <a href="" class="getClients__buttons_item ui__borderedBlock ui__borderedBlock--gray ui__borderedBlock--hover js__closeForm">
                            <span>back to main</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
<?php } ?>