<?php
class Produk {
  private $nama;
  private $menu;

  public function __construct($nama, $menu){
    $this->nama=$nama;
    $this->menu=$menu;
  }

  public function getMenu(){
    echo "$this->nama<br>";
    for ($i = 1; $i <= $this->menu; $i++){ 
        echo "$i. Menu $this->nama $i<br>";
    }  
  }
}

$makanan = new Produk("Makanan", 3);
$minuman = new Produk("Minuman", 3);
$parsel = new Produk("Parsel", 3);
$makanan->getMenu();
$minuman->getMenu();
$parsel->getMenu();

?>