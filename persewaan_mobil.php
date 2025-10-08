<!DOCTYPE html>
<html>
<head>
    <title>Persewaan Mobil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f0fe;
            text-align: center;
            padding: 20px;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 60%;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
        }
        select, input[type=number], input[type=submit] {
            padding: 8px;
            margin: 5px;
        }
        .hasil {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

<h2>Persewaan Mobil</h2>

<form method="post">
    <label>Pilih Jenis Mobil:</label>
    <select name="mobil" required>
        <option value="">-- Pilih Mobil --</option>
        <option value="Avanza">Avanza</option>
        <option value="Xenia">Xenia</option>
        <option value="Innova">Innova</option>
        <option value="Alphard">Alphard</option>
        <option value="Fortuner">Fortuner</option>
    </select><br>

    <label>Lama Sewa (hari):</label>
    <input type="number" name="hari" min="1" required><br>

    <input type="submit" name="hitung" value="Hitung Biaya">
</form>

<table>
    <tr>
        <th>Jenis Mobil</th>
        <th>Biaya Sewa/Hari</th>
        <th>Biaya Asuransi</th>
    </tr>
    <tr><td>Avanza</td><td>300.000</td><td>15.000</td></tr>
    <tr><td>Xenia</td><td>300.000</td><td>15.000</td></tr>
    <tr><td>Innova</td><td>500.000</td><td>25.000</td></tr>
    <tr><td>Alphard</td><td>750.000</td><td>30.000</td></tr>
    <tr><td>Fortuner</td><td>700.000</td><td>25.000</td></tr>
</table>

<?php
if (isset($_POST['hitung'])) {
    $mobil = $_POST['mobil'];
    $hari = $_POST['hari'];

    switch ($mobil) {
        case "Avanza":
        case "Xenia":
            $sewa = 300000;
            $asuransi = 15000;
            break;
        case "Innova":
            $sewa = 500000;
            $asuransi = 25000;
            break;
        case "Alphard":
            $sewa = 750000;
            $asuransi = 30000;
            break;
        case "Fortuner":
            $sewa = 700000;
            $asuransi = 25000;
            break;
        default:
            $sewa = 0;
            $asuransi = 0;
            break;
    }

    $total = ($sewa * $hari) + $asuransi;

    echo "<div class='hasil'>";
    echo "Mobil yang disewa: <b>$mobil</b><br>";
    echo "Lama sewa: <b>$hari hari</b><br>";
    echo "Biaya sewa per hari: Rp " . number_format($sewa, 0, ',', '.') . "<br>";
    echo "Biaya asuransi: Rp " . number_format($asuransi, 0, ',', '.') . "<br>";
    echo "<hr>Total biaya sewa: <b>Rp " . number_format($total, 0, ',', '.') . "</b>";
    echo "</div>";
}
?>

</body>
</html>
