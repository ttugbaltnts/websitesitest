<html>
    <head>
    </head>
    <body>
        <a href="index.php?islem=anasayfa" >Anasayfa </a>
        <a href="index.php?islem=Hakkımızda" >Hakkımızda</a>
        <a href="index.php?islem=İletişim" >İletişim</a>
<?php 
$degisken1="TUĞBA ALTINTAŞ";


//echo "Merhaba" .$degisken1;

$sayi1=5;
$sayi2=6;
$toplam=$sayi1+$sayi2;
$carpim=$sayi1*$sayi2;


echo "Sayıların toplamı $toplam çarpımı $carpim dır";

echo "<br>";
if($sayi1<5){

echo "Sayi 5 ten küçük";

}elseif($sayi1<5){
    echo "Değil";

}else{
    echo "5 e eşit";
}

echo $_GET['islem'];


?>

    </body>

</html>


0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000