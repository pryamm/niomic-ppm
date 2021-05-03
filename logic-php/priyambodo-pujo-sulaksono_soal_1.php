<?php
function transaksi($bulpoin, $bayar, $pembeli){
  echo 'Harga 1 buah bulpoin '.$bulpoin[1].', jumlah pembelian bulpoin '.$bulpoin[0].', total pembelian bulpon '.$bulpoin[0].' x '.$bulpoin[1].' = '.$bulpoin[1]*$bulpoin[0];
  echo '<br>'.$pembeli.' membayar '.$bayar[1].' lembar uang '.$bayar[0].', total pembayaran '.$bayar[1].' x '.$bayar[0].' = '.$bayar[1]*$bayar[0];
  echo '<br>'.$pembeli.' menerima kembalian sebesar '.$bayar[1]*$bayar[0]-$bulpoin[1]*$bulpoin[0];
}

$bulpoin=[12, 1750];
$pembeli='Rian';
$bayar=[5, 5000];
transaksi($bulpoin, $bayar, $pembeli);  

?>