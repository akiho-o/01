<?php

$nums = [[1,2], [3, 4], [5,6,7]];

// 以下に出力するコードを記述

$nams = [
    '1' => ['1','2'],
    '2' => ['3', '4'],
    '3' => ['5', '6', '7']
];

echo $nams['2'][1] . '<br>';
echo $nams['3'][2] . '<br>';
echo $nams['3'][1] . '<br>';
echo $nams['3'][0] . '<br>';
echo $nams['1'][0] . '<br>';
echo $nams['2'][0] . '<br>';
echo $nams['1'][1] . '<br>';

