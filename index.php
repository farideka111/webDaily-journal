<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
    crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#article">Article</a></li>
            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="#profile">Profile</a></li>
            <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="log.php" target="_blank">Login</a></li>
          </ul>
          <button id="tombol-Gelap" class="btn btn-warning"><i class="bi bi-moon-fill"></i></button>
          <button id="tombol-Terang" class="btn btn-secondary"><i class="bi bi-sun-fill"></i></button>
        </div>
      </div>
    </nav>
    <!-- nav end -->
    
    <!-- hero begin -->
    <section id="hero" class="change text-center p-5 bg-warning-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/gunung.jpg" class="img-fluid" width="300">
          <div>
            <h1 class="fw-bold display-4 ">LANGKAH KAKI YANG TERCATAT</h1>
            <h4 class="lead display-6 ">Lembar demi lembar digital ini adalah arsip emosi dan pelajaran, yang merangkai benang-benang hari kemarin menjadi kebijaksanaan hari ini.</h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
      <!-- PROFILE -->
    <section id="profile" class="change p-5 bg-warning-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 text-center pb-3">Profil Mahasiswa</h1>
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
          <img src="img/pas.jpeg" class="rounded-circle mb-3 mb-md-0 me-md-4" width="180" height="180" alt="Foto Profil">
          <div class="card change-a text-center text-md-start" style="max-width: 700px;">
            <div class="card-body">
              <h5 class="card-title fw-bold">Farid Eka Maulana</h5>
              <p class="card-text mb-1"><strong>NIM:</strong> A11.2024.16081</p>
              <p class="card-text mb-1"><strong>Program Studi:</strong> Teknik Informatika</p>
              <p class="card-text mb-1"><strong>Email:</strong> faridekamaulana111@gmail.com</p>
              <p class="card-text mb-3"><strong>Telepon:</strong> +62 83151325168</p>
              <p class="card-text"><strong>Alamat:</strong> Derekan kec.Pringapus kab.Semarang</p>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- SCHEDULE -->
      
    <section id="schedule" class="change text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3 text-start">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
        

        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
         <div class="col">
            <div class="schedule-card">
              <div class="schedule-header bg-primary text-white">Senin</div>
              <div class="p-3 bg-white text-start">
                <div class="fw-bold text-black">09:00 - 12:00</div>
                <div class="text-black">Rekayasa Perangkat Lunak</div>
                <div class="text-muted">Ruang H.5.4</div>
                <div class="fw-bold text-black">12:30 - 15:00</div>
                <div class="text-black">Logika informatika</div>
                <div class="text-muted">Ruang H.5.2</div>    
              </div>
            </div>
          </div>

          <div class="col">
            <div class="schedule-card">
              <div class="schedule-header bg-success text-white">Selasa</div>
              <div class="p-3 bg-white text-start">
                <div class="fw-bold text-black">08:00 - 10:20</div>
                <div class="text-black">Technopreneur</div>
                <div class="text-muted">Ruang H.4.3</div>
                <div class="fw-bold text-black">16:20 - 18:00</div>
                <div class="text-black">Pendidikan Kewarganegaraan</div>
                <div class="text-muted">Ruang E.3</div>
              </div>
            </div>
          </div>

           <div class="col">
            <div class="schedule-card">
              <div class="schedule-header bg-success text-white">Rabu</div>
              <div class="p-3 bg-white text-start">
                <div class="fw-bold text-black">07:00 - 09:00</div>
                <div class="text-black">Sistem Operasi</div>
                <div class="text-muted">Ruang H.4.3</div>
                <div class="fw-bold text-black">10:20 - 12:00</div>
                <div class="text-black">Pemograman Berbasis Web</div>
                <div class="text-muted">Ruang D.2.J</div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="schedule-card">
              <div class="schedule-header bg-warning text-dark">Kamis</div>
              <div class="p-3 bg-white text-start">
                <div class="fw-bold text-black">07:00 - 08:40</div>
                <div class="text-black">Basis Data</div>
                <div class="text-muted">Ruang H.5.2</div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="schedule-card">
              <div class="schedule-header bg-info text-dark">Jumat</div>
              <div class="p-3 bg-white text-start">
                <div class="fw-bold text-black">10:20 - 12.00</div>
                <div class="text-black">Basis Data</div>
                <div class="text-muted">Ruang D.2.D</div>
                <div class="fw-bold text">12:30 - 15.00</div>
                <div class="text-black">Probabilitas dan statistik</div>
                <div class="text-muted">Ruang H.3.2</div>
              </div>
            </div>
          </div>

                    <div class="col">
            <div class="schedule-card">
              <div class="schedule-header bg-info text-dark">Sabtu</div>
              <div class="p-3 bg-white text-start">
                <div class="fw-bold text-black">08:00 - 12.00</div>
                <div class="text-black">Latihan Badminton</div>
                <div class="text-muted">Gor Tunggal Mas</div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>

    <!-- gallery begin -->
  <!-- gallery begin -->
     <section id="gallery" class="change text-center p-5 bg-warning-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <?php
        $sql_g = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil_g = $conn->query($sql_g);
        if ($hasil_g->num_rows > 0) {
        ?>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
            $no = 1;
            while ($row_g = $hasil_g->fetch_assoc()) {
                $active = ($no == 1) ? 'active' : '';
            ?>
                <div class="carousel-item <?= $active ?>">
                    <img src="img/<?= $row_g['gambar'] ?>" class="w-100" style="height:400px; object-fit:contain;">
                </div>
            <?php $no++; } ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle"></span>
          </button>
        </div>
        <?php } else { echo "<p>Belum ada gallery.</p>"; } ?>
      </div>
    </section>

    <!-- gallery end -->

    <!-- footer begin -->
    <footer class="change-ikon text-center p-5">
      <div>
        <a href="https://www.instagram.com/fariddmln_?igsh=dnJkaWg0dG03cHJu" class="bi bi-instagram h2 p-2"></a>
        <a href="https://x.com/udinusofficial" class="bi bi-twitter-x h2 p-2 "></a>
        <a href="https://wa.me/+62812685577" class="bi bi-whatsapp h2 p-2 "></a>
      </div>
      <div>
        Farid Eka Maulana A11.2024.16081 &copy; 2025
      </div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>

    <script type="text/javascript">
      window.setTimeout("tampilwaktu()", 1000);
      function tampilwaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;
        setTimeout("tampilwaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
            waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
            waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
      }
    </script>

    <!-- Script Dark / Light Mode -->
    <script type="text/javascript">
      const tombolGelap = document.getElementById("tombol-Gelap");
      const tombolTerang = document.getElementById("tombol-Terang");
      const collection = document.getElementsByClassName("change");
      const textCollection = document.getElementsByClassName("change-ikon"); 
      const footer = document.getElementById("mainFooter"); 
      tombolTerang.disabled = true;

      tombolGelap.onclick = function () {
  document.body.classList.remove("bg-white", "text-dark", "text-info-emphasis");
  document.body.classList.add("bg-dark", "text-white");
  tombolGelap.classList.remove("btn-warning");
  tombolGelap.classList.add("btn-secondary");
  tombolGelap.disabled = true;
  tombolTerang.classList.remove("btn-secondary");
  tombolTerang.classList.add("btn-warning");
  tombolTerang.disabled = false;

   if (footer) {
            footer.classList.remove("bg-body-tertiary");
            footer.classList.add("bg-dark");
        }

  for (let i = 0; i < collection.length; i++) {
    if(collection[i].id === "schedule") {
      // Khusus untuk schedule, supaya background gelap tapi teks tetap jelas
      collection[i].classList.remove("bg-warning-subtle", "bg-white", "text-dark", "text-black");
      collection[i].classList.add("bg-dark", "text-light");
    } else {
      collection[i].classList.remove("bg-warning-subtle", "bg-white", "text-dark", "text-black");
      collection[i].classList.add("bg-secondary", "text-white");
    }
  }
      };

    tombolTerang.onclick = function () {
  document.body.classList.remove("bg-dark", "text-white");
  document.body.classList.add("bg-white", "text-dark", "text-info-emphasis");
  tombolTerang.classList.remove("btn-warning");
  tombolTerang.classList.add("btn-secondary");
  tombolTerang.disabled = true;
  tombolGelap.classList.remove("btn-secondary");
  tombolGelap.classList.add("btn-warning");
  tombolGelap.disabled = false;

  if (footer) {
            footer.classList.remove("bg-dark");
            footer.classList.add("bg-body-tertiary");
        }

  for (let i = 0; i < collection.length; i++) {
    collection[i].classList.remove("bg-secondary", "text-white", "bg-dark", "text-light");

    if (collection[i].id === "hero" || collection[i].id === "gallery" || collection[i].id === "profile") {
      collection[i].classList.add("bg-warning-subtle", "text-dark");
    } else if (collection[i].id === "article" || collection[i].id === "schedule") {
      // schedule dikembalikan ke bg-white supaya sesuai awal
      collection[i].classList.add("bg-white", "text-dark");
    } else {
      collection[i].classList.add("bg-white", "text-dark");
    }
  }
}

    </script>

  </body>
</html>
