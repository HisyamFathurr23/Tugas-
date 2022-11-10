<?php

class kendaraan {

    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    function statusHarga(){
        if($this->harga>50000000)
    $stasus ="mahal";
      else $status ="murah";
      return $status;
    }
    
    function setMerek ($x){
        $this->merek = $x;
    }

    function setHarga ($x){
        $this->harga = $x;
    }

    function bacaMerek (){
        return $this->merek;
    }

    function bacaharga (){
        return $this->harga;
    }

}

$kendaraan1 = new kendaraan();
$kendaraan1->setMerek ("Yamaha MIO");
$kendaraan1->setharga (10000000);
echo"harga dari" .$kendaraan1 ->bacaMerek(). " adalah Rp." .$kendaraan1->bacaharga(). "(" .$kendaraan1->statusHarga(). ")";

echo "<br>"

$kendaraan2 = new kendaraan();
$kendaraan2->setMerek ("Motor Bekas yang jelek");
$kendaraan2->setharga (7400000);
echo"harga dari" .$kendaraan2 ->bacaMerek(). " adalah Rp." .$kendaraan2->bacaharga(). "(" .$kendaraan2->statusHarga(). ")";
