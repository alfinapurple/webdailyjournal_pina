<?php
include "koneksi.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily-Journal-Fina</title>
    <link rel="icon" href="img/logo.png" />
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    <style>
    body {
  background-color: #e1bee7; 
  color: #6d30b7;
}
nav {
  background-color: #e1bee7; 
}
.navbar-brand, .nav-link {
  color: rgb(112, 41, 160) !important;
}
.navbar-nav .nav-link:hover {
  color: #862fae !important;
}
section {
  padding: 60px 0;
}
#hero {
  background-color: #e1bee7;
  color: #6d30b7;
}
#hero h1 {
  font-weight: bold;
  font-size: 3rem;
}
#hero h4 {
  font-size: 1.5rem;
}
#article {
  background-color: #e1bee7; 
}
.card {
  border: 1px solid #c573d4; 
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.card-title {
  color: #b286ce; 
}
.card-footer {
  background-color: #f3e5f5; 
  color: #c069cf; 
}
#gallery {
  background-color: #e1bee7; 
}
.carousel-inner img {
  max-height: 500px;
  object-fit: cover;
}
footer {
  background-color: #e1bee7;
  color: #6d30b7;
}
footer .h2 {
  color: rgb(184, 131, 220);
}
footer a:hover {
  color: #9563a8; 
}
footer .text-center {
  font-size: 1rem;
}
#about-me {
  background-color: #e1bee7; 
}
#schedule {
  background-color: #e1bee7; 
}
    </style> 
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Jurnal harianku</a>
          <button 
          class="navbar-toggler" 
          type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
            <span 
              class="navbar-toggler-icon">
            </span>
          </button>
          <div 
          class="collapse navbar-collapse"id="navbarSupportedContent">
            <ul class="text-dark navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#hero">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#article">Article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#schedule">Schedule</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Profile">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- /nav --> 
    <!-- hero -->
<section id="hero" class="p-5 bg-danger-subtle">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-md-5">
       
        <img 
          src="./image 1.jpg" 
          class="img-fluid" 
          style="width: 10000px;" 
          alt="Hero Image"
        />
      </div>
      <div class="col-md-6">
        <h1 class="fw-bold display-4">
            Create Memories, Save Memories, Everyday
        </h1>
        <h4 class="lead display-6">
            Mencatat semua kegiatan sehari-hari
        </h4>
      </div>
    </div>
  </div>
</section>

<!--schedule!--> 

<style>
  #schedule {
    background-color: #e1bee7; /* Warna latar belakang untuk section */
    padding: 60px 20px;
  }
  .card {
    border: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
  }
  .card-body {
    position: relative;
  }
  .card-title {
    font-size: 1.5rem;
    font-weight: bold;
    color: white;
    padding: 10px 20px;
    background-color: #9c27b0; /* Warna untuk kotak hari */
    border-radius: 8px;
    display: inline-block;
    text-align: center;
  }
  .card-text {
    margin-top: 20px;
    color: #333;
    font-size: 1rem;
  }
  .row-cols-md-4 .col {
    margin-bottom: 20px;
  }
</style>

