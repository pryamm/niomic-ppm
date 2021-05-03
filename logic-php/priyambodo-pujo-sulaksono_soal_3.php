<?php

$cabang1=10000;
$cabang68=30100;
$b=number_format(($cabang68-$cabang1)/68, 0, '.', '');
$Xn=number_format(($b*81+$cabang1), 0, '.', '');
echo 'pengeluaran cabang 1 : '.$cabang1;
echo '<br>pengeluaran cabang 68 : '.$cabang68;
echo '<br>mencari kenaikan nilai b = ( Xn - Xn-x ) / n atau b = ('.$cabang68.' - '.$cabang1.') / 68 = '.$b;
echo '<br>maka pengeluaran cabang ke 81  adalah X81 = ( b x 81 ) + Xn-x atau ('.$b.' x 81) + '.$cabang1.' = '.$Xn;

?>