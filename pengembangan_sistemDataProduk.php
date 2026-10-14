<?php  

class Produk  
{  
    public $kode;  
    public $nama;  
    public $harga;  
    public $stok; 
    public $diskon;  
  
    // Constructor  
    public function __construct($kode, $nama, $harga, $stok, $diskon)  
    {  
        $this->kode = $kode;  
        $this->nama = $nama;  
        $this->harga = $harga;  
        $this->stok = $stok; 
        $this->diskon = $diskon;  
    }  
  
    // Method menampilkan data  
    public function tampilkanData()  
    {  
        echo "Kode Produk : " . $this->kode . "<br>";  
        echo "Nama Produk : " . $this->nama . "<br>";  
        echo "Harga       : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";  
        echo "Stok        : " . $this->stok . "<br>";  
        echo "Diskon      : " . $this->diskon . "%<br>"; 
        echo "Harga Setelah Diskon : Rp " . number_format($this->hitungHargaDiskon(), 0, ',', '.') . "<br>"; 
        echo "Nilai Stok  : Rp " . number_format($this->hitungNilaiStok(), 0, ',', '.') . "<br><br>";  
    }  
  
    // Method menghitung harga setelah diskon 
    public function hitungHargaDiskon() 
    { 
        return $this->harga - ($this->harga * $this->diskon / 100); 
    } 
 
    // Method menghitung nilai stok  
    public function hitungNilaiStok()  
    {  
        return $this->hitungHargaDiskon() * $this->stok;  
    }  
}  
  
// Membuat object  
$produk1 = new Produk("P001", "Laptop", 7000000, 10, 10);  
$produk2 = new Produk("P002", "Mouse", 150000, 25, 5);  
  
// Judul
echo "<h2>=====Data Produk=====</h2>";

// Menampilkan data produk 1
echo "<b>Produk 1</b><br>";
$produk1->tampilkanData();

echo "==============================<br><br>";

// Menampilkan data produk 2
echo "<b>Produk 2</b><br>";
$produk2->tampilkanData();  
  
?>