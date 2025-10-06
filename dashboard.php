<?php
session_start();

// Jika belum login, redirect ke login.php
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
  <title>Dashboard - Kebutuhan Kalori</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
</head>
<body>
  <header>
    <div class="nav-right">
      <a href="logout.php" class="btn btn-primary">Logout</a>
    </div>
    <div align="center">
      <img src="kemenkes.png" alt="Logo Kemenkes" width="100">
      <h1>Dashboard Kalori Harian</h1>
      <p>Halo, <b><?= htmlspecialchars($_SESSION['username']); ?></b>!</p>
      <nav>
        <ul>
          <li><a href="#hitungBMR">Hitung BMR</a></li>
          <li><a href="#jenismakanan">Jenis Makanan</a></li>
          <li><a href="#tips">Tips</a></li>
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
            <th>Data</th>
            <th>Input</th>
            <th>Satuan</th>
            <th>Keterangan</th>
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
            <td>Umur</td>
            <td><input type="number" id="age" placeholder="Umur"></td>
            <td>Tahun</td>
            <td>Isi umur Anda</td>
          </tr>
          <tr>
            <td>Tinggi Badan</td>
            <td><input type="number" id="height" placeholder="Tinggi"></td>
            <td>cm</td>
            <td>Isi tinggi badan</td>
          </tr>
          <tr>
            <td>Berat Badan</td>
            <td><input type="number" id="weight" placeholder="Berat"></td>
            <td>kg</td>
            <td>Isi berat badan</td>
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
        <h3>BMR (Basal Metabolic Rate): <span id="bmrResult">---</span> kcal</h3>
        <h3>Kebutuhan Kalori Harian: <span id="calorieResult">---</span> kcal</h3>
      </section>
    </section>

    <section id="jenismakanan" class="card">
      <h2 align="center">Tabel Jenis Makanan dan Kandungan Kalori</h2>
      <table>
        <thead>
          <tr>
            <th>Jenis Makanan</th>
            <th>Contoh</th>
            <th>Kalori (per 100g)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Karbohidrat</td><td>Nasi, roti, pasta, kentang</td><td>130-200 kalori</td></tr>
          <tr><td>Protein</td><td>Daging tanpa lemak, ikan, telur</td><td>100-250 kalori</td></tr>
          <tr><td>Lemak Sehat</td><td>Alpukat, kacang, minyak zaitun</td><td>400-900 kalori</td></tr>
          <tr><td>Sayuran</td><td>Bayam, brokoli, wortel</td><td>20-50 kalori</td></tr>
          <tr><td>Buah-buahan</td><td>Apel, pisang, jeruk</td><td>30-80 kalori</td></tr>
        </tbody>
      </table>
    </section>

    <section id="tips" class="card">
      <h2 align="center">Tips Mengelola Asupan Kalori</h2>
      <p>
        Perlu diingat bahwa kandungan kalori dapat bervariasi tergantung cara pengolahan dan porsi.
        Untuk hasil lebih akurat, periksa label nutrisi.
      </p>
      <p>
        Konsumsi seimbang dari karbohidrat, protein, lemak sehat, sayuran, dan buah sangat penting.
        Perhatikan ukuran porsi agar kalori tidak berlebihan.
      </p>
    </section>
  </main>

  <footer>
    <p>Ayu Azzhahra Alwi 2409106022 | Praktikum PemWeb A1'24</p>
    <a href="https://hellosehat.com/health-tools/kebutuhan-kalori/">© KaloriSehat.com</a>
  </footer>
</body>
</html>
