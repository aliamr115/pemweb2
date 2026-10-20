<?php 
//getter untuk mengambil atau membaca nilai property private
class Mahasiswa {

    private $nama;

    public function getNama() {
        return $this->nama;
    }
}
$mhs1 = new Mahasiswa();
    echo $mhs1->getNama();
    
?>