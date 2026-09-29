<?php

// ==========================================
// CLASS KENDARAAN
// ==========================================

class Kendaraan
{
    // Property
    public $nomor;
    public $merk;
    public $jenis;

    // Method 1
    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
    }

    // Method 2
    public function statusKendaraan()
    {
        return "Tersedia";
    }
}

// ==========================================
// CLASS PELANGGAN
// ==========================================

class Pelanggan
{
    // Property
    public $id;
    public $nama;
    public $alamat;

    // Method 1
    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    // Method 2
    public function sewaKendaraan()
    {
        return "Kendaraan berhasil disewa";
    }
}

$kendaraan1 = new Kendaraan();
    $kendaraan1->nomor = "K001";
    $kendaraan1->merk = "Toyota Avanza";
    $kendaraan1->jenis = "Mobil";

$kendaraan2 = new Kendaraan();
    $kendaraan2->nomor = "K002";
    $kendaraan2->merk = "Honda Vario";
    $kendaraan2->jenis = "Motor";

$pelanggan1 = new Pelanggan();
    $pelanggan1->id = "P001";
    $pelanggan1->nama = "Andi";
    $pelanggan1->alamat = "Mojosari";

$pelanggan2 = new Pelanggan();
    $pelanggan2->id = "P002";
    $pelanggan2->nama = "Budi";
    $pelanggan2->alamat = "Mojokerto";

echo "<h1>SISTEM RENTAL KENDARAAN</h1>";

echo "<h2>Kendaraan 1</h2>";
$kendaraan1->tampilkanData();
echo "Status : " . $kendaraan1->statusKendaraan()."<br>";


echo "<h2>Kendaraan 2</h2>";
$kendaraan2->tampilkanData();
echo "Status : " . $kendaraan2->statusKendaraan()."<br>";


echo "<h2>Pelanggan 1</h2>";
$pelanggan1->tampilkanData();
echo "Status : " . $pelanggan1->sewaKendaraan()."<br>";


echo "<h2>Pelanggan 2</h2>";
$pelanggan2->tampilkanData();
echo "Status : " . $pelanggan2->sewaKendaraan()."<br>";

?>