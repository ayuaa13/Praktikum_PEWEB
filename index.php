<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Kalori Seimbang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header-home">
    <div class="nav-container">
      <div class="logo">
        <img src="kemenkes.png" alt="Logo Kemenkes" width="80">
        <h1>Kalori Seimbang</h1>
      </div>
      <div class="nav-right">
        <?php if (isset($_SESSION['username'])): ?>
          <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
          <a href="logout.php" class="btn btn-secondary">Logout</a>
        <?php else: ?>
          <a href="login.php" class="btn btn-primary">Login</a>
        <?php endif; ?>
      </div>
    </div>
  </header>

  <main class="container">
    <section class="card">
      <h2>Selamat Datang di Kalori Seimbang</h2>
      <p>
        Website ini membantu Anda menghitung kebutuhan kalori harian berdasarkan usia, berat badan,
        tinggi badan, dan tingkat aktivitas. Silakan login untuk menggunakan kalkulator BMR.
      </p>
      <p>
        Anda juga dapat melihat berbagai jenis makanan dan tips pola makan sehat.
      </p>
      <br>
      <a href="login.php" class="btn btn-primary">Mulai Sekarang</a>
    </section>
  </main>

  <footer>
    <p>Ayu Azzhahra Alwi 2409106022 | Praktikum PemWeb A1'24</p>
    <a href="https://hellosehat.com/health-tools/kebutuhan-kalori/">© KaloriSehat.com</a>
  </footer>
</body>
</html>
