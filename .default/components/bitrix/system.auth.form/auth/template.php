<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult["ERROR_MESSAGE"]["TYPE"] == "ERROR")
    ShowMessage($arResult['ERROR_MESSAGE']['MESSAGE']);
//vardump($arResult);
?>

<?if($arResult["FORM_TYPE"] == "login"):?>

    <span class="hd_singin"><a id="hd_singin_but_open" href=""><?=iconv('UTF-8', 'windows-1251', 'Войти на сайт'); ?></a>
	<div class="hd_loginform">
		<span class="hd_title_loginform"><?=iconv('UTF-8', 'windows-1251', 'Войти на сайт'); ?></span>
<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
    <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
    <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
    <?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	
	<input placeholder="<?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_LOGIN")); ?>" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>"  type="text">
	<input placeholder="<?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_PASSWORD")); ?>" name="USER_PASSWORD" type="password">

	<noindex><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" class="hd_forgotpassword" rel="nofollow"><?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_FORGOT_PASSWORD_2")); ?></a></noindex>

<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
    <div class="head_remember_me" style="margin-top: 10px">
		<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
		<label for="USER_REMEMBER_frm" title="<?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_REMEMBER_ME")); ?>"><?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_REMEMBER_SHORT")); ?></label>
	</div>
<?endif?>

    <?if ($arResult["CAPTCHA_CODE"]):?>
        <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
        <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
        <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
        <input type="text" name="captcha_word" maxlength="50" value="" /></td>

    <?endif?>

<input value="<?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_LOGIN_BUTTON")); ?>" name="Login" style="margin-top: 20px;" type="submit">

</form>
<span class="hd_close_loginform"><?=iconv('UTF-8', 'windows-1251', 'Закрыть'); ?></span>
</div>
</span><br>

    <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
        <noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="hd_signup" rel="nofollow"><?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_REGISTER")); ?></a></noindex>
    <?endif?>

<?
//if($arResult["FORM_TYPE"] == "login")
else:
    ?>
    <span class="hd_sing">
	<?=$arResult["USER_NAME"]?> [<a href="<?=$arResult["PROFILE_URL"]?>"><?=$arResult["USER_LOGIN"]?></a>]
</span>
    <a href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
        "login",
        "logout",
        "register",
        "forgot_password",
        "change_password"))?>" class="hd_signup"><?=iconv('UTF-8', 'windows-1251', GetMessage("AUTH_LOGOUT_BUTTON"))?></a>


<?endif?>