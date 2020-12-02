<?php
//1.引数に数値を指定して実行すると、
//数値を2倍にして返す関数を作成してください
function double($i){
  return $i * 2;
}
echo double(5);
echo "\n";

//2.$a と $b を仮引数に持ち、　
//$a と $b　を足した結果を返す関数を作成してください。
function f($a, $b){
  return $a + $b;
}
echo f(3,17);
echo "\n";

//3.$arr という配列の仮引数を持ち、
//数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
function number($arr){
  $result = 0;
  for($i = 0; $i < count($arr); $i++) {
    if($i == 0){
      $result += $arr[$i];   //これって　-= $arr でもOK？　試してみよう
    }else{
      $result *= $arr[$i];
    }
  }
  return $result;
}
echo number(array(1, 3, 5 ,7, 9));
echo "\n";

//4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
//途中の部分を完成させてください。
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($a > $max_number){
      $max_number = $a;
    }
  }
return $max_number;
}
 echo max_array(array(6, 2, 3, 10, 5));
 echo "\n";
 
 //5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
 //・strip_tags
 $example = "<p>I am</p> not <p>your father.</p>";
 echo strip_tags($example, '<p>');
 echo"\n";
 
 //・array_push
$members = array("ドラえもん", "のび太", "しずかちゃん");
array_push($members, "ジャイアン", "スネ夫");
print_r($members);
 echo "\n";

//・array_merge
$array1 = ["りんご", "バナナ", "みかん", "メロン"];
$array2 = ["ぶどう", "いちご"];
$array3 = ["パイナップル", "もも", "柿"];
$array = array_merge($array1, $array2);
print_r($array);
 echo "\n";
 
//・time,mktime
//現在のタイムスタンプを取得
echo '現在のタイムスタンプ:'.time();
echo "\n";
 
//mktime関数で取得
$timestamp = mktime(0, 0, 0, 12, 1,2020);
echo "2020年12月1日0秒のタイムスタンプ: S" .$timestamp;
echo "\n";

//date: Unixタイムスタンプをフォーマット
echo date('Y/m/d', time());
echo "\n";


?>
