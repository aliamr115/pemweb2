<?php

class Produk
{
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    // Constructor
    public function __construct($kode, $nama, $harga, $stok)
    {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method menampilkan data
    public function tampilkanData()
    {
        echo "Kode Produk : " . $this->kode . "<br>";
        echo "Nama Produk : " . $this->nama . "<br>";
        echo "Harga       : Rp " . $this->harga . "<br>";
        echo "Stok        : " . $this->stok . "<br><br>";
    }
}

// Membuat object menggunakan constructor
$produk1 = new Produk(
    "P001",
    "Laptop",
    7000000,
    10
);

$produk2 = new Produk(
    "P002",
    "Mouse",
    150000,
    25
);

// Menampilkan data
$produk1->tampilkanData();
$produk2->tampilkanData();

?>