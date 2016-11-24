<?php
?>

<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
<?use Bitrix\Main\Localization\Loc; use Bitrix\Main\Page\Asset; Loc::loadMessages(__FILE__);?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle();?> </title>
    <?$APPLICATION->ShowHead();?>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/template_styles.css");?>
    <!--[if IE 7]>
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/include/css/sma-style-ie7.css");?>
    <![endif]-->
    <?Asset::getInstance()-> addCss(SITE_TEMPLATE_PATH."/include/css/sexyslider.css");?>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/jquery-1.7.1.min.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/jquery.sexyslider.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/input.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/moving-clouds.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/smoothscroll.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/cufon-yui.js", true);?>
    <?Asset::getInstance()-> addJs(SITE_TEMPLATE_PATH."/include/js/museo.font.js", true);?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#slider").SexySlider({
                width     : 960,
                height    : 351,
                delay     : 5000,
                strips    : 15,
                autopause : true,
                navigation: '#navigation',
                control   : '#control',
                effect    : 'fade'
            });
        });
    </script>
    <script type="text/javascript">
        Cufon.replace('#info-box-wrapper ul li h1');
        Cufon.replace('#content-wrapper ul li h1');
        Cufon.replace('#f-info-block-wrapper h1');
        Cufon.replace('#f-info-block-wrapper ul li h5');
        Cufon.replace('#footer-upper-wrapper ul li h1');
        Cufon.replace('#header-wrapper #call-us span');
    </script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur();

            $('.hover img').mouseover(function() {
                var src = $(this).attr("src").match(/[^\.]+/) + "_hover.png";
                $(this).attr("src", src);
            });
            $('.hover img').mouseout(function() {
                var src = $(this).attr("src").replace("_hover", "");
                $(this).attr("src", src);
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            // speed in milliseconds
            var scrollSpeed = 70;

            var bgscroll = '';

            // set the direction
            var direction = 'h';

            // set the default position
            var current = 0;

            function bgscroll(){

                // 1 pixel row at a time
                current -= 1;

                // move the background with backgrond-position css properties
                $('div.clouds').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
                $('div.clouds2').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
                $('div.clouds3').css("backgroundPosition", (direction == 'h') ? current+"px 0" : "0 " + current+"px");
            }

            //Calls the scrolling function repeatedly
            var init = setInterval("bgscroll()", scrollSpeed);
        });

        $( function() {
            $('.clouds').bgscroll({scrollSpeed:24 , direction:'h' });
            $('.clouds2').bgscroll({scrollSpeed:23 , direction:'h' });
            $('.clouds3').bgscroll({scrollSpeed:23 , direction:'h' });
        });
    </script>
</head>
<body id="top">
<?$APPLICATION->ShowPanel();?>
<div id="cloud-bg">
    <div class="clouds"></div>
    <div class="clouds2"></div>
</div>
<!-- Border Starts -->
<div id="border">
    <!-- Border Wrapper Starts -->
    <div id="border-wrapper">
        <!-- Header Wrapper Starts -->
        <div id="header-wrapper">
            <div id="logo"> <a href="index.php"></a></div>
            <!-- Social Icon Wrapper Starts -->
            <div id="social">
                <a href="http://twitter.com/codeslab1" class="twitter"></a>
                <a href="http://facebook.com" class="facebook"></a>
                <a href="http://linkedin.com" class="linkedin"></a>
                <a href="#" class="rss"></a>
            </div>
            <!-- Social Icon Wrapper Ends -->
            <div id="divider"></div>
            <div id="call-us">
                <span>Call Tool: <strong>8 (499) 333 33 33</strong></span>
            </div>
        </div>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>


        <!-- Header Wrapper Ends -->
        <!-- Slider Wrapper Starts -->
        <div id="slider-wrapper">
            <!-- Slider Starts -->
            <div id="sliders">
                <div id="navigation">
                </div>

                <div id="slider">
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/slide1.jpg" alt="&lt;p&gt;Expert advice & guidance to suit any level of knowledge or budget. Lorem ipsum dolor... &lt;br /&gt; Etiam aliquam sapien vitae est luctus suscipit. Pellentesque habitant morbi tristique senectus et netus et. &lt;/p&gt;" />
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/slide2.jpg" alt="&lt;p&gt;In hac habitasse platea dictumst. Nunc a nulla velit. Suspendisse hendrerit aliquam porta. &lt;br /&gt; Maecenas vel est ut est fringilla elementum sed ut tortor. Maecenas a justo neque, non blandit est. &lt;/p&gt;" />
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/slide3.jpg" alt="&lt;p&gt;Expert advice & guidance to suit any level of knowledge or budget. Lorem ipsum dolor... &lt;br /&gt; Pellentesque sit amet nisl magna. Praesent a gravida metus. Morbi dictum lacinia varius. &lt;/p&gt;" />
                    <img src="<?=SITE_TEMPLATE_PATH;?>/images/slide4.jpg" alt="&lt;p&gt;Expert advice & guidance to suit any level of knowledge or budget. Lorem ipsum dolor... &lt;br /&gt; Quisque faucibus purus a metus elementum vulputate. Vivamus mattis. &lt;/p&gt;" />
                </div>

                <div id="control"></div>
            </div>
            <!-- Slider Ends -->
        </div>
        <!-- Slider Wrapper Ends -->

        <div class="seperator"></div>

        <!-- Info Box Wrapper Starts -->
