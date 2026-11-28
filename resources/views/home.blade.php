@extends('layouts.app')

@section('title', 'Barbershop Downstreet — Your Style. Your Identity.')

@section('content')
    <section class="hero" id="home">
        <div class="hero-image" role="img" aria-label="Ilustrasi suasana barbershop"></div>
        <div class="hero-shade"></div>
        <div class="container hero-content">
            <p class="eyebrow hero-eyebrow"><span></span> BARBERSHOP · ENDE, NTT</p>
            <h1>Your Style.<br><em>Your Identity.</em></h1>
            <p class="hero-copy">Lebih dari sekadar potong rambut. Ruang untuk menemukan gaya yang terasa paling kamu.</p>
            <div class="hero-actions">
                <a class="button button-light" href="#services">Jelajahi layanan <i class="fa-solid fa-arrow-down" aria-hidden="true"></i></a>
                <a class="button button-outline" href="#contact">Kunjungi kami</a>
            </div>
            <div class="hero-meta">
                <span><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Ende Selatan, Nusa Tenggara Timur</span>
                <span class="hero-rating"><i class="fa-solid fa-star" aria-hidden="true"></i> 4,8 <small>· 16 ulasan Google</small></span>
            </div>
        </div>
        <div class="hero-side-label" aria-hidden="true">FIND YOUR EDGE — ENDE</div>
        <div class="hero-photo-note">FOTO ILUSTRASI · BUKAN FOTO DOWNSTREET</div>
        <a class="scroll-cue" href="#about" aria-label="Gulir ke bagian tentang kami"><span></span> SCROLL TO EXPLORE</a>
    </section>

    <section class="intro-strip" aria-label="Tentang Downstreet">
        <div class="container intro-strip-inner">
            <span class="eyebrow">YOUR LOCAL BARBER</span>
            <p>Gaya yang tepat. Detail yang diperhatikan. <span>Selamat datang di Downstreet.</span></p>
            <span class="intro-index">01 — 06</span>
        </div>
    </section>

    <section class="section about-section" id="about">
        <div class="container about-grid">
            <div class="about-visual reveal">
                <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1100&q=85" alt="Ilustrasi interior barbershop modern" loading="lazy">
                <div class="image-caption"><span>DOWNSTREET, ENDE</span><small>FOTO TEMPAT MENYUSUL</small></div>
                <div class="about-stamp"><span>EST.</span><strong>DS</strong><span>ENDE · NTT</span></div>
            </div>
            <div class="about-copy reveal">
                <p class="eyebrow"><span class="eyebrow-line"></span> CERITA KAMI</p>
                <h2>Ruang untuk<br><em>jadi diri sendiri.</em></h2>
                <p class="section-copy">Downstreet hadir di Ende untuk siapa pun yang percaya bahwa potongan rambut yang pas bisa mengubah cara kita melangkah. Datang untuk potong rambut, pulang dengan rasa percaya diri yang baru.</p>
                <p class="section-copy">Kami percaya setiap orang punya karakter dan gaya yang berbeda. Karena itu, pengalaman cukur seharusnya dimulai dengan mendengarkan dan berakhir dengan hasil yang terasa personal.</p>
                <a class="text-link" href="#contact">Temukan lokasi kami <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                <div class="about-signoff"><span class="signoff-rule"></span><span>Good cuts. Good people.</span></div>
            </div>
        </div>
    </section>

    <section class="section services-section" id="services">
        <div class="container">
            <div class="section-heading reveal">
                <div>
                    <p class="eyebrow"><span class="eyebrow-line"></span> PILIH GAYA ANDA</p>
                    <h2>Layanan <em>kami.</em></h2>
                </div>
                <p class="heading-note">Setiap detail diperhatikan.<br>Setiap gaya punya cerita.</p>
            </div>
            <div class="service-list">
                <article class="service-item reveal">
                    <span class="service-number">01</span><div><h3>Haircut</h3><p>Potongan klasik yang disesuaikan dengan gaya dan keseharianmu.</p></div><a class="service-price" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer">Tanya harga <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </article>
                <article class="service-item reveal">
                    <span class="service-number">02</span><div><h3>Fade Cut</h3><p>Gradasi bersih dengan transisi halus dan presisi.</p></div><a class="service-price" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer">Tanya harga <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </article>
                <article class="service-item reveal">
                    <span class="service-number">03</span><div><h3>Taper Cut</h3><p>Gaya rapi dan versatile dengan sentuhan modern.</p></div><a class="service-price" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer">Tanya harga <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </article>
                <article class="service-item reveal">
                    <span class="service-number">04</span><div><h3>Hair Styling</h3><p>Finishing untuk melengkapi penampilan dan karaktermu.</p></div><a class="service-price" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer">Tanya harga <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </article>
                <article class="service-item reveal">
                    <span class="service-number">05</span><div><h3>Hair Wash</h3><p>Awali atau akhiri kunjungan dengan rambut yang terasa segar.</p></div><a class="service-price" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer">Tanya harga <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                </article>
            </div>
            <p class="service-footnote"><i class="fa-regular fa-circle-question" aria-hidden="true"></i> Harga dapat ditanyakan langsung melalui WhatsApp.</p>
        </div>
    </section>

    <section class="why-section">
        <div class="container why-grid">
            <div class="why-heading reveal">
                <p class="eyebrow"><span class="eyebrow-line"></span> KENAPA DOWNSTREET</p>
                <h2>Detail kecil.<br><em>Perbedaan besar.</em></h2>
                <p class="section-copy">Pengalaman cukur yang nyaman dimulai dari perhatian pada hal-hal yang penting buatmu.</p>
            </div>
            <div class="feature-grid">
                <article class="feature-card reveal"><span class="feature-icon"><i class="fa-solid fa-scissors" aria-hidden="true"></i></span><span class="feature-number">01</span><h3>Potongan presisi</h3><p>Rapi, teliti, dan disesuaikan dengan gaya pilihanmu.</p></article>
                <article class="feature-card reveal"><span class="feature-icon"><i class="fa-regular fa-comments" aria-hidden="true"></i></span><span class="feature-number">02</span><h3>Diawali obrolan</h3><p>Kami dengarkan keinginanmu sebelum mulai memotong.</p></article>
                <article class="feature-card reveal"><span class="feature-icon"><i class="fa-solid fa-couch" aria-hidden="true"></i></span><span class="feature-number">03</span><h3>Suasana nyaman</h3><p>Ambil jeda sejenak dan nikmati waktumu di kursi barber.</p></article>
                <article class="feature-card reveal"><span class="feature-icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span><span class="feature-number">04</span><h3>Barber lokal Ende</h3><p>Mudah ditemukan di kawasan Jl. Ahmad Yani, Ende Selatan.</p></article>
            </div>
        </div>
    </section>

    <section class="section gallery-section" id="gallery">
        <div class="container">
            <div class="section-heading gallery-heading reveal">
                <div>
                    <p class="eyebrow"><span class="eyebrow-line"></span> POTONGAN & SUASANA</p>
                    <h2>Style in <em>focus.</em></h2>
                </div>
                <p class="heading-note">Galeri foto resmi Downstreet<br>akan segera hadir.</p>
            </div>
            <p class="gallery-notice"><i class="fa-solid fa-circle-info" aria-hidden="true"></i> Foto di bawah adalah ilustrasi, bukan foto asli Barbershop Downstreet.</p>
            <div class="gallery-grid">
                <button class="gallery-card gallery-tall reveal" type="button" data-lightbox="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=1400&q=90" aria-label="Perbesar foto ilustrasi gaya rambut">
                    <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=900&q=85" alt="Ilustrasi gaya rambut pria" loading="lazy"><span class="gallery-overlay"><span>GAYA & KARAKTER</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
                </button>
                <button class="gallery-card reveal" type="button" data-lightbox="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=1400&q=90" aria-label="Perbesar foto ilustrasi suasana barber">
                    <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=900&q=85" alt="Ilustrasi proses potong rambut" loading="lazy"><span class="gallery-overlay"><span>DI BELAKANG KURSI</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
                </button>
                <button class="gallery-card reveal" type="button" data-lightbox="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=1400&q=90" aria-label="Perbesar foto ilustrasi interior barbershop">
                    <img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&fit=crop&w=900&q=85" alt="Ilustrasi interior barbershop" loading="lazy"><span class="gallery-overlay"><span>RUANG UNTUK DIRIMU</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
                </button>
                <button class="gallery-card gallery-wide reveal" type="button" data-lightbox="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=1600&q=90" aria-label="Perbesar foto ilustrasi detail potongan rambut">
                    <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&fit=crop&w=1200&q=85" alt="Ilustrasi detail potongan rambut" loading="lazy"><span class="gallery-overlay"><span>DETAIL YANG BERARTI</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container contact-grid">
            <div class="contact-copy reveal">
                <p class="eyebrow"><span class="eyebrow-line"></span> MARI BERKUNJUNG</p>
                <h2>Ketemu di<br><em>Downstreet.</em></h2>
                <p class="section-copy">Ada yang ingin ditanyakan? Hubungi kami atau langsung temukan lokasi Downstreet di Ende.</p>
                <a class="button button-light contact-button" href="https://wa.me/6285238808622?text=Halo%20Downstreet%2C%20saya%20ingin%20bertanya." target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Chat via WhatsApp</a>
                <div class="contact-rating"><span class="stars" aria-label="Rating 4,8 dari 5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span><span><strong>4,8 / 5</strong><small>16 ulasan Google Maps</small></span></div>
            </div>
            <div class="contact-details reveal">
                <div class="detail-row"><span class="detail-icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span><div><span class="detail-label">ALAMAT</span><p>Jl. Ahmad Yani, Kelurahan Tetandara,<br>Kecamatan Ende Selatan, Kabupaten Ende,<br>Nusa Tenggara Timur</p><a class="detail-link" href="https://maps.google.com/?q=Barbershop+Downstreet+Jl+Ahmad+Yani+Ende" target="_blank" rel="noopener noreferrer">Buka Google Maps <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></div></div>
                <div class="detail-row"><span class="detail-icon"><i class="fa-regular fa-clock" aria-hidden="true"></i></span><div><span class="detail-label">JAM OPERASIONAL</span><p>Silakan konfirmasi jam buka<br>melalui WhatsApp.</p></div></div>
                <div class="detail-row"><span class="detail-icon"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></span><div><span class="detail-label">TELEPON / WHATSAPP</span><a class="detail-phone" href="tel:+6285238808622">0852-3880-8622</a><a class="detail-link" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer">Mulai percakapan <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a></div></div>
                <div class="detail-row"><span class="detail-icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></span><div><span class="detail-label">INSTAGRAM</span><p>Akun Instagram belum dikonfirmasi.</p></div></div>
            </div>
        </div>
    </section>

    <div class="map-frame">
        <iframe title="Peta sekitar Barbershop Downstreet di Ende" src="https://maps.google.com/maps?q=Barbershop%20Downstreet%2C%20Jl.%20Ahmad%20Yani%2C%20Ende&t=&z=15&ie=UTF8&iwloc=&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        <a class="map-label" href="https://maps.google.com/?q=Barbershop+Downstreet+Jl+Ahmad+Yani+Ende" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-location-dot" aria-hidden="true"></i><span>BARBERSHOP DOWNSTREET<small>ENDE SELATAN · NTT</small></span><i class="fa-solid fa-arrow-up-right-from-square map-arrow" aria-hidden="true"></i></a>
    </div>

    <a class="floating-whatsapp" href="https://wa.me/6285238808622" target="_blank" rel="noopener noreferrer" aria-label="Hubungi Barbershop Downstreet via WhatsApp"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
    <div class="lightbox" role="dialog" aria-modal="true" aria-label="Pratinjau foto" hidden>
        <button class="lightbox-close" type="button" aria-label="Tutup foto"><i class="fa-solid fa-xmark" aria-hidden="true"></i></button>
        <img src="" alt="">
    </div>
@endsection
