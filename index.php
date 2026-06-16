<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $course = $_POST['course'];
    
    $stmt = $conn->prepare("INSERT INTO submissions (nim, name, class, course, status) VALUES (?, ?, ?, ?, 'Submitted')");
    $stmt->bind_param("ssss", $nim, $name, $class, $course);
    
    if ($stmt->execute()) {
        echo "<h3>✅ Tugas berhasil dikumpulkan!</h3>";
        echo "<a href='task-list.php'>Lihat daftar tugas</a>";
    } else {
        echo "<h3>❌ Gagal menyimpan: " . $conn->error . "</h3>";
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PraktikumSubmit - Kumpulkan Tugas</title>
    <style>
        body { font-family: Arial; margin: 50px; }
        input, button { padding: 8px; margin: 5px 0; width: 250px; }
        button { background: blue; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>
    <h2>📚 Form Pengumpulan Tugas</h2>
    <form method="POST">
        <label>NIM:</label><br>
        <input type="text" name="nim" required><br>
        
        <label>Nama:</label><br>
        <input type="text" name="name" required><br>
        
        <label>Kelas:</label><br>
        <input type="text" name="class" required><br>
        
        <label>Mata Kuliah:</label><br>
        <input type="text" name="course" required><br><br>
        
        <button type="submit">📤 Kumpulkan</button>
    </form>
</body>
</html>