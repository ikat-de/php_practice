<?php
/* 課題3-1
    $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
    もし違ったら「あなたの名前ではありません」と表示するように実装してください。 */

$name = "Ikeda Atsushi";
// $name = "Atsushi Ikeda ";

if ($name == "Ikeda Atsushi") {
  echo "私は Ikeda Atsushi です";
} else {
  echo "Ikeda Atsushiではありません";
}