<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Каталог товаров из 1C:Предприятие");
?>&nbsp;<?$APPLICATION->IncludeComponent(
	"vendor:vendor",
	"",
	Array(
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => $_REQUEST["CODE_VENDOR"],
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"IBLOCK_ID" => "5",
		"IBLOCK_ID2" => "4",
		"IBLOCK_TYPE" => "vendor",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"SEF_FOLDER" => "",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("company"=>"#CODE_VENDOR#/","item"=>"#CODE_VENDOR#/#CODE_ITEM#/","vendor"=>""),
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"USE_SHARE" => "N"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>