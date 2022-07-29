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

    <title>Rota Gebze</title>
</head>
<body>
    <nav>
        <div class="nav-logo">Rota Gebze</div>
        <ul class="nav-links">
            <li><a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a></li>
            <li><a href="kurumsal.php">Tarihi Camiiler</a></li>
            <li><a href="gebze.php">Çeşmeler</a></li>
            <li><a href="haberler.php">Kaleler Ve Kuleler</a></li>
            <li><a href="hamam.php">Han Ve Hamamlar</a></li>
            <li><a href="doga.php">Doğa Turizmi</a></li>
            <li><a href="yemekler.php">Yöresel Yemekler</a></li>
            <li><a href="sehitlik.php">Gebze Şehitliği</a></li>
            <li><a href="iletisim.php">İletişim</a></li>
            <li><a href="panelgiris.php">Yönetici Girişi</a></li> 
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <section id="hakkimizda">
        <h3>ÇEŞMELER<h3>
        <div id="container">
            <div id="sol">
                <h5 id="h5sol">Eskihisar Çeşmesi</h5>
            </div>

            <div id="sag">
                <p id="psag">1772 tarihinde yaptırılan bu tarihi çeşme adını Eskihisar köyünden almıştır. Üzeri piramit şeklinde bir çatı ile örtülü olan çeşme, kare planlıdır. Ön ve arka yüzleri 270cm., yan kısımları ise 315 cm'dir. Yüksekliği de 2 metreye yakındır. Tarihi değeri büyük olan bu çeşme 1850 yılında esaslı bir onarım görmüştür.</p>
            </div>

            <img src="img/eç.jpg" alt="" class="img-fluid mt50">

            <p id="pson">
            </p>
        </div>
    </section>
    <br><hr><br>

    <section id="hakkimizda">
    <div id="container">
            <div id="sol">
                <h5 id="h5sol">İbrahim Paşa Çeşmesi</h5>
            </div>

            <div id="sag">
                <p id="psag">Sadrazam Köprülü Mehmet Paşa'nın kethüdası ve veziri İbrahim Paşa tarafından 1664 yılında yaptırılmış olup, eni boyu yaklaşık 6 metre ve kare planlıdır. Suyunun akışı terazi sistemiyle sağlanmıştır. Kitabesinde İbrahim Paşa'nın ismi ve ebcet hesabıyla düşürülen tarihi okunmaktadır. Çeşme 1933 yılında tamir ettirilmiştir. Kent merkezinin hemen ortasında, Çoban Mustafa Paşa Hamamı'nın yanı başındadır.</p>
            </div>

            <img src="img/ipç.jpg" alt="" class="img-fluid mt50">

            <p id="pson">
            </p>
        </div>
        <?php require "footer.php";?>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
    <script src="main.js" charset="utf-8"></script>
    </body>
    </html>

   
<?php
include("baglanti.php");
?>