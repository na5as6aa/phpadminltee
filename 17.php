<?php
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari", "Budi", "Tono", "Ani", "Dewi", "Wati", "Bayu");

// contoh akses data
echo $nama[0]; // Natasya
echo "<br>";
echo $nama[3]; // Anggrayni
echo "<br>";

// kalau mau tampilkan semua
foreach($nama as $n) {
    echo $n . "<br>";
}
?>