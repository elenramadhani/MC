    <!-- PHP untuk Menampilkan Data yang Dikirim -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Ambil data dari form
        $name = htmlspecialchars($_POST['Nama']);
        $deskripsi = htmlspecialchars($_POST['Deskripsi']);
        $harga = htmlspecialchars($_POST['Harga']);
        $kategori = htmlspecialchars($_POST['Kategori']);
        $foto = htmlspecialchars($_POST['Foto']);

        // Tampilkan data
        echo "<p><strong>Nama:</strong> $name</p>";
        echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
        echo "<p><strong>Harga:</strong> $harga</p>";
        echo "<p><strong>Kategori:</strong> $kategori</p>";
        echo "<p><strong>foto:</strong> $foto</p>";
      
    }
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Admin</title>
</head>
<body>
<style>
    body {
        background-color: darkred;
    }
</style>
    <div class="container mt-5">
        <h2 class="text-light">Form Admin</h2>
        <form>
            <div class="form-group">
                <label for="name" class="text-light" >Nama Menu</label>
                <input type="text" class="form-control" id="Name" placeholder="Masukkan menu">
            </div>
            <div class="form-group"> 
                <label for="deskripsi" class="text-light" name="deskripsi" >Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" placeholder="Masukkan deskripsi">
            </div>
            <div class="form-group">
                <label for="harga" class="text-light" >Harga</label>
                <input type="number" class="form-control" id="harga" placeholder="Masukkan harga">
            </div>

            <div class="form-group">
                <label for="kategori" class="text-light" >Id Kategori</label>
                <select class="form-control" id="kategori">
                    <option value="">Pilih Id Kategori</option>
                    <option value="male">Burger</option>
                    <option value="female">Chicken Krispy</option>
                    <option value="other">Drink</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto" class="text-light" class="form-label">foto :</label>
                <input type="file" class="form-control" name="" id=""> </br>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
