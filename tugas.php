<?php

class makanan{
    private $nama;
    private $harga;
    private $banyak;


public function setNama($nama){
    echo "Nama makanan ini adalah ".$this->$nama=$nama;
}
public function setHarga($harga){
    echo "harganya ".$this->$harga=$harga;
}
public function setBanyak($banyak){
    echo "banyaknya ".$this->$banyak=$banyak;
}

public function getNama(){
    return $this->nama;
}
public function getHarga(){
    return $this->harga;
}
public function getBanyak(){
    return $this->banyak;
}
}
$makanan = new makanan();
$makanan->setNama("cilok");
echo "<br>";
$makanan->setHarga("10k per porsi");
echo "<br>";
$makanan->setBanyak("5 biji");
?>