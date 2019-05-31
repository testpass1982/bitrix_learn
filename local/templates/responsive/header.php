<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
use \Bitrix\Main\Page\Asset;
include_once('meta.php');
?>
<!doctype html>
<html lang="ru">
	<head>
		<?Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/init.js');?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/reset.css' );?>
		<?Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/fonts.css' );?>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle()?></title>
        <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false);?></h1>

