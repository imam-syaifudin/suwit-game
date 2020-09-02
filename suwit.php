<?php

// Suit Jawa V1
// Coded By Muhammad Imam

system("clear");

$yellow = "\e[1;33m";
$white = "\e[1;37m";
$green = "\e[0;32m";
$red = "\e[0;31m";
$imp = "\e[0;31m!\e[1;37m";
$plus = "\e[1;33m+\e[1;37m";
$lightblue = "\e[1;34m";
$result = "$white [ $green RESULT $white ]";
$poin = 0;

function jalan($string){
  global $banner,$imp,$red,$green,$yellow,$acak,$plus,$result,$white,$comp;

  foreach ( str_split($string) as $kontol){
    echo $kontol . system("sleep 0.025");
  }
}

$banner = "
$plus$lightblue Games : $yellow Suit Jawa $green Development : Prize0neZero


   ____ $plus$red Version : 1.0.1  $plus $lightblue Coded By : $yellow Muhammad Imam          
  / ___/__  ___      __(_) /_       / /___ __      ______ _
  \__ \/ / / / | /| / / / __/  __  / / __ `/ | /| / / __ `/
$red ___/ / /_/ /| |/ |/ / / /_   / /_/ / /_/ /| |/ |/ / /_/ / 
$yellow/____/\__,_/ |__/|__/_/\__/   \____/\__,_/ |__/|__/\__,_/  
       Php Version                                                        
$imp$red Peraturan :
$plus$green Pilihan > Gunting Batu Kertas
$plus$yellow Computer Sudah Auto Acak 
$plus$lightblue Field Tidak Boleh Kosong

";
echo $banner;

function Normal(){
  
global $banner,$imp,$red,$green,$yellow,$acak,$plus,$result,$white,$comp;


$comp = ["gunting","batu","kertas"];
$acak = $comp[array_rand($comp)];

system("clear");
echo $banner;
echo "Masukkan pilihan Mu > $yellow";
$user = strtolower(trim(fgets(STDIN)));


/*if ( empty($user)){
 die("$white [ $red ✖️ $white ] $red Tidak Boleh Kosong Goblok\n");
}
else if ( !in_array($user,$comp)){
 die("$white [ $red ✖️ $white ] $red Pilihan Tidak Ada Cek Peraturan Goblokkk :v\n");
}*/

$kalah = "$white [ $red ✖️ $white ] ";
$menang = "$white [ $green ✔️ $white ] ";

if ( $user == $acak ){
  echo("$result Computer Pick ". $acak . " Hasil = SERI!!\n");
} else if ( $user == "gunting"){
   $hasil = ( $acak == "kertas") ? "$menang Menang":"$kalah Kalah";
   echo "$result Computer Pick ". $acak ." Hasil = $hasil";
} else if ( $user == "kertas"){
   $hasil = ( $acak == "gunting") ? "$kalah Kalah":"$menang Menang";
   echo "$result Computer Pick ".$acak." Hasil = $hasil";
} else if ( $user == "batu"){
   $hasil = ( $acak == "kertas") ? "$kalah Kalah":"$menang Menang";
   echo "$result Computer Pick " . $acak . " Hasil = $hasil";
} else if ( empty($user)){
   die("$white [ $red ✖️ $white ] $red Tidak Boleh Kosong Goblok\n");
} else if ( !in_array($user,$comp)){
  die("$white [ $red ✖️ $white ] $red Pilihan Tidak Ada Cek Peraturan Goblokkk :v\n");
}


}

function tambahPoin($hasil){
  global $poin;
  
  if ( $hasil == "Menang"){
    return $poin += 3;
  } else if ( $hasil == "Kalah"){
    return $poin -= 3;
  }
}

