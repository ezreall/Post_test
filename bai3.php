<?php
$arr=[1,5,4,7,9,0,-10,13,93,14,15];
$result=[];
for($i=0;$i<count($arr);$i++){
   for($j=$i+1;$j<count($arr);$j++){
       if($arr[$i]==$arr[$j]+1||$arr[$i]==$arr[$j]-1){
           $temp=[$arr[$i],$arr[$j]];
          $test=array_push($result,$temp);
       }
   }

}


echo "<pre>";
print_r($result);
