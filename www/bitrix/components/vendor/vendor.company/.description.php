<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_ITEMS_LIST_VEN"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LIST_ITEMS_DESC_VEN"),
	"ICON" => "/images/news_list.gif",
	"SORT" => 20,
//	"SCREENSHOT" => array(
//		"/images/post-77-1108567822.jpg",
//		"/images/post-1169930140.jpg",
//	),
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "vendors",
			"NAME" => GetMessage("T_IBLOCK_DESC_VENDORS"),
			"SORT" => 10,
			"CHILD" => array(
				"ID" => "news_cmpx",
			),
		),
	),
);

?>