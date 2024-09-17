<?php require_once("../res/x5engine.php"); ?>
<?php $cart = Configuration::getCart(); $id = isset($_GET['id']) ? $_GET['id'] : $cart->getProductIdBySlug(array_keys($_GET)[0]); if ($id == null || $id == '') { header('Location: ' . $imSettings['general']['homepage_url']); } $product =  $cart->getProductsData($id)[$id]; if ($product == null || !isset($product['productPageLinkType']) || $product['productPageLinkType'] != 'productpage') { header('Location: ' . $imSettings['general']['homepage_url']); } ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="fr-FR" dir="ltr">
	<head>
		<title><?php echo isset($product['seo']['tagTitle']) ? $product['seo']['tagTitle'] : ''; ?> - Site Web Imolease</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Bourjon" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2024.2.8 - www.websitex5.com" />
		<meta name="description" content="<?php echo isset($product['seo']['tagDescription']) ? $product['seo']['tagDescription'] : ''; ?>" />
		<meta name="keywords" content="<?php echo isset($product['seo']['tagKeywords']) ? $product['seo']['tagKeywords'] : ''; ?>" />
		<meta property="og:locale" content="fr" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/product/?<?php echo isset($product['slug']) ? $product['slug'] : ''; ?>" />
		<meta property="og:title" content="<?php echo isset($product['name']) ? $product['name'] : ''; ?>" />
		<meta property="og:site_name" content="Site Web Imolease" />
		<meta property="og:description" content="<?php echo isset($product['seo']['tagDescription']) ? $product['seo']['tagDescription'] : ''; ?>" />
		<meta property="og:image" content="<?php echo isset($product['thumb']['url']) ? $product['thumb']['url'] : ''; ?>" />
		<meta property="og:image:type" content="<?php echo isset($product['thumb']['type']) ? $product['thumb']['type'] : ''; ?>">
		<meta property="og:image:width" content="<?php echo isset($product['thumb']['width']) ? $product['thumb']['width'] : ''; ?>">
		<meta property="og:image:height" content="<?php echo isset($product['thumb']['height']) ? $product['thumb']['height'] : ''; ?>">
		<meta property="og:image" content="<?php echo isset($product['thumbSmall']['url']) ? $product['thumbSmall']['url'] : ''; ?>" />
		<meta property="og:image:type" content="<?php echo isset($product['thumbSmall']['type']) ? $product['thumbSmall']['type'] : ''; ?>">
		<meta property="og:image:width" content="<?php echo isset($product['thumbSmall']['width']) ? $product['thumbSmall']['width'] : ''; ?>">
		<meta property="og:image:height" content="<?php echo isset($product['thumbSmall']['height']) ? $product['thumbSmall']['height'] : ''; ?>">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../style/reset.css?2024-2-8-0" media="screen,print" />
		<link rel="stylesheet" href="../style/print.css?2024-2-8-0" media="print" />
		<link rel="stylesheet" href="../style/style.css?2024-2-8-0" media="screen,print" />
		<link rel="stylesheet" href="../style/template.css?2024-2-8-0" media="screen" />
<link rel="stylesheet" href="../res/swiper-bundle.min.css" />
		
		<link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_04/custom.css" media="screen, print" />
		<link rel="stylesheet" href="../product/style.css?2024-2-8-0-638621697368948701" media="screen,print" />
		<script src="../res/jquery.js?2024-2-8-0"></script>
		<script src="../res/x5engine.js?2024-2-8-0" data-files-version="2024-2-8-0"></script>
<script src="../res/swiper-bundle.min.js" ></script>
		
		<script src="../pluginAppObj/imFooter_pluginAppObj_04/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Le Navigateur que vous utilisez ne prend pas en charge les fonctions requises pour afficher ce site.','Le Navigateur que vous utilisez est susceptible de ne pas prendre en charge les fonctions requises pour afficher ce site.','[1]Mettez à jour votre navigateur[/1] ou bien [2]continuez[/2].','http://outdatedbrowser.com/'); };
			x5engine.settings.currentPath = '../';
			x5engine.utils.currentPagePath = 'product/index.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="../favicon.png?2024-2-8-0-638621697368474242" type="image/png" />
<?php
 	echo '<link rel="canonical" href="'. $imSettings['general']['url'] . 'product/?'. $product['slug'] . '"/>' . PHP_EOL;
 ?>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden"><?php echo isset($product['name']) ? $product['name'] : ''; ?> - Site Web Imolease</h1>
						<div id="imHeaderObjects"><div id="imHeader_imMenuObject_02_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_02"><div id="imHeader_imMenuObject_02_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.php,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.php">
