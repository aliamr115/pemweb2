<?php

class Buku {
    public $kode_buku = "B001";
    public $judul_buku = "Pemrogram Web";
    public $penulis = "Alia";
    public $tahun_terbit = 2020;

        public function tampilkanData()
    {
        echo "Kode Buku : " . $this->kode_buku . "<br>";
        echo "Judul Buku : " . $this->judul_buku . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Tahun Terbit : " . $this->tahun_terbit . "<br>";
    }
}
    $buku = new Buku();
        $buku->kode_buku = "B001";
        $buku->judul_buku = "Pemrogram Web";
        $buku->penulis = "Alia";
        $buku->tahun_terbit = 2020;

    $buku->tampilkanData();
    
?>