<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">

  <!-- Özel CSS -->
  <style>
    .navbar-brand {
      font-family: 'Montserrat', sans-serif;
      font-size: 26px;
      color: #1abc9c !important;
    }

    .nav-link {
      transition: 0.3s;
    }

    .nav-link:hover {
      color: #1abc9c !important;
    }

    .form-control {
      border-radius: 20px;
    }

    .btn-outline-success {
      border-radius: 20px;
      border-color: #1abc9c;
      color: #1abc9c;
    }

    .btn-outline-success:hover {
      background-color: #1abc9c;
      color: white;
    }

    .btn-giris {
      border-radius: 20px;
      margin-left: 10px;
    }

    .nav-icon {
      margin-right: 6px;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-bag-heart-fill"></i> İkinciElim</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarIkonlu" aria-controls="navbarIkonlu" aria-expanded="false" aria-label="Menüyü Aç">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarIkonlu">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" href="#"><i class="bi bi-house nav-icon"></i>Anasayfa</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-search nav-icon"></i>Ürün Ara</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-plus-circle nav-icon"></i>Ürün Ekle</a>
          </li>

          <!-- Kategoriler Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-list-ul nav-icon"></i>Kategoriler
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">📱 Elektronik</a></li>
              <li><a class="dropdown-item" href="#">👕 Giyim</a></li>
              <li><a class="dropdown-item" href="#">📚 Kitap</a></li>
              <li><a class="dropdown-item" href="#">🚗 Araba</a></li>
              <li><a class="dropdown-item" href="#">🛋️ Mobilya</a></li>
              <li><a class="dropdown-item" href="#">🎮 Oyun / Konsol</a></li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-person nav-icon"></i>Profilim</a>
          </li>
        </ul>

        <!-- Arama Formu -->
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Ürün ara..." aria-label="Ara">
          <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        </form>

        <!-- Giriş Butonu -->
        <a href="#" class="btn btn-primary btn-giris"><i class="bi bi-box-arrow-in-right"></i> Giriş / Kayıt</a>
      </div>
    </div>
  </nav>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
