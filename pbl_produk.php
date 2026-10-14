<?php

class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkanData() {
        echo "Kode Produk: " . $this->kode . "<br>";
        echo "Nama Produk: " . $this->nama . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "Stok: " . $this->stok . "<br>";
    }
}

$produk1 = new Produk(
    "P001",
    "Laptop",
    10000000,
    5
);

$produk2 = new Produk(
    "P002",
    "Smartphone",
    5000000,
    10
);
$produk1->tampilkanData();
$produk2->tampilkanData();
?>