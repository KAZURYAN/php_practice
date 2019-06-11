<?php

  echo "<<第1問目>>\n";
  $name = "mochid";
  
  if($name == "mochida"){
    echo "私は". $name ."です\n";
  }else{
    echo "私は". $name ."ではありません\n";
  }
  
  echo "<<第2問目>>\n";
  $sum = 0;
  for ($i = 1 ; $i <= 10000; $i++){
    $sum += $i;
  }
  echo "1から10000の合計は".$sum."です\n";

  echo "<<第3問目>>\n";
  $fruits = array("apple", "orange", "lemon", "grape", "peach");

  for ($i = 0; $i < count($fruits); $i++) {
    echo $i+1 ."番目のフルーツは" . $fruits[$i] ."です\n" ;
  }
  
  echo "<<応用問題>>\n";
  /* for文の始めの値を定義する */
  $start = 1;
  /* for文の終わりの値を定義する */
  $end = 100;
  
  for($i = $start; $i <= $end; $i++){
  
    // 5で割り切れたら{}内を実行する
    if($i % 5 == 0){
      echo $i ."\n" ;
    }
  }

?>