<?php

// konstanta karakter yang dapat digunakan
define("CHARACTERS", "0123456789abcdefghijklmnopqrstuvwxyz");

function generateString($num)
{
	if ($num <= 0)
	{
		echo "tidak boleh menggunakan nilai negatif atau nol."; die();
	}

	$strings = array();
	
	for($i = 0; $i < $num; $i++)
	{
		$string = "";
		while (strlen($string) < 32)
		{
			$string .= substr(CHARACTERS, mt_rand(0,32),1);
		}
		array_push($strings, $string);
	}

	if(checkDuplicate($strings))
	{
		echo "Gagal. Terdapat duplikat dalam array string."; die();
	}

	else return $strings;
}

function checkDuplicate($array)
{
	if (count($array) > count(array_unique($array)))
		return true;

	else return false;
}

$array = generateString(5);

for ($i=0; $i < count($array); $i++)
{
	echo "['$array[$i]'] <br>";
}



?>