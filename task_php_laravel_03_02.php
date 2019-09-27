<?php
/* 課題3-2
    for文を使って、1から10000までの合計の値を表示してください。 */

$total = 0;

for($i = 1; $i <= 10000; $i++){
  $total += $i;
}

echo $total;
