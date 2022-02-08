<?php
// perulangan php 
// 1.for
// 2.while 
//  3.do .... while
// 4.foreach : khusu untuk array 
for($i=0; $i < 5; $i++) {
   echo " hello world! <br>";
}

$i=0;
while($i<5){
    echo"selamat datang <br> ";
    $i++;
}

$i=0;
do{
    echo "apa kabar <br> ";
    $i++;
} while ($i < 3);
// perbedaan perulangan while dan do ... while adalah apabila kondisi perulangan while bernilai False 
// maka tidak akan sama sekali menghasilkan output sedangkan apabila kondisi perulangan do..
// while bernilai False maka akan menghasilakan output satu kali , semua itu terjadi karena 
// perbedaan letak mengecek kondisinya.