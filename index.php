<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yazget</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1>  
    </main>

    
<?php
//Ekrana Yazı Yazdırma
echo "hello php";


/* Uzun kapsayan yorum satırı */

//Değişken tanımlama dolar sembolü kullanılarak yapılır.
//integer veri
$sayi = 6;

//string veri tipi
$name = "fatih";




// Koşullu Yapılar
// if sayi değişkeni 5 ten büyük ise doğru yazdırır

if($sayi>5) {
  echo "sayi 5 ten büyük";
}else if($sayi<5){
  echo "sayi 5 ten küçük";
}else{
  echo "sayi 5 e eşit";
}

//Diziler
$meyveler = [
  "elma",
  "armut",
  "vişne"
];

echo ("<pre>");
print_r($meyveler) ;

echo ("<pre>");
var_dump($meyveler);

echo ("<pre>");
echo $meyveler[1];

echo ("<pre>");

//Döngüler
$a = 0;
while($a <= 6){
  echo $a;
  $a++;
}

echo ("<pre>");


for($i=1;$i<5;$i++){
  echo $i;
}


echo ("<pre>");

echo ("<pre>");

//for ile arrayin elemanlarını yazdırma
for($i=0;$i<3;$i++){
  echo $meyveler[$i];
  echo " ";

}


echo ("<pre>");

//foreach ile ekrana arrayin elemanlarını yazdırma
foreach($meyveler as $meyve){
  echo $meyve;
}

?>


<?
//methodu get ile değiştirip de göster
?>
<form action="vkihesapla.php" method="POST">

Boy (cm):<br><input type="text" name="boy"><br>
Kilo(kg):<br><input type="text" name="kilo"><br>

<input type="submit" value="Hesapla">

</form>

<?php
if(isset($_GET['vki'])){
  $vki=$_GET['vki'];
  echo $vki;
};

?>

<?php
//fonksiyonlar

function info(){
  echo "ad:fatih";
  echo "soyad:tuncer";
}

echo info();



echo ("<pre>");

function topla($first,$last){
  $toplam = $first + $last;
  echo $toplam;
}

topla(3, 5);


?>





  </body>
</html>