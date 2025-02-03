<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h1>Kalkulator AFY</h1>
    
    
    <form method="POST">
        <label for="angka1">Angka 1:</label>
        <input type="number" name="angka1" id="angka1" required>
        <br><br>
        
        <label for="angka2">Angka 2:</label>
        <input type="number" name="angka2" id="angka2" required>
        <br><br>
        
        <label for="operasi">Pilih Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select>
        <br><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
      
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;
        

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Tidak bisa dibagi dengan 0";
                }
                break;
        }
        
        
        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>
