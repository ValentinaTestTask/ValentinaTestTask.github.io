<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_VEN_DETAIL"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_DETAIL_VEN_DESC"),
	"ICON" => "/images/news_detail.gif",
	"SORT" => 30,
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