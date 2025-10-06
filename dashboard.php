<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php?msg=not_logged_in");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Kalori Seimbang</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
</head>
<body>
  <header>
    <div align="center">
      <img src="kemenkes.png" alt="Logo Kemenkes" width="100">
      <h1>Dashboard Kalori Harian</h1>
      <p>Halo, <b><?= htmlspecialchars($_SESSION['username']); ?></b>!</p>
      <nav>
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="#hitungBMR">Hitung BMR</a></li>
          <li><a href="#jenismakanan">Jenis Makanan</a></li>
          <li><a href="#tips">Tips</a></li>
          <li><a href="logout.php" class="btn btn-primary">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">
    <section id="hitungBMR" class="card">
      <h2 align="center">Kalkulator Kebutuhan Kalori</h2>
      <table border="1" align="center" cellpadding="5" cellspacing="0">
        <thead>
          <tr>
            <th>Data</th><th>Input</th><th>Satuan</th><th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Jenis Kelamin</td>
            <td>
              <select id="gender">
                <option>Pilih</option>
                <option>Pria</option>
                <option>Wanita</option>
              </select>
            </td>
            <td>-</td>
            <td>Pilih salah satu</td>
          </tr>
          <tr>
            <td>Umur</td><td><input type="number" id="age" placeholder="Umur"></td>
            <td>Tahun</td><td>Isi umur Anda</td>
          </tr>
          <tr>
            <td>Tinggi Badan</td><td><input type="number" id="height" placeholder="Tinggi"></td>
            <td>cm</td><td>Isi tinggi badan</td>
          </tr>
          <tr>
            <td>Berat Badan</td><td><input type="number" id="weight" placeholder="Berat"></td>
            <td>kg</td><td>Isi berat badan</td>
          </tr>
          <tr>
            <td>Aktivitas</td>
            <td>
              <select id="activity">
                <option>Pilih</option>
                <option>Sedentary</option>
                <option>Lightly Active</option>
                <option>Moderately Active</option>
                <option>Very Active</option>
                <option>Extra Active</option>
              </select>
            </td>
            <td>-</td>
            <td>Tingkat aktivitas harian</td>
          </tr>
        </tbody>
      </table>

      <p align="center">
        <button type="button" id="calculateBtn" class="btn btn-primary">Hitung Kalori</button>
      </p>

      <section align="center">
        <h3>BMR: <span id="bmrResult">---</span> kcal</h3>
        <h3>Kebutuhan Harian: <span id="calorieResult">---</span> kcal</h3>
      </section>
    </section>
  </main>

  <footer>
    <p>Ayu Azzhahra Alwi 2409106022 | Praktikum PemWeb A1'24</p>
    <a href="https://hellosehat.com/health-tools/kebutuhan-kalori/">© KaloriSehat.com</a>
  </footer>
</body>
</html>
