<?php
require "koneksi.php";

$sql = "SELECT * FROM data_anak";

$rows = $koneksi->execute_query($sql, []);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posyandu Smkti Airlangga</title>
</head>
<body>
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal lahir</th>
                <th>Alamat Rumah</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($kader = $rows->fetch_assoc()) {
            ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $kader["nama"]; ?></td>
                <td><?= $kader["tanggal_lahir"]; ?></td>
                <td><?= $kader["alamat_rumah"]; ?></td>
                <td><?= $kader["berat_badan"]; ?></td>
                <td><?= $kader["tinggi_badan"]; ?></td>
                <td>
                    <a href="barang-edit.php?id=<?=$kader['id']?>">Edit</a>
                    <a href="barang-hapus.php?id=<?=$kader['id']?>">Hapus</a>
                </td>
            </tr>

            <?php
            $no += 1;
            }
            ?>
        </tbody>
    </table>
</body>
</html>