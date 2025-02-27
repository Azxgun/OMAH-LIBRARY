<html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <title>Omah Library</title>
            <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet"/>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
            <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
            <link href="style.css" rel="stylesheet"/>
            <!-- <script src="main.js"></script> -->
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init()
        </script>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Omah Library
                </a>
                <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#Home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#About-us">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Keunggulan-Web">
                                Keunggulan Web
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Pendaftaran">
                                Pendaftaran
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">
                                Kontak
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Koleksi-Buku">
                                Koleksi Buku
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex ms-auto">
                        <input class="form-control me-2" placeholder="Search" type="search"/>
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="hero-section" id="Home">
            <img src="omah.jpg"/>
            <div class="hero-text">
                <h1></h1>
                <button class="btn btn-custom">Lebih Lanjut</button>
            </div>
        </div>
        <div class="container mt-5">
            <section data-aos="fade-up">
            <div class="section">
            <h2>Home</h2>
            <p>Selamat datang di Perpustakaan Omah. Di sini Anda dapat menemukan banyak koleksi buku dan sumber daya untuk membantu studi dan penelitian Anda. Jelajahi koleksi kami dan manfaatkan layanan kami.</p>
        </section>
        </div>
        <div class="section bg-light" id="About-us">
            <section data-aos="fade-up">
            <div class="container">
                <h2>Tentang kita</h2>
                <p>Perpustakaan Omah berdedikasi untuk menyediakan koleksi buku dan sumber daya yang komprehensif untuk mendukung kebutuhan pendidikan dan penelitian komunitas kami. Misi kami adalah menumbuhkan kecintaan membaca dan pembelajaran seumur hidup.</p>
            </div>
            </section>
        </div>
        <div class="section" >
            <div class="container">
                <h2>Layanan kami</h2>
                <section data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Book Lending" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/HnUcTjQewfnVuU6b6tdjboHrB9Eo2EkkldkrnDqH79XG1cfnA.jpg" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Peminjaman Buku</h3>
                                <p class="card-text">Pinjam buku dari koleksi kami yang luas untuk jangka waktu tertentu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Research Assistance" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/SaWbB6vBKR6lJZ43Uf38NTx9Bo0iVp35F1MUizGteYgE1cfnA.jpg" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Bantuan Penelitian</h3>
                                <p class="card-text">Dapatkan bantuan untuk proyek penelitian Anda dari staf kami yang berpengetahuan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Community Programs" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/zJFoDcVe6nXXMiY03M3Vm4EhKAlKQuYvTjmc011LcIChaufTA.jpg" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Program Komunitas</h3>
                                <p class="card-text">Berpartisipasi dalam berbagai program dan acara yang dirancang untuk semua kelompok umur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </div>
        <div class="section bg-light">
            <section data-aos="fade-up">
            <div class="container" id="contact">
                <h2>Hubungi kami</h2>
                <p>Jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Kami di sini untuk membantu Anda.</p>
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="contact-name">Name</label>
                        <input class="form-control" id="contact-name" type="text"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="contact-email">Email</label>
                        <input class="form-control" id="contact-email" type="email"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="contact-message">Message</label>
                        <textarea class="form-control" id="contact-message" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </section>
        </div>
        <div class="section" id="Keunggulan-Web">
            <div class="container">
                <h2>Keunggulan Web</h2>
                <section data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="User-Friendly Interface" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/1.jpg" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Antarmuka yang Ramah Pengguna</h3>
                                <p class="card-text">Situs web kami dirancang agar mudah dinavigasi, memastikan pengalaman yang lancar bagi semua pengguna.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Extensive Collection" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/2.jpg" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Koleksi Luas</h3>
                                <p class="card-text">Kami menawarkan berbagai macam buku dan sumber daya untuk memenuhi beragam minat dan kebutuhan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img alt="Expert Assistance" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/3.jpg" width="300"/>
                            <div class="card-body">
                                <h3 class="card-title">Bantuan Ahli</h3>
                                <p class="card-text">Staf kami selalu siap membantu Anda dengan pertanyaan atau kebutuhan penelitian apa pun.</p>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>
        <div class="section bg-light" id="Pendaftaran">
            <div class="container">
                <h2>Pendaftaran</h2>
                <section data-aos="fade-up">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone</label>
                        <input class="form-control" id="phone" type="tel"/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <textarea class="form-control" id="address" rows="3"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
                </section>
            </div>
        </div>
        <div class="section" id="Koleksi-Buku">
            <div class="container">
                <h2>Koleksi Buku</h2>
                <section data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 1" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book1.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 1</h5>
                                <p class="card-text">Penulis: Penulis 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 2" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book2.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 2</h5>
                                <p class="card-text">Penulis: Penulis 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 3" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book3.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 3</h5>
                                <p class="card-text">Penulis: Penulis 3</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 4" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book4.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 4</h5>
                                <p class="card-text">Penulis: Penulis 4</p>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <section data-aos="fade-up">
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 5" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book5.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 5</h5>
                                <p class="card-text">Penulis: Penulis 5</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 6" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book6.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 6</h5>
                                <p class="card-text">Penulis: Penulis 6</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 7" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book7.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 7</h5>
                                <p class="card-text">Penulis: Penulis 7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img alt="Book 8" class="card-img-top" height="200" src="https://storage.googleapis.com/a1aa/image/book8.jpg" width="300"/>
                            <div class="card-body">
                                <h5 class="card-title">Judul Buku 8</h5>
                                <p class="card-text">Penulis: Penulis 8</p>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>

        <div class="section bg-light" id="Kontak">
            <div class="container">
                <h2>Kontak Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau ingin menghubungi kami, berikut adalah cara-cara yang dapat Anda gunakan:</p>
                <section data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title">WhatsApp</h3>
                                <p>Hubungi kami melalui WhatsApp untuk pertanyaan cepat.</p>
                                <a href="https://wa.me/1234567890" target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> Chat di WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title">Instagram</h3>
                                <p>Ikuti kami di Instagram untuk pembaruan terbaru.</p>
                                <a href="https://www.instagram.com/omahlibrary" target="_blank" class="btn btn-danger">
                                    <i class="fab fa-instagram"></i> Follow di Instagram
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h3 class="card-title">Email</h3>
                                <p>Kirim email kepada kami untuk pertanyaan lebih lanjut.</p>
                                <a href="mailto:info@omahlibrary.com" class="btn btn-primary">
                                    <i class="fas fa-envelope"></i> Kirim Email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
        
        <div class="footer">
            <p>&Copy; Perpustakaan Omah 2025. Semua hak dilindungi undang-undang</p>
        </div>
        <script crossorigin="anonymous" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Gx0f4g5Y1b4rE4t5p5v5p5p5p5p5" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html> 
