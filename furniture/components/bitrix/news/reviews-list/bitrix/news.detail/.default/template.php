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
<div class="main_title">
    <h1><?echo mb_convert_case($arResult["PROPERTIES"]["POSITION"]["VALUE"], MB_CASE_TITLE, "Windows-1251").' '.$arResult["PROPERTIES"]["COMPANY"]["VALUE"];?></h1>
</div>
<div class="news-detail">
    <div class="review-block">
        <div class="review-text">
            <div class="review-text-cont">
                <?echo $arResult["DETAIL_TEXT"];?>
            </div>
            <div style="float: right; font-style: italic;">
                <?=$arResult["NAME"]?>
            </div>
        </div>

        <div style="clear: both;" class="review-img-wrap"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="img"></div>
    </div>
    <a href="<?=$arResult["LIST_PAGE_URL"]?>" class="ps_backnewslist"> &larr; К списку отзывов</a>
</div>