<?php include 'header.php'; ?>

<div class="container-fluid min-vh-100 d-flex flex-column align-items-center"
     style="background-color:#9EC6F3; background-size: cover; background-position: center; padding-top: 100px;">

  <h1 class="animate__animated animate__backInDown text-white text-center mb-4">
    Informasi Pengembang Website
  </h1>

  <div class="card shadow1 mb-5 animate__animated animate__backInUp" style="width: 18rem; background-color: #e8e8e8;">
    <img src="../img/pengembang.jpg" class="card-img-top img-fluid"
         style="height: 250px; object-fit: contain;" alt="Foto Pengembang">
    <div class="card-body text-center">
      <p><strong>Nama :</strong></p>
      <p>Mohammad Mahandhika Sultan Romadhon</p>
      <p><strong>Universitas :</strong></p>
      <p>Universitas Bhinneka PGRI Tulungagung</p>
      <a href="../index.php" class="bayangan text-black text-decoration-none">🏠 Home</a>
    </div>
  </div>

</div>

<script>
  window.onload = function() {
    var btn = document.getElementById("sembunyikan");
    if (btn) btn.style.display = "none";
  };
</script>

<?php include 'footer.php'; ?>
