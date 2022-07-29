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
        <h3>YÖRESEL YEMEKLER<h3>
        <div id="container">
            <div id="sol">
                <h5 id="h5sol">Umaç Çorbası</h5>
            </div>

            <div id="sag">
                <p id="psag">Mutfağın olmazsa olmazlarından unun başrolde yer aldığı umaç çorbası, yağ, toz biber ve tuzdan oluşan karışımla bir araya gelince bir harika oluyor. Az malzemeyle hazırlanan her yemeğin daha çok ustalık gerektirdiğinin kanıtı nefis çorba, özellikle soğuk kış günlerinin bir numaralı tercihine dönüşüveriyor.</p>
            </div>

            <img src="img/umac.jpg" alt="" class="img-fluid mt50">

            <p id="pson">
            </p>
        </div>
    </section>
    <br><hr><br>

    <section id="hakkimizda">
    <div id="container">
            <div id="sol">
                <h5 id="h5sol">Ciğceli Kavurma</h5>
            </div>

            <div id="sag">
                <p id="psag">Bulgur ya da pirinç pilavının üzerine kuşbaşı doğranıp kavrulmuş misler gibi etler geliyor, zaten bu bile şahane bir lezzetken Kocaeli farkı kendini gösteriyor ve etlerin üzerine misler gibi süt kaymağı geliyor. Süt kaymağına "ciğce" dendiği için de bu nefis yemeğin adı ciğceli kavurma oluyor.
                </p>
            </div>

            <img src="img/cigceli-kavurma.jpg" alt="" class="img-fluid mt50">

            <p id="pson">
            </p>
        </div>
    </section>
    <br><hr><br>

    <section id="hakkimizda">
        <div id="container">
                <div id="sol">
                    <h5 id="h5sol">Mancar Yemeği</h5>
                </div>
    
                <div id="sag">
                    <p id="psag">Hodan ve kaldirik otu olarak da bilinen mancardan yapılan bu yemek, biraz emek istiyor. Çünkü yemeği pişirmeye başlamadan önce mancarları ayıklayıp yaklaşık 2 saat kadar soğuk suda bekletmek gerekiyor. Ardından sudan alınıp kısık ateşte haşlanan mancarlar, kavrulmuş soğanla bir araya gelip pişmeye devam ediyor. İçine isteğe göre domates ve bulgur gibi lezzetler de ekleniyor.</p>
                </div>
    
                <img src="img/mancar-yemegi.jpg" alt="" class="img-fluid mt50">
    
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