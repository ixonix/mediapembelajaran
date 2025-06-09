<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Based Learning </title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <style>
    body {
  font-family: 'Montserrat', sans-serif !important;
}
    @media print {
      .gambar-cetak {
        width: 40% !important;
        height: auto !important;
        display: block;
        margin: 10px auto;
      }
    }
    .bayangan {
      color: #090909;
      padding: 7px;
      /*font-size: 18px; */
      border-radius: 0.5em;
      background: #e8e8e8;
      cursor: pointer;
      border: 1px solid #e8e8e8;
      transition: all 0.3s;
      box-shadow: 6px 6px 12px #c5c5c5, -6px -6px 12px #ffffff;
    }

    .bayangan:active {
      color: #666;
      box-shadow: inset 4px 4px 12px #c5c5c5, inset -4px -4px 12px #ffffff;
    }
    
  </style>
</head>

<body>
  <nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark gbiru px-3 mb-3 fixed-top">
    <div class="container-fluid">
      <div class="d-flex align-items-center gap-2">
        <div class="dropdown">
          <a href="../index.php" class="btn text-white text-decoration-none" style="background-color: #06B6D4; color: white;">🏠 Home</a>
          <button class="btn dropdown-toggle" style="background-color: #06B6D4; color: white;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            📄 Materi
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../materi1/materi1.php">Dasar Informatika</a></li>
            <li><a class="dropdown-item" href="../materi2/materi2.php">Struktur data</a></li>
            <li><a class="dropdown-item" href="../materi3/materi3.php">Validitas sumbaerdata</a></li>
          </ul>
        </div>
      </div>
      <button id="sembunyikan" class="btn btn-warning mx-2" onclick="cetakSemua()">Print</button>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills ms-auto">
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#scrollspyHeading1">Pengertian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#scrollspyHeading2">Fungsi & Contoh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;" href="#scrollspyHeading3">Video</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>