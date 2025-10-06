<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Kalori Seimbang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="dashboard-header">
  <div class="nav-container">
    <div class="logo">
      <img src="kemenkes.png" alt="Logo Kemenkes" width="60">
      <h1>Kalori Seimbang</h1>
    </div>

    <nav class="nav-menu">
      <ul>
        <li><a href="login.php">Hitung BMR</a></li>
        <li><a href="#jenismakanan">Jenis Makanan</a></li>
        <li><a href="#tips">Tips</a></li>
      </ul>
    </nav>

    <div class="nav-right">
      <?php if (isset($_SESSION['username'])): ?>
        <span class="username">👋 <?= htmlspecialchars($_SESSION['username']); ?></span>
        <a href="logout.php" class="btn btn-primary logout-btn">Logout</a>
      <?php else: ?>
        <a href="login.php" class="btn btn-primary login-btn">Login</a>
      <?php endif; ?>
    </div>
  </div>
</header>

<main>
  <section id="jenismakanan">
    <div align="center">
      <h2>Jenis Makanan dan Kandungan Kalori</h2>
      <table border="1" cellpadding="5" cellspacing="0">
        <thead>
          <tr>
            <th>Jenis Makanan</th>
            <th>Contoh</th>
            <th>Kalori (per 100g)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Karbohidrat</td><td>Nasi, roti, pasta, kentang</td><td>130-200</td></tr>
          <tr><td>Protein</td><td>Daging, ikan, telur, kacang</td><td>100-250</td></tr>
          <tr><td>Lemak Sehat</td><td>Alpukat, kacang, minyak zaitun</td><td>400-900</td></tr>
          <tr><td>Sayuran</td><td>Bayam, brokoli, wortel</td><td>20-50</td></tr>
          <tr><td>Buah</td><td>Apel, pisang, jeruk, beri</td><td>30-80</td></tr>
        </tbody>
      </table>
    </div>
  </section>

  <section id="tips">
    <div class="tips-container">
      <h2>Tips Mengelola Asupan Kalori</h2>
      <p>Perhatikan variasi makanan, porsi makan, dan aktivitas harian untuk menjaga keseimbangan energi tubuh.</p>
      <p>Selalu periksa label nutrisi dan pilih metode memasak yang sehat seperti kukus, rebus, atau panggang.</p>
    </div>
  </section>
</main>

  <footer>
    <p>Ayu Azzhahra Alwi 2409106022 | Praktikum PemWeb A1'24</p>
    <a href="https://hellosehat.com/health-tools/kebutuhan-kalori/">© KaloriSehat.com</a>
  </footer>
</body>
</html>
