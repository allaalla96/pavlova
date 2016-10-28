<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>

<!-- Footer Upper Wrapper Starts -->
<div id="footer-upper-wrapper">
    <ul>
        <li>
            <h1>Twitter</h1>
            <p>Trusted by over 10,00 customers worldwide for our devotion to quality and best technical support, <a href="#">http://t.co/PbFZE4S5</a></p>
            <span>13 days ago.</span>
        </li>
        <li>
            <h1>Address</h1>
            <p class="adr" style="margin-top: 15px;">123 Your street goes here, your city,</p>
            <p class="adr">your country zip postal code</p>
            <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(     "COMPONENT_TEMPLATE" => ".default",     "AREA_FILE_SHOW" => "file",     "AREA_FILE_SUFFIX" => "inc",     "EDIT_TEMPLATE" => "",     "PATH" => SITE_TEMPLATE_PATH."/include_areas/telephone.php"     ) );?>
            <?$APPLICATION->IncludeComponent( "bitrix:main.include", "", Array(     "COMPONENT_TEMPLATE" => ".default",     "AREA_FILE_SHOW" => "file",     "AREA_FILE_SUFFIX" => "inc",     "EDIT_TEMPLATE" => "",     "PATH" => SITE_TEMPLATE_PATH."/include_areas/email.php"     ) );?>
        </li>
        <li>
            <h1>Socialize</h1>
            <p>Social media marketing agency, provides solutions for business:</p>
            <a href="http://twitter.com/codeslab1"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social/T.png" style="margin-left: 20px;" alt="Tweet us on Twitter" /></a>
            <a href="http://facebook.com"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social/F.png" alt="Find us on Facebook" /></a>
            <a href="http://linkedin.com"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social/L.png" alt="Link us on LinkedIn" /></a>
            <a href="http://plus.google.com"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social/+.png" alt="Google with us on Google+" /></a>
            <a href="http://youtube.com"><img src="<?=SITE_TEMPLATE_PATH;?>/images/social/Y.png" alt="Watch with us on Youtube" /></a>
        </li>
        <li>
            <h1>Personal account</h1>
            <form method="post">
                <input type="text" name="email" id="email" placeholder="email | login" />
                <input type="text" name="name" id="name" placeholder="password" />
                <input type="submit" value="Sign up" name="singup" />
                <input type="submit" value="Sign in" name="singin" />
            </form>
        </li>
    </ul>
</div>
<!-- Footer Upper Wrapper Ends -->
<!-- Footer Lower Wrapper Starts -->
<div id="footer-lower-wrapper">
    <a href="#top"><img src="<?=SITE_TEMPLATE_PATH;?>/images/top.png" alt="Go to top" /></a>
</div>
<!-- Footer Lower Wrapper Ends -->
</div>
<!-- Border Wrapper Ends -->
</div>
<!-- Border Ends -->
<div class="clouds3"></div>
<div id="forest"></div>
</body>
</html>