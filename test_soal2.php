<?php

$input1 = "hallo jesika24 selamat datang!";
$input2 = "hallo anggun selamat datang!";
$input3 = "hallo ** selamat datang!";
$input4 = "hallo Mariage889120! selamat datang!";

// validasi yang di inginkan: 

// - Jika inputan mengandung angka maka harus mengeluarkan output : Sistem kami menolak untuk inputan berisi angka 167283
// - Jika inputan tidak mengandung angka maka harus mengeluarkan output : Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan hallo justin selamat datang!

// $input1 - $input 4
if (preg_match_all("/[0-9]/", $input1, $array)) {
    echo "Sistem kami menolak untuk inputan berisi angka";
} else {
    echo "Sistem memeriksa data anda valid dengan ketentuan kami dengan inputan $input1";
}
