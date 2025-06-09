<?php
include 'header.php';
?>

<div class="container-fluid min-vh-100 d-flex flex-column align-items-center justify-content-center" style="background-color:#9EC6F3; background-size: cover; background-position: center; ">
  <h1 class="animate__animated animate__backInDown text-white">Media Pembelajaran Informatika</h1>
  <!-- <a class="btn btn-primary text-white text-decoration-none" href="../web/materi1/materi1.php">Mulai Materi Pertama</a> -->
  <div class="d-flex justify-content-center mt-5 gap-4 flex-wrap">
    <div class="card shadow1 animate__animated animate__backInUp" style="width: 13rem;">
      <img src="../web/img/assessment.png" class="card-img-top img-fluid" style="background-color: #e8e8e8;" alt="...">
      <div class="card-body d-flex justify-content-center" style="background-color: #e8e8e8;">
        <a class="bayangan text-black text-decoration-none" href="../web/evaluasi/evaluasi.php">Evaluasi</a>
      </div>
    </div>

    <div class="card shadow1 animate__animated animate__backInDown" style="width: 13rem;">
      <img src="../web/img/book.png" class="card-img-top img-fluid" style="background-color: #e8e8e8;" alt="...">
      <div class="card-body d-flex justify-content-center" style="background-color: #e8e8e8;">
        <a class="bayangan text-black text-decoration-none" href="../web/menumateri/index.php">Menu Materi</a>
      </div>
    </div>

    <div class="card shadow1 animate__animated animate__backInUp" style="width: 13rem;">
      <img src="../web/img/profile.png" class="card-img-top img-fluid" style="background-color: #e8e8e8;" alt="...">
      <div class="card-body d-flex justify-content-center" style="background-color: #e8e8e8;">
        <a class="bayangan text-black text-decoration-none" href="../web/info/info.php">Info Pengembang</a>
      </div>
    </div>

    <div class="card shadow1 animate__animated animate__backInDown" style="width: 13rem;">
      <img src="../web/img/help.png" class="card-img-top img-fluid" style="background-color: #e8e8e8;" alt="...">
      <div class="card-body d-flex justify-content-center" style="background-color: #e8e8e8;">
        <a class="bayangan text-black text-decoration-none" href="../web/bantuan/bantuan.php">Bantuan</a>
      </div>
    </div>
    <div class="card shadow1 animate__animated animate__backInUp" style="width: 13rem;">
      <img src="../web/img/Googleform.png" class="card-img-top img-fluid" style="background-color: #e8e8e8;" alt="...">
      <div class="card-body d-flex justify-content-center" style="background-color: #e8e8e8;">
        <a class="bayangan text-black text-decoration-none" target="_blank" rel="noopener noreferrer" href="https://docs.google.com/forms/d/e/1FAIpQLSds2K93R0s2vvRNVbViqbb3dAsBS9kRciWCizfex_K1gO-rrA/viewform?usp=dialog">Angket</a>
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