<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

ast\Registry\Registry::set(
	array
	(
		'SITE_MAP_LIMIT' => '300000',
		'SERVICE_PRICE_FILE' => '/upload/price_list.xls',
		'COMPANY' => array(
			'NAME' => 'Сантехника-онлайн',
			'PHONE' => array(
				'+7-495-665-7075',
				'8-800-700-1500',
			),
			'MAIL' => 'info@santehnika-online.ru',
			'SCHEDULE' => 'ПН – ВС: 08:00–01:00'
		),
		'PRICE_PREPAID' => 200000, // Если цена товара больше чем PRICE_PREPAID то выводим сообщение о предоплате
		'price' => array
		(
			'OLD' => array
			(
				'ID' => 2,
				'SID' => 'CATALOG_PRICE_2',
				'GROUP' => 'CATALOG_GROUP_2'
			),
			'RETAIL' => array
			(
				'ID' => 8,
				'SID' => 'CATALOG_PRICE_8',
				'GROUP' => 'CATALOG_GROUP_8'
			)
		)
	)
);