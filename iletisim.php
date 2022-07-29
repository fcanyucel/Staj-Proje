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
    <section id="iletisim">
            <div class="container">
                <h3 id="h3iletisim">İletişim Ve Öneri</h3>
                <form action="iletisim.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                        </div>

                        <textarea name="mesaj" id="" placeholder="Mesaj Giriniz" cols="30" rows="10" required class="form-control"></textarea>
                        <input type="submit" value="Gönder">
                    </div>
                </div>
                </form>

                <footer>
                    <div id="copyright">2022 | Tüm hakları saklıdır</div>
                    <div id="socialfooter">
                        <a href="https://www.facebook.com/gebzebelediye"><i class="fab fa-facebook-f social"></i></a>
                        <a href="https://www.instagram.com/gebze_belediyesi/?hl=tr"><i class="fab -brands fa-instagram-square social"></i></a>
                        <a href="https://twitter.com/gebze_belediye?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter social"></i></a>
                    </div>
                </footer>
            </div>
        </section>
        <script src="main.js" charset="utf-8"></script>
        </body>
        </html>

        <?php
        include("baglanti.php");

        if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
        {
            $adsoyad=$_POST["isim"];
            $telefon=$_POST["tel"];
            $email=$_POST["mail"];
            $konu=$_POST["konu"];
            $mesaj=$_POST["mesaj"];

            $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

            if($baglan->query($ekle)===TRUE)
            {
                echo "<script>alert('Mesajınız Başarıyla İletilmiştir.')</script>";
            }

            else
            {
                echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu !')</script>";
            }
        }
        ?> 
