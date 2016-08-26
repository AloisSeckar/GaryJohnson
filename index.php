<!DOCTYPE html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	// path to source files while hosted at http://alois-seckar.cz/stand-with-gary-johnson
	$root_path = "/web/gary/";
	
	// db login
	// actual values hidden on GitHub
	// if you wanna re-use the page, you would need to set up your own MySQL connection and adjust variables
	include_once "dbconnect.php";
	$databaseInfo = new GJConnectionStrings(); 
	$mysqli = new mysqli($databaseInfo->MySQL_Host, $databaseInfo->MySQL_User, $databaseInfo->MySQL_Pass, $databaseInfo->MySQL_Db);
	$mysqli->set_charset("utf8");
	// get supporters from DB
	$supporters = $mysqli->query("SELECT * FROM gary_johnson ORDER BY id");
?>

<?php if ($lang_info=="en") { ?>
	<html lang="en">
<?php } else { ?>
	<html lang="cs">
<?php } ?>

<head>
<title>Stand with Gary Johnson</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gary Johnson 2016 President Presidential Campaign USA America Libertarian Party #15for15 William Weld Governor White House" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Custom Theme files-->
<link href="<?=$root_path;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--web font-->
<link href='//fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//web font-->
<!--circle-chart-->
<script src="js/jquery-1.11.1.min.js"></script> 
<!--//circle-chart-->

<!--ResponsiveTabs-->
<script src="<?=$root_path;?>js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
		});
	});
</script>
<!--//ResponsiveTabs-->
</head>

