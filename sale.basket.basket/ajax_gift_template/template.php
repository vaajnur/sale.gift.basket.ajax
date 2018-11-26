<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
// pr($arResult);

$APPLICATION->IncludeComponent(
	"bitrix:sale.gift.basket", 
	"template1", 
	array(
		"APPLIED_DISCOUNT_LIST" => $arResult["APPLIED_DISCOUNT_LIST"],
		"FULL_DISCOUNT_LIST" => $arResult["FULL_DISCOUNT_LIST"],
		"ACTION_VARIABLE" => "action",
		"ADDITIONAL_PICT_PROP_2" => "MORE_PHOTO",
		"ADDITIONAL_PICT_PROP_3" => "MORE_PHOTO",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"BASKET_URL" => "/cart/",
		"BLOCK_TITLE" => "Выберите один из подарков",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CART_PROPERTIES_2" => array(
			0 => "CML2_MANUFACTURER,",
		),
		"CART_PROPERTIES_3" => array(
			0 => "COLOR_REF",
			1 => "SIZES_SHOES",
			2 => "SIZES_CLOTHES",
			3 => "CML2_MANUFACTURER",
			4 => "",
		),
		"COMPONENT_TEMPLATE" => ".default",
		"CONVERT_CURRENCY" => "N",
		"DEPTH" => "",
		"DETAIL_URL" => "/#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		"HIDE_BLOCK_TITLE" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "55",
		"IBLOCK_TYPE" => "1c_catalog",
		"LINE_ELEMENT_COUNT" => "5",
		"MESS_BTN_BUY" => "Выбрать",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"PAGE_ELEMENT_COUNT" => "5",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SECTION_CODE" => "",
		"SECTION_ELEMENT_CODE" => "",
		"SECTION_ELEMENT_ID" => "",
		"SECTION_ID" => "",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_PRODUCTS_55" => "Y",
		"SHOW_PRODUCTS_56" => "Y",
		"TEMPLATE_THEME" => "blue",
		"TEXT_LABEL_GIFT" => "Подарок",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PROPERTY_CODE_55" => array(
			0 => "DEKOR",
			1 => "",
		),
		"CART_PROPERTIES_55" => array(
			0 => "DEKOR",
			1 => "",
		),
		"ADDITIONAL_PICT_PROP_55" => "",
		"OFFER_TREE_PROPS_56" => array(
			"DEKOR"
		),
		"PROPERTY_CODE_56" => array(
			0 => "DEKOR",
			1 => "",
		),
		"CART_PROPERTIES_56" => array(
			0 => "DEKOR",
			1 => "",
		),
		"OFFER_TREE_PROPS_56" => array(
			'DEKOR'
		)
	),
	false
);?>