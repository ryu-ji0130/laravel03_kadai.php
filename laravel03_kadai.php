<?php

$name = "梶原竜二";
if ($name = "梶原竜二") {
  echo "私は梶原竜二です。";
} else {
  echo "梶原竜二ではありません。";
}

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("peach", "pear", "grapes", "orange", "apple");
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}





?>