ACCUEIL		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/a-propos.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../a-propos.html">
A PROPOS		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/nos-apparts.php">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../nos-apparts.php">
NOS APPARTS		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/contact.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../contact.html">
CONTACT		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_02_settings = {
	'menuId': 'imHeader_imMenuObject_02',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_02_settings)});
$(function () {$('#imHeader_imMenuObject_02_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_02_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});
$(function () {$('#imHeader_imMenuObject_02_container > ul > li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        clearTimeout(timeout);        var overElem = $this.children('.label-wrapper-over');        if(overElem.length == 0)            overElem = $this.children('.label-wrapper').clone().addClass('label-wrapper-over').appendTo($this);        setTimeout(function(){overElem.addClass('animated');}, 10);    }).on('mouseleave', function () {        var overElem = $this.children('.label-wrapper-over');        overElem.removeClass('animated');        timeout = setTimeout(function(){overElem.remove();}, 500);    });});});
</script>
</div><div id="imHeader_imMenuObject_03_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_03"><div id="imHeader_imMenuObject_03_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class=" imLevel" data-link-paths=",/nos-apparts.php" data-link-hash="-1004162016"><div class="label-wrapper"><div class="label-inner-wrapper"><a href="../nos-apparts.php" class="label" onclick="return x5engine.utils.location('../nos-apparts.php', null, false)">BOOK NOW &gt;</a></div></div></li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_03_settings = {
	'menuId': 'imHeader_imMenuObject_03',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_03_settings)});
$(function () {$('#imHeader_imMenuObject_03_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_03_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_03_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div><div id="imHeader_imObjectImage_04_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_04"><div id="imHeader_imObjectImage_04_container"><img src="../images/Imolease-logo-blanc_mf0mshkm.png" title="" alt="" width="150" height="74" />
</div></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imStickyBar_imObjectTitle_02"><span id ="imStickyBar_imObjectTitle_02_text" >Title</span></div></div><div id="imStickyBar_imMenuObject_03_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imStickyBar_imMenuObject_03"><div id="imStickyBar_imMenuObject_03_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.php,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.php">
ACCUEIL		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/a-propos.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../a-propos.html">
A PROPOS		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/nos-apparts.php">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../nos-apparts.php">
NOS APPARTS		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/contact.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../contact.html">
CONTACT		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imStickyBar_imMenuObject_03_settings = {
	'menuId': 'imStickyBar_imMenuObject_03',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imStickyBar_imMenuObject_03_settings)});
$(function () {$('#imStickyBar_imMenuObject_03_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0, subtimeout = 0, width = 'none', height = 'none';        var submenu = $this.children('ul').add($this.find('.multiple-column > ul'));    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_03_container-menu-opened').length > 0) return;         clearTimeout(timeout);        clearTimeout(subtimeout);        $this.children('.multiple-column').show(0);        submenu.stop(false, false);        if (width == 'none') {             width = submenu.width();        }        if (height == 'none') {            height = submenu.height();            submenu.css({ overflow : 'hidden', height: 0});        }        setTimeout(function () {         submenu.css({ overflow : 'hidden'}).fadeIn(1).animate({ height: height }, 300, null, function() {$(this).css('overflow', 'visible'); });        }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_03_container-menu-opened').length > 0) return;         timeout = setTimeout(function () {         submenu.stop(false, false);            submenu.css('overflow', 'hidden').animate({ height: 0 }, 300, null, function() {$(this).fadeOut(0); });            subtimeout = setTimeout(function () { $this.children('.multiple-column').hide(0); }, 300);        }, 250);    });});});

</script>
</div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Aller au menu de navigation">Aller au contenu</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imObjectImage_01"><div id="imSideBar_imObjectImage_01_container"><img src="../images/empty-GT_imagea-1-.png" title="" alt="" width="140" height="140" />
</div></div></div></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="im-product-container" class="hidden">
						<div class="product-details-page">
						<div class="container-gallery-info mb">
						<div class="container-gallery">
						<div class="product-info mbs">
						<div class="product-title two-lines lines-ellipsis"></div>
						<div class="product-category imBreadcrumb"></div>
						</div>
						<div class="container-gallery-top">
						<div id="swiper-container-gallery" class="swiper-container gallery-top">
						<div class="swiper-wrapper"></div>
						</div>
						<div class="swiper-button-next top"></div>
						<div class="swiper-button-prev top"></div>
						</div>
						<div class="container-gallery-thumbs">
						<div class="swiper-container gallery-thumbs">
						<div class="swiper-wrapper"></div>
						</div>
						<div class="swiper-button-next thumbs"></div>
						<div class="swiper-button-prev thumbs"></div>
						</div>
						</div>
						<div class="container-info">
						<div class="product-title two-lines lines-ellipsis"></div>
						<div class="product-category imBreadcrumb"></div>
						<div class="product-description m-b"></div>
						<hr class="product-separator" />
						<div class="product-available m-b small-font"></div>
						<div class="product-qty-discount m-b"></div>
						<div class="product-options small-font"></div>
						<div class="product-ppcp-pay-later"></div>
						<div class="product-price-quantity-add">
						<div class="product-price"></div>
						<div class="product-quantity-add">
						<div class="product-add"></div>
						</div>
						</div>
						</div>
						</div>
						<div class="container-details mb hidden"></div>
						<div class="container-related-products d-none">
						<div class="big-font bold">Ces Produits pourraient vous intéresser </div>
						<hr class="product-separator"/>
						<div class="gallery-related-products">
						<div class="swiper-container">
						<div class="swiper-wrapper"></div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						</div>
						</div>
						</div>
						</div>
						<script>x5engine.boot.push('x5engine.cart.productDetails.init({ target: \'im-product-container\', showRelatedProducts: true, innerWidths: \[1150,720,480,0]\, videoHiresWidth: 2560, videoHiresHeight: 1440, minThumbSize: 48, galleryWidthPerc: 50, galleryHeightPx: 400, galleryThumbnailHeightPx: 64 })', false, 6);</script>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_01">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_01_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div class="imTACenter"><span class="fs12lh1-5 cf1">PAIEMENT SÉCURISÉ:</span></div><div class="imTACenter"><img class="image-0" src="../images/creditcards.png"  title="" alt="" width="203" height="27" /><span class="fs12lh1-5 cf1 ff1"><br></span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_02_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_02">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_02_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div class="imTACenter"><span class="fs12lh1-5 cf1 ff1">TEL: </span><span class="imTALeft fs12lh1-5 cf1">+229 99 71 36 36 / &nbsp;61 41 03 03</span></div><div class="imTACenter"><span class="fs12lh1-5 cf1">imolease@bourjon.com</span><br></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_03_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_03">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_03_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div class="imTACenter"><span source="" sans="" pro";="" font-size:="" 16px;"="" class="fs14lh1-5 cf1"><b>IMOLEASE</b></span><span class="fs12lh1-5 cf1 ff1"><br></span></div><div class="imTACenter"><span class="fs12lh1-5 cf1 ff1">Made by Bourjon</span></div>
		</div>
	</div>

</div>
</div><div id="imFooter_pluginAppObj_04_wrapper" class="template-object-wrapper"><!-- Social Icons v.18 --><div id="imFooter_pluginAppObj_04">
            <div id="soc_imFooter_pluginAppObj_04">
                <div class="wrapper horizontal flat grow">
                	<div class='social-icon flat'><a href='https://fb.me/Incomedia' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div><div class='social-icon flat'><a href='https://www.youtube.com/user/incomedia' target='_blank'><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M89.2,34S88.42,28.49,86,26.06c-3-3.19-6.45-3.14-8-3.32C66.81,21.93,50,22,50,22h0s-16.79-.07-28,0.74c-1.56.19-5,.17-8,3.36C11.58,28.53,10.8,34,10.8,34A120.47,120.47,0,0,0,10,47V53A121,121,0,0,0,10.8,66s0.78,5.51,3.18,7.94c3,3.19,7,3.09,8.82,3.42,6.4,0.61,27.2.8,27.2,0.8s16.81,0,28-.83a11.44,11.44,0,0,0,8-3.39C88.42,71.48,89.2,66,89.2,66A121.16,121.16,0,0,0,90,53V47A121.16,121.16,0,0,0,89.2,34ZM41.74,60.38V37.9L63.35,49.18Z"/></g></svg><span class='fallbacktext'>Yt</span></a></div><div class='social-icon flat'><a href='https://twitter.com/Incomedia' target='_blank'><svg width="100%" height="100%" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(0.233139,0,0,0.233139,15.0291,15)"><path d="M178.57,127.15L290.27,0L263.81,0L166.78,110.38L89.34,0L0,0L117.13,166.93L0,300.25L26.46,300.25L128.86,183.66L210.66,300.25L300,300.25M36.01,19.54L76.66,19.54L263.79,281.67L223.13,281.67" style="fill-rule:nonzero;"/></g></svg><span class='fallbacktext'>X</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_04();
                </script>
        </div></div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Relire le contenu de la page">Retourner au contenu</a></span>
			</div>
		</div>
		<script src="../cart/x5cart.js?2024-2-8-0-638621697368948701"></script>
		<noscript class="imNoScript"><div class="alert alert-red">Pour utiliser ce site vous devez activer JavaScript.</div></noscript>
	</body>
</html>
