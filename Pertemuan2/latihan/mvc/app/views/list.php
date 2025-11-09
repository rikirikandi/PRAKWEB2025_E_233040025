<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengguna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Pengguna</h1>
        <!-- Tabel untuk menampilkan daftar semua pengguna -->
        <table class="user-table">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Detail</th>
            </tr>
            <!-- Loop untuk menampilkan setiap pengguna -->
            <?php foreach ($users as $user): ?>
                <tr>
                    <!-- Menampilkan nama dengan sanitasi HTML untuk keamanan -->
                    <td><?php echo htmlspecialchars($user['name']); ?></td>
                    <!-- Menampilkan email dengan sanitasi HTML untuk keamanan -->
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <!-- Link ke halaman detail pengguna berdasarkan ID -->
                    <td><a href="index.php?id=<?php echo $user['id']; ?>" class="btn-small">Detail</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>