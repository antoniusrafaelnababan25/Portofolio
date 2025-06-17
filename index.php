<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rafael Antonius Nababan - Portfolio</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/785/785116.png" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        scroll-behavior: smooth;
    }

    .hero-gradient {
        background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%);
    }

    .btn-primary {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px -5px rgba(59, 130, 246, 0.4);
    }

    .feature-card {
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
    }

    .feature-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.1);
    }

    .project-image {
        border-radius: 12px;
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        height: 200px;
        object-fit: cover;
        width: 100%;
    }

    .nav-blur {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.85);
    }

    .section-title {
        position: relative;
        display: inline-block;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 50%;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        border-radius: 2px;
    }

    .skill-badge {
        background: #e6f0ff;
        border-radius: 20px;
        padding: 6px 14px;
        font-size: 0.85rem;
        margin: 5px;
        display: inline-block;
    }

    .timeline {
        border-left: 3px solid #3b82f6;
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
        background: #3b82f6;
        border: 3px solid white;
        box-shadow: 0 0 0 3px #3b82f6;
    }

    .tech-icon {
        font-size: 2.5rem;
        margin: 10px 15px;
        color: #3b82f6;
    }
</style>

<body class="bg-white text-gray-800">
    <!-- Navigation -->
    <header class="fixed top-0 left-0 w-full z-50 nav-blur shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center">
                    <i class="fas fa-laptop-code text-white text-lg"></i>
                </div>
                <h1 class="text-2xl font-bold text-blue-800">Rafael<span class="text-blue-600">Portfolio</span></h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-blue-800 font-medium hover:text-blue-600 transition">Beranda</a>
                <a href="#about" class="text-gray-600 font-medium hover:text-blue-600 transition">Tentang</a>
                <a href="#projects" class="text-gray-600 font-medium hover:text-blue-600 transition">Proyek</a>
                <a href="#skills" class="text-gray-600 font-medium hover:text-blue-600 transition">Keahlian</a>
                <a href="#contact" class="text-gray-600 font-medium hover:text-blue-600 transition">Kontak</a>
            </nav>
            <div class="flex items-center space-x-4">
                <a href="#contact" class="btn-primary text-white px-5 py-2.5 rounded-full font-medium shadow-md">
                    Hubungi Saya
                </a>
                <button class="md:hidden text-gray-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 hero-gradient">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4 text-blue-900">
                        Rafael Antonius Nababan
                    </h1>
                    <h2 class="text-2xl md:text-3xl font-semibold mb-6 text-blue-700">
                        Mahasiswa Manajemen Informatika
                    </h2>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        Politeknik Negeri Medan | Pengembang Sistem Informasi & Aplikasi
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#projects"
                            class="btn-primary text-white px-6 py-3 rounded-full font-medium shadow-md text-center">
                            Lihat Proyek Saya
                        </a>
                        <a href="#contact"
                            class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-full font-medium hover:bg-blue-50 transition text-center">
                            Hubungi Saya
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 relative flex justify-center">
                    <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Rafael Antonius Nababan" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg z-10 hidden md:block">
                        <div class="flex items-center">
                            <div class="bg-blue-100 p-3 rounded-full mr-3">
                                <i class="fas fa-graduation-cap text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-blue-900">Politeknik Negeri Medan</p>
                                <p class="text-sm text-gray-500">Manajemen Informatika</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0 md:pr-10">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Politeknik Negeri Medan" class="rounded-2xl shadow-xl w-full">
                </div>
                <div class="md:w-1/2">
                    <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Tentang Saya</h3>
                    <p class="mt-6 text-gray-600 mb-6">
                        Saya Rafael Antonius Nababan, mahasiswa aktif Program Studi Manajemen Informatika di Politeknik Negeri Medan. 
                        Saya memiliki passion dalam pengembangan perangkat lunak, sistem informasi, dan aplikasi mobile.
                    </p>
                    
                    <div class="mb-8">
                        <h4 class="text-xl font-bold text-blue-900 mb-4">Pendidikan</h4>
                        <div class="timeline">
                            <div class="timeline-item">
                                <h5 class="font-bold text-lg">Politeknik Negeri Medan</h5>
                                <p class="text-blue-600">Manajemen Informatika | 2020 - Sekarang</p>
                                <p class="text-gray-600 mt-2">Mahasiswa aktif dengan fokus pada pengembangan sistem informasi dan aplikasi.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-xl font-bold text-blue-900 mb-4">Minat & Keahlian</h4>
                        <div class="flex flex-wrap">
                            <span class="skill-badge">Web Development</span>
                            <span class="skill-badge">Mobile App Development</span>
                            <span class="skill-badge">Sistem Informasi</span>
                            <span class="skill-badge">Database Design</span>
                            <span class="skill-badge">UI/UX Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Proyek Saya</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Beberapa proyek sistem informasi dan aplikasi yang telah saya kembangkan
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="feature-card p-6 rounded-2xl border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Sistem Informasi Bengkel Sicepat" 
                         class="project-image mb-4">
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Sistem Informasi Bengkel Sicepat</h4>
                    <p class="text-gray-600 mb-4">
                        Sistem informasi manajemen bengkel untuk PT Sicepat Ekspres yang mencakup manajemen inventaris, 
                        penjadwalan perawatan, dan pelacakan riwayat kendaraan.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">PHP</span>
                        <span class="skill-badge">Laravel</span>
                        <span class="skill-badge">MySQL</span>
                        <span class="skill-badge">Bootstrap</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="feature-card p-6 rounded-2xl border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Sistem Informasi Karyawan" 
                         class="project-image mb-4">
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Sistem Informasi Karyawan</h4>
                    <p class="text-gray-600 mb-4">
                        Sistem manajemen karyawan terintegrasi dengan fitur absensi digital, pengajuan cuti, 
                        dan manajemen kinerja untuk perusahaan manufaktur.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">Java</span>
                        <span class="skill-badge">Spring Boot</span>
                        <span class="skill-badge">PostgreSQL</span>
                        <span class="skill-badge">React.js</span>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="feature-card p-6 rounded-2xl border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Aplikasi Android" 
                         class="project-image mb-4">
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Aplikasi Android E-Commerce</h4>
                    <p class="text-gray-600 mb-4">
                        Aplikasi mobile untuk platform e-commerce dengan fitur pembelian, keranjang belanja, 
                        pembayaran digital, dan pelacakan pengiriman.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">Kotlin</span>
                        <span class="skill-badge">Android Studio</span>
                        <span class="skill-badge">Firebase</span>
                        <span class="skill-badge">REST API</span>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="feature-card p-6 rounded-2xl border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Sistem Informasi Klinik" 
                         class="project-image mb-4">
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Sistem Informasi Klinik</h4>
                    <p class="text-gray-600 mb-4">
                        Sistem terintegrasi untuk manajemen klinik dengan fitur pendaftaran online, rekam medis elektronik, 
                        dan manajemen inventaris obat.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">Python</span>
                        <span class="skill-badge">Django</span>
                        <span class="skill-badge">PostgreSQL</span>
                        <span class="skill-badge">Vue.js</span>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="feature-card p-6 rounded-2xl border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                         alt="Website Showroom Jaecoo Medan" 
                         class="project-image mb-4">
                    <h4 class="text-xl font-bold mb-3 text-blue-900">Website Showroom Jaecoo Medan</h4>
                    <p class="text-gray-600 mb-4">
                        Website perusahaan untuk showroom mobil Jaecoo di Medan dengan katalog produk interaktif, 
                        pemesanan test drive, dan manajemen konten.
                    </p>
                    <div class="flex flex-wrap mb-4">
                        <span class="skill-badge">HTML/CSS</span>
                        <span class="skill-badge">JavaScript</span>
                        <span class="skill-badge">WordPress</span>
                        <span class="skill-badge">PHP</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Keahlian Teknis</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Teknologi dan tools yang saya kuasai dalam pengembangan perangkat lunak
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6 feature-card rounded-2xl">
                    <i class="fab fa-html5 tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2">Frontend Development</h4>
                    <p class="text-gray-600">
                        HTML5, CSS3, JavaScript, Bootstrap, React.js, Vue.js
                    </p>
                </div>
                
                <div class="text-center p-6 feature-card rounded-2xl">
                    <i class="fas fa-server tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2">Backend Development</h4>
                    <p class="text-gray-600">
                        PHP, Laravel, Python, Django, Java, Spring Boot, Node.js
                    </p>
                </div>
                
                <div class="text-center p-6 feature-card rounded-2xl">
                    <i class="fas fa-database tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2">Database</h4>
                    <p class="text-gray-600">
                        MySQL, PostgreSQL, MongoDB, Firebase, Database Design
                    </p>
                </div>
                
                <div class="text-center p-6 feature-card rounded-2xl">
                    <i class="fab fa-android tech-icon"></i>
                    <h4 class="text-xl font-bold mb-2">Mobile Development</h4>
                    <p class="text-gray-600">
                        Android (Java/Kotlin), Flutter, REST API Integration
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="section-title text-3xl font-bold text-blue-900 inline-block">Hubungi Saya</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Tertarik bekerja sama? Silakan hubungi saya melalui form atau informasi kontak berikut
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary text-white px-6 py-3 rounded-lg font-medium shadow-md w-full">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
                
                <div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg h-full">
                        <h4 class="text-xl font-bold text-blue-900 mb-6">Informasi Kontak</h4>
                        
                        <div class="space-y-5">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-800">Alamat</h5>
                                    <p class="text-gray-600">Medan, Sumatera Utara, Indonesia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-envelope text-blue-600"></i>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-800">Email</h5>
                                    <p class="text-gray-600">rafael.nababan@example.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-phone text-blue-600"></i>
                                </div>
                                <div>
                                    <h5 class="font-bold text-gray-800">Telepon</h5>
                                    <p class="text-gray-600">+62 812 3456 7890</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-3 rounded-full mr-4">
                                    <i class="fas fa-university text-blue-600"></i>
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
                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center">
                            <i class="fas fa-laptop-code text-white text-lg"></i>
                        </div>
                        <h2 class="text-xl font-bold">Rafael<span class="text-blue-300">Portfolio</span></h2>
                    </div>
                    <p class="text-blue-200 mb-4">
                        Mahasiswa Manajemen Informatika di Politeknik Negeri Medan yang berfokus pada pengembangan sistem informasi dan aplikasi.
                    </p>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-4">Navigasi</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <ul class="space-y-2">
                                <li><a href="#home" class="text-blue-200 hover:text-white transition">Beranda</a></li>
                                <li><a href="#about" class="text-blue-200 hover:text-white transition">Tentang</a></li>
                                <li><a href="#projects" class="text-blue-200 hover:text-white transition">Proyek</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="space-y-2">
                                <li><a href="#skills" class="text-blue-200 hover:text-white transition">Keahlian</a></li>
                                <li><a href="#contact" class="text-blue-200 hover:text-white transition">Kontak</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-blue-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-blue-300 text-sm mb-4 md:mb-0">
                    © 2023 Rafael Antonius Nababan. Portfolio Mahasiswa Politeknik Negeri Medan.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-blue-300 hover:text-white text-sm transition">Kebijakan Privasi</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
