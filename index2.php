<?php
echo "**** Array sort accending ******";
$arr = array(1,10,7,3,20,2,13);
for($i=0;$i<count($arr);$i++){
	for($j=$i+1;$j<count($arr);$j++){
		if($arr[$i]>$arr[$j]){
			$temp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $temp;
		}
	}
}
echo "<pre>";print_r($arr);

echo "<br>******* Binary Search *******<br>";
$arr = array(1,2,3,4,5,6,7,8,9,10);
$search = 6;
$first = 0;
$last = sizeof($arr);
$size = sizeof($arr);
for($i=0;$i<$size;$i++){
	$mid = (int)(($first+$last)/2);
	if($arr[$mid]==$search){
		echo $mid;break;
	}else if($arr[$mid]>$search){
		$first = $mid-1;
	}
	if($arr[$mid]<$search){
		$last=$mid+1;
	}
}


echo "<br> ******** Remove duplicate element from the arrray **********<br>";

$arr = array(1,2,3,4,3,10,12,12,18,3,12);
$count = count($arr);
for($i=0;$i<=$count;$i++){
	for($j=$i+1;$j<=$count;$j++){
		if($arr[$i]==$arr[$j]){ 
			for($k=$j;$k<$count;$k++){
				$arr[$k] = $arr[$k+1];			
		
			}
			
			
		}
	}
}
echo "<pre>";print_r($arr);

echo $_SERVER['SERVER_NAME'];