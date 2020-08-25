<?php
class produk{
    public $namabarang = "Laptop",
            $merk = "Lenovo",
             $harga  = 7000000;
/*      public function sayHello(){
      return "hallo RPL";
    }  */         
    public function getCetak(){
        return "$this->namaBarang, $this->merk, $this->harga";
    }
}

/*$produk1 = new produk();
$produk1->namaBarang="Flashdisk"
var_dump($prodeuk1);
*/

$produk2 = new produk();
$produk2->namaBarang="Mouse";
$produk2->propertyBaru="Biru";
echo "Nama Barang 1: " . $produk2->getCetak();

echo "<br>";

$produk3 = new produk();
$produk3->namaBarang="Flashdisk";
$produk3->merk="Sandisk";
$produk3->harga=1000000;
echo "Nama Barang 2: " . $produk3->getCetak();
?>