<body>
	<!-- main -->
	<div class="main">
		<h1>&nbsp;<img src="<?=$root_path;?>images/logo.png" title="@govgaryjohnson" alt="" height="100">&nbsp;</h1>
		<div class="main-info w3l">
			<div class="main-row"><!-- main-row-one -->
				<div class="profile-grid logo wthree">
					<p class="languages"><a href="/stand-with-gary-johnson/cs"><img src="<?=$root_path;?>images/cze.png" title="Česky" alt="CZE" width="30" /></a>&nbsp;&bull;&nbsp;<a href="/stand-with-gary-johnson/en"><img src="<?=$root_path;?>images/gbr.png" title="English" alt="GBR"  width="30" /></a></p>
					<img src="<?=$root_path;?>images/img1.png" title="@govgaryjohnson" alt="">
					<?php if ($lang_info=="en") { ?>
						<h2>Dear Mr.&nbsp;Johnson,</h2>
						<p>we are thrilled to watch your campaign in the US&nbsp;Presidential Election and we are admiring all your effort on the long journey that is already behind you. We are pleased to see a&nbsp;raise of a&nbsp;new power disturbing the fusty system and traditional political dogmas.</p>
						<p>We are free citizens who are not impassive to see who and how is governing us. We wish a&nbsp;world that is quite similar to yours. We believe in economic liberalism and personal freedoms, the values standing in opposition to steadily growing power of the state over people's lives. In the name of good, a&nbsp;lot of evil is being committed today. It is a&nbsp;good thing you are not afraid to face it. You are giving millions of people a&nbsp;chance to vote so, they don't have to regret it later. Every country in the world should have its own Gary Johnson.</p>
						<p>Your campaign, whatever the result will be, is already being a&nbsp;great victory for the friends of liberty all around the world. It gives us hope that not everything has been lost yet, the things will eventually turn around and all will settle back in order.</p>
						<p>We thank you and we wish you a&nbsp;lot of success, not only in politics, but in your personal life as well.</p>
						<p>With best regards, those signed below:</p>
					<?php } else { ?>
						<h2>Vážený pane Johnsone,</h2>
						<p>s&nbsp;napětím sledujeme Vaši kandidaturu na presidenta USA a&nbsp;obdivujeme Vaše úsilí na dlouhé cestě, kterou už máte za sebou. Těší nás, že po letech opět povstává nová síla narušující zkostnatělý systém a&nbsp;zaběhlá politická dogmata.</p>
						<p>Jsme svobodní občané, kterým není lhostejné, kdo a&nbsp;jak jim vládne. Přejeme si svět, který je podobný tomu vašemu. Věříme v&nbsp;ekonomický liberalismus a&nbsp;osobní svobody, hodnoty stojící v&nbsp;opozici ke stále sílící moci států nad lidskými životy. Ve jménu dobra je dnes pácháno mnoho zla. Je dobře, že se tomu nebojíte čelit a&nbsp;dáváte milionům lidí šanci volit tak, aby toho nemuseli později litovat. Každá země by měla mít svého Garyho Johnsona.</p>
						<p>Vaše kandidatura, ať už dopadne jakkoliv, je už dnes velkým vítězstvím přátel svobody po celém světě. Dává nám naději, že ještě není vše ztraceno, že se věci dříve nebo později přeci jen otočí a&nbsp;dají do pořádku.</p>
						<p>Děkujeme Vám a&nbsp;přejeme hodně úspěchů, nejen v&nbsp;politice, ale i&nbsp;v&nbsp;životě.</p>
						<p></p>
						<p>S&nbsp;úctou a&nbsp;s&nbsp;pozdravem níže podepsaní:</p>
					<?php } ?>
					
				</div>
				<div>
					<table class="signatures">
						<?php foreach ($supporters as $supporter) { ?>
							<tr>
								<td style="font-weight: bold; width: 30%;">
									<?php if ($supporter["web"]!="null") { ?> 
										<a href="<?=$supporter["web"];?>" target="_blank"><?=$supporter["name"];?></a>
									<?php } else { ?>
										<?=$supporter["name"];?>
									<?php } ?>
								</td>
								<td style="width: 10%;">
									<?php if ($supporter["age"]>0) { 
										echo $supporter["age"];
									} else {
										echo "-";
									} ?>
								</td>
								<td style="width: 25%;"><?=$supporter["loc"];?></td>
								<td style="width: 35%;"><?=$supporter["dscr"];?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
				<div class="profile-grid logo">
					<?php if ($lang_info=="en") { ?>
						<h3>I want to support Gary Johnson too!</h3>
						<p>If you want to attach your name under this open letter, please contact me via <a href="mailto:seckar@svobodni.cz">seckar@svobodni.cz</a>.<br />Other info than your name is voluntary. You can add a link to your personal web displayed under your name.</p>
					<?php } else { ?>
						<h3>Chci také podpořit Garyho Johnsona!</h3>
						<p>Máte-li zájem připojit své jméno pod tento otevřený dopis, kontaktujte mě prosím emailem na <a href="mailto:seckar@svobodni.cz">seckar@svobodni.cz</a>.<br />Další údaje mimo jména jsou dobrovolné. Můžete připojit též odkaz na váš osobní web zobrazený po najetí na vaše jméno.</p>
					<?php } ?>
				</div>
				
				<!--bar-js-->
				<script src="js/bars.js"></script>
				<div class="social-icons agileits">
						<?php if ($lang_info=="en") { ?>
							<h3>Other ways to contact the author</h3>
						<?php } else { ?>
							<h3>Další kontakty na autora</h3>
						<?php } ?>
						<ul>
							<li><a href="https://www.facebook.com/AloisSeckarSvobodni" target="_blank"><img src="<?=$root_path;?>images/social_facebook.png" title="Facebook" alt="FB" /></a></li>
							<li><a href="https://twitter.com/AloisSeckar" target="_blank"><img src="<?=$root_path;?>images/social_twitter.png" title="Twitter" alt="TW" /></a></li>
							<li><a href="https://cz.linkedin.com/in/alois-sečkár-1a0b6896" target="_blank"><img src="<?=$root_path;?>images/social_linkedin.png" title="LinkedIn" alt="LI" /></a></li>
						</ul>	
					</div>
				<div class="clear"> </div>
				<!-- hitwebcounter Code START -->
				<div style="width=100%; text-align: center; padding-top: 1.5em;">
					<a href="http://www.hitwebcounter.com" target="_blank"><img src="http://hitwebcounter.com/counter/counter.php?page=6478702&style=0027&nbdigits=7&type=ip&initCount=20" title="Web page hit counter" alt="Web page hit counters codes Free" style="border: 0;" /></a><br/>
					<!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Measure Website Visitors" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #758087; text-decoration: none;"><strong>Measure Website Visitors</strong></a>
				</div>
				<!-- hitwebcounter Code END-->
			</div>
		<!-- copyright -->
		<div class="copyright">
			<hr />
			<p>© 2016 Web by <a href="http://alois-seckar.cz/" target="_blank">Alois Seckar</a>.
			<br />Pictures from  <a href="https://www.johnsonweld.com/" target="_blank">https://www.johnsonweld.com/</a>.
			<br />Icons by <a href="http://www.designbolts.com/author/zee-que/" target="_blank">Zee Qee</a>. 
			<br />© 2016 Based on Skills Profile Widget design.<br />All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
		</div>
		<!-- //copyright -->
			
		</div>	
	</div>	
	<!-- main -->
</body>
</html>