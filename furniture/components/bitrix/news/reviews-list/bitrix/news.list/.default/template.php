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
<div class="news-list">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div class="review-block">
        <div class="review-text">

            <div class="review-block-title"><span class="review-block-name"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></span>
                <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <span class="review-block-description"><?=$arProperty["VALUE"]?></span>
                <?endforeach;?>
            </div>
            <div class="review-text-cont">
                <?=$arItem["PREVIEW_TEXT"]?>
            </div>
        </div>
        <div class="review-img-wrap"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></a></div>
    </div>
    <?endforeach;?>
</div>
