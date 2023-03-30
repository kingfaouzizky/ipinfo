<html><head><title>Узнать свой ip адрес</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<link href='https://fonts.googleapis.com/css?family=Oswald&effect=shadow-multiple|3d-float' rel='stylesheet' type='text/css'> 
<meta name="Description" content="Мой ip был такой <?php  echo $_SERVER["REMOTE_ADDR"];?> , а твой какой? ">
<meta name="viewport" content="width=device-width"></head>
<style>
.blocks {width: 100%;} .blocks div {width: 25%;float: left;} div.blocks p {margin: 5px;padding: 5px;background: #ccc;} @media only screen and (max-width: 800px) {.blocks div {width: 90%;min-width: 250px;max-width: 400px;margin: auto; }} </style>
<body bgcolor="#ccc"><div style="text-align:center; width: 100%">
<br />
<p>Ваш IP адрес:</p>
<div class="font-effect-shadow-multiple">
<h1 style="font-family: Oswald; font-size: 220%"><?php
  echo $_SERVER["REMOTE_ADDR"];
?></h1></div>
<br /><br />
<p>Имя хоста:</p>
<div class="font-effect-shadow-multiple">
<h2 style="color: gray; font-family: Oswald; font-size: 180%">
<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;
?>
</h2>
</div>
<br /><br />
<p>Чем пользуетесь:</p>
<div class="font-effect-3d-float">
<h2 style="color: #fafafa; font-family: Oswald; font-size: 180%">
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
$browser = get_browser(null, true);
print_r($browser);
?>
</h2></div><br /><br />
<div><script type="text/javascript"><!--
google_ad_client = "ca-pub-9142981577859995";
/* 123-1 */
google_ad_slot = "7002748255";
google_ad_width = 250;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<br /><br /><br />
<a href="http://www.sportpitobzor.ru/retailers/">Магазины спортивного питания</a> и форум, отзывы, магазины, рейтинги!</body></html>




