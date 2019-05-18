<?php

function countChar($string,$char)
{
    $i = 0;
    while (!empty($string[$i]))
    {
        $i++;
    }
    $length = $i;
    
    $i = 0;
    $count = 0;
    while ($i < $length)
    {
        if ($char == $string[$i])
        {
            $count++;
        }
        $i++;
    }

    return $count;
}

echo countChar("bootcamp","o"). "<br>";
echo countChar("arkademy","k"). "<br>";
echo countChar("memeeees","e"). "<br>";

?>