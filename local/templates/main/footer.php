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
            <h1>Personal account</h1>
            <form method="post">
                <input type="text" name="email" id="email" placeholder="email | login" />
                <input type="text" name="name" id="name" placeholder="password" />
                <input type="submit" value="Sign up" name="singup" />
                <input type="submit" value="Sign in" name="singin" />
            </form>
        </li>

        <li>
            <h1>Socialize</h1>
            <p>Social media marketing agency, provides solutions for business:</p>
            <?$APPLICATION->IncludeComponent("bitrix:news.list", "social_icons", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "NAME",
			2 => "SORT",
			3 => "PREVIEW_PICTURE",
			4 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "8",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Социальные сети",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "URL",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
	),
	false
);?>
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