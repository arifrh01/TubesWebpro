<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS_plaza_kamera.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Plaza kamera</title>
</head>

<body>
    <div class="header-up">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="https://www.plazakamera.com">
                    <img src="https://www.plazakamera.com/wp-content/uploads/2018/07/logo-plazakamera-fixed.png" alt="Plaza Kamera Logo" id="logo">
                </a>
                <div class="col-md-7">
                    <input type="text" class="form-control pencarian" placeholder="Cari Produk / search" id="textbox">
                </div>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary" style="background-color: #064557" data-toggle="dropdown" data-target="#dropdown1"><i class="fas fa-user"></i></button>
                    <div class="dropdown-menu" id="dropdown1">
                        <a href="#" class="dropdown-item">Daftar / Login</a>
                    </div>
                    <button type="button" class="btn btn-primary" style="background-color: #064557" data-toggle="dropdown" data-target="#dropdownMenuLink2"><i class="fas fa-shopping-cart"></i>
                        Items (0)</button>
                    <div class="dropdown-menu" id="dropdownMenuLink2">
                        <a href="#" class="dropdown-item">Tidak ada daftar keranjang</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="header-down">
        <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #064557;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggle-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="<?= site_url('Home') ?>" style="color:white;">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="<?= site_url('Category') ?>" style="color:white;">Kategori</a>
                        <a class="nav-item nav-link" href="<?= site_url('newProduct') ?>" style="color:white;">Produk Terbaru</a>
                        <a class="nav-item nav-link" href="#" style="color:white;">Promo</a>
                        <a class="nav-item nav-link" href="#" style="color:white;">Blog</a>
                        <a class="nav-item nav-link" href="#" style="color:white;">Inquiry B2B</a>
                        <a class="nav-item nav-link" href="#" style="color:white;">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <br>