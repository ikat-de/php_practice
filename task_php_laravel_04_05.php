<?php
/* 課題4-5
    次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
    strip_tags array_push array_merge time, mktime date */


/* strip_tags — 文字列から HTML および PHP タグを取り除く */
  $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
  echo strip_tags($text);
  echo "\n";
  
  // <p> と <a> は許可します
  echo strip_tags($text, '<p><a>');
  echo "\n";



/* array_push — 一つ以上の要素を配列の最後に追加する */
  $stack = array("orange", "banana");
  array_push($stack, "apple", "raspberry");
  print_r($stack);
  echo "\n";


/* array_merge — ひとつまたは複数の配列をマージする */
  $array1 = array("color" => "red", 2, 4);
  $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
  $result = array_merge($array1, $array2);
  print_r($result);
  echo "\n";


/* time — 現在の Unix タイムスタンプを返す */
  // 使用するデフォルトのタイムゾーンを指定します。PHP 5.1 以降で使用可能です。
  date_default_timezone_set('Asia/Tokyo');
  echo '現在のUnixタイムスタンプ：'.time();
  echo "\n";


/* mktime — 日付を Unix のタイムスタンプとして取得する */
  echo '2017/8/1のUnixタイムスタンプ：'.mktime(0, 0, 0, 8, 1, 2017);
  echo "\n";
  
  
/* date — ローカルの日付/時刻を書式化する */
  // 結果は、たとえば Monday のようになります。
  echo date("l");
  echo "\n";
  
  // 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
  echo date('l jS \of F Y h:i:s A');
  echo "\n";
  
  // 結果は July 1, 2000 is on a Saturday となります。
  echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
  echo "\n";
  
  /* 書式指定パラメータに、定数を使用します。 */
  // 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
  echo date(DATE_RFC2822);
  echo "\n";
  
  // 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
  echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
  echo "\n";

?>