<?php
// 1〜$max までを足して結果を返す関数
function sum($max) {
    $result = 0;

    // $i は1から始まり、$max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }

    return $result;
}

// 関数を実行
echo sum(100);
?>