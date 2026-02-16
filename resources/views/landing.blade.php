<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CESS GOLD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Spa+Grotesk&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <style>
        /* Card Container */
        .product-card-premium {
            border-radius: 24px;
            transition: all 0.4s ease;
            background: #ffffff;
        }

        .product-card-premium:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.15) !important;
        }

        /* Lingkaran Magic */
        .gold-circle-container {
            position: relative;
            width: 160px;
            /* Ukuran lingkaran */
            height: 160px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gold-circle-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 1px dashed rgba(212, 175, 55, 0.4);
            border-radius: 50%;
            animation: spin 20s linear infinite;
            /* Efek muter pelan biar estetik */
        }

        .gold-circle-inner {
            position: absolute;
            width: 85%;
            height: 85%;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            /* Biar gambar ga keluar lingkaran */
        }

        .img-gold-fluid {
            width: auto;
            height: 75%;
            /* Menyesuaikan tinggi agar tetap di dalam lingkaran */
            object-fit: contain;
            filter: drop-shadow(0 8px 12px rgba(0, 0, 0, 0.15));
            transition: transform 0.5s ease;
            z-index: 2;
        }

        .product-card-premium:hover .img-gold-fluid {
            transform: scale(1.1);
            /* Zoom dikit pas di hover */
        }

        /* Button Pill */
        .btn-gold-pill {
            background: #D4AF37;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .btn-gold-pill:hover {
            background: #b89146;
            color: white;
            box-shadow: 0 4px 12px rgba(184, 145, 70, 0.3);
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Mobile Responsive */
        @media (max-width: 576px) {
            .gold-circle-container {
                width: 130px;
                height: 130px;
            }
        }

        /* Bikin cursor pointer pas hover di area lingkaran */
        .gold-circle-inner {
            cursor: pointer;
            z-index: 10;
        }

        /* Efek sedikit zoom pas gambar di hover di dalam card */
        .gold-circle-inner:hover .img-gold-fluid {
            transform: scale(1.15);
            filter: drop-shadow(0 12px 20px rgba(0, 0, 0, 0.2));
        }

        /* Styling Modal Backdrop agar lebih gelap/fokus */
        #imageModal .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.9);
        }

        #fullSizeImage {
            transition: transform 0.3s ease;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarCollapse" data-bs-offset="100">
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                <a href="" class="navbar-brand d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/img/cess.png') }}" alt="CESS Gold Logo" class="brand-logo" width="50">
                    <h2 class="ms-1 fw-bold">CESS GOLD</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#gold-today" class="fw-bold nav-item nav-link active">Logam Mulia</a>

                        <a href="#tentang-kami" class="fw-bold nav-item nav-link">Tentang Kami</a>

                        <div class=" nav-item dropdown">
                            <a href="#!" class="nav-link dropdown-toggle fw-bold" data-bs-toggle="dropdown">Berita dan
                                Artikel</a>
                            <div class="dropdown-menu mt-2" style="background-color: #fef4e3;">
                                <a href="#artikel" class="dropdown-item fw-bold">Artikel</a>
                                <a href="#artikel" class="dropdown-item fw-bold">Berita</a>
                            </div>
                        </div>
                        <a href="#kontak-footer" class="fw-bold nav-item nav-link">Hubungi Kami</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <section class="hero-gold-bg" id="home">
        <div class="hero-bg-image"></div>
        <div class="hero-bg-overlay"></div>

        <div class="container hero-inner">
            <div class="row">
                <div class="col-lg-12">

                    <span class="hero-pill">
                        Platform Investasi Emas Premium
                    </span>

                    <h1 class="hero-title">
                        Investasi <span>Masa Depan</span><br>
                        yang Berkilau
                    </h1>

                    <p class="hero-desc">
                        Bersama CESS GOLD, wujudkan investasi emas yang aman,
                        transparan, dan mudah. Harga real-time mengikuti pasar
                        global dengan proses buy-back yang cepat.
                    </p>

                    <div class="hero-actions">
                        <a href="#" class="btn btn-primary btn-lg" style="border-radius: 10px;">
                            Cek Harga Hari Ini →
                        </a>
                        <a href="#" class="btn btn-outline-gold btn-lg">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <div class="hero-stats">
                        <div>
                            <strong>10K+</strong>
                            <span>Investor Aktif</span>
                        </div>
                        <div>
                            <strong>50T+</strong>
                            <span>Transaksi</span>
                        </div>
                        <div>
                            <strong>99.9%</strong>
                            <span>Kepuasan</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Hero End -->

    <!-- Gold Today Start -->

    <section class="gold-today-section py-5" id="gold-today">
        <div class="container py-5">
            <div class="row g-4 align-items-center">

                <div class="col-lg-5" data-aos="fade-right">
                    <div class="price-info-card">
                        <div class="badge-today">Live Update - 2026</div>
                        <h2 class="serif-bold mb-3">Harga Emas <span class="gold-gradient-text">Hari Ini</span></h2>
                        <p class="text-muted mb-4">Harga Logam Mulia ANTAM Certicard gramasi 100 gram produksi tahun
                            terbaru dari Aneka Logam.</p>

                        <div class="price-grid-wrapper mb-4">
                            <div class="price-box jual">
                                <span class="p-label">Harga Jual</span>
                                <h3 class="p-value" style="color: white !important;">
                                    Rp{{
                                    number_format($golds->items[0]->selling_price, 0, ',', '.') }}
                                </h3>
                            </div>
                            <div class="price-box beli">
                                <span class="p-label">Harga Beli</span>
                                <h3 class="p-value">
                                    Rp{{
                                    number_format($golds->items[0]->buyback_price, 0, ',', '.') }}
                                </h3>
                            </div>
                        </div>

                        <div class="price-note mb-4">
                            <i class="bi bi-info-circle me-2"></i>
                            Harga berlaku untuk LM Antam produksi tahun 2025.
                        </div>

                        <a href="#" class="btn-check-detail">
                            <i class="bi bi-shield-check me-2"></i> Cek Detail Harga Buy-Back
                        </a>
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-left">
                    <div class="chart-container-premium shadow-premium"
                        style="background: #fff; padding: 25px; border-radius: 20px; border: 1px solid #f0f0f0;">
                        <div class="chart-header d-flex justify-content-between align-items-center mb-4">
                            <h5 class="m-0 fw-bold"><i class="bi bi-graph-up text-gold me-2"></i>Tren Harga Emas</h5>
                            <div class="chart-controls">
                                <button class="btn-chart-sm active" onclick="updateChartData('1y', this)">1y</button>
                                <button class="btn-chart-sm" onclick="updateChartData('6m', this)">6m</button>
                                <button class="btn-chart-sm" onclick="updateChartData('1m', this)">1m</button>
                            </div>
                        </div>

                        <div style="height: 350px; width: 100%;">
                            <canvas id="goldPriceChart"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Gold Today End -->


    <!-- Why Cess Gold Start -->
    <section class="why-cess-section py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Kenapa Memilih <span class="gold-gradient-text">CESS GOLD </span>?</h2>
                <div class="title-line"></div>
                <p class="section-subtitle">Membangun masa depan finansial Anda dengan standar keamanan dan kemurnian
                    tertinggi di industri emas.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Proteksi Maksimal</h3>
                        <p>Setiap gram emas Anda dilindungi asuransi komprehensif dengan sistem penyimpanan
                            <strong>Vault Berstandar Internasional</strong>.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="icon-box">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <h3>Kemurnian Global</h3>
                        <p>Jaminan emas <strong>LBMA (99.99%)</strong> yang tersertifikasi secara global, memastikan
                            nilai aset Anda diakui di seluruh dunia.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="icon-box">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h3>Likuiditas Instan</h3>
                        <p>Nikmati kemudahan <strong>Buyback Real-time</strong> dengan pencairan dana yang diproses
                            langsung ke rekening Anda tanpa birokrasi.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <h3>Transparansi Penuh</h3>
                        <p>Harga emas yang jujur mengikuti pergerakan <strong>Pasar Global</strong> tanpa biaya
                            tersembunyi atau selisih harga yang merugikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Cess Gold Start End -->


    <!-- About Start -->
    <section class="about-cess-section">
        <div class="container-fluid py-5 bg-ivory">
            <div class="container text-center">

                <h2 class="section-title mb-2">
                    <span class="text-gold">Harga Emas</span> Hari Ini
                </h2>

                <p class="section-desc mb-2">
                    Pantau harga emas terkini dengan update real-time mengikuti pasar global
                </p>

                <div class="update-time mb-4">
                    <i class="bi bi-clock"></i>
                    Terakhir diperbarui: {{ \Carbon\Carbon::parse($golds->updated_at)->translatedFormat('d F Y H:i') }}
                    WIB
                </div>

                <div class="price-table-card mx-auto">
                    <table class="table price-table mb-0">
                        <thead>
                            <tr>
                                <th>Berat</th>
                                <th class="text-start">Harga Kami Jual</th>
                                <th class="text-start">Harga Kami Beli</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($golds->items as $g)
                            <tr>
                                <td>{{ $g->weight }}gr</td>
                                <td class="text-start">Rp{{ number_format($g->selling_price, 0, ',', '.') }}</td>
                                <td class="text-start">Rp{{ number_format($g->buyback_price, 0, ',', '.') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Belum ada data emas hari ini</td>
                            </tr>
                            @endforelse

                            {{-- <tr>
                                <td>2gr</td>
                                <td>Rp 5.977.000</td>
                                <td>Rp 5.050.000</td>
                            </tr>
                            <tr>
                                <td>3gr</td>
                                <td>Rp 8.855.000</td>
                                <td>Rp 7.579.000</td>

                            </tr>
                            <tr>
                                <td>5gr</td>
                                <td>Rp 14.447.000</td>
                                <td>Rp 12.449.000</td>

                            </tr>
                            <tr>
                                <td>10gr</td>
                                <td>Rp 28.562.000</td>
                                <td>Rp 25.116.000</td>

                            </tr>
                            <tr>
                                <td>25gr</td>
                                <td>Rp 71.274.000</td>
                                <td>Rp 62.931.000</td>

                            </tr>
                            <tr>
                                <td>50gr</td>
                                <td>Rp 141.781.000</td>
                                <td>Rp 125.871.000</td>

                            </tr>
                            <tr>
                                <td>100gr</td>
                                <td>Rp 282.112.000</td>
                                <td>Rp 254.347.000</td>

                            </tr> --}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>


    <!-- About End -->


    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-uppercase fw-bold" style="color: #D4AF37; letter-spacing: 2px;">Investment Collection
                </h6>
                <h2 class="serif-bold fs-1">Koleksi <span style="color: #D4AF37;">Emas Murni</span></h2>
                <div class="mx-auto mb-3" style="width: 50px; height: 3px; background: #D4AF37;"></div>
            </div>

            <div class="row g-4 justify-content-center">
                @php
                $products = [1, 2, 3, 5, 10, 25, 50, 100];
                @endphp

                @foreach($products as $gram)
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card product-card-premium border-0 h-100 text-center shadow-sm p-3">

                        <div class="gold-circle-container">
                            <div class="gold-circle-ring"></div>
                            <div class="gold-circle-inner" style="cursor: pointer;" data-bs-toggle="modal"
                                data-bs-target="#imageModal"
                                onclick="showFullImage('{{ asset('assets/img/'.$gram.' gr.jpg') }}', 'Logam Mulia {{ $gram }}g')">
                                <img src="{{ asset('assets/img/'.$gram.' gr.jpg') }}" class="img-gold-fluid"
                                    alt="{{ $gram }}g">
                            </div>
                        </div>

                        <div class="card-body pt-3 px-0">
                            <h5 class="fw-bold mb-1">Logam Mulia {{ $gram }}g</h5>
                            <p class="small text-muted mb-2">Fine Gold 999.9</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Project Start -->

    <div class="col-lg-12 mt-5">
        <div class="investment-simulation-container text-center">
            <h2 class="simulasi-title">Simulasi <span class="serif-bold">Investasi</span></h2>
            <p class="simulasi-subtitle">Hitung estimasi nilai investasi emas Anda dengan kalkulator interaktif</p>

            <div class="sim-toggle-wrapper">
                <button id="btn-tab-beli" class="sim-toggle-btn active" onclick="toggleSim('beli')">
                    <i class="bi bi-graph-up-arrow"></i> Simulasi Beli
                </button>
                <button id="btn-tab-jual" class="sim-toggle-btn" onclick="toggleSim('jual')">
                    <i class="bi bi-graph-down-arrow"></i> Simulasi Jual
                </button>
            </div>

            <div class="simulation-card p-4">
                <div id="repeater-container">
                </div>

                <button class="btn-add-item mb-4" onclick="addNewRow()">
                    <i class="bi bi-plus-circle-fill me-2"></i> Tambah Gramasi Lain
                </button>

                <div class="result-details-box mt-2">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="label-text" id="labelPriceType">Harga per gram:</span>
                        <span class="value-text" id="pricePerGramText">Rp {{
                            number_format($golds->items[0]->selling_price, 0, ',', '.') }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="label-text">Total Berat Keseluruhan:</span>
                        <span class="value-text fw-bold text-gold" id="totalWeightText">0 gram</span>
                    </div>
                    <hr class="divider">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="total-label" id="labelTotalType">Estimasi Total:</span>
                        <span class="total-amount" id="totalResult" style="font-size: 1.8rem; color: #b89146;">Rp
                            0</span>
                    </div>
                </div>

                <button id="mainActionButton" class="btn-action-gold mt-4">Lanjutkan Transaksi</button>
            </div>
        </div>
    </div>

    <!-- Project End -->






    <!-- Abount Start -->
    <section class="about-section py-5 overflow-hidden" id="tentang-kami">
        <div class="container py-5">
            <div class="row align-items-center g-5">

                <div class="col-lg-6 position-relative">
                    <div class="blob-animation"></div>

                    <div class="image-stack position-relative" data-aos="zoom-in-right" data-aos-duration="1500">
                        <div class="main-img-wrapper shadow-premium floating-anim">
                            <img src="{{ asset('assets/img/antam-2.webp') }}" alt="Cess Gold Jewelry"
                                class="img-fluid rounded-4">
                        </div>

                        <div class="mini-stat-card shadow-lg floating-reverse" data-aos="fade-up" data-aos-delay="800">
                            <div class="d-flex align-items-center">
                                <div class="icon-badge-gold me-3">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Terpercaya</h6>
                                    <small class="text-muted">Sejak 2020</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="ps-lg-5">
                        <h2 class="display-5 serif-bold mb-4" data-aos="fade-left" data-aos-duration="1000">
                            Mengenal <span class="gold-gradient-text">CESS GOLD</span>
                        </h2>

                        <div class="about-text-content" data-aos="fade-up" data-aos-delay="300">
                            <p class="lead text-dark fw-500 mb-4">
                                Kami hadir sebagai solusi investasi logam mulia yang menggabungkan keamanan fisik dengan
                                kemudahan akses digital.
                            </p>
                            <p class="text-muted mb-4">
                                Bukan sekadar jual-beli, CESS GOLD berkomitmen menjaga nilai aset Anda melalui
                                transparansi harga real-time dan standar kemurnian tertinggi (999.9). Setiap gram emas
                                yang Anda miliki adalah langkah nyata menuju kebebasan finansial yang terencana.
                            </p>

                            <ul class="list-unstyled custom-list mb-5">
                                <li data-aos="fade-left" data-aos-delay="500">
                                    <i class="bi bi-check2-circle"></i> Integrasi harga pasar global secara langsung.
                                </li>
                                <li data-aos="fade-left" data-aos-delay="700">
                                    <i class="bi bi-check2-circle"></i> Layanan buyback dengan pencairan instan.
                                </li>
                            </ul>

                            <div data-aos="zoom-in" data-aos-delay="900">
                                <a href="#" class="btn-premium-gold">
                                    Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Abount End -->

    <!-- News Start -->
    <section class="news-section py-5" id="artikel">
        <div class="container py-5">
            <div class="d-flex justify-content-between align-items-end mb-5" data-aos="fade-up">
                <div>
                    <h6 class="text-gold fw-bold text-uppercase ls-2 mb-2" style="color: #d4af37; letter-spacing: 2px;">
                        Insight & Edukasi</h6>
                    <h2 class="serif-bold mb-0" style="font-weight: 700;">Berita & <span class="gold-gradient-text"
                            style="background: linear-gradient(135deg, #d4af37 0%, #8a6d1d 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Artikel</span>
                        Terbaru</h2>
                </div>
                <a href="#" class="btn-view-all d-none d-md-flex align-items-center text-decoration-none fw-bold"
                    style="color: #1a1a1a; border-bottom: 2px solid #d4af37; transition: 0.3s;">
                    Lihat Semua Berita <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-card border-0 shadow-sm"
                        style="border-radius: 25px; overflow: hidden; background: #fff; transition: 0.4s; height: 100%;">
                        <div class="news-img-wrapper position-relative" style="height: 260px; overflow: hidden;">
                            <img src="{{ asset('assets/img/gold1.jpg') }}" alt="News" class="news-img w-100 h-100"
                                style="object-fit: cover; transition: 0.6s;">
                            <span class="news-category position-absolute"
                                style="top: 20px; left: 20px; background: #d4af37; color: #fff; padding: 5px 15px; border-radius: 50px; font-size: 0.7rem; font-weight: 800;">EDUKASI</span>
                        </div>
                        <div class="news-content p-4 d-flex flex-column h-100">
                            <div class="news-meta mb-2 text-muted" style="font-size: 0.85rem;">
                                <span><i class="bi bi-calendar3 me-1"></i> 13 Jan 2026</span>
                            </div>
                            <h4 class="news-title fw-bold mb-3" style="font-size: 1.2rem; line-height: 1.4;">Strategi
                                Investasi Emas Safe Haven 2026</h4>
                            <p class="news-excerpt text-muted mb-4" style="font-size: 0.9rem; line-height: 1.6;">
                                Bagaimana posisi emas sebagai aset pelindung nilai di tengah perubahan ekonomi global
                                tahun ini...</p>
                            <a href="#" class="news-link mt-auto fw-bold text-decoration-none"
                                style="color: #d4af37; font-size: 0.9rem;">Baca Selengkapnya <i
                                    class="bi bi-chevron-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-card border-0 shadow-sm"
                        style="border-radius: 25px; overflow: hidden; background: #fff; transition: 0.4s; height: 100%;">
                        <div class="news-img-wrapper position-relative" style="height: 260px; overflow: hidden;">
                            <img src="{{ asset('assets/img/gold2.jpg') }}" alt="News" class="news-img w-100 h-100"
                                style="object-fit: cover; transition: 0.6s;">
                            <span class="news-category position-absolute"
                                style="top: 20px; left: 20px; background: #d4af37; color: #fff; padding: 5px 15px; border-radius: 50px; font-size: 0.7rem; font-weight: 800;">TIPS</span>
                        </div>
                        <div class="news-content p-4 d-flex flex-column h-100">
                            <div class="news-meta mb-2 text-muted" style="font-size: 0.85rem;">
                                <span><i class="bi bi-calendar3 me-1"></i> 11 Jan 2026</span>
                            </div>
                            <h4 class="news-title fw-bold mb-3" style="font-size: 1.2rem; line-height: 1.4;">Cara
                                Membedakan Emas Asli dan Palsu dengan Mudah</h4>
                            <p class="news-excerpt text-muted mb-4" style="font-size: 0.9rem; line-height: 1.6;">Panduan
                                praktis bagi investor pemula untuk mengenali ciri fisik logam mulia murni...</p>
                            <a href="#" class="news-link mt-auto fw-bold text-decoration-none"
                                style="color: #d4af37; font-size: 0.9rem;">Baca Selengkapnya <i
                                    class="bi bi-chevron-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-card border-0 shadow-sm"
                        style="border-radius: 25px; overflow: hidden; background: #fff; transition: 0.4s; height: 100%;">
                        <div class="news-img-wrapper position-relative" style="height: 260px; overflow: hidden;">
                            <img src="{{ asset('assets/img/gold3.jpg') }}" alt="News" class="news-img w-100 h-100"
                                style="object-fit: cover; transition: 0.6s;">
                            <span class="news-category position-absolute"
                                style="top: 20px; left: 20px; background: #d4af37; color: #fff; padding: 5px 15px; border-radius: 50px; font-size: 0.7rem; font-weight: 800;">SECURITY</span>
                        </div>
                        <div class="news-content p-4 d-flex flex-column h-100">
                            <div class="news-meta mb-2 text-muted" style="font-size: 0.85rem;">
                                <span><i class="bi bi-calendar3 me-1"></i> 08 Jan 2026</span>
                            </div>
                            <h4 class="news-title fw-bold mb-3" style="font-size: 1.2rem; line-height: 1.4;">Standar
                                Keamanan Vault di CESS GOLD</h4>
                            <p class="news-excerpt text-muted mb-4" style="font-size: 0.9rem; line-height: 1.6;">Intip
                                sistem penyimpanan emas kami yang menggunakan teknologi pengamanan terbaru...</p>
                            <a href="#" class="news-link mt-auto fw-bold text-decoration-none"
                                style="color: #d4af37; font-size: 0.9rem;">Baca Selengkapnya <i
                                    class="bi bi-chevron-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News End -->


    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close btn-close-white ms-auto mb-2" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 text-center">
                    <img src="" id="fullSizeImage" class="img-fluid rounded shadow-lg" style="max-height: 85vh;">
                    <h4 id="modalTitle" class="text-white mt-3 serif-bold"></h4>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <footer class="footer-luxury" id="kontak-footer">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-4">
                        <img src="img/cess.png" alt="CESS GOLD" class="footer-logo mb-2" width="50">
                        <h3 class="text-white h4">CESS GOLD</h3>
                    </div>
                    <p class="footer-desc">Penyedia logam mulia terpercaya & berkualitas.</p>
                    <div class="social-links d-flex gap-3">
                        <a href="#" class="social-item"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-item"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Jam Operasional</h5>
                    <ul class="list-unstyled footer-list">
                        <li><span>Senin – Jumat :</span> 10:00 – 19:00</li>
                        <li><span>Sabtu :</span> 10:00 – 18:00</li>
                        <li><span>Minggu :</span> Tutup</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Kontak Kami</h5>
                    <ul class="list-unstyled footer-list">
                        <li><i class="bi bi-geo-alt-fill me-2 text-gold"></i> Jl. Suryo No.49, Lt.3 Kec. Kebayoran Baru,
                            Jakarta Selatan 12180</li>
                        <li><i class="bi bi-telephone-fill me-2 text-gold"></i> 082298413004</li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="footer-title">Navigasi</h5>
                    <div class="row">
                        <div class="col-6">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Beranda</a></li>
                                <li><a href="#">Logam Mulia</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled footer-list">
                                <li><a href="#">Artikel</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom text-center">
                <p class="mb-0">© 2026 CESS GOLD — All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Back to Top -->
    <a href="#!" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function showFullImage(src, title) {
            document.getElementById('fullSizeImage').src = src;
            document.getElementById('modalTitle').innerText = title;
        }

        window.addEventListener('scroll', () => {
    let sections = document.querySelectorAll('section, footer');
    let navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    sections.forEach(section => {
        let top = window.scrollY;
        let offset = section.offsetTop - 150;
        let height = section.offsetHeight;
        let id = section.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (id) {
                    document.querySelector('.navbar-nav a[href*=' + id + ']').classList.add('active');
                }
            });
        }
    });
});

      const hargaConfig = {
        beli: `{{ $golds->items[0]->selling_price }}`,
        jual: `{{ $golds->items[0]->buyback_price }}`
    };

    let currentMode = 'beli';
    let rowCount = 0;

    // Tambah Baris Baru
   function addNewRow() {
    rowCount++;
    const container = document.getElementById('repeater-container');
    const rowDiv = document.createElement('div');
    rowDiv.className = 'repeater-row animate__animated animate__fadeIn mb-3';
    rowDiv.id = `row-${rowCount}`;
    rowDiv.innerHTML = `
        <div class="d-flex align-items-center gap-2 p-3" style="background-color:rgb(250, 246, 237);border-radius: 20px; border: 1px solid #eee;">
            <div class="flex-grow-1">
                <select class="form-select select-gram shadow-none" 
                        onchange="calculateAll()" 
                        style="height: 45px; border-radius: 12px; border: 1px solid #ddd;">
                    <option value="1">1 gr</option>
                    <option value="2">2 gr</option>
                    <option value="5">5 gr</option>
                    <option value="10" selected>10 gr</option>
                    <option value="25">25 gr</option>
                    <option value="50">50 gr</option>
                    <option value="100">100 gr</option>
                </select>
            </div>

            <div class="d-flex align-items-center bg-white border" 
                 style="height: 45px; border-radius: 12px; padding: 0 10px; min-width: 120px;">
                <button class="btn btn-sm p-0 m-0 border-0 shadow-none text-gold fw-bold" 
                        onclick="updateQty(${rowCount}, -1)" style="width: 25px;">-</button>
                <input type="number" id="qty-${rowCount}" value="1" min="1" readonly 
                       class="border-0 text-center fw-bold input-qty" 
                       style="width: 50px; background: transparent; font-size: 1rem;">
                <button class="btn btn-sm p-0 m-0 border-0 shadow-none text-gold fw-bold" 
                        onclick="updateQty(${rowCount}, 1)" style="width: 25px;">+</button>
            </div>

            <button class="btn btn-danger d-flex align-items-center justify-content-center" 
                    onclick="removeRow(${rowCount})" 
                    style="height: 45px; width: 45px; border-radius: 12px;">
                <i class="bi bi-trash"></i>
            </button>
        </div>
    `;
    container.appendChild(rowDiv);
    calculateAll();
}

    function updateQty(id, val) {
        const input = document.getElementById(`qty-${id}`);
        let newVal = parseInt(input.value) + val;
        if (newVal >= 1) {
            input.value = newVal;
            calculateAll();
        }
    }

    function removeRow(id) {
        document.getElementById(`row-${id}`).remove();
        calculateAll();
    }

    function calculateAll() {
        const rows = document.querySelectorAll('.repeater-row');
        let totalBerat = 0;
        let hargaAktif = hargaConfig[currentMode];

        rows.forEach(row => {
            const gram = parseInt(row.querySelector('.select-gram').value);
            const qty = parseInt(row.querySelector('.input-qty').value);
            totalBerat += (gram * qty);
        });

        const totalHarga = totalBerat * hargaAktif;
        const formatIDR = (num) => "Rp " + num.toLocaleString('id-ID');

        document.getElementById('pricePerGramText').innerText = formatIDR(hargaAktif);
        document.getElementById('totalWeightText').innerText = totalBerat + " gram";
        document.getElementById('totalResult').innerText = formatIDR(totalHarga);
    }

    const ctx = document.getElementById('goldPriceChart').getContext('2d');
    
    // Gradien Warna Emas untuk Area Chart
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(212, 175, 55, 0.4)');
    gradient.addColorStop(1, 'rgba(212, 175, 55, 0.0)');

    // Data Dummy (Nanti bisa dihubungkan ke API)
    const dataSets = {
        '1y': {
            labels: ['Jan', 'Mar', 'Mei', 'Jul', 'Sep', 'Nov', 'Jan'],
            data: [1500000, 1950000, 1800000, 2100000, 2400000, 3100000, 2900000]
        },
        '6m': {
            labels: ['Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            data: [2100000, 2200000, 2400000, 2800000, 3100000, 2950000]
        },
        '1m': {
            labels: ['Mgg 1', 'Mgg 2', 'Mgg 3', 'Mgg 4'],
            data: [2800000, 2900000, 2850000, 2900000]
        }
    };

    let goldChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataSets['1y'].labels,
            datasets: [{
                label: 'Harga Emas (IDR)',
                data: dataSets['1y'].data,
                borderColor: '#d4af37',
                borderWidth: 3,
                backgroundColor: gradient,
                fill: true,
                tension: 0.4, // Membuat garis melengkung halus
                pointRadius: 4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#d4af37',
                pointHoverRadius: 7
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: false,
                    grid: { color: 'rgba(0,0,0,0.05)' },
                    ticks: {
                        callback: function(value) {
                            return 'Rp' + (value/1000000).toFixed(1) + 'M';
                        }
                    }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });

    // Fungsi untuk Update Data saat tombol diklik
    function updateChartData(range, btn) {
        // Update active button UI
        document.querySelectorAll('.btn-chart-sm').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // Update Chart
        goldChart.data.labels = dataSets[range].labels;
        goldChart.data.datasets[0].data = dataSets[range].data;
        goldChart.update();
    }

    function toggleSim(mode) {
        currentMode = mode;
        
        // 1. Update UI Tab (Aktif/Non-aktif)
        document.getElementById('btn-tab-beli').classList.toggle('active', mode === 'beli');
        document.getElementById('btn-tab-jual').classList.toggle('active', mode === 'jual');

        // 2. Update Label & Tombol
        const labelPrice = document.getElementById('labelPriceType');
        const labelTotal = document.getElementById('labelTotalType');
        const actionBtn = document.getElementById('mainActionButton');
        const buybackRow = document.getElementById('buybackRow');

        if (mode === 'beli') {
            labelPrice.innerText = "Harga Beli per gram:";
            labelTotal.innerText = "Total Pembayaran:";
            actionBtn.innerText = "Beli Sekarang";
            actionBtn.style.background = "linear-gradient(135deg, #e0c073 0%, #b89146 100%)";
            buybackRow.setAttribute('style', 'display: none !important'); 
        } else {
            labelPrice.innerText = "Harga Buyback per gram:";
            labelTotal.innerText = "Total Penerimaan:";
            actionBtn.innerText = "Jual Sekarang";
            actionBtn.style.background = "linear-gradient(135deg, #333 0%, #000 100%)"; 
            buybackRow.setAttribute('style', 'display: flex !important'); // Tampilkan rate buyback saat jual
        }

        // 3. Trigger hitung ulang
        updateTotal();
    }

    function updateTotal() {
        const select = document.getElementById('goldAmount');
        const pricePerGramText = document.getElementById('pricePerGramText');
        const totalText = document.getElementById('totalResult');
        
        const gram = parseInt(select.value);
        const hargaAktif = hargaConfig[currentMode];

        // Format Rupiah Helper
       const formatIDR = (num) => {
    return "Rp " + Number(num).toLocaleString('id-ID', {
    minimumFractionDigits: 0,
    maximumFractionDigits: 0
    });
    };

        // Update UI
        pricePerGramText.innerText = formatIDR(hargaAktif);
        const total = gram * hargaAktif;
        
        // Animasi angka berubah
        totalText.innerText = formatIDR(total);
        totalText.style.opacity = "0";
        setTimeout(() => {
            totalText.style.opacity = "1";
            totalText.style.transition = "0.3s";
        }, 50);
    }

    // Inisialisasi awal
    window.onload = () => toggleSim('beli');
    </script>


    <a href="https://wa.me/6282298413004?text=Halo%20CESS%20GOLD,%20saya%20ingin%20tanya%20tentang%20investasi%20emas"
        class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
</body>

</html>