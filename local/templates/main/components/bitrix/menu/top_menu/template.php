<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div id="menu">

<?if (!empty($arResult)):?>
<ul>
	<?foreach($arResult as $key => $arItem):?>
		<?if($arItem['DEPTH_LEVEL'] != 1){
			continue;
		}
		?>
		<?if($arItem['DEPTH_LEVEL'] == 1):?>
			<li <?if($arItem["SELECTED"]):?>class="current"<?endif?>><a href="<?=$arItem["LINK"];?>"><span><?=$arItem["TEXT"];?></span></a>
			<div class="dd-holder">
			<div class="dd-t"></div>
			<div class="dd">
			<ul>
		<?endif;?>

		<?foreach($arResult as $keyInner => $arItemInner):?>
			<?if($keyInner <= $key) {
				continue;
			}
			?>
			<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
				<li><a href="<?=$arItemInner["LINK"];?>"><?=$arItemInner["TEXT"];?></a></li>
			<?endif;?>
			<?if($arItemInner['DEPTH_LEVEL'] != 2){
				break;
			}
			?>
		<?endforeach;?>
		<?if($arItem['DEPTH_LEVEL'] == 1):?>
			</ul>
			</div>
			<div class="dd-b"></div>
			</div>
			</li>
		<?endif;?>
	<?endforeach;?>
</ul>
<?endif;?>
</div>
<!-- navigation end -->
</div>