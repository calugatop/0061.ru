<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title>Поиск - 0061.Ру</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Николай Калуга" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.1.8.23 - www.websitex5.com" />
		<meta property="og:locale" content="ru" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="https://0061.ru/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="0061.Ру" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-1-8-23" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-1-8-23" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-1-8-23" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-1-8-23" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-1-8-23" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-1-8-23-636953619620310062" media="screen,print" />
		<script type="text/javascript" src="res/jquery.js?13-1-8-23"></script>
		<script type="text/javascript" src="res/x5engine.js?13-1-8-23" data-files-version="13-1-8-23"></script>
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','Возможно, Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','[1]Обновите Ваш браузер[/1] или [2]продолжите процедуру [/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
		</script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				
				<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_2" class="" > <div id="imHeader_imCellStyleGraphics_2"></div><div id="imHeader_imCellStyle_2" ><div id="imHeader_imObjectTitle_02"><span id ="imHeader_imObjectTitle_02_text">0061.RU </span > </div></div></div></div><div id="imHeader_imObjectImage_03_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_3" class="" > <div id="imHeader_imCellStyleGraphics_3"></div><div id="imHeader_imCellStyle_3" ><a href="https://forms.gle/qy5bhnWKM43C2bRv6" target="_blank"><img id="imHeader_imObjectImage_03" src="images/zakaz1-1-.jpg" title="" alt="" /></a></div></div></div><div id="imHeader_imObjectImage_04_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_4" class="" > <div id="imHeader_imCellStyleGraphics_4"></div><div id="imHeader_imCellStyle_4" ><a href="tel:+79281237776"><img id="imHeader_imObjectImage_04" src="images/tel-1-.png" title="" alt="" /></a></div></div></div><div id="imHeader_imObjectImage_05_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_5" class="" > <div id="imHeader_imCellStyleGraphics_5"></div><div id="imHeader_imCellStyle_5" ><a href="javascript:x5engine.utils.emailTo('1224','u.r611@00','%25D0%2597%25D0%25B0%25D0%25BA%25D0%25B0%25D0%25B7%2520%25D1%2581%2520%25D1%2581%25D0%25B0%25D0%25B9%25D1%2582%25D0%25B0','')"><img id="imHeader_imObjectImage_05" src="images/email-1-.png" title="" alt="" /></a></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
			<a id="imGoToMenu"></a><p class="imHidden">Главное меню:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Главная</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="oplata.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Оплата</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h1 id="imPgTitle">Результаты поиска</h1>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><div id="imFooter_imTextObject_01">
	<div class="text-tab-content"  id="imFooter_imTextObject_01_tab0" style="">
		<div class="text-inner">
			<span class="cf1">1. Предоставляется домен вида </span><i class="cf1">вашсайт.0061.ru</i><br><span class="cf1">2. Счётчик статистики - Яндекс.Метрика</span><br><span class="cf1">3. Добавление вашего сайта в посиковые системы Яндекс, Google, Bing, Mail.Ru</span><br>
		</div>
	</div>

</div>
</div></div></div></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
	</body>
</html>
