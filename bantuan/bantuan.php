<?php
include 'header.php';
?>

<div class="container-fluid min-vh-100 d-flex flex-column align-items-center justify-content-center py-5" style="background-color:#9EC6F3; background-size: cover; background-position: center;">
    <h1 class="animate__animated animate__backInDown text-white mb-4">Bantuan</h1>

    <div class="row w-100 gap-4">
        <div><img src="../img/home.png" class="img-fluid" alt="..."></div>
        <div class="text-white pb-3">Halaman Utama Terdapat 4 menu Yaitu <strong>Evaluasi, Menu Materi, info pengembang website dan Bantuan</strong></div>
    </div>
    <div class="row w-100 gap-4">
        <div><img src="../img/evaluasi.png" class="img-fluid" alt="..."></div>
        <div class="text-white pb-3">Halaman evaluasi Terdapat 3 menu evaluasi <strong>Evaluasi Dasar Informatika, Evaluasi Struktur Data dan Evaluasi Validitas Sumber Data</strong>
            <p>Jika menu ini di klik maka akan membuka <strong>Tab baru menuju quizizz</strong></p>
        </div>
    </div>
    <div class="row w-100 gap-4">
        <div><img src="../img/materi.png" class="img-fluid" alt="..."></div>
        <div class="text-white pb-3">Halaman materi Terdapat 3 menu evaluasi <strong>Manteri Dasar Informatika, Materi Struktur Data dan Materi Validitas Sumber Data</strong>
        </div>
    </div>
    <div class="row w-100 gap-4">
        <div><img src="../img/navbar.png" class="img-fluid" alt="..."></div>
        <div class="text-white pb-3">pada pojok kiri atas terdapat menu dropdown berisikan menu materi jika di klik akan membuka materi tersebut<strong> Jika membuka salah satu materi maka terdapat tombol untuk berpindah ke bagian bagian pada materi pada bagian pojok kanan atas</strong>
        </div>
    </div>
    <div class="row w-100 gap-4">
        <div><img src="../img/mobile.png" class="img-fluid" alt="..."></div>
        <div class="text-white pb-3">Khusus tampiln mobile atau hp pada pojok kanan atas ada 3 strip<strong> Jika diklik akan membuka tombol untuk berpindah ke bagian pada materi</strong>
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