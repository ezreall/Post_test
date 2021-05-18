<?php
$arr=[0,100,-4,8,99,100,143];
for($i=1;$i<count($arr);$i++){
    $max=$arr[0];
    if($arr[$i]>$max){
        $max=$arr[$i];
        $index =$i;
    }
}
array_splice( $arr,$index,1);
//print_r($arr);
for($i=1;$i<count($arr);$i++){
    $max1=$arr[0];
    if($arr[$i]>$max1){
        $max1=$arr[$i];
        $index1 =$i;
    }
}
$sum=$max+$max1;
print_r($sum);
