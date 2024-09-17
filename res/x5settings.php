<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '27E59F2DC7ECA6A8CA216DA7B3BB83EE',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.php',
	'icon' => 'http://localhost/favImage.png',
	'version' => '2024.2.8.0',
	'sitename' => 'Site Web Imolease',
	'lang_code' => 'fr-FR',
	'public_folder' => '',
	'salt' => '9rog54xvzv2qaeq2cb9diiuafc326x37caocx0ncyga7q8ld5vycf69qx',
	'common_email_sender_addres' => 'noreply@narcisse-z.websitex5.me',
	'enable_sender_header' => true,
	'date_format' => 'dd MMM yyyy',
	'date_format_ext' => 'dddd dd MMM yyyy',
	'date_format_no_day' => 'MMM yyyy',
	'date_format_no_day_ext' => 'MMM yyyy'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"e6c680m5-imCpt\">Code de sécurité :</label><br />
			<input type=\"text\" id=\"e6c680m5-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_uzbueh7v.png',
	'notification_public_key' => 'BCRmqyK4-XhLDSFbFX0Cy6m3CyKZApILZeGVhfRL1f2A1yhrAwKj1KTxprpG74dBD6Ud-y1hIB8Qmcr8eSA5ZxE',
	'notification_private_key' => '-TiVgwzRSngSm3q7pGPFkvz6_Y815BZZwL8ayUHr3GA',
	'notification_dbprefix' => 'w5_vsvyaook_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'49odquz2' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'xxo0is7r_db',
		'user' => 'xxo0is7r_db',
		'password' => 'uH1!oT5#uX1(',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array(
	'of80oazr' => array('coupon' => 'HUIO','start_time' => 1725959874),
	'0c26blym' => array('coupon' => 'LIOKUO','start_time' => 1725960336),
	'72sv0u8f' => array('coupon' => 'ISSAA','start_time' => 1725961956),
	'4182ky4a' => array('coupon' => 'JOHAN','start_time' => 1725962948),
	'eqryf7td' => array('coupon' => 'MIKE','start_time' => 1725963261)
);
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(255, 255, 255, 1); background-color: rgba(39, 46, 56, 1); padding: 5px 25px 5px 25px; border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;',
	'email_opening' => 'Cher/chère client(e),<br /><br />Nous vous remercions de votre commande. Nous vous rappelons que le paiement n\'a pas encore été reçu.<br /><br />Vous trouverez ci-dessous la liste des produits commandés, les informations de facturation et de livraison les instructions pour effectuer le paiement.',
	'email_closing' => 'Nous contacter pour obtenir de plus amples informations.<br /><br />Nos meilleures salutations, Service commercial.',
	'email_payment_opening' => 'Cher/chère client(e),<br /><br />Nous vous remercions de votre achat, on vous confirme qu\'on a correctement reçu le paiement et que votre commande sera traitée dès que possible.<br /><br />Vous trouverez ci-dessous la liste des produits commandés et les informations de facturation et de livraison.',
	'email_payment_closing' => 'Nous restons à votre disposition pour toute information supplémentaire.<br /><br />Cordialement,<br />l’Équipe Commerciale',
	'email_digital_shipment_opening' => 'Bonjour,<br /><br />Nous vous remercions pour votre achat et nous avons le plaisir de vous envoyer la liste des liens de téléchargement correspondant aux produits commandés :',
	'email_digital_shipment_closing' => 'Nous restons à votre disposition pour toute information supplémentaire.<br /><br />Cordialement,<br />l’Équipe Commerciale',
	'email_physical_shipment_opening' => 'Cher Client,  <br /><br />en vous remercient pour votre achat, on vous confirme que votre commande a bien été traitée et envoyée.<br /><br />Ici vous retrouvez la liste des produits envoyés :',
	'email_physical_shipment_closing' => 'Nous restons à votre disposition pour toute information supplémentaire.<br /><br />Cordialement,<br />l’Équipe Commerciale',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => true,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'imolease@bourjon.com',
	'vat_type' => 'included',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 0,
	'decimal_sep' => ',',
	'thousands_sep' => '.',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => 'F.CFA‎',
	'currency_code' => 'XOF',
	'currency_name' => 'West Africa, West African CFA Francs',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	'of80oazr' => array(
		'id' => 'of80oazr',
		'name' => 'ABDUL',
		'category' => '69y9j26r',
		'categoryPath' => array(
			'69y9j26r'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.

',
		'sku' => 'HUIO',
		'options' => array(),
		'price' => 32000.00,
		'singleFullPrice' => '27119',
		'singleFullPricePlusVat' => '32000',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 7,
				'value' => 5.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_1662--1-.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1647.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1662--2-.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1764.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1671.jpg',
				'width' => 1620,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_1662--1-_og.jpg',
			'width' => 945,
			'height' => 630
		),
		'thumbSmall' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_1662--1-_og_small.jpg',
			'width' => 400,
			'height' => 266
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?myostis\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?myostis\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?myostis\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?myostis\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?myostis" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?myostis" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink34d707cb25f4c4e641be40aaab3dc513 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink34d707cb25f4c4e641be40aaab3dc513, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink56ac00b8aec7859636809f58926341c9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink56ac00b8aec7859636809f58926341c9, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinke03f077d2c00235988d6f6d0bf3eec9e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke03f077d2c00235988d6f6d0bf3eec9e, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkffcfa866d5614898bd9827d8a208d4e1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkffcfa866d5614898bd9827d8a208d4e1, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5be3aa0206c42dc3749b8ca19ac3615e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5be3aa0206c42dc3749b8ca19ac3615e, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink0ff7b73c368c68010396ac578de6ab59 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0ff7b73c368c68010396ac578de6ab59, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7d43ccfbe58b808910bf3a7e3ebe8e78 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7d43ccfbe58b808910bf3a7e3ebe8e78, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink59a6ade9d3a14c9100c22b45c29d32f6 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink59a6ade9d3a14c9100c22b45c29d32f6, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkb1fc2228a02c1c6a8f655b8f0c61ca9d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb1fc2228a02c1c6a8f655b8f0c61ca9d, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1c0da81982346021c91fd84690184d55 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1647.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1662--2-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1764.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1c0da81982346021c91fd84690184d55, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 18.00,
		'vatName' => 'TVA',
		'taxConfigutationGroup' => 'ms369732',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'myostis',
		'relatedProducts' => array(
			'0c26blym',
			'72sv0u8f',
			'4182ky4a',
			'eqryf7td'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</div>
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</div>
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 56px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 44px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 28px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: grid; grid-template-rows: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'ABDUL',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'ABDUL',
			'image' => array(
				'http://localhost/images/IMG_1662--1-.jpg',
				'http://localhost/images/IMG_1647.jpg',
				'http://localhost/images/IMG_1662--2-.jpg',
				'http://localhost/images/IMG_1764.jpg',
				'http://localhost/images/IMG_1671.jpg'
			),
			'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.

',
			'sku' => 'HUIO',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'XOF',
				'price' => '32000'
			)
		),
		'productPageLinkType' => "productpage",
		'minQty' => 1,
		'fixedDiscount' => array(
			'type' => 'relative',
			'startDate' => 1725959874,
			'endDate' => null,
			'amount' => '0.05000',
			'coupon' => 'HUIO'
		)
	),
	'0c26blym' => array(
		'id' => '0c26blym',
		'name' => 'ALIKO',
		'category' => '69y9j26r',
		'categoryPath' => array(
			'69y9j26r'
		),
		'showThumbsInShowbox' => true,
		'new' => true,
		'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
		'sku' => 'LIOKUO',
		'options' => array(),
		'price' => 32000.00,
		'singleFullPrice' => '27119',
		'singleFullPricePlusVat' => '32000',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 7,
				'value' => 5.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_0698--1-.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_0693.jpg',
				'width' => 1619,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_0668--1-.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_0704.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_0689--1-.jpg',
				'width' => 1619,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1671.jpg',
				'width' => 1620,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_0698--1-_og.jpg',
			'width' => 945,
			'height' => 630
		),
		'thumbSmall' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_0698--1-_og_small.jpg',
			'width' => 400,
			'height' => 266
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?gfhgfh\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?gfhgfh\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?gfhgfh\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?gfhgfh\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?gfhgfh" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?gfhgfh" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkfa79b81be34e833cda0d6aa83c87acd7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfa79b81be34e833cda0d6aa83c87acd7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink8fab8d73fc96df032924d6920d62ce9b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8fab8d73fc96df032924d6920d62ce9b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink64471843aa741cdca02b0d29bceaffb9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink64471843aa741cdca02b0d29bceaffb9, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink3d80a1e46d7999fa6c5b93e9c34315e9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3d80a1e46d7999fa6c5b93e9c34315e9, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink66d6a3fe870f76dd93766dc0e992548f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink66d6a3fe870f76dd93766dc0e992548f, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinka1e76924fd7acbbcfb78e0dc16661c70 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka1e76924fd7acbbcfb78e0dc16661c70, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink205fbde63fa8bce1ccb696d8f649242e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink205fbde63fa8bce1ccb696d8f649242e, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink2b170ab65764726db695e3147dcf8a7d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2b170ab65764726db695e3147dcf8a7d, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkbcf56ce7a2ac0eb93fe0f4801eade008 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkbcf56ce7a2ac0eb93fe0f4801eade008, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkdfee0b093f28af75eafee05343ac275d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkdfee0b093f28af75eafee05343ac275d, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 5, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 5, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 5, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]}, 5, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink649998a11421653293a2fed1f9ea74ae = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink649998a11421653293a2fed1f9ea74ae, 5, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke30670f3ff56708fae63a38ed1b56972 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0698--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0693.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0668--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0704.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0689--1-.jpg\',\'width\': 1619,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1671.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke30670f3ff56708fae63a38ed1b56972, 5, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 18.00,
		'vatName' => 'TVA',
		'taxConfigutationGroup' => 'ms369732',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'gfhgfh',
		'relatedProducts' => array(
			'of80oazr',
			'72sv0u8f',
			'4182ky4a',
			'eqryf7td'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.<br>La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne.<br></div>
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.<br>La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne.<br></div>
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 56px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 44px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 28px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: grid; grid-template-rows: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'ALIKO',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'ALIKO',
			'image' => array(
				'http://localhost/images/IMG_0698--1-.jpg',
				'http://localhost/images/IMG_0693.jpg',
				'http://localhost/images/IMG_0668--1-.jpg',
				'http://localhost/images/IMG_0704.jpg',
				'http://localhost/images/IMG_0689--1-.jpg',
				'http://localhost/images/IMG_1671.jpg'
			),
			'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
			'sku' => 'LIOKUO',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'XOF',
				'price' => '32000'
			)
		),
		'productPageLinkType' => "productpage",
		'minQty' => 1,
		'fixedDiscount' => array(
			'type' => 'relative',
			'startDate' => 1725960336,
			'endDate' => null,
			'amount' => '0.05000',
			'coupon' => 'LIOKUO'
		)
	),
	'72sv0u8f' => array(
		'id' => '72sv0u8f',
		'name' => 'ISSAD',
		'category' => '69y9j26r',
		'categoryPath' => array(
			'69y9j26r'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
		'sku' => 'ISSAA',
		'options' => array(),
		'price' => 50000.00,
		'singleFullPrice' => '42373',
		'singleFullPricePlusVat' => '50000',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 7,
				'value' => 5.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_1766.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1746--1-.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1715.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1712.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_1710--1-.jpg',
				'width' => 1620,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_1766_og.jpg',
			'width' => 945,
			'height' => 630
		),
		'thumbSmall' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_1766_og_small.jpg',
			'width' => 400,
			'height' => 266
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?issad\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?issad\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?issad\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?issad\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?issad" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?issad" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7d5735ba4b37ba38e051a1fb88ca7bbe = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7d5735ba4b37ba38e051a1fb88ca7bbe, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke8dd5833fb317d75608e02ee86ec0fd0 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke8dd5833fb317d75608e02ee86ec0fd0, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink1c8e3a1d853003add96db51130f28b8b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1c8e3a1d853003add96db51130f28b8b, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkdb488efeff9563062a785b646cae54ed = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkdb488efeff9563062a785b646cae54ed, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5b376f69c1d4de82606d33a923b2a4f1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5b376f69c1d4de82606d33a923b2a4f1, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinka5db41a0eaedf4ffce916536ff73ba84 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka5db41a0eaedf4ffce916536ff73ba84, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5434b57ea0af5e4c8bc5048d614bb435 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5434b57ea0af5e4c8bc5048d614bb435, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkb2dd0262836276261d27cd44e63fa060 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb2dd0262836276261d27cd44e63fa060, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka99e583e1df85b62c92b5fcf9766a645 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka99e583e1df85b62c92b5fcf9766a645, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkf9d186ef1e930a3161ba875092ae76de = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1766.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1746--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1715.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1712.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_1710--1-.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf9d186ef1e930a3161ba875092ae76de, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 18.00,
		'vatName' => 'TVA',
		'taxConfigutationGroup' => 'ms369732',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'issad',
		'relatedProducts' => array(
			'of80oazr',
			'0c26blym',
			'4182ky4a',
			'eqryf7td'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</div><div>La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne".</div>
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</div><div>La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne".</div>
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 56px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 44px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 28px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: grid; grid-template-rows: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'ISSAD',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'ISSAD',
			'image' => array(
				'http://localhost/images/IMG_1766.jpg',
				'http://localhost/images/IMG_1746--1-.jpg',
				'http://localhost/images/IMG_1715.jpg',
				'http://localhost/images/IMG_1712.jpg',
				'http://localhost/images/IMG_1710--1-.jpg'
			),
			'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
			'sku' => 'ISSAA',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'XOF',
				'price' => '50000'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => array(
			'type' => 'relative',
			'startDate' => 1725961956,
			'endDate' => null,
			'amount' => '0.05000',
			'coupon' => 'ISSAA'
		)
	),
	'4182ky4a' => array(
		'id' => '4182ky4a',
		'name' => 'JOHANN',
		'category' => '69y9j26r',
		'categoryPath' => array(
			'69y9j26r'
		),
		'showThumbsInShowbox' => true,
		'new' => true,
		'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
		'sku' => 'JOHAN',
		'options' => array(),
		'price' => 55000.00,
		'singleFullPrice' => '46610',
		'singleFullPricePlusVat' => '55000',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 7,
				'value' => 5.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_2339.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2316.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2312.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2307--1-.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2308.jpg',
				'width' => 1620,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_2339_og.jpg',
			'width' => 945,
			'height' => 630
		),
		'thumbSmall' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_2339_og_small.jpg',
			'width' => 400,
			'height' => 266
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?johann\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?johann\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?johann\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?johann\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?johann" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?johann" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5a3057cb4f4cc071b2c605e5defbe22a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5a3057cb4f4cc071b2c605e5defbe22a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink93b3babcc1c334647db7a00d750d85af = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink93b3babcc1c334647db7a00d750d85af, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkca599903b193c96d6763f81daeaa4124 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkca599903b193c96d6763f81daeaa4124, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkd3f99ee5e39b2ab7628f72893623540a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd3f99ee5e39b2ab7628f72893623540a, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink36d0cf691746962057c29136eba16547 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink36d0cf691746962057c29136eba16547, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink2ab556849f245f570580368475846d16 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2ab556849f245f570580368475846d16, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink9a81790dc2f27781b73d3219867dfa7f = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink9a81790dc2f27781b73d3219867dfa7f, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink97163609336cc02c329b01535c2bb9f4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink97163609336cc02c329b01535c2bb9f4, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink3095ccc7015f6713b99b984d42e6dd1b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3095ccc7015f6713b99b984d42e6dd1b, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink76accc5a34c45aaa09fb451161d28fda = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2339.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2316.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2312.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2307--1-.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2308.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink76accc5a34c45aaa09fb451161d28fda, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 18.00,
		'vatName' => 'TVA',
		'taxConfigutationGroup' => 'ms369732',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'johann',
		'relatedProducts' => array(
			'of80oazr',
			'0c26blym',
			'72sv0u8f',
			'eqryf7td'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</div><div>La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne.</div>
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div>Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</div><div>La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne.</div>
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 56px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 44px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 28px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: grid; grid-template-rows: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'JOHANN',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'JOHANN',
			'image' => array(
				'http://localhost/images/IMG_2339.jpg',
				'http://localhost/images/IMG_2316.jpg',
				'http://localhost/images/IMG_2312.jpg',
				'http://localhost/images/IMG_2307--1-.jpg',
				'http://localhost/images/IMG_2308.jpg'
			),
			'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
			'sku' => 'JOHAN',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'XOF',
				'price' => '55000'
			)
		),
		'productPageLinkType' => "productpage",
		'minQty' => 1,
		'fixedDiscount' => array(
			'type' => 'absolute',
			'startDate' => 1725962948,
			'endDate' => null,
			'amount' => '5.00000',
			'coupon' => 'JOHAN'
		)
	),
	'eqryf7td' => array(
		'id' => 'eqryf7td',
		'name' => 'MIKE',
		'category' => '69y9j26r',
		'categoryPath' => array(
			'69y9j26r'
		),
		'showThumbsInShowbox' => true,
		'new' => true,
		'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
		'sku' => '',
		'options' => array(),
		'price' => 37000.00,
		'singleFullPrice' => '31356',
		'singleFullPricePlusVat' => '37000',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 7,
				'value' => 5.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_2361.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2355.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2360.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2341.jpg',
				'width' => 1620,
				'height' => 1080
			),
			array(
				'type' => 'image',
				'url' => 'images/IMG_2351.jpg',
				'width' => 1620,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_2361_og.jpg',
			'width' => 945,
			'height' => 630
		),
		'thumbSmall' => array(
			'type' => 'image/jpeg',
			'url' => 'http://localhost/images/IMG_2361_og_small.jpg',
			'width' => 400,
			'height' => 266
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?mike\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?mike\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?mike\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?mike\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?mike" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?mike" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkd9a23290efa9920bc974cb9b0a45b019 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd9a23290efa9920bc974cb9b0a45b019, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink729eae7c8e933cce24b541b8edc298dc = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink729eae7c8e933cce24b541b8edc298dc, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7cad93f95c1f93ede75225984167b8ad = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7cad93f95c1f93ede75225984167b8ad, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink04932e59bae07bbd9d07dab5ffead0ea = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink04932e59bae07bbd9d07dab5ffead0ea, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 2, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkbd5b0860e2cab17c5f2b86253136cbf0 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkbd5b0860e2cab17c5f2b86253136cbf0, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink3c4d1f707332ec726582661ad7874756 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3c4d1f707332ec726582661ad7874756, 2, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 3, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink879ba3d706972c0500094b7d83443889 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink879ba3d706972c0500094b7d83443889, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink04d482485db281bfdb2bb4637b77ad4b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink04d482485db281bfdb2bb4637b77ad4b, 3, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]}, 4, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkf4319859884f8e721f791fe58d66bb11 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf4319859884f8e721f791fe58d66bb11, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink644cec5fe2f2f0857970d9498fcb0ad8 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2361.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2355.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2360.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2341.jpg\',\'width\': 1620,\'height\': 1080},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_2351.jpg\',\'width\': 1620,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink644cec5fe2f2f0857970d9498fcb0ad8, 4, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 18.00,
		'vatName' => 'TVA',
		'taxConfigutationGroup' => 'ms369732',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'mike',
		'relatedProducts' => array(
			'of80oazr',
			'0c26blym',
			'72sv0u8f',
			'4182ky4a'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><span class="fs14lh1-5">Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</span></div><div><span class="fs14lh1-5">La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne.</span></div>
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><span class="fs14lh1-5">Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.</span></div><div><span class="fs14lh1-5">La cuisine ouverte, entièrement équipée, est un véritable havre pour les amateurs de gastronomie, tandis que les chambres, élégamment aménagées, offrent un espace privé et reposant. La salle de bains moderne est dotée des équipements de luxe et d\'une douche à l\'italienne.</span></div>
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 56px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 44px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 28px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details_tab0 .fs14lh1-5 { vertical-align: baseline; font-size: 14pt; line-height: 28px; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: grid; grid-template-rows: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'MIKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'MIKE',
			'image' => array(
				'http://localhost/images/IMG_2361.jpg',
				'http://localhost/images/IMG_2355.jpg',
				'http://localhost/images/IMG_2360.jpg',
				'http://localhost/images/IMG_2341.jpg',
				'http://localhost/images/IMG_2351.jpg'
			),
			'description' => 'Dès l\'entrée, vous serez séduit par le design contemporain et les finitions de haute qualité. Le séjour spacieux, baigné de lumière naturelle grâce à ses grandes fenêtres, constitue le cœur de cet appartement, parfait pour se détendre ou recevoir des invités.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'XOF',
				'price' => '37000'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => array(
			'type' => 'absolute',
			'startDate' => 1725963261,
			'endDate' => null,
			'amount' => '5.00000',
			'coupon' => 'MIKE'
		)
	),
	'bacr1yud' => array(
		'id' => 'bacr1yud',
		'name' => 'HGHJV',
		'category' => '3h52rwan',
		'categoryPath' => array(
			'3h52rwan'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0',
		'singleFullPricePlusVat' => '0',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(),
		'thumb' => array(
			'type' => 'image/svg',
			'url' => 'http://localhost/cart/images/no-preview.svg',
			'width' => 600,
			'height' => 600
		),
		'thumbSmall' => array(
			'type' => 'image/svg',
			'url' => 'http://localhost/cart/images/no-preview.svg',
			'width' => 600,
			'height' => 600
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?hghjv\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?hghjv\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?hghjv\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?hghjv\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?hghjv" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?hghjv" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(),
		'vat' => 18.00,
		'vatName' => 'TVA',
		'taxConfigutationGroup' => 'ms369732',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'hghjv',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 56px; }
#details_tab0 .imHeading2 { line-height: 48px; }
#details_tab0 .imHeading3 { line-height: 44px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 28px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: grid; grid-template-rows: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'HGHJV',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'HGHJV',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'XOF',
				'price' => '0'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'myostis' => 'of80oazr',
	'gfhgfh' => '0c26blym',
	'issad' => '72sv0u8f',
	'johann' => '4182ky4a',
	'mike' => 'eqryf7td',
	'hghjv' => 'bacr1yud'
));
$ecommerce->setCategoriesData(array(
	'69y9j26r' => array(
		'id' => '69y9j26r',
		'name' => 'HGJGHJ',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'of80oazr',
			'0c26blym',
			'72sv0u8f',
			'4182ky4a',
			'eqryf7td'
		),
		'categories' => array()
	),
	'3h52rwan' => array(
		'id' => '3h52rwan',
		'name' => 'GHF?CHGVH',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'bacr1yud'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_vsvyaook_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Virement bancaire',
		'description' => 'Payer plus tard par virement bancaire.',
		'email_text' => 'Les données requises pour le paiement par virement bancaire sont les suivantes :

XXX YYY ZZZ

Remarque : au terme du paiement, il est nécessaire d\'envoyer une copie du reçu avec le Numéro de la commande.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Courrier',
		'description' => 'Les produits seront livrés dans 3-5 jours.',
		'email_text' => 'Expédition par Courrier.\\nLes produits seront livrés dans 3-5 jours.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Livraison express',
		'description' => 'Les produits seront livrés dans 1-2 jours.',
		'email_text' => 'Expédition par Livraison express.\\nLes produits seront livrés dans 1-2 jours.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2024.2.8 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate; ">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Source Sans Pro\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #000000 #000000 #000000 #000000; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px; margin-top: 25px;  margin-bottom: 25px;  margin-left: 25px;  margin-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailIcons" style="background-color: #FFFFFF;border-left-style: solid; border-left-color: #000000; border-left-width: 1px; border-right-style: solid; border-right-color: #000000; border-right-width: 1px; border-bottom-style: solid; border-bottom-color: #000000; border-bottom-width: 1px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;  padding-top: 25px;  padding-bottom: 25px;  padding-left: 15px;  padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Source Sans Pro\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Ce courriel fournit des informations destinées uniquement au destinataire susmentionné.<br>Si vous n\'êtes par le destinataire de ce message, veuillez le signaler immédiatement à l\'expéditeur et le détruire, sans le copier.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Source Sans Pro\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Source Sans Pro;';

// End of file x5settings.php