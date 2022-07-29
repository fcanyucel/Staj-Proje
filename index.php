<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
              
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2b5da4;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 700px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 700px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body background="img/banner.jpg" width="100%" height="100%">

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Gebze Rehberi</a>
  <a href="kurumsal.php">Tarihi Camiiler</a>
  <a href="gebze.php">Çeşmeler</a>
  <a href="haberler.php">Kale Ve Kuleler</a>
  <a href="hamam.php">Han Ve Hamamlar</a>
  <a href="doga.php">Doğa Turizmi</a>
  <a href="yemekler.php">Yöresel Yemekler</a>
  <a href="sehitlik.php">Gebze Şehitliği</a>
  <a href="iletisim.php">İletişim</a>
  <a href="panelgiris.php">Yönetici Girişi</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div style="padding-left:16px; color: aliceblue;position: absolute;
top: 50%;
left: 40%;
transform: translate(-50%,-50%);
color: white;
font-size: 18px;
z-index: -1;">
  <h2>Gebze</h2>
            <hr width="150" align="left">
            <p>Gebze'nin tarihi ve kültürel zenginliklerini tanıtmak için hazırlanmıştır.
            <br> Gebze'de yapabileceğiniz seyahtlere rehberlik etmek için uygundur.</p>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
