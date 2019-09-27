<?php
/* 課題4-2
    $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。 */

function sum($a, $b) {
  $result = $a + $b;
  return $result;
}

echo sum(100, 10);
?>