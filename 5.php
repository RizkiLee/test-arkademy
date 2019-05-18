<?php

function minmax($arr)
{
	$min = ""; $max = "";
	for ($index = 0; $index < count($arr); $i++)
	{
		$index2 = $index + 1;
		while($index2 < count($arr))
		{
			if ($arr[$index] > $arr[$index2])
			{
				echo "max=".$arr[$index];
			}
			$index2++;
		} 

	}

	return array($min,$max);
}

$data = array('z','a','c','v','m');
$data2 = minmax($data);

echo "['$data2[0]'] ['$data2[1]']";


?>