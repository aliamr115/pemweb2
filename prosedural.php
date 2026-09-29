<?php
$nim = "123";
$nama = "Alia";
$prodi = "Sistem Informasi";
$semester = "I";

function tampilkanData($nim, $nama, $prodi, $semester) {
    echo "NIM : " . $nim . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Prodi : " . $prodi . "<br>";
    echo "Semester : " . $semester . "<br>";
}

tampilkanData($nim, $nama, $prodi, $semester);

?>