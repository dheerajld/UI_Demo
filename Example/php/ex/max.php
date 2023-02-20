<?php
$a = [10, 144, 488, 540, 12, 14, 16];
$max = 0;
$min = 0;
for ($i = 0; $i < count($a); $i++) {

    if ($a[$i] > $max) {
        $max = $a[$i];
        $min = $max;
    }
}

print_r($max);
exit;
