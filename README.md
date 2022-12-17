"# yazget-php-egitimi" 

Ekrana yazı yazdırma

<?php echo "Merhaba Yazget ?>
<?php print "Merhaba Yazget ?>




Değişken Tanımlama 

Değişken isimleri  $isim şeklinde tanımlanır
$meyve = "elma";//string veri tipi
$sebze = "maydanoz";//string veri tipi
$ustsayi = 5 ; //integer veri tipi
$sonuc = False; //boolean veri tipi
$altsayi = 1.2 ; // float kesirli sayı veri tipi

Değişkenleri birleştirme . kullanılarak yapılır
<?php echo $meyve.$sebze ?>

Değişken isimlerinde türkçe karakter kullanılmaz
Değişken isimleri büyük küçük harfe duyarlıdır



Yorum Satırı 
// Kısa Yorum
# Kısa Yorum

/* 
Uzun kapsayan yorum satırı
*/


Koşullu Yapılar
if
//sayi değişkeni 5 ten büyük ise doğru yazdırır
if ($sayi>5)
{
    echo "doğru";
}

//sayi değişkeni 5 e eşit ise doğru yazdırır
if ($sayi==5)
{
    echo "doğru";
}

//sayi değişkeni 5 e eşit değil  ise doğru yazdırır
if ($sayi!=5)
{
    echo "doğru";
}



elseif ve else

sayi değeri 5 ise doğru 6 ise 6 hiçbiri ise boş yazar ekrana
if ($sayi==5)
{
    echo "doğru";
}
elseif ( $sayi == 6)
{
    echo "6";
}
else{
    echo "boş";
}


Prim hesaplama programı

Ayda 5000 Tl net maaş alan çalışanın kazancı prim eklenerek hesaplanmaktadır. Örneğin ayda 10.000tl lik satış yapan kişinin maaşı 5000Tl + (10.000/0.2)'dir yani 7000tl . Gelin birlikte ayda 30.000tl lik satış yapan birisinin maaşını hesaplayalım. Ve Maaşı 10.000 den az ise maaşınız "az" 10.000-20.000 arası ise "ideal" 20.000den fazla ise ekrana maaşınız "yeterli" yazdıralım.



Ödev 
Tanımlanan vücut Kitle İndeksini Hesaplayan Programı Yazınız