<section id="schedule" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <!-- Days -->
      <div class="col">
        <div class="card h-100">
          <div class="card-body bg-light">
            <h5 class="card-title">Senin</h5>
            <p class="card-text">08:00 - 10:00<br> Pemrograman Dasar<br> Ruang R.123</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body bg-light">
            <h5 class="card-title">Selasa</h5>
            <p class="card-text">10:00 - 12:00<br> Kalkulus<br> Ruang R.456</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body bg-light">
            <h5 class="card-title">Rabu</h5>
            <p class="card-text">08:00 - 10:00<br> Fisika Dasar<br> Ruang R.789</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body bg-light">
            <h5 class="card-title">Kamis</h5>
            <p class="card-text">09:00 - 11:00<br> Kimia Dasar<br> Ruang R.101</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="card-body bg-light">
            <h5 class="card-title">Jumat</h5>
            <p class="card-text">13:00 - 15:00<br> Matematika Terapan<br> Ruang R.202</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--schedule!--> 


 <!---profil-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
        Profil Mahasiswa
  </title>
  <style>

    body {
      font-family: Arial, sans-serif;
      background-color: #af3de8;
      color: #333;
    }
    section {
      padding: 60px 20px;
    }
    h1, h2, h5 {
      margin-bottom: 20px;
    }
    #Profile {
      background-color: #dd4df6;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    img.profile-img {
      width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 50%;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
    }
    .table th, .table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    .table th {
      width: 30%;
      font-weight: bold;
    }
    .table td {
      width: 70%;
    }
    @media (max-width: 768px) {
      .row {
        flex-direction: column;
        text-align: center;
      }
      .col-md-4, .col-md-8 {
        width: 100%;
        margin-bottom: 20px;
      }
    }

  </style>
  <!-- Profil -->
  <section id="Profile" class="text-center p-5">
    <div class="container">
      <h1 
            class="fw-bold display-4 pb-3">
            Profil Mahasiswa
      </h1>
      <div 

        class="row align-items-center d-flex">
        <!-- Gambar Profil -->
        <div 
              class="col-md-4 text-center mb-3">
              <img src="aku.jpg" alt="Profile Photo" class="profile-img">
        </div>
        <!-- Data Profil -->
        <div class="col-md-8">
          <h2 class="my-4">
                Alfina Damayanti
          </h2>
          <h5 class="text-muted">
                Mahasiswa Teknik Informatika
          </h5>
          <table class="table">
            <tr>
              <th>NIM</th>
              <td>A11.2023.14968</td>
            </tr>
            <tr>
              <th>Program Studi</th>
              <td>Teknik Informatika</td>
            </tr>
            <tr>
              <th>Email</th>
              <td>alfinadmyt1234@gmail.com</td>
            </tr>
            <tr>
              <th>Telepon</th>
              <td>0812 3456 7890</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>Jl. Demak-Semarang</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<!-- /hero --->
     <!-- article -->
    <section id="article" class="text-center p-5">
    <div class="container"> 
        <h1 
            class="fw-bold display-4 pb-3">
              article  
        </h1>
        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
          <div class="col">
            <div class="card h-100">
              <img 
                src="image 5.jpg"
                class="card-img-top " 
                style="height: 200px;"
                alt="..."
                />
              <div class="card-body">
                <h5 class="card-title">LPJ</h5>
                <p class="card-text"> 
                Every strike brings me closer to the next home run.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"
                  >Last updated 3 mins ago
                </small>
                >
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./image 3.jpg" 
                  class="card-img-top" 
                  style="height: 200px;" 
                  alt="..."
                  />
              <div class="card-body">
                <h5 class="card-title">Akhirussanah Sekolah</h5>
                <p class="card-text">
                Your future is determined by what you start today
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img 
                    src="./image 6.jpg"
                    class="card-img-top " 
                    style="height: 200px;" 
                    alt="..."
                    />
              <div class="card-body">
                  <h5 class="card-title">Album Majalah</h5>
                <p class="card-text"> 
                  Wise people learn when they can; fools learn when they must
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img 
              src="./image 4.jpg" 
              class="card-img-top" 
              style="height: 200px;" 
              alt="...">
              <div class="card-body">
                <h5 class="card-title">Ziarah</h5>
                <p class="card-text">
                  I never learned from a man who agreed with me
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="./image 2.jpg" 
              class="card-img-top" 
              style="height: 200px;" 
              alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Khataman Akhirussanah</h5>
                <p class="card-text"> 
                  In nature's embrace, love blossoms
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
              </div>
              </div>
              <div class="col">
            <div class="card h-100">
              <img src="./image 7.jpg" 
              class="card-img-top" 
              style="height: 200px;" 
              alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Teman </h5>
                <p class="card-text"> 
                   Do not ever give up, the beginning is always the hardest
               </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
    <!-- /article -->
    <!-- gallery -->
