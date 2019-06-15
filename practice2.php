<?php

  function twice($num){
    return $num * 2;
  }
  
  function plus($a , $b){
    return $a + $b;
  }
  
  function f($box){
    $sum = 1;
    $count_box = count($box);
    
    for($i= 0; $i < $count_box; $i++){
      $sum = $sum * $box[$i];
    }
    return $sum;
  }  
  
  function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
      if($max_number < $a){
        $max_number = $a;
      }
    }
    return $max_number;
  }
  
  echo "1.数値を2倍にして返す関数\n";
  echo twice(100);
  echo "\n\n";
  
  echo "2.2つの仮引数を足した結果を返す関数を作成してください。\n";
  echo plus(10,80);
  echo "\n\n";
  
  echo "3.配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。\n";
  $array = array(1,3,5,7,9); 
  echo f($array);
  echo "\n\n";
  
  echo "4.応用.配列の最大値を返す。\n";
  $array_max = array(1,3,55,7,9,80,54,33,1,100,89); 
  echo max_array($array_max);
  echo "\n\n";
  
  echo "5.応用.strip_tags\n";
  $text = '<title> Hello </title><p>ようこそ</p><a href="####">こんにちは</a>';
  echo strip_tags($text);
  echo "\n\n";
  
  echo "5.応用.array_push \n";
  $array_sample = array("ゆず","りんご");  
  array_push($array_sample,"ぶどう","みかん");

  foreach($array_sample as $arr){
    echo $arr;
    echo " ";
  }
  echo "\n\n";
  
  echo "5.応用.array_merge \n";
  $array1 = array("color" => "red", 2, 4, 6 , "shape" => "test");
  $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
  $result = array_merge($array1, $array2);
  print_r($result);
  echo "\n\n";
  
  echo "5.応用.time(),mktime() \n";
  echo time();  
  echo "\n";
  echo mktime(0,0,0,6,13,2019);
  echo "\n\n";
  
  echo "5.応用 date \n";
  /* 東京のタイムゾーンにセット  */
  date_default_timezone_set('Asia/Tokyo');
  echo date("Y/m/d H:i:s");
  echo "\n\n";
?>