<?php
fscanf(STDIN, "%d %d", $fnum, $lnum);
$result = 1;
do{
	$result *= $fnum;
	$fnum--;
}
while($fnum > 0);
echo $result%$lnum;

?>