<section id="gallery" 
        class="text-center p-5 bg-danger-subtle">
  <div class="container"> 
    <h1 class="fw-bold display-4 pb-3">
              Gallery
    </h1>
    <div 
        id="carouselExample" 
        class="carousel slide mx-auto" 
        style="max-width: 700px; max-height: 500px;"
        >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
          src="./image 6.jpg" 
          class="d-block w-100" 
          style="height: 500px;" 
          alt="image 6"
          />
        </div>
        <div class="carousel-item">
          <img src="./image 4.jpg" 
          class="d-block w-100" 
          style="height: 500px;" 
          alt="image 4"
          />
        </div>
        <div class="carousel-item">
          <img 
          src="./image 3.jpg" 
          class="d-block w-100" 
          style="height: 500px;" 
          alt="image 3"
          />
        </div>
      </div>
      <button 
              class="carousel-control-prev" 
              type="button" 
              data-bs-target="#carouselExample" 
              data-bs-slide="prev">
        <span 
              class="carousel-control-prev-icon" 
              aria-hidden="true">
        </span>
        <span 
                class="visually-hidden">
                Previous
        </span>
      </button>
      <button 
              class="carousel-control-next" 
              type="button" 
              data-bs-target="#carouselExample" 
              data-bs-slide="next">
        <span
              class="carousel-control-next-icon"
              aria-hidden="true">
        </span>
        <span 
                class="visually-hidden">Next
        </span>
      </button>
    </div>    
  </div>
</section>
<!-- /gallery -->
 <!-- footer -->
 <footer class="text-center p-5 ">
  <div>
    <a 
          href="https://www.instagram.com" 
          target="_blank"
          class="h2 d-inline-flex p-2 text-dark">
    <svg 
          xmlns="http://www.w3.org/2000/svg" 
          width="30" 
          height="30" 
          fill="currentColor" 
          class="bi bi-instagram" 
          viewBox="0 0 16 16">

      <path 
      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
    </svg>
    </a>
    <a 
            href="https://www.bing.com/search?pglt=41&q=facebook&cvid=8acc4bd437214aa7bbf6607ae2c8e159&gs_lcrp=EgRlZGdlKgYIARAuGEAyBggAEEUYOTIGCAEQLhhAMgYIAhAAGEAyBggDEAAYQDIGCAQQABhAMgYIBRAuGEAyBggGEAAYQDIGCAcQABhAMgYICBAAGEDSAQgyNjU3ajBqMagCCLACAQ&FORM=ANAB01&ucpdpc=UCPD&PC=HCTS" 
            target="_blank" 
            class="h2 d-inline-flex p-2 text-dark">
    <svg 
          xmlns="http://www.w3.org/2000/svg"
          width="30" height="30" 
          fill="currentColor" 
          class="bi bi-facebook" 
          viewBox="0 0 16 16">
      <path 
      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
    </svg>
   </a>
   <a 
          href="https://www.bing.com/search?pglt=41&q=whatsapp+web&cvid=6a94cfaf2c86475595de22154c6383f8&gs_lcrp=EgRlZGdlKgYIAhAAGEAyBggAEEUYOTIGCAEQABhAMgYIAhAAGEAyBggDEC4YQDIGCAQQABhAMgYIBRAAGEAyBggGEAAYQDIGCAcQABhAMgYICBBFGD3SAQgyNDIwajBqMagCCLACAQ&FORM=ANNTA1&ucpdpc=UCPD&PC=HCTS" target="_blank" class="h2 d-inline-flex p-2 text-dark">
    <svg 
          xmlns="http://www.w3.org/2000/svg" 
          width="30" 
          height="30" 
          fill="currentColor" 
          class="bi bi-whatsapp" 
          viewBox="0 0 16 16">
      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
    </svg>
   </a>
  </div>
  <div>
    Alfina Damayanti & 14968 ;
  </div>
  </footer>
  <!-- /footer -->
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
      crossorigin="anonymous">
    </script>
  </body>
</html>