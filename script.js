// Ambil elemen dari DOM
const genderInput = document.querySelector("select:nth-of-type(1)");
const ageInput = document.querySelector("input[placeholder='Umur']");
const heightInput = document.querySelector("input[placeholder='Tinggi']");
const weightInput = document.querySelector("input[placeholder='Berat']");
const activityInput = document.querySelector("select:nth-of-type(2)");
const resultBMR = document.querySelector("section h3:nth-of-type(1)");
const resultCalories = document.querySelector("section h3:nth-of-type(2)");
const calcBtn = document.querySelector(".btn-primary");

// Faktor aktivitas
const activityFactor = {
  "Sedentary": 1.2,
  "Lightly Active": 1.375,
  "Moderately Active": 1.55,
  "Very Active": 1.725,
  "Extra Active": 1.9
};

// Event listener tombol "Hitung Kalori"
calcBtn.addEventListener("click", function () {
  const gender = genderInput.value;
  const age = parseInt(ageInput.value);
  const height = parseInt(heightInput.value);
  const weight = parseInt(weightInput.value);
  const activity = activityInput.value;

  // Validasi input
  if (!gender || gender === "Pilih" || !age || !height || !weight || !activity || activity === "Pilih") {
    alert("⚠️ Harap lengkapi semua data sebelum menghitung!");
    return;
  }

  // Hitung BMR dengan rumus Mifflin-St Jeor
  let bmr;
  if (gender === "Pria") {
    bmr = 88.36 + (13.4 * weight) + (4.8 * height) - (5.7 * age);
  } else if (gender === "Wanita") {
    bmr = 447.6 + (9.2 * weight) + (3.1 * height) - (4.3 * age);
  }

  // Hitung kebutuhan kalori harian
  const dailyCalories = bmr * activityFactor[activity];

  // Tampilkan hasil ke halaman
  resultBMR.textContent = `BMR (Basal Metabolic Rate): ${Math.round(bmr)} kcal`;
  resultCalories.textContent = `Kebutuhan Kalori Harian: ${Math.round(dailyCalories)} kcal`;
});
