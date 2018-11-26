<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$GLOBALS['APPLICATION']->RestartBuffer();

$APPLICATION->ShowHead(); 
// $APPLICATION->ShowHeadScripts(); 

// для вывода подарков



$APPLICATION->IncludeComponent(
  "bitrix:sale.basket.basket", 
  "ajax_gift_template", 
  array(
    "ACTION_VARIABLE" => "action",
    "COLUMNS_LIST" => array(
      0 => "NAME",
      1 => "DISCOUNT",
      2 => "PROPS",
      3 => "DELETE",
      4 => "DELAY",
      5 => "TYPE",
      6 => "PRICE",
      7 => "QUANTITY",
      8 => "SUM",
    ),
    "COMPONENT_TEMPLATE" => "cart_new",
    "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
    "HIDE_COUPON" => "N",
    "OFFERS_PROPS" => array(
      0 => "COLOR_REF",
      1 => "SIZES_SHOES",
      2 => "SIZES_CLOTHES",
    ),
    "PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
    "PRICE_VAT_SHOW_VALUE" => "N",
    "QUANTITY_FLOAT" => "N",
    "SET_TITLE" => "Y",
    "USE_PREPAYMENT" => "N"
  ),
  false
);

die();