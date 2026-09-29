<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

   public function tampilkanData(){
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Semester : " . $this->semester . "<br><br>"; 
    }
}
    $mhs1 = new Mahasiswa(); //membuat objek kedua

    $mhs1->nim = "23002";
    $mhs1->nama = "Budi";
    $mhs1->prodi = "Sistem Informasi";
    $mhs1->semester = 2;

    $mhs1->tampilkanData();
?>
