<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rafael Antonius Nababan - Portfolio Profesional</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/785/785116.png" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Raleway:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --purple: #8A2BE2;
            --purple-light: #9370DB;
            --purple-dark: #4B0082;
            --white: #ffffff;
            --light-gray: #f8f9fa;
            --gray: #e9ecef;
            --dark-gray: #6c757d;
            --gradient: linear-gradient(135deg, #8A2BE2 0%, #9370DB 50%, #4B0082 100%);
            --gradient-light: linear-gradient(135deg, #a35ef0 0%, #a891e8 50%, #6a11cb 100%);
            --shadow: 0 10px 30px rgba(138, 43, 226, 0.1);
            --shadow-hover: 0 20px 40px rgba(138, 43, 226, 0.2);
        }

        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
            background-color: var(--white);
            color: #333;
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 80%, rgba(147, 112, 219, 0.05) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(138, 43, 226, 0.05) 0%, transparent 50%);
            z-index: -1;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Raleway', sans-serif;
            font-weight: 800;
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(248, 249, 250, 0.98) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section::after {
            content: '';
            position: absolute;
            width: 300%;
            height: 300%;
            top: -100%;
            left: -100%;
            background: radial-gradient(circle, rgba(138, 43, 226, 0.1) 0%, transparent 70%);
            animation: rotate 30s linear infinite;
            z-index: 0;
        }

        .btn-primary {
            background: var(--gradient);
            color: white;
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: none;
            font-weight: 600;
        }

        .btn-primary::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.6s;
            z-index: -1;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-hover);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--purple);
            color: var(--purple);
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .btn-secondary:hover {
            background: var(--purple);
            color: white;
            transform: translateY(-4px);
            box-shadow: var(--shadow);
        }

        .card-3d {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(138, 43, 226, 0.1);
        }

        .card-3d::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }

        .card-3d:hover {
            transform: translateY(-10px) rotateX(2deg);
            box-shadow: 0 25px 50px -12px rgba(138, 43, 226, 0.25);
        }

        .feature-card {
            transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            background: white;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(138, 43, 226, 0.1);
            position: relative;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .nav-transparent {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9);
            border-bottom: 1px solid rgba(138, 43, 226, 0.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            position: relative;
            display: inline-block;
            color: var(--purple-dark);
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60%;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }

        .skill-badge {
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.1) 0%, rgba(147, 112, 219, 0.1) 100%);
            border-radius: 20px;
            padding: 8px 18px;
            font-size: 0.9rem;
            margin: 5px;
            display: inline-block;
            border: 1px solid rgba(138, 43, 226, 0.2);
            transition: all 0.3s ease;
            color: var(--purple-dark);
            font-weight: 500;
        }

        .skill-badge:hover {
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.2) 0%, rgba(147, 112, 219, 0.2) 100%);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(138, 43, 226, 0.1);
        }

        .timeline {
            border-left: 3px solid var(--purple);
            padding-left: 25px;
            margin-left: 10px;
        }

        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }

        .timeline-item:before {
            content: '';
            position: absolute;
            top: 8px;
            left: -31px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--purple);
            border: 3px solid white;
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.3);
        }

        .tech-icon {
            font-size: 2.5rem;
            margin: 10px 15px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all 0.3s ease;
        }

        .tech-icon:hover {
            transform: translateY(-8px) scale(1.1);
        }

        .contact-card {
            background: white;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(138, 43, 226, 0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
        }

        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-hover);
        }

        .contact-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--gradient);
        }

        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(138, 43, 226, 0.2);
            transition: all 0.3s ease;
            color: var(--purple);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .social-icon:hover {
            transform: translateY(-5px);
            background: var(--gradient);
            color: white;
            box-shadow: 0 10px 20px rgba(138, 43, 226, 0.2);
        }

        .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(2deg);
            }

            100% {
                transform: translateY(0px) rotate(0deg);
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: var(--purple);
            border-radius: 50%;
            opacity: 0.1;
        }

        .purple-gradient-text {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        footer {
            background: linear-gradient(135deg, var(--purple-dark) 0%, var(--purple) 100%);
            color: white;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.1) 0%, rgba(147, 112, 219, 0.05) 100%);
            animation: floatShape 20s infinite linear;
        }

        @keyframes floatShape {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -50px) rotate(120deg);
            }

            66% {
                transform: translate(-20px, 20px) rotate(240deg);
            }

            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--light-gray);
        }

        ::webkit-scrollbar-thumb {
            background: var(--gradient);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--gradient-light);
        }

        /* 3D Card Effects */
        .perspective-1000 {
            perspective: 1000px;
        }

        .preserve-3d {
            transform-style: preserve-3d;
        }

        .backface-hidden {
            backface-visibility: hidden;
        }

        /* Graphic Design Skills Section */
        .design-tool-icon {
            font-size: 2rem;
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 15px;
            margin: 0 auto 15px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            color: var(--purple);
        }

        .design-tool-icon:hover {
            transform: translateY(-5px) scale(1.1);
            background: var(--gradient);
            color: white;
            box-shadow: 0 10px 25px rgba(138, 43, 226, 0.2);
        }

        /* Progress Bar */
        .progress-bar {
            height: 8px;
            background: rgba(138, 43, 226, 0.1);
            border-radius: 4px;
            overflow: hidden;
            margin-top: 8px;
        }

        .progress-fill {
            height: 100%;
            background: var(--gradient);
            border-radius: 4px;
            transition: width 1.5s ease-in-out;
        }

        /* Hover effect for project cards */
        .project-card {
            position: relative;
            overflow: hidden;
        }

        .project-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(138, 43, 226, 0.9) 0%, rgba(147, 112, 219, 0.7) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s ease;
            border-radius: 12px;
        }

        .project-card:hover .project-overlay {
            opacity: 1;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Animated Background Shapes -->
    <div class="particles" id="particles"></div>
    <div class="floating-shape w-64 h-64 top-20 left-10 opacity-10"></div>
    <div class="floating-shape w-96 h-96 bottom-20 right-10 opacity-5"></div>

    <!-- Navigation -->
    <header class="fixed top-0 left-0 w-full z-50 nav-transparent">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-purple-700 flex items-center justify-center">
                    <i class="fas fa-laptop-code text-white text-lg"></i>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">Rafael<span
                        class="purple-gradient-text font-bold">Portfolio</span></h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="font-medium text-purple-700 hover:text-purple-600 transition">Beranda</a>
                <a href="#about" class="font-medium text-gray-600 hover:text-purple-600 transition">Tentang</a>
                <a href="#projects" class="font-medium text-gray-600 hover:text-purple-600 transition">Proyek</a>
                <a href="#skills" class="font-medium text-gray-600 hover:text-purple-600 transition">Keahlian</a>
                <a href="#design" class="font-medium text-gray-600 hover:text-purple-600 transition">Desain</a>
                <a href="#contact" class="font-medium text-gray-600 hover:text-purple-600 transition">Kontak</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="#contact" class="btn-primary px-5 py-2.5 rounded-full font-medium shadow-md">
                    Hubungi Saya
                </a>
                <button class="md:hidden text-gray-600 focus:outline-none" id="menuToggle">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white border-t border-purple-100 py-4 shadow-lg" id="mobileMenu">
            <div class="flex flex-col space-y-3 px-6">
                <a href="#home" class="font-medium text-purple-700">Beranda</a>
                <a href="#about" class="font-medium text-gray-600">Tentang</a>
                <a href="#projects" class="font-medium text-gray-600">Proyek</a>
                <a href="#skills" class="font-medium text-gray-600">Keahlian</a>
                <a href="#design" class="font-medium text-gray-600">Desain</a>
                <a href="#contact" class="font-medium text-gray-600">Kontak</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 hero-section min-h-screen flex items-center relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <div class="inline-block px-4 py-2 rounded-full bg-gradient-to-r from-purple-100 to-purple-50 text-purple-700 font-medium mb-6" data-aos="fade-right">
                        <i class="fas fa-graduation-cap mr-2"></i>Mahasiswa Manajemen Informatika
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-4 text-gray-800" data-aos="fade-right">
                        Rafael Antonius <span class="purple-gradient-text">Nababan</span>
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-purple-600" data-aos="fade-right"
                        data-aos-delay="100">
                        Pengembang Sistem Informasi & Aplikasi
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-xl" data-aos="fade-right"
                        data-aos-delay="200">
                        Mahasiswa aktif <span class="font-semibold text-purple-700">Politeknik Negeri Medan</span> yang berfokus pada pengembangan perangkat lunak, sistem informasi, aplikasi mobile, dan desain grafis.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4" data-aos="fade-right"
                        data-aos-delay="300">
                        <a href="#projects"
                            class="btn-primary px-6 py-3 rounded-full font-medium shadow-md text-center">
                            <i class="fas fa-code mr-2"></i>Lihat Proyek Saya
                        </a>
                        <a href="#contact"
                            class="btn-secondary px-6 py-3 rounded-full font-medium transition text-center">
                            <i class="fas fa-envelope mr-2"></i>Hubungi Saya
                        </a>
                    </div>
                    
                    <div class="flex mt-10 space-x-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-700">10+</div>
                            <div class="text-gray-600">Proyek Selesai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-700">8+</div>
                            <div class="text-gray-600">Teknologi Dikuasai</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-purple-700">5+</div>
                            <div class="text-gray-600">Tools Desain</div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative flex justify-center" data-aos="fade-left" data-aos-delay="400">
                    <div class="perspective-1000">
                        <div class="relative w-72 h-72 md:w-96 md:h-96 rounded-2xl overflow-hidden border-8 border-white shadow-2xl floating preserve-3d" 
                             style="transform: rotateY(15deg) rotateX(5deg);">
                            <img src="foto.jpg" alt="Rafael Antonius Nababan" class="w-full h-full object-cover" width="800"
                                height="600">
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/20 to-transparent"></div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-xl z-10 hidden md:block border border-purple-100"
                        data-aos="fade-up" data-aos-delay="600">
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-3 border border-purple-200">
                                <i class="fas fa-university text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-gray-800">Politeknik Negeri Medan</p>
                                <p class="text-sm text-gray-600">Manajemen Informatika</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-10" data-aos="fade-right">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl card-3d">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Politeknik Negeri Medan" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-t from-purple-900/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <h4 class="text-xl font-bold">Politeknik Negeri Medan</h4>
                            <p class="text-purple-100">Kampus Vokasi Unggulan Sumatera Utara</p>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2" data-aos="fade-left">
                    <h3 class="section-title text-3xl font-bold inline-block">Tentang Saya</h3>
                    <p class="mt-6 text-gray-600 mb-6">
                        Saya <span class="font-semibold text-purple-700">Rafael Antonius Nababan</span>, mahasiswa aktif Program Studi Manajemen Informatika di Politeknik Negeri Medan. Saya memiliki passion dalam pengembangan perangkat lunak, sistem informasi, aplikasi mobile, dan desain grafis.
                    </p>

                    <div class="mb-8">
                        <h4 class="text-xl font-bold text-gray-800 mb-4">Pendidikan</h4>
                        <div class="timeline">
                            <div class="timeline-item">
                                <h5 class="font-bold text-lg text-gray-800">Politeknik Negeri Medan</h5>
                                <p class="text-purple-600 font-medium">Manajemen Informatika | 2023 - Sekarang</p>
                                <p class="text-gray-600 mt-2">Mahasiswa aktif dengan fokus pada pengembangan sistem informasi dan aplikasi. IPK: 3.75/4.00</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-gray-800 mb-4">Minat & Keahlian Utama</h4>
                        <div class="flex flex-wrap">
                            <span class="skill-badge"><i class="fas fa-code mr-2"></i>Web Development</span>
                            <span class="skill-badge"><i class="fas fa-mobile-alt mr-2"></i>Mobile App Development</span>
                            <span class="skill-badge"><i class="fas fa-database mr-2"></i>Sistem Informasi</span>
                            <span class="skill-badge"><i class="fas fa-paint-brush mr-2"></i>UI/UX Design</span>
                            <span class="skill-badge"><i class="fas fa-palette mr-2"></i>Desain Grafis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h3 class="section-title text-3xl font-bold inline-block">Proyek Terbaru</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Beberapa proyek sistem informasi, aplikasi, dan desain yang telah saya kembangkan
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="card-3d p-6 rounded-2xl project-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="https://blog.moservice.id/wp-content/uploads/2025/05/rekomendasi-bengkel-mobil-di-medan.jpg"
                            alt="Sistem Informasi Bengkel Sicepat" class="project-image w-full h-48 object-cover">
                        <div class="project-overlay">
                            <a href="#" class="bg-white text-purple-700 px-4 py-2 rounded-full font-medium hover:bg-purple-50 transition">Lihat Detail</a>
                        </div>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-gray-800">Sistem Informasi Bengkel Sicepat</h4>
                    <p class="text-gray-600 mb-4">
                        Sistem informasi manajemen bengkel untuk PT Sicepat Ekspres yang mencakup manajemen inventaris, penjadwalan perawatan, dan pelacakan riwayat kendaraan.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">PHP</span>
                        <span class="skill-badge">Laravel</span>
                        <span class="skill-badge">MySQL</span>
                        <span class="skill-badge">Bootstrap</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="card-3d p-6 rounded-2xl project-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Sistem Informasi Karyawan" class="project-image w-full h-48 object-cover">
                        <div class="project-overlay">
                            <a href="#" class="bg-white text-purple-700 px-4 py-2 rounded-full font-medium hover:bg-purple-50 transition">Lihat Detail</a>
                        </div>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-gray-800">Sistem Informasi Karyawan</h4>
                    <p class="text-gray-600 mb-4">
                        Sistem manajemen karyawan terintegrasi dengan fitur absensi digital, pengajuan cuti, dan manajemen kinerja untuk perusahaan manufaktur.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">Java</span>
                        <span class="skill-badge">Spring Boot</span>
                        <span class="skill-badge">PostgreSQL</span>
                        <span class="skill-badge">React.js</span>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="card-3d p-6 rounded-2xl project-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="relative overflow-hidden rounded-xl mb-4">
                        <img src="https://play-lh.googleusercontent.com/2tLGVMyoPVLj2yWsD0O90uyknwWcyE_-aBDi6n0ajMf_nt6oLOWu3gvBgSTpNTRriA=w526-h296-rw"
                            alt="Aplikasi Android" class="project-image w-full h-48 object-cover">
                        <div class="project-overlay">
                            <a href="#" class="bg-white text-purple-700 px-4 py-2 rounded-full font-medium hover:bg-purple-50 transition">Lihat Detail</a>
                        </div>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-gray-800">Aplikasi Android HKBP Mobile</h4>
                    <p class="text-gray-600 mb-4">
                        Aplikasi mobile untuk platform HKBP Mobile dengan fitur untuk menunjang kegiatan rohani gereja.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">Kotlin</span>
                        <span class="skill-badge">Android Studio</span>
                        <span class="skill-badge">Firebase</span>
                        <span class="skill-badge">REST API</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12" data-aos="fade-up">
                <a href="#" class="btn-secondary px-6 py-3 rounded-full font-medium">
                    <i class="fas fa-eye mr-2"></i>Lihat Semua Proyek
                </a>
            </div>
        </div>
    </section>

    <!-- Technical Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h3 class="section-title text-3xl font-bold inline-block">Keahlian Teknis</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Teknologi dan tools yang saya kuasai dalam pengembangan perangkat lunak
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                    <i class="fab fa-html5 tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2 text-gray-800">Frontend Development</h4>
                    <p class="text-gray-600 mb-4">
                        HTML5, CSS3, JavaScript, Bootstrap, React.js, Vue.js
                    </p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 90%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-server tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2 text-gray-800">Backend Development</h4>
                    <p class="text-gray-600 mb-4">
                        PHP, Laravel, Python, Django, Java, Spring Boot, Node.js
                    </p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 85%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-database tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2 text-gray-800">Database</h4>
                    <p class="text-gray-600 mb-4">
                        MySQL, PostgreSQL, MongoDB, Firebase, Database Design
                    </p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 80%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="400">
                    <i class="fab fa-android tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2 text-gray-800">Mobile Development</h4>
                    <p class="text-gray-600 mb-4">
                        Android (Java/Kotlin), Flutter, REST API Integration
                    </p>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Graphic Design Skills Section -->
    <section id="design" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h3 class="section-title text-3xl font-bold inline-block">Keahlian Desain Grafis</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Tools dan kemampuan desain yang saya kuasai untuk menciptakan visual yang menarik
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6">
                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="design-tool-icon bg-gradient-to-r from-purple-100 to-pink-100">
                        <i class="fab fa-figma"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-2 text-gray-800">Figma</h4>
                    <p class="text-gray-600 text-sm">UI/UX Design, Prototyping, Wireframing</p>
                    <div class="progress-bar mt-3">
                        <div class="progress-fill" style="width: 90%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="150">
                    <div class="design-tool-icon bg-gradient-to-r from-blue-100 to-cyan-100">
                        <i class="fab fa-adobe"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-2 text-gray-800">Adobe Photoshop</h4>
                    <p class="text-gray-600 text-sm">Photo Editing, Digital Art, Graphic Design</p>
                    <div class="progress-bar mt-3">
                        <div class="progress-fill" style="width: 85%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                    <div class="design-tool-icon bg-gradient-to-r from-orange-100 to-yellow-100">
                        <i class="fas fa-pen-nib"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-2 text-gray-800">Adobe Illustrator</h4>
                    <p class="text-gray-600 text-sm">Vector Graphics, Logo Design, Illustrations</p>
                    <div class="progress-bar mt-3">
                        <div class="progress-fill" style="width: 80%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="250">
                    <div class="design-tool-icon bg-gradient-to-r from-green-100 to-emerald-100">
                        <i class="fas fa-video"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-2 text-gray-800">Adobe Premiere Pro</h4>
                    <p class="text-gray-600 text-sm">Video Editing, Motion Graphics, Animation</p>
                    <div class="progress-bar mt-3">
                        <div class="progress-fill" style="width: 70%"></div>
                    </div>
                </div>

                <div class="text-center p-6 card-3d rounded-2xl" data-aos="fade-up" data-aos-delay="300">
                    <div class="design-tool-icon bg-gradient-to-r from-red-100 to-pink-100">
                        <i class="fas fa-cube"></i>
                    </div>
                    <h4 class="text-lg font-bold mb-2 text-gray-800">Blender 3D</h4>
                    <p class="text-gray-600 text-sm">3D Modeling, Animation, Rendering</p>
                    <div class="progress-bar mt-3">
                        <div class="progress-fill" style="width: 65%"></div>
                    </div>
                </div>
            </div>

            <div class="mt-12 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-8" data-aos="fade-up">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-2/3 mb-6 md:mb-0 md:pr-8">
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Kombinasi Teknologi & Desain</h4>
                        <p class="text-gray-600">
                            Saya percaya bahwa teknologi dan desain harus berjalan beriringan. Dengan kemampuan pengembangan perangkat lunak dan desain grafis, saya dapat menciptakan solusi digital yang tidak hanya fungsional tetapi juga estetis dan user-friendly.
                        </p>
                    </div>
                    <div class="md:w-1/3 text-center">
                        <div class="inline-block p-4 rounded-full bg-gradient-to-r from-purple-600 to-pink-600 text-white">
                            <i class="fas fa-palette text-4xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h3 class="section-title text-3xl font-bold inline-block">Hubungi Saya</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Tertarik bekerja sama? Silakan hubungi saya melalui informasi kontak berikut
                </p>
            </div>

            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-8">
                <!-- Contact Information -->
                <div class="contact-card p-8 rounded-2xl" data-aos="fade-right">
                    <h4 class="text-xl font-bold text-gray-800 mb-6">Informasi Kontak</h4>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-map-marker-alt text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Alamat</h5>
                                <p class="text-gray-600">Medan, Sumatera Utara, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-envelope text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Email</h5>
                                <p class="text-gray-600">rafaelantoniusnababan@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-phone text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Telepon</h5>
                                <p class="text-gray-600">+62 852 7486 8615</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-university text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Pendidikan</h5>
                                <p class="text-gray-600">Politeknik Negeri Medan<br>Manajemen Informatika</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h5 class="font-bold text-gray-800 mb-4">Temui Saya di Media Sosial</h5>
                        <div class="flex space-x-4">
                            <a href="https://www.linkedin.com/in/rafael-antonius-nababan-7a527a222" target="_blank" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            
                            <a href="https://github.com/" target="_blank" class="social-icon">
                                <i class="fab fa-github"></i>
                            </a>
                            
                            <a href="https://www.tiktok.com/@rafael_nbbn" target="_blank" class="social-icon">
                                <i class="fab fa-tiktok"></i>
                            </a>

                            <a href="https://www.instagram.com/rafael_antonius_nababan" target="_blank" class="social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                            
                            <a href="https://wa.me/+6285274868615" target="_blank" class="social-icon">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Achievements/Certificates -->
                <div class="contact-card p-8 rounded-2xl" data-aos="fade-left">
                    <h4 class="text-xl font-bold text-gray-800 mb-6">Pencapaian & Sertifikat</h4>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-award text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Sertifikat Bintalfisdis</h5>
                                <p class="text-gray-600">2023 - Bina Mental dan Disiplin Rindam I/BB Siantar</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-medal text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Beasiswa KIPK</h5>
                                <p class="text-gray-600">Politeknik Negeri Medan - 2023-2026</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-purple-100 to-purple-50 p-3 rounded-full mr-4 border border-purple-200">
                                <i class="fas fa-certificate text-purple-600"></i>
                            </div>
                            <div>
                                <h5 class="font-bold text-gray-800">Sertifikat Desain UI/UX</h5>
                                <p class="text-gray-600">Online Course - 2024</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h5 class="font-bold text-gray-800 mb-4">Ketersediaan</h5>
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 rounded-xl p-4">
                            <div class="flex items-center">
                                <div class="w-3 h-3 rounded-full bg-green-500 mr-3"></div>
                                <p class="text-gray-800 font-medium">Tersedia untuk proyek freelance dan magang</p>
                            </div>
                            <p class="text-gray-600 mt-2 text-sm">Waktu respon: 1-2 hari kerja</p>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <a href="mailto:rafaelantoniusnababan@gmail.com" class="btn-primary w-full py-3 rounded-xl text-center block">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Email Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
                            <i class="fas fa-laptop-code text-purple-600 text-lg"></i>
                        </div>
                        <h2 class="text-xl font-bold text-white">Rafael<span
                                class="text-purple-200 font-bold">Portfolio</span></h2>
                    </div>
                    <p class="text-purple-100 mb-4">
                        Mahasiswa Manajemen Informatika di Politeknik Negeri Medan yang berfokus pada pengembangan sistem informasi, aplikasi, dan desain grafis.
                    </p>
                    <p class="text-purple-200 italic">"Teknologi adalah seni mengubah dunia dengan kreativitas"</p>
                </div>

                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Navigasi Cepat</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <ul class="space-y-2">
                                <li><a href="#home" class="text-purple-100 hover:text-white transition">Beranda</a>
                                </li>
                                <li><a href="#about" class="text-purple-100 hover:text-white transition">Tentang</a>
                                </li>
                                <li><a href="#projects"
                                        class="text-purple-100 hover:text-white transition">Proyek</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="space-y-2">
                                <li><a href="#skills"
                                        class="text-purple-100 hover:text-white transition">Keahlian</a></li>
                                <li><a href="#design" class="text-purple-100 hover:text-white transition">Desain</a></li>
                                <li><a href="#contact" class="text-purple-100 hover:text-white transition">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-purple-700 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-purple-200 text-sm mb-4 md:mb-0">
                    © 2025 Rafael Antonius Nababan. Portfolio Mahasiswa Politeknik Negeri Medan.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-purple-200 hover:text-white text-sm transition">Kebijakan Privasi</a>
                    <a href="#" class="text-purple-200 hover:text-white text-sm transition">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-in-out'
        });

        // Mobile Menu Toggle
        document.getElementById('menuToggle').addEventListener('click', function () {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });

        // Create Particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                // Random size
                const size = Math.random() * 3 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;

                // Random position
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;

                // Random animation
                const animationDuration = Math.random() * 20 + 10;
                particle.style.animation = `floating ${animationDuration}s infinite ease-in-out`;
                particle.style.animationDelay = `${Math.random() * 5}s`;

                // Random color with purple shades
                const opacity = Math.random() * 0.1 + 0.05;
                particle.style.backgroundColor = `rgba(138, 43, 226, ${opacity})`;

                particlesContainer.appendChild(particle);
            }
        }

        // Initialize particles when page loads
        window.addEventListener('load', createParticles);

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    document.getElementById('mobileMenu').classList.add('hidden');
                }
            });
        });

        // Animate progress bars when in view
        const progressBars = document.querySelectorAll('.progress-fill');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const width = entry.target.style.width;
                    entry.target.style.width = '0%';
                    setTimeout(() => {
                        entry.target.style.width = width;
                    }, 300);
                }
            });
        }, { threshold: 0.5 });

        progressBars.forEach(bar => observer.observe(bar));
    </script>
</body>

</html>
