<?php
require 'config.php';
$result = $conn->query("SELECT * FROM submissions ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pengumpulan Tugas</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h2>📋 Daftar Tugas yang Sudah Dikumpulkan</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Mata Kuliah</th>
            <th>Status</th>
            <th>Waktu</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['class'] ?></td>
            <td><?= $row['course'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['submitted_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">⬅ Kembali ke Form Upload</a>
</body>
</html>