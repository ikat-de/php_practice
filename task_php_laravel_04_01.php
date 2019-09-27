<?php
/* 課題4-1
    引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください */

function double($num) {
  $result = $num * 2;
  return $result;
}

echo double(100);
?>