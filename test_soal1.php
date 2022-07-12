<?php

$data1 = [1, 1, 1, 2, 2, 4, 1, 1];
$data2 = [2, 1, 2, 2, 2, 8, 1, 1];
$data3 = [3, 3, 3, 3, 2, 4, 1, 1];


$merge = array_merge($data1, $data2, $data3);

$result = array_count_values($merge);



$tmp = 0;
foreach ($result as $key => $value) {
    if ($value > $tmp) {
        echo "Total data paling banyak keluar adalah {$key} dengan jumlah {$value} ";
        $tmp = $value;
    };
};
