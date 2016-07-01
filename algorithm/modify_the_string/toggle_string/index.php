<?php

fscanf(STDIN, "%s\n", $str);

function checkUpper($char){
	if(mb_strtoupper($char, 'utf-8') != $char){
		return strtoupper($char);
	}else{
		return strtolower($char);
	}
}
$newStr = '';
for($i = 0; $i <= strlen($str); $i++){
	$newStr .= checkUpper($str[$i]);
}
echo $newStr;

?>
