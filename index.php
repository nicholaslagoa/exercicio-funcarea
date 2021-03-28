<?php
function CalculaArea($num){
	if($num != 0){
		return $num * $num + ($num + 1) * ($num + 1);
	}else{
		return '0';
	}
}
$n = 20;
echo CalculaArea($n);