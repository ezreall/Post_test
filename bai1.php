<?php
$n=3;
echo "<pre>";
$Arr=[];

for($i=0;$i<3*$n;$i++){
    array_push($Arr,rand(0,100));
}
print_r($Arr);
$x=array_splice($Arr,0,$n);
print_r($x);
$y=array_splice($Arr,0,$n);
print_r($y);
$z=array_splice($Arr,0,$n);
print_r($z);
for($i=0;$i<$n;$i++){
    array_push($Arr,$x[$i]);
    array_push($Arr,$y[$i]);
    array_push($Arr,$z[$i]);
}
print_r($Arr);


