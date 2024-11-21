<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study IT Del</title>
    <!-- Tambahkan Link CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .hero-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .section-title {
            font-size: 1.75rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .cta-button {
            background-color: #ffc107;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .cta-button:hover {
            background-color: #e0a800;
        }
        .card {
            border: none;
        }
        .footer {
            background-color: #002855;
            color: #fff;
            padding: 20px 0;
        }
        .footer a {
            color: #ffc107;
        }
        .hero-image img {
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">Tracer<span class="text-warning">Study</span> IT Del</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Questionnaire</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tracer Study Report</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container d-flex flex-column align-items-center justify-content-center text-center">
        <h1 class="hero-title">Selamat Datang di <br>Tracer Study Institut Teknologi Del</h1>
        <p class="lead">Bantu kami meningkatkan kualitas pendidikan dengan berpartisipasi dalam tracer study.</p>
        <a href="#" class="cta-button">Mulai Sekarang</a>
        <div class="hero-image mt-4">
            <img src="{{ asset('images/TracerStudy.png') }}" alt="Ilustrasi Tracer Study">
        </div>
    </div>
</section>

<!-- Mengapa Tracer Study Penting -->
<section class="my-5">
    <div class="container text-center">
        <h2 class="section-title">Mengapa Tracer Study Penting?</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peningkatan Kurikulum</h5>
                        <p>Data alumni membantu kami menyempurnakan kurikulum agar sesuai dengan kebutuhan industri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Peluang Karir</h5>
                        <p>Membantu mahasiswa dan alumni mendapatkan informasi terkini tentang peluang karir.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Evaluasi Kinerja</h5>
                        <p>Menilai efektivitas program pendidikan yang telah dijalankan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jejaring Alumni</h5>
                        <p>Membangun jaringan yang kuat antara alumni untuk saling berbagi dan mendukung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tentang Tracer Study -->
<section class="my-5 bg-light py-5">
    <div class="container text-center">
        <h2 class="section-title">Tentang Tracer Study</h2>
        <p>
            Tracer Study adalah survei yang dilakukan kepada alumni untuk mengetahui situasi kerja dan penggunaan kompetensi yang diperoleh selama kuliah. 
            Hasil dari tracer study digunakan untuk evaluasi dan pengembangan kurikulum, serta peningkatan kualitas pendidikan di universitas.
        </p>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="mb-1">Ayo Berkontribusi dalam Tracer Study</p>
        <a href="#" class="cta-button">Isi Kuisioner</a>
        <p class="mt-4">&copy; 2024 Institut Teknologi Del (Kelompok 2). Hak Cipta Dilindungi.</p>
        <p>Contact Us: Email: info@kelompok2appl.ac.id | Telepon: (021) 12345678</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
