<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
<style>
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
    <title>Rota Gebze</title>
</head>
<body>
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
     <section id="hakkimizda">
        <h3>HAN VE HAMAMLAR</h3>

        <div id="container">
            <div id="sol">
                <h5 id="h5sol">Çoban Mustafa Paşa<br>HAMAMI</h5>
            </div>

            <div id="sag">
                <p id="psag">Çoban Mustafa Paşa tarafından 1523 yılında inşa ettirilen hamam, halk arasında Çarşı Hamamı ve Çifte Hamam olarak da adlandırılmaktadır. Hamamın iki kubbesi, yanında ise geniş bir sarnıcı bulunmaktadır. Yapıda muntazam kalker taşları kullanılmıştır. Pencerelerinin kemer ayaklarına kadar üçer sıra tuğla ve bir hatıl geçirilmiş olup, bütün pencerelerinin kemerleri tuğladan örülmüştür.<br>Mustafa Paşa Mısır'a vali olarak atandığında yapımın sürdüğü bilinmektedir. Paşa Mısır bezemelerinden etkilenerek, camisi için taşınabilir parçaları Kahire'de yaptırmıştır. Darıca iskelesinden Gebze'ye ulaştırılan süsleme öğeleri Mısırlı ustalar tarafından yerlerine yerleştirilmiştir.</p>
            </div>

            <img src="img/çmph.jpg" alt="" class="img-fluid mt50">

            <p id="pson">
            </p>
            <?php require "footer.php";?>
        </div>
    </section>
    <script src="main.js" charset="utf-8"></script>
</body>
    </html>

    <?php
include("baglanti.php");
?>