function mode10battle(){

  
global $poin,$imp,$red,$green,$yellow,$acak,$plus,$result,$white;

$banner = "

   ____ $plus$red Version : 1.0.1  $plus $lighblue Coded By : $yellow Muhammad Imam          
  / ___/__  ___      __(_) /_       / /___ __      ______ _
  \__ \/ / / / | /| / / / __/  __  / / __ `/ | /| / / __ `/
$red ___/ / /_/ /| |/ |/ / / /_   / /_/ / /_/ /| |/ |/ / /_/ / 
$yellow/____/\__,_/ |__/|__/_/\__/   \____/\__,_/ |__/|__/\__,_/  
       Php Version                                                        
$imp$red Peraturan :
$plus$green Pilihan > Gunting Batu Kertas $plus$green MENANG = +3
$plus$yellow Computer Sudah Auto Acak      $plus$red KALAH = -3
$plus$lightblue Field Tidak Boleh Kosong      $plus$yellow SERI = +1

\n
";


system("clear");


for ( $i = 1; $i <= 10; $i++){
 system("clear");
 
 
$comp = ["gunting","batu","kertas"];
$acak = $comp[array_rand($comp)];


 echo $banner . $green. system("figlet -f banner 'GAME KE : $i'");
 echo "$plus$white YOUR POIN : $poin\n";
 echo "$yellow [ $plus $yellow] Masukkan pilihan Mu > $red";
 $user = strtolower(trim(fgets(STDIN)));


/*if ( empty($user)){
 die("$white [ $red ✖️ $white ] $red Tidak Boleh Kosong Goblok\n");
}
else if ( !in_array($user,$comp)){
 die("$white [ $red ✖️ $white ] $red Pilihan Tidak Ada Cek Peraturan Goblokkk :v\n");
}*/

$kalah = "$white [ $red ✖️ $white ] ";
$menang = "$white [ $green ✔️ $white ] ";

$poinMenang = ( true ) ? $poin += 3 : "";
$poinKalah =  ( true ) ? $poin -= 3 : "";


 if ( $user == $acak ){
   echo("$result Computer Pick ". $acak . " Hasil = SERI!!\n");
   $poin += 1;
 } else if ( $user == "gunting"){
   $hasil = ( $acak == "kertas") ? "$menang Menang" : "$kalah Kalah";
   echo "$result Computer Pick ". $acak ." Hasil = $hasil";
   if ( $hasil == "$menang Menang"){
       $poin += 3;
     } else {
       $poin -= 3;
     }
 } else if ( $user == "kertas"){
   $hasil = ( $acak == "gunting") ? "$kalah Kalah":"$menang Menang";
   echo "$result Computer Pick ".$acak." Hasil = $hasil";
     if ( $hasil == "$menang Menang"){
       $poin += 3;
     } else {
       $poin -= 3;
     }
   
 } else if ( $user == "batu"){
   $hasil = ( $acak == "kertas") ? "$kalah Kalah":"$menang Menang";
   echo "$result Computer Pick " . $acak . " Hasil = $hasil";
     if ( $hasil == "$menang Menang"){
       $poin += 3;
     } else {
       $poin -= 3;
     }
   
 } else if ( empty($user)){
   die("$white [ $red ✖️ $white ] $red Tidak Boleh Kosong Goblok\n");
 } else if ( !in_array($user,$comp)){
   die("$white [ $red ✖️ $white ] $red Pilihan Tidak Ada Cek Peraturan Goblokkk :v\n");
 }

system("sleep 2");
 }

echo "\n";
}


$getChoice = "
$red 1 $lightblue Mode Normal
$red 2 $lightblue Mode 10 Battle$yellow 
>>>$green >>> ";

echo $getChoice;
$gas = strtolower(trim(fgets(STDIN)));

if ( $gas == 1){
  
  Normal() . system("sleep 1");
  while ( true ){
  echo "\n Lanjut? Ketik Y/N > ";
  $lanjut = trim(fgets(STDIN));
  if ( $lanjut == "Y" || $lanjut == "y"){
    Normal();
  } else {
    jalan("$yellow Terimakasih Telah Menggunakan Game Sederhana Saya\n $plus$yellow Maaf Jika Ada Kekurangan \n  -Prize0neZero ( Muhammad Imam )\n");
    break;
   }
  }
   
} else if ( $gas == 2){
  mode10battle();
} else {
  echo "$red Wrongg Inputt!!!!\n";
}




?>
