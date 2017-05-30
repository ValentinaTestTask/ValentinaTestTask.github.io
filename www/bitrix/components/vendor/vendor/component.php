<?

function debug($value, $exit = true) {

    echo '<pre>';

    print_r($value);

    echo '</pre>';

    if ($exit)

        exit;

}

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

/** @global CIntranetToolbar $INTRANET_TOOLBAR */

CModule::IncludeModule("iblock");
$arComponentVariables = array('CODE_VENDOR', 'CODE_ITEM');
$arDefaultUrlTemplates404 = array('vendor' => '',
                                'company' => '#CODE_VENDOR#/',
                                'item' => '#CODE_ITEM#/');
$arDefaultVariableAliases404 = [];
$arDefaultVariableAliases = [];
if ($arParams['SEF_MODE'] == 'Y')
{
    $arVariables = array();
    $arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams['SEF_URL_TEMPLATES']);
    $componentPage = CComponentEngine::ParseComponentPath($arParams['SEF_FOLDER'], $arUrlTemplates, $arVariables);
    //debug($componentPage);

    if (!$componentPage)
    {
        $componentPage = 'vendor';
    }

    CComponentEngine::InitComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);

    $arResult = array(
        'FOLDER' => $arParams['SEF_FOLDER'],
        'URL_TEMPLATES' => $arUrlTemplates,
        'VARIABLES' => $arVariables,
        'ALIASES' => $arVariableAliases);//debug($arResult);
}
else
{
    $arVariableAliases = CComponentEngine::MakeComponentVariableAliases($arDefaultVariableAliases, $arParams['VARIABLE_ALIASES']);
    CComponentEngine::InitComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);

    if ($arVariables['CODE_ITEM'] != '')
        $componentPage = 'item';
    elseif ($arVariables['CODE_VENDOR'] != '')
        $componentPage = 'company';
    else
        $componentPage = 'vendor';

    $arResult = array(
        'FOLDER' => '',
        'URL_TEMPLATES' => Array(
            'vendor' => htmlspecialcharsbx($APPLICATION->GetCurPage()),
            'company' => htmlspecialcharsbx($APPLICATION->GetCurPage().'?'.$arVariableAliases['CODE_VENDOR'].'=#CODE_VENDOR#'),
            'item' => htmlspecialcharsbx($APPLICATION->GetCurPage().'?'.$arVariableAliases['CODE_VENDOR'].'=#CODE_VENDOR#&'.$arVariableAliases['CODE_ITEM'].'=#CODE_ITEM#'),
        ),
        'VARIABLES' => $arVariables,
        'ALIASES' => $arVariableAliases);
}

$this->IncludeComponentTemplate($componentPage);
?>