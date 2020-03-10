<?php
//1
function Numbers($n)
{
    $res = '';

    for ($i = 0; $i <=$n; $i++) {
        $res .= $i . " ";
    }
    return $res;
}
echo Numbers(5).PHP_EOL;

//2
function Sqr(int $n){
    if ($n > 0) {
        return Sqr($n - 1) * 2;
    }
    else{
        return 1;
    }
}
$n = 3;
echo Sqr($n).PHP_EOL;
//3
function SumNumbers($a, $b = 0)
{
    if ($a > 0) {
        $b += $a % 10;
        $a = $a / 10;

        return SumNumbers($a, $b);
    }
    return $b;
}

echo SumNumbers(179);
