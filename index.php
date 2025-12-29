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
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.min.js"></script>
</head>

<style>
    :root {
        --primary: #8A2BE2;
        --primary-light: #9D4EDD;
        --primary-dark: #6A0DAD;
        --secondary: #E2DAFF;
        --accent: #C77DFF;
        --light: #F8F7FF;
        --dark: #1A1A2E;
        --gray: #6C757D;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--light);
        color: var(--dark);
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
    }

    /* Horizontal Scroll Container */
    .horizontal-scroll {
        display: flex;
        flex-direction: row;
        width: 400vw;
        height: 100vh;
        position: relative;
    }

    .section {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        padding: 0 5%;
    }

    /* Purple Gradient Backgrounds */
    .bg-gradient-primary {
        background: linear-gradient(135deg, #F8F7FF 0%, #E2DAFF 50%, #8A2BE2 100%);
    }

    .bg-gradient-secondary {
        background: linear-gradient(135deg, #FFFFFF 0%, #F0EBFF 50%, #D8C7FF 100%);
    }

    .bg-gradient-accent {
        background: linear-gradient(135deg, #FFFFFF 0%, #F8F7FF 50%, #E2DAFF 100%);
    }

    /* 3D Card Effects */
    .card-3d {
        transform-style: preserve-3d;
        perspective: 1000px;
        transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card-3d:hover {
        transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
        box-shadow: 0 25px 50px -12px rgba(138, 43, 226, 0.3);
    }

    .card-content {
        transform: translateZ(30px);
    }

    /* Floating Animation */
    @keyframes float {
        0% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }

        100% {
            transform: translateY(0px) rotate(0deg);
        }
    }

    .floating {
        animation: float 6s ease-in-out infinite;
    }

    /* Glowing Effect */
    .glow {
        box-shadow: 0 0 20px rgba(138, 43, 226, 0.2);
        transition: box-shadow 0.3s ease;
    }

    .glow:hover {
        box-shadow: 0 0 40px rgba(138, 43, 226, 0.4);
    }

    /* Progress Bar */
    .progress-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: rgba(138, 43, 226, 0.1);
        z-index: 1000;
    }

    .progress-bar {
        height: 100%;
        background: linear-gradient(90deg, var(--primary), var(--accent));
        width: 0%;
        transition: width 0.3s ease;
    }

    /* Purple Gradient Text */
    .gradient-text {
        background: linear-gradient(90deg, var(--primary), var(--accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Skill Badges */
    .skill-badge {
        background: linear-gradient(135deg, rgba(138, 43, 226, 0.1), rgba(199, 125, 255, 0.1));
        border: 1px solid rgba(138, 43, 226, 0.2);
        border-radius: 25px;
        padding: 10px 20px;
        margin: 5px;
        display: inline-block;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .skill-badge:hover {
        transform: translateY(-5px);
        background: linear-gradient(135deg, rgba(138, 43, 226, 0.2), rgba(199, 125, 255, 0.2));
        box-shadow: 0 10px 20px rgba(138, 43, 226, 0.2);
    }

    /* Navigation Dots */
    .nav-dots {
        position: fixed;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 100;
    }

    .nav-dot {
        width: 12px;
        height: 12px;
        background: rgba(138, 43, 226, 0.3);
        border-radius: 50%;
        margin: 15px 0;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .nav-dot.active {
        background: var(--primary);
        transform: scale(1.5);
        box-shadow: 0 0 10px rgba(138, 43, 226, 0.5);
    }

    /* 3D Scene Container */
    #scene-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        opacity: 0.3;
    }

    /* Section Titles */
    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 50px;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary), var(--accent));
        border-radius: 2px;
        transform-origin: left;
        animation: lineGrow 1s ease-out forwards;
    }

    @keyframes lineGrow {
        from {
            transform: scaleX(0);
        }

        to {
            transform: scaleX(1);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .horizontal-scroll {
            flex-direction: column;
            width: 100vw;
            height: auto;
        }

        .section {
            width: 100vw;
            height: auto;
            min-height: 100vh;
            padding: 100px 5% 50px;
        }

        .nav-dots {
            display: none;
        }
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        color: var(--primary);
        font-size: 24px;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0) translateX(-50%);
        }

        40% {
            transform: translateY(-10px) translateX(-50%);
        }

        60% {
            transform: translateY(-5px) translateX(-50%);
        }
    }

    /* Project Cards */
    .project-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid rgba(138, 43, 226, 0.1);
    }

    .project-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 30px 60px rgba(138, 43, 226, 0.15);
    }

    /* Timeline */
    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 3px;
        background: linear-gradient(to bottom, var(--primary), var(--accent));
    }

    .timeline-item {
        position: relative;
        margin-bottom: 40px;
        padding-left: 20px;
    }

    .timeline-item:before {
        content: '';
        position: absolute;
        left: -33px;
        top: 5px;
        width: 15px;
        height: 15px;
        border-radius: 50%;
        background: var(--primary);
        border: 3px solid white;
        box-shadow: 0 0 0 4px rgba(138, 43, 226, 0.2);
    }

    /* Contact Form */
    .contact-input {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(138, 43, 226, 0.2);
        border-radius: 12px;
        padding: 15px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .contact-input:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
    }

    /* Button Styles */
    .btn-primary {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: white;
        border: none;
        border-radius: 25px;
        padding: 15px 30px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(138, 43, 226, 0.3);
    }

    .btn-primary:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 5px;
        height: 5px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 0;
        border-radius: 100%;
        transform: scale(1, 1) translate(-50%);
        transform-origin: 50% 50%;
    }

    .btn-primary:focus:not(:active)::after {
        animation: ripple 1s ease-out;
    }

    @keyframes ripple {
        0% {
            transform: scale(0, 0);
            opacity: 0.5;
        }

        100% {
            transform: scale(20, 20);
            opacity: 0;
        }
    }
