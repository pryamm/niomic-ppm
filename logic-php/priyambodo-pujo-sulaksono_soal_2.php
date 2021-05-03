<?php
class Transaksi {
  private $pembeli;
  private $bayar;
  private $harga;

  public function __construct($pembeli, $bayar, $harga){
    $this->pembeli = $pembeli;
    $this->bayar = $bayar;
    $this->harga = $harga;
  }

  public function getJumlahSisa(){
    $pembeli = $this->pembeli;
    $bayar = $this->bayar;
    $harga = $this->harga;
    echo 'Harga total pembelian '.$harga;
    echo '<br>'.$pembeli.' memiliki uang :';
    echo '<br>-nominal '.$bayar[0][1].' sebanyak '.$bayar[0][0].' lembar';
    echo '<br>-nominal '.$bayar[1][1].' sebanyak '.$bayar[1][0].' lembar';
    echo '<br>-nominal '.$bayar[2][1].' sebanyak '.$bayar[2][0].' lembar';
    $total_pembayaran=$bayar[0][1]*$bayar[0][0]+$bayar[1][1]*$bayar[1][0]+$bayar[2][1]*$bayar[2][0];
    echo '<br>Total uang '.$pembeli.' adalah '.$total_pembayaran;
    echo '<br>Total jumlah uang '.$pembeli.' dikurangi harga beli adalah '.$total_pembayaran.' - '.$harga.' = '.$total_pembayaran-$harga;
  }

}
$pembeli = 'Setyo';
$bayar = [[4, 5000],[3,10000],[5,20000]];
$harga = 55000;
$transaksi = new Transaksi($pembeli, $bayar, $harga);
$transaksi->getJumlahSisa()
?>








