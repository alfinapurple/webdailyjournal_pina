<?php
session_start();
include "koneksi.php";  

// Redirect ke halaman login jika belum login
if (!isset($_SESSION['username'])) { 
    header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal | Admin</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous" 
    />
    <link rel="stylesheet" href="style.css">
    <!-- Panggil CDN JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-danger-subtle">
        <div class="container">
            <a class="navbar-brand" href=".">My Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=article">Article</a>
                    </li> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                        </ul>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content Section -->
    <section id="content" class="p-5">
        <div class="container">
            <?php
            if (isset($_GET['page']) && $_GET['page'] === "dashboard") {
                // Dashboard content
                $articleCount = 6; // Contoh jumlah artikel
                $galleryCount = 4; // Contoh jumlah galeri
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
                <div class="row text-center">
                    <div class="col-md-6 mb-4">
                        <div class="card border-danger">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="bi bi-journal-text"></i> Article
                                </h5>
                                <h1 class="display-4 text-danger"><?= $articleCount ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card border-danger">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="bi bi-images"></i> Gallery
                                </h5>
                                <h1 class="display-4 text-danger"><?= $galleryCount ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            } else if (isset($_GET['page']) && file_exists($_GET['page'] . ".php")) {
                include($_GET['page'] . ".php");
            } else {
            ?>
                <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
                <p>Welcome to the admin dashboard!</p>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center p-5 bg-danger-subtle footer fixed-bottom">
        <div>
            <a href="https://www.instagram.com/udinusofficial"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://twitter.com/udinusofficial"><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
            <a href="https://wa.me/+6287711788221"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>Alfina Damayanti & 14968 </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
            crossorigin="anonymous"></script>
</body>
</html>