</style>

<body>
    <!-- Progress Bar -->
    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <!-- Navigation Dots -->
    <div class="nav-dots">
        <div class="nav-dot active" data-section="0"></div>
        <div class="nav-dot" data-section="1"></div>
        <div class="nav-dot" data-section="2"></div>
        <div class="nav-dot" data-section="3"></div>
        <div class="nav-dot" data-section="4"></div>
    </div>

    <!-- 3D Background Scene -->
    <div id="scene-container"></div>

    <!-- Horizontal Scroll Container -->
    <div class="horizontal-scroll" id="horizontalScroll">
        <!-- Section 1: Hero -->
        <section class="section bg-gradient-primary" id="home">
            <div class="max-w-6xl w-full mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="md:w-1/2 mb-12 md:mb-0" data-aos="fade-right">
                        <h1 class="text-5xl md:text-7xl font-bold mb-6">
                            Rafael Antonius <span class="gradient-text">Nababan</span>
                        </h1>
                        <h2 class="text-2xl md:text-3xl font-semibold mb-8 text-gray-700">
                            Mahasiswa <span class="gradient-text">Manajemen Informatika</span>
                        </h2>
                        <p class="text-lg text-gray-600 mb-10 leading-relaxed max-w-xl">
                            Politeknik Negeri Medan | Spesialis Pengembangan Sistem Informasi, Aplikasi, dan Desain
                            Grafis
                        </p>
                        <div class="flex flex-wrap gap-4">
                            <button class="btn-primary" onclick="scrollToSection(1)">
                                <i class="fas fa-arrow-down mr-2"></i> Jelajahi Portfolio
                            </button>
                            <a href="#contact" class="border-2 border-primary text-primary px-8 py-3 rounded-full font-medium hover:bg-primary hover:text-white transition">
                                Hubungi Saya
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center" data-aos="fade-left">
                        <div class="relative">
                            <div
                                class="w-72 h-72 md:w-96 md:h-96 rounded-full overflow-hidden border-8 border-white/50 shadow-2xl floating card-3d">
                                <img src="foto.jpg" alt="Rafael Antonius Nababan"
                                    class="w-full h-full object-cover object-center">
                            </div>
                            <!-- Floating Badges -->
                            <div
                                class="absolute -top-6 -right-6 bg-white p-4 rounded-2xl shadow-xl border border-purple-100">
                                <div class="flex items-center">
                                    <div class="bg-purple-100 p-3 rounded-full mr-3">
                                        <i class="fas fa-graduation-cap text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">Politeknik Negeri Medan</p>
                                        <p class="text-sm text-gray-600">Manajemen Informatika</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl border border-purple-100">
                                <div class="flex items-center">
                                    <div class="bg-purple-100 p-3 rounded-full mr-3">
                                        <i class="fas fa-palette text-primary text-xl"></i>
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-800">Desain Grafis</p>
                                        <p class="text-sm text-gray-600">Spesialis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </section>

        <!-- Section 2: About -->
        <section class="section bg-gradient-secondary" id="about">
            <div class="max-w-6xl w-full mx-auto">
                <h2 class="section-title text-4xl font-bold text-gray-800 mb-12">Tentang Saya</h2>
                <div class="grid md:grid-cols-2 gap-12">
                    <div data-aos="fade-up">
                        <div class="card-3d bg-white p-8 rounded-3xl shadow-lg mb-8">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Profil</h3>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Saya Rafael Antonius Nababan, mahasiswa aktif Program Studi Manajemen Informatika di
                                Politeknik Negeri Medan. Saya memiliki passion dalam pengembangan perangkat lunak,
                                sistem informasi, aplikasi mobile, dan desain grafis.
                            </p>
                            <div class="flex items-center mt-6">
                                <div class="w-16 h-16 rounded-full overflow-hidden mr-4 border-4 border-white shadow">
                                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                        alt="Politeknik Negeri Medan" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800">Politeknik Negeri Medan</h4>
                                    <p class="text-sm text-gray-600">Kampus Vokasi Unggulan Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200">
                        <div class="card-3d bg-white p-8 rounded-3xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Keahlian Utama</h3>
                            <div class="mb-6">
                                <h4 class="font-bold text-gray-700 mb-3">Pengembangan Perangkat Lunak</h4>
                                <div class="flex flex-wrap">
                                    <span class="skill-badge">Web Development</span>
                                    <span class="skill-badge">Mobile App</span>
                                    <span class="skill-badge">Sistem Informasi</span>
                                    <span class="skill-badge">Database Design</span>
                                </div>
                            </div>
                            <div class="mb-6">
                                <h4 class="font-bold text-gray-700 mb-3">Desain Grafis</h4>
                                <div class="flex flex-wrap">
                                    <span class="skill-badge">UI/UX Design</span>
                                    <span class="skill-badge">Adobe Photoshop</span>
                                    <span class="skill-badge">Adobe Illustrator</span>
                                    <span class="skill-badge">Figma</span>
                                    <span class="skill-badge">Canva</span>
                                    <span class="skill-badge">CorelDRAW</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-700 mb-3">Tools & Teknologi</h4>
                                <div class="flex flex-wrap">
                                    <span class="skill-badge">Git</span>
                                    <span class="skill-badge">VS Code</span>
                                    <span class="skill-badge">Android Studio</span>
                                    <span class="skill-badge">Postman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </section>

        <!-- Section 3: Projects -->
        <section class="section bg-gradient-accent" id="projects">
            <div class="max-w-6xl w-full mx-auto">
                <h2 class="section-title text-4xl font-bold text-gray-800 mb-12">Proyek Terbaru</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="project-card" data-aos="zoom-in">
                        <div class="h-48 overflow-hidden">
                            <img src="https://blog.moservice.id/wp-content/uploads/2025/05/rekomendasi-bengkel-mobil-di-medan.jpg"
                                alt="Sistem Informasi Bengkel" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Sistem Informasi Bengkel Sicepat</h4>
                            <p class="text-gray-600 mb-4">
                                Sistem manajemen bengkel dengan fitur inventaris, penjadwalan, dan pelacakan riwayat
                                kendaraan.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-badge">Laravel</span>
                                <span class="skill-badge">MySQL</span>
                                <span class="skill-badge">Bootstrap</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="h-48 overflow-hidden">
                            <img src="https://play-lh.googleusercontent.com/2tLGVMyoPVLj2yWsD0O90uyknwWcyE_-aBDi6n0ajMf_nt6oLOWu3gvBgSTpNTRriA=w526-h296-rw"
                                alt="Aplikasi Android" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">HKBP Mobile App</h4>
                            <p class="text-gray-600 mb-4">
                                Aplikasi mobile untuk platform HKBP dengan fitur kegiatan rohani dan komunitas gereja.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-badge">Kotlin</span>
                                <span class="skill-badge">Firebase</span>
                                <span class="skill-badge">REST API</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 - Graphic Design -->
                    <div class="project-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="h-48 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1634942537034-2531766767d1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Desain Grafis" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h4 class="text-xl font-bold mb-3 text-gray-800">Portofolio Desain Grafis</h4>
                            <p class="text-gray-600 mb-4">
                                Koleksi karya desain grafis termasuk logo, branding, dan materi promosi digital.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="skill-badge">Photoshop</span>
                                <span class="skill-badge">Illustrator</span>
                                <span class="skill-badge">Figma</span>
                                <span class="skill-badge">UI/UX</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </section>

        <!-- Section 4: Skills -->
        <section class="section bg-gradient-primary" id="skills">
            <div class="max-w-6xl w-full mx-auto">
                <h2 class="section-title text-4xl font-bold text-gray-800 mb-12">Keahlian Teknis</h2>
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Programming Skills -->
                    <div data-aos="fade-right">
                        <div class="card-3d bg-white p-8 rounded-3xl shadow-lg mb-8">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                    <i class="fas fa-code text-primary text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Pengembangan Perangkat Lunak</h3>
                            </div>
                            <div class="space-y-6">
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-medium text-gray-700">Frontend Development</span>
                                        <span class="font-bold text-primary">90%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-primary to-accent rounded-full"
                                            style="width: 90%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-medium text-gray-700">Backend Development</span>
                                        <span class="font-bold text-primary">85%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-primary to-accent rounded-full"
                                            style="width: 85%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-medium text-gray-700">Mobile Development</span>
                                        <span class="font-bold text-primary">80%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-primary to-accent rounded-full"
                                            style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Graphic Design Skills -->
                    <div data-aos="fade-left">
                        <div class="card-3d bg-white p-8 rounded-3xl shadow-lg">
                            <div class="flex items-center mb-6">
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                    <i class="fas fa-palette text-primary text-xl"></i>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-800">Desain Grafis</h3>
                            </div>
                            <div class="space-y-6">
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-medium text-gray-700">UI/UX Design</span>
                                        <span class="font-bold text-primary">88%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-primary to-accent rounded-full"
                                            style="width: 88%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-medium text-gray-700">Adobe Creative Suite</span>
                                        <span class="font-bold text-primary">85%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-primary to-accent rounded-full"
                                            style="width: 85%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="font-medium text-gray-700">Branding & Identity</span>
                                        <span class="font-bold text-primary">82%</span>
                                    </div>
                                    <div class="h-2 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="h-full bg-gradient-to-r from-primary to-accent rounded-full"
                                            style="width: 82%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Timeline Experience -->
                <div class="mt-16" data-aos="fade-up">
                    <h3 class="text-2xl font-bold text-gray-800 mb-8 text-center">Pengalaman & Pendidikan</h3>
                    <div class="timeline max-w-3xl mx-auto">
                        <div class="timeline-item">
                            <h4 class="font-bold text-xl text-gray-800">Politeknik Negeri Medan</h4>
                            <p class="text-primary font-medium mb-2">Manajemen Informatika | 2023 - Sekarang</p>
                            <p class="text-gray-600">Mahasiswa aktif dengan fokus pada pengembangan sistem informasi,
                                aplikasi, dan desain grafis.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-bold text-xl text-gray-800">Freelance Graphic Designer</h4>
                            <p class="text-primary font-medium mb-2">2024 - Sekarang</p>
                            <p class="text-gray-600">Membuat desain logo, branding, dan materi promosi untuk berbagai
                                klien lokal.</p>
                        </div>
                        <div class="timeline-item">
                            <h4 class="font-bold text-xl text-gray-800">Web Developer</h4>
                            <p class="text-primary font-medium mb-2">PT. Metro Oriental Stars | 2025</p>
                            <p class="text-gray-600">Pengembangan website untuk Showroom Jaecoo Medan.</p>
                        </div>
                    </div>
                </div>
                <div class="scroll-indicator">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </section>

        <!-- Section 5: Contact -->
        <section class="section bg-gradient-secondary" id="contact">
            <div class="max-w-6xl w-full mx-auto">
                <h2 class="section-title text-4xl font-bold text-gray-800 mb-12">Hubungi Saya</h2>
                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Info -->
                    <div data-aos="fade-right">
                        <div class="card-3d bg-white p-8 rounded-3xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                            <div class="space-y-6">
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-700">Lokasi</h4>
                                        <p class="text-gray-600">Medan, Sumatera Utara</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-700">Email</h4>
                                        <p class="text-gray-600">rafaelantoniusnababan@gmail.com</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center mr-4">
                                        <i class="fas fa-phone text-primary"></i>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-700">Telepon</h4>
                                        <p class="text-gray-600">+62 852-7486-8615</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media -->
                            <div class="mt-8">
                                <h4 class="font-bold text-gray-700 mb-4">Media Sosial</h4>
                                <div class="flex space-x-4">
                                    <a href="https://www.linkedin.com/in/rafael-antonius-nababan-7a527a222" target="_blank"
                                        class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/" target="_blank"
                                        class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a href="https://www.tiktok.com/@rafael_nbbn" target="_blank"
                                        class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                    <a href="https://www.instagram.com/rafael_antonius_nababan" target="_blank"
                                        class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center hover:bg-primary hover:text-white transition">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div data-aos="fade-left">
                        <div class="card-3d bg-white p-8 rounded-3xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                            <form id="contactForm" class="space-y-6">
                                <div>
                                    <input type="text" placeholder="Nama Lengkap" class="contact-input" required>
                                </div>
                                <div>
                                    <input type="email" placeholder="Email" class="contact-input" required>
                                </div>
                                <div>
                                    <input type="text" placeholder="Subjek" class="contact-input" required>
                                </div>
                                <div>
                                    <textarea placeholder="Pesan" rows="5" class="contact-input" required></textarea>
                                </div>
                                <button type="submit" class="btn-primary w-full">
                                    <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="mt-16 text-center">
                    <div class="flex items-center justify-center mb-4">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center mr-3">
                            <i class="fas fa-laptop-code text-white"></i>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800">Rafael<span class="gradient-text">Portfolio</span>
                        </h2>
                    </div>
                    <p class="text-gray-600">© 2023 Rafael Antonius Nababan. Mahasiswa Politeknik Negeri Medan.</p>
                </div>
            </div>
        </section>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-in-out'
        });

        // Initialize Locomotive Scroll
        const scroll = new LocomotiveScroll({
            el: document.querySelector('#horizontalScroll'),
            direction: 'horizontal',
            smooth: true,
            lerp: 0.1,
            multiplier: 1,
            smartphone: {
                smooth: true,
                direction: 'horizontal'
            },
            tablet: {
                smooth: true,
                direction: 'horizontal'
            }
        });

        // Update progress bar
        scroll.on('scroll', (args) => {
            const progress = (args.scroll.x / (args.limit.x - window.innerWidth)) * 100;
            document.getElementById('progressBar').style.width = `${progress}%`;
        });

        // Navigation dots functionality
        const sections = document.querySelectorAll('.section');
        const navDots = document.querySelectorAll('.nav-dot');

        function updateActiveDot() {
            const scrollX = scroll.scroll.instance.scroll.x;
            const windowWidth = window.innerWidth;
            const currentSection = Math.floor(scrollX / windowWidth);

            navDots.forEach((dot, index) => {
                if (index === currentSection) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        scroll.on('scroll', updateActiveDot);

        // Navigation dots click
        navDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                scroll.scrollTo(index * window.innerWidth, 0, 0, 'horizontal');
            });
        });

        // Smooth scroll to section
        function scrollToSection(sectionIndex) {
            scroll.scrollTo(sectionIndex * window.innerWidth, 0, 0, 'horizontal');
        }

        // 3D Background Scene
        function init3DScene() {
            const container = document.getElementById('scene-container');
            
            // Create scene
            const scene = new THREE.Scene();
            
            // Create camera
            const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.z = 5;
            
            // Create renderer
            const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);
            
            // Create floating shapes
            const shapes = [];
            const geometry = new THREE.IcosahedronGeometry(0.3, 0);
            const material = new THREE.MeshPhongMaterial({
                color: 0x8A2BE2,
                shininess: 100,
                transparent: true,
                opacity: 0.6
            });
            
            // Create multiple floating shapes
            for (let i = 0; i < 20; i++) {
                const shape = new THREE.Mesh(geometry, material);
                
                // Random position
                shape.position.x = (Math.random() - 0.5) * 10;
                shape.position.y = (Math.random() - 0.5) * 10;
                shape.position.z = (Math.random() - 0.5) * 10;
                
                // Random rotation speed
                shape.userData = {
                    rotationSpeedX: (Math.random() - 0.5) * 0.02,
                    rotationSpeedY: (Math.random() - 0.5) * 0.02,
                    rotationSpeedZ: (Math.random() - 0.5) * 0.02,
                    floatSpeed: Math.random() * 0.005 + 0.001
                };
                
                scene.add(shape);
                shapes.push(shape);
            }
            
            // Add lights
            const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
            scene.add(ambientLight);
            
            const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
            directionalLight.position.set(5, 5, 5);
            scene.add(directionalLight);
            
            // Mouse movement effect
            let mouseX = 0;
            let mouseY = 0;
            
            document.addEventListener('mousemove', (event) => {
                mouseX = (event.clientX / window.innerWidth) * 2 - 1;
                mouseY = -(event.clientY / window.innerHeight) * 2 + 1;
            });
            
            // Animation loop
            function animate() {
                requestAnimationFrame(animate);
                
                // Animate shapes
                shapes.forEach((shape, index) => {
                    shape.rotation.x += shape.userData.rotationSpeedX;
                    shape.rotation.y += shape.userData.rotationSpeedY;
                    shape.rotation.z += shape.userData.rotationSpeedZ;
                    
                    // Floating animation
                    shape.position.y += Math.sin(Date.now() * shape.userData.floatSpeed + index) * 0.002;
                    shape.position.x += Math.cos(Date.now() * shape.userData.floatSpeed + index) * 0.002;
                    
                    // Mouse interaction
                    shape.position.x += mouseX * 0.001;
                    shape.position.y += mouseY * 0.001;
                });
                
                // Slight camera rotation
                camera.position.x += (mouseX * 0.5 - camera.position.x) * 0.05;
                camera.position.y += (-mouseY * 0.5 - camera.position.y) * 0.05;
                camera.lookAt(scene.position);
                
                renderer.render(scene, camera);
            }
            
            // Handle window resize
            window.addEventListener('resize', () => {
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(window.innerWidth, window.innerHeight);
            });
            
            animate();
        }
        
        // Initialize 3D scene
        if (WebGLRenderingContext) {
            init3DScene();
        }
        
        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Terima kasih! Pesan Anda telah dikirim. Saya akan menghubungi Anda segera.');
            this.reset();
        });
        
        // Update dots on load
        updateActiveDot();
    </script>
</body>

</html>
