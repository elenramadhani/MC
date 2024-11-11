<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kalkulator</title>
    <link rel="stylesheet" href="style.css">
    <body>
        <!-- form -->
    <form method="post" action="">
        <div class="form-grup">
            <label>Masukkan Nama Anda:</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-grup">
            <label>Masukkan Harga Barang1:</label>
            <input type="number" name="barang1" required>
        </div>
        <div class="form-grup">
            <label>Masukkan Harga Barang2:</label>
            <input type="number" name="barang2" required>
        </div>
        <div class="form-grup">
            <label>Masukkan Harga Barang3:</label> 
            <input type="number" name="barang3" required>
        </div>
        <div class="form-grup">
            <label>Masukkan Harga Barang4:</label>
            <input type="number" name="barang4" required>
        </div>
        <input type="submit" name="hitung" value="Hitung Belanja">
    </form>

    <?php
    if(isset( $_POST["hitung"])){
        $namaPembeli = $_POST["nama"];
        $barang1 = $_POST["barang1"];
        $barang2 = $_POST["barang2"];
        $barang3 = $_POST["barang3"];
        $barang4 = $_POST["barang4"];
        
        $totalKeseluruhan = $barang1 + $barang2 + $barang3 + $barang4;

        // Menambahkan diskon (misalnya diskon 10%)
        $diskonPersen = 10; // Diskon dalam persen
        $diskon = ($totalKeseluruhan * $diskonPersen) / 100;
        $totalSetelahDiskon = $totalKeseluruhan - $diskon;

        // Menampilkan hasil
        echo "barang1: Rp " . number_format($barang1, 0, ',', '.') . "<br>";
        echo "barang2: Rp " . number_format($barang2, 0, ',', '.') . "<br>";
        echo "barang3: Rp " . number_format($barang3, 0, ',', '.') . "<br>";
        echo "barang4: Rp " . number_format($barang4, 0, ',', '.') . "<br>";
        echo "Total keseluruhan: Rp " . number_format($totalKeseluruhan, 0, ',', '.') . "<br>";
        echo "Diskon ($diskonPersen%): Rp " . number_format($diskon, 0, ',', '.') . "<br>";
        echo "Total setelah diskon: Rp " . number_format($totalSetelahDiskon, 0, ',', '.');
    }

    ?>
  
    </body>
</head>
</html>