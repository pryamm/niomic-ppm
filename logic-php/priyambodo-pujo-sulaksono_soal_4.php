<?php 
function oddEven($angka, $counter){
      $counter%2==0 ? $cetak='Bilangan Genap' : $cetak='Bilangan Ganjil';
      $counter=$counter+1;
      echo $cetak.'<br>';
      return $angka==$counter?$counter:oddEven($angka, $counter);
}
oddEven(10, 1);

?> 