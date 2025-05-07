<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Ujian</title>
</head>
<body>
    <h2>Form Ujian</h2>
    

    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="nilai">Nilai Ujian:</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Mengambil data dari form
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nilai = $_POST['nilai'];

        // Menampilkan informasi pengguna
        echo "<h3>Hasil:</h3>";
        echo "Nama: $nama <br>";
        echo "Email: $email <br>";
        echo "Nilai Ujian: $nilai <br>";

        // Struktur kendali untuk menentukan kelulusan
        if ($nilai > 70) {
            echo "<p>Status: Lulus</p>";
        } else {
            echo "<p>Status: Remedial</p>";
        }
    }
    ?>

</body>
</html>
