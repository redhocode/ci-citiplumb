<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
     <!-- <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet"> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />

    <style>
        /* Color of the links BEFORE scroll */
        .navbar-scroll .nav-link,
        .navbar-scroll .navbar-toggler-icon,
        .navbar-scroll .navbar-brand {
            color: #fff;
        }

        /* Color of the links AFTER scroll */
        .navbar-scrolled .nav-link,
        .navbar-scrolled .navbar-toggler-icon,
        .navbar-scrolled .navbar-brand {
            color: #fff;
        }

        /* Color of the navbar AFTER scroll */
        .navbar-scroll,
        .navbar-scrolled {
            background-color: #76A8E2FF;
        }

        .mask-custom {
            backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, .15);
        }

        .navbar-brand {
            font-size: 1.75rem;
            letter-spacing: 3px;
        }
        
        .navbar-toggler {
            border: none; /* Remove border */
        }
        .navbar-toggler-icon {
            background-color: transparent; /* Remove default background */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
        <div class="container">
            <a class="navbar-brand" href="#!"><span style="color: #fff;">PT</span><span style="color: #8AC7FFFF;">CITI</span><span style="color: #fff;">PLUMB</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#!" style="color: #fff;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!" style="color: #fff;">Visi & Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!" style="color: #fff;">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!" style="color: #fff;">Lowongan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!" style="color: #fff;">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!" style="color: #fff;">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            <i class="fas fa-shopping-cart" style="color: #fff;"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            <i class="fab fa-twitter" style="color: #fff;"></i>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="#!">
                            <i class="fab fa-instagram" style="color: #fff;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
