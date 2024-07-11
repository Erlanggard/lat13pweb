<?php
session_start();

if(isset($_SESSION['views'])) {
    $_SESSION['views']++;
} else {
    $_SESSION['views'] = 1;
}

echo "Nama: " . $_SESSION['nama'] . "<br>";
echo "Nilai di session: " . $_SESSION['views'] . "<br>";
echo '<a href="main.php">Lihat session</a>';
?>
