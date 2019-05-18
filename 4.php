<?php

function cetak_gambar($size)
{
	if ($size % 2 == 0)
	{
		echo "Parameter harus berupa angka ganjil!"; die();
	}

	else
	{
		for ($line=0; $line < $size; $line++)
		{ 
			for ($column=0; $column < $size; $column++)
			{
				if ($column == $line || $column == ($size-$line-1))
				{ echo " X "; }
				else { echo " = "; }
			}
			echo "<br>";
		}
	}
}

cetak_gambar(9);

?>