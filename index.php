<html><head><title>123ip.ru. Узнать свой ip адрес. Мой ip адрес</title>  
<meta name="description" content="Легко и непринуждённо узнать свой IP адрес (айпи адрес) и юзер агент. Полностью">
<meta name="keywords" content="айпи, адрес,IP,ip Address, ip адрес, юзерагент, user-agent">
<meta name="viewport" content="width=device-width">
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="https://wordcafe.net" crossorigin />
<link rel="preconnect" href="https://wordcafe.net" crossorigin />
<!-- <link href="//fonts.googleapis.com/css?family=Lato&subset=latin,cyrillic" rel="stylesheet" type="text/css"> -->
<!-- <link href="//fonts.googleapis.com/css?family=Oswald&effect=shadow-multiple|3d-float" rel="stylesheet" type="text/css"> -->
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<div style="width: 100%; text-align: center; padding: 5px 0px 0px 0px; font-family: 'Lato', sans-serif;">
<h1 style="font-weight: normal; font-size: 15px">Узнать свой IP адрес, My IP, How to my IP Address</h1>
<span style="font-size: 10px">
<?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?>
&nbsp;&bull;&nbsp;
<?php echo $_SERVER["REMOTE_ADDR"]; ?>
&nbsp;&bull;&nbsp;
<?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo $hostname; ?>
</span>
</div>
<div style="width: 100%; font-size: 10px; background: #f4f4f4; text-align: center; padding: 3px 0px 3px 0px; font-family: 'Lato', sans-serif;">
</div>
<div style="width: 100%; background: #4C3351; color: #fff; text-align: center; padding: 45px 0px 35px 0px; font-family: 'Lato', sans-serif;">
Ваш IP адрес&emsp;🔶&emsp;Your IP Address
<h1 style="font-family: Oswald; font-size: 360%; color: #FD8F6C"><?php echo $_SERVER["REMOTE_ADDR"]; ?></h1>
</div>
<div style="width: 100%; background: #A8D8F0; color: #000; text-align: center; padding: 35px 0px 25px 0px; font-family: 'Lato', sans-serif;">
Имя Хоста&emsp;🔻&emsp;Your Hostname
<h1 style="font-family: Oswald; font-size: 220%; color: #7B90A7"><?php $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); echo $hostname; ?></h1>
</div>
<div style="width: 100%; color: #333; border-top: 1px solid #c2c2c2; background: #ccc; text-align: center; padding: 25px 0px 20px 0px; font-family: 'Lato', sans-serif;">
Чем пользуетесь&emsp;🔻&emsp;Your User-Agent
<div class="font-effect-3d-float"><h1 style="font-family: Oswald; font-size: 145%; color: #fafafa;">
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
?>
</h1></div></div>
<div style="width: 100%; color: #000; background: #fff; text-align: center; padding: 10px 0px 10px 0px; font-family: 'Lato', sans-serif; font-size: 12px">
<small><a href="https://wordcafe.net/" title="Wordcafe" style="color: #800080">wordcafe</a></small> 
 <br /><br />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69444155-1', 'auto');
  ga('send', 'pageview');

</script>
</div>
</body></html>
