<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?//echo '<div style="background-color:#fff;"><pre>'.print_r($arResult, "true").'</pre></div>';?>
<div class="ulslide">
			<?if (!empty($arResult["ROWS"])):?>
				<ul>
					<?foreach ($arResult["ROWS"] as $rowNum => $row):?>
						<?foreach ($row as $columnNum => $item):?>
							<?if(!isset($item) || empty($item)) continue;?>
							<li ><a href="<?=$item["PROPERTIES"]["URL"]["VALUE"]?>"><img src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>" alt="У вас слишком тихо? Не хватает звука? Нам всегда есть, чем порадовать вас! &lt;br /&gt; Еще больше товаров, скидок и специальных предложений! Мы озвучим Вашу жизнь!"></a></li>
					<?endforeach;?>
					<?endforeach;?>
				</ul>
			<?endif;?>
</div>
		<!-- start the roundabout with descriptions -->
