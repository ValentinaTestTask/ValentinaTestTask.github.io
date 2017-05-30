<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вендор");
?><?$APPLICATION->IncludeComponent(
	"vendor:vendor", 
	".default", 
	array(
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => "",
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
		"PROPERTY_CODE" => array(
			0 => "ATT_ADDRESS",
			1 => "",
		),
		"PROPERTY_CODE2" => array(
			0 => "ATT_ADDRESS",
			1 => "ATT_NAME",
			2 => "",
		),
		"PROPERTY_CODE_KAT" => array(
			0 => "ATT_PRICE",
			1 => "",
		),
		"PROPERTY_CODE_KAT2" => array(
			0 => "ATT_SIZE",
			1 => "ATT_DELAY",
			2 => "ATT_MATERIAL",
			3 => "ATT_PRICE",
			4 => "",
		),
		"SEF_FOLDER" => "/vendor/",
		"SEF_MODE" => "Y",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"SEF_URL_TEMPLATES" => array(
			"vendor" => "",
			"company" => "#CODE_VENDOR#/",
			"item" => "#CODE_VENDOR#/#CODE_ITEM#/",
		)
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>