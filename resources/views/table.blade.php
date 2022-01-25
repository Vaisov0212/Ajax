<?php
$data="2021-12-31"; echo "<br>";
echo   $lastData=date("Y-m-d-H:i"); echo "<br>";
        echo   $a1=(int)substr($data,0,4); echo "<br>";
        echo   $b1=(int)substr($data,5,2); echo "<br>";
        echo   $c1=(int)substr($data,8,2); echo "<br>";
        echo    $a2=(int)substr($lastData,0,4); echo "<br>";
        echo   $b2=(int)substr($lastData,5,2); echo "<br>";
        echo    $c2=(int)substr($lastData,8,2); echo "<br>";
        echo    $pls=((int)$a2*365+(int)$b2*30+(int)$c2)-((int)$a1*365+(int)$b1*30+(int)$c1); echo "<br>";
        echo     $pulsData=$pls*24*60; echo "<br>";
      echo  (int)$minut=(int)substr($lastData,11,2)*60+(int)substr($lastData,14,2)+$pulsData;
?>
