<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("IBLOCK_VENDORS_NAME"),
	"DESCRIPTION" => GetMessage("IBLOCK_VENDORS_DESCRIPTION"),
	"ICON" => "/images/news_all.gif",
	"COMPLEX" => "Y",
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "vendors",
			"NAME" => GetMessage("T_IBLOCK_DESC_VENDORS"),
			"SORT" => 10,
			"CHILD" => array(
				"ID" => "vendors_cmpx",
			),
		),
	),
);

?>