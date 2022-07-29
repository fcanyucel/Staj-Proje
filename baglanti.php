<?php

$vt_sunucu="sql100.byethost3.com";
$vt_kullanici="b3_32098330";
$vt_sifre="19071907";
$vt_adi="b3_32098330_can";

$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());
}

?>