<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location:manage.php");
    exit();
}
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
            while ($item = $rows->fetch_assoc()) {
            ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $item["nama"]; ?></td>
                <td><?= $item["password"]; ?></td>
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