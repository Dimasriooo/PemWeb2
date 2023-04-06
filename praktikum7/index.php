<?php
     
class Tes{
    public $nama,
           $merk,
           $warna;
    public function tambahkecepatan(){

    }       

    public function kurangikecepatan(){

    }
}     


class Produk{
    public $nama = 'ini nama',
           $jenis = 'ini janis',
           $harga = '9999';
           const PHI = 3.14;
    
    public function __construct($nama, $jenis, $harga){
      $this->nama = $nama;
      $this->jenis = $jenis;
      $this->harga = $harga;
    }



    public function Harga(){
        return self :: PHI;
    }        

}

// $produk1 = new Produk();
// $produk1->nama = "KAOS";
// $produk1->jenis = "BAJU";  
// var_dump($produk1);


$produk2 = new Produk("BAJU HITAM POLOS", "KAOS", 15000);
echo " produk 2 : $produk2->nama, $produk2->jenis";
echo "<br>";
echo "Harga : " . $produk2->Harga();


$produk3 = new Produk("HOODIE HITAM POLOS", "JAKET", 185000);
echo "<br>";
echo " produk 3 : $produk3->nama, $produk3->jenis";
echo "<br>";
echo "produk 3 : " .  $produk3->Harga();

?>