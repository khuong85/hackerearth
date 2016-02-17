<?php


fscanf(STDIN, "%d\n", $fact);
/*
no factorial 
for a number less than 0
*/
if($fact < 0){
	echo -1;
}
if($fact == 5){
	echo 1;
}
$total = 0;
/*
start from 5, multiply j by 5 each loop, but
stop iterating when number/j is no longer greater
than 1
*/
for($j = 5; $fact/$j >= 1; $j *= 5){
	$total  +=  floor($fact  /  $j);
}
echo $total;


?>
