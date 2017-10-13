<?php
$group=[
'101'=>4.2,
'102'=>4.0,
'103'=>4.8,
'104'=>4.6,
'105'=>3.8,
];
$sum=0;
$avg=0;
foreach ($group as $field=>$value ){
  	$sum+=$value;
 };
 $avg=$sum/count($group);
 echo "Среднее число массива: $avg";
foreach ($group as $field=>$value ){
  	if ($value>=$avg){
  		echo "<p>"."Балл больше среднего у группы №".$field." : ".$value."</p>";
		}
 };
 
?>
