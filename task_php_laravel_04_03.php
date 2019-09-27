<?php
/* 課題4-3
    $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
    その要素をすべてかけた結果を返す関数を作成してください。 */

function multipl($arr) {
  $result = 1;

  foreach ($arr as $num) {
    $result *= $num;
  }

  return $result;
}

echo multipl(array(1, 3, 5 ,7, 9));
?>