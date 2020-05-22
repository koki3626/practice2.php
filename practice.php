<?php 

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double($i){
    return $i*2;
}

echo double(3)."\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

function plusab($a,$b){
    return $a+$b;
}

echo plusab(2,23)."\n";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = $arr[0];
    for($i=1;$i<count($arr);$i++){
        $result *=$arr[$i];
    }
    return $result;
}

echo product(array(1,3,5,7,9))."\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number = $a;
     }
 }
 return $max_number;
 }
echo max_array(array(1,23,5,2,8))."\n";

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

$str ="<h1>h1タグ</h1>"."<p>pタグ</p>"."\n";

echo strip_tags($str);

echo strip_tags($str,"<p>");

$fruits1 =['banana','apple','kiwi'];

array_push($fruits1,'melon','strawberry');

print_r($fruits1);

$fruits2 =['pineapple','cherry','orange'];
$fruits3 =['papaya','anzu'];

$fruits_merge =array_merge($fruits1,$fruits2,$fruits3);

var_dump($fruits_merge);

date_default_timezone_set('Asia/Tokyo');
print date("Y/m/d G:i:s")."\n";

echo time()."\n";
echo mktime(2,23,4,12,24,2020)."\n";


$yearAfterOne = time() + (365*24*60*60);
echo $yearAfterOne."\n";
print date("Y/m/d G:i:s",$yearAfterOne)."\n";


?>