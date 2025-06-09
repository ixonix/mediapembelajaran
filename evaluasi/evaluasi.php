<?php
include 'header.php';
?>

<div class="container-fluid min-vh-100 d-flex flex-column align-items-center justify-content-center py-5" style="background-color:#9EC6F3; background-size: cover; background-position: center;">
  <h1 class="animate__animated animate__backInDown text-white mb-4">Evaluasi</h1>

  <div class="row justify-content-center w-100 gap-4">
    <div class="card shadow1 p-0 animate__animated animate__fadeInLeft" style="width: 100%; max-width: 40rem; min-height: 300px;">
      <img src="../img/informatika.jpg" class="card-img-top" style="height: 150px; object-fit: cover;" alt="...">
      <div class="card-body d-flex flex-column justify-content-between" style="background-color: #e8e8e8;">
        <h5 class="card-title">Evaluasi Dasar Informatika</h5>
        <p class="card-text mt-auto">
          <a href="https://quizizz.com/join?gc=14205900" target="_blank" rel="noopener noreferrer" class="bayangan text-black text-decoration-none">▶️ Mulai</a>
        </p>
      </div>
    </div>

    <div class="card shadow1 p-0 animate__animated animate__fadeInRight" style="width: 100%; max-width: 40rem; min-height: 300px;">
      <img src="../img/strukturdata.jpg" class="card-img-top" style="height: 150px; object-fit: cover;" alt="...">
      <div class="card-body d-flex flex-column justify-content-between" style="background-color: #e8e8e8;">
        <h5 class="card-title">Evaluasi Struktur Data</h5>
        <p class="card-text mt-auto">
          <a href="https://quizizz.com/join?gc=20235212" target="_blank" rel="noopener noreferrer" class="bayangan text-black text-decoration-none">▶️ Mulai</a>
        </p>
      </div>
    </div>

    <div class="card shadow1 p-0 animate__animated animate__backInUp" style="width: 100%; max-width: 40rem; min-height: 300px;">
      <img src="../img/validitas.jpg" class="card-img-top" style="height: 150px; object-fit: cover;" alt="...">
      <div class="card-body d-flex flex-column justify-content-between" style="background-color: #e8e8e8;">
        <h5 class="card-title">Evaluasi Validitas Sumber Data</h5>
        <p class="card-text mt-auto">
          <a href="https://quizizz.com/join?gc=07128012" target="_blank" rel="noopener noreferrer" class="bayangan text-black text-decoration-none">▶️ Mulai</a>
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  window.onload = function() {
    document.getElementById("sembunyikan").style.display = "none";
  };
</script>

<?php
include 'footer.php';
?>
