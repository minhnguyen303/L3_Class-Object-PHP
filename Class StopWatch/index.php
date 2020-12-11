<?php
include_once "StopWatch.php";

$array = [];

for ($num = 0; $num < 10000; $num++) {
    array_push($array, rand(1, 10000));
}

$size = count($array);

$time = new StopWatch();
for ($i = 0; $i < $size; $i++) {
    for ($j = $i + 1; $j < $size; $j++) {
        if ($array[$j] < $array[$i]) {
            $min = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $min;
        }
    }
}
$time->stop();

echo "Số milliseconds đã qua: " . $time->getElapsedTime();