<?php

// OUTPUT 1
$bintang1 = 10;

for ($i = $bintang1; $i > 0; $i--) {
    for ($j = $bintang1; $j >= $i; $j--) {
        echo "* ";
    }
    echo "<br>";
}

// OUTPUT 2

$bintang2 = 10;

for ($x = $bintang2; $x > 0; $x--) {
    for ($y = 0; $y <= $x; $y++) {
        echo "&nbsp  ";
    }
    for ($x1 = $bintang2; $x1 >= $x; $x1--) {
        echo "* ";
    }
    echo "<br>";
}
