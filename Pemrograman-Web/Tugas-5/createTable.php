<?php
include "koneksi.php"; // Menghubungkan ke file koneksi

// Membuat query SQL untuk membuat tabel identitas
$sql = "CREATE TABLE identitas (
    npm VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(40) NOT NULL,
    alamat VARCHAR(100) NOT NULL,
    jk CHAR(1) NOT NULL,
    tgl_lahir DATE,
    email VARCHAR(50)
)";

// Mengeksekusi query dan memeriksa hasilnya
if ($conn->query($sql) === TRUE) {
    echo "Table identitas created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close(); // Menutup koneksi ke database
?>
