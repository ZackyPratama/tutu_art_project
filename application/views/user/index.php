
        
    <section class="section__container modern__container" id="modern">
        <div class="modern__image">
            <img src="<?= base_url('assets/dot-bg.png') ?>" alt="bg" class="modern__bg" />
            <img src="<?= base_url('assets/modern-1.jpg') ?>" alt="modern" class="modern__img-1" />
            <img src="<?= base_url('assets/modern-2.jpg') ?>" alt="modern" class="modern__img-2" />
            <img src="<?= base_url('assets/modern-3.jpg') ?>" alt="modern" class="modern__img-3" />
        </div>
        <div class="modern__content">
            <h2 class="section__header">
                Kami membantu mendesain interior kamu
            </h2>
            <p class="section__subheader">
            Ubah ruang anda dengan keahlian desain interior kontemporer kami: Izinkan kami memandu Anda dalam menciptakan interior yang ramping dan bergaya yang mencerminkan selera dan gaya hidup Anda yang unik
            </p>
            <div class="modern__grid">
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        menciptakan desain interior yang disesuaikan dengan estetika modern
                    </p>
                </div>
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        Kami selalu menjadi yang terdepan dalam tren desain, memastikan ruang Anda bergaya dan inovatif
                    </p>
                </div>
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        Desain interior modern bukan hanya tentang estetika, namun juga tentang fungsionalitas dan kenyamanan.
                    </p>
                </div>
                <div class="modern__card">
                    <span><i class="ri-checkbox-blank-circle-line"></i></span>
                    <p>
                        Kami menangani semua aspek proses desain, dari konsep hingga pengadaan dan pemasangan.
                    </p>
                </div>
            </div>
            <button class="btn">Jelajahi</button>
        </div>
    </section>

    <!--------------------------------- Product --------------------------------------------------------------------- -->
    <section class="offer__container" id="offer">
        <div class="offer__grid__top">
            <img src="<?= base_url('assets/offer-1.jpg') ?>" alt="offer" />
            <img src="<?= base_url('assets/offer-2.jpg') ?>" alt="offer" />
            <img src="<?= base_url('assets/offer-3.jpg') ?>" alt="offer" />
            <div class="offer__content">
                <h2 class="section__header">Ragam Pilihan</h2>
                <p class="section__subheader">
                    Jelajahi penawaran eksklusif untuk mengubah interior Anda dengan penuh gaya
                </p>
                <button class="btn">Explore Now</button>
            </div>
        </div>
        <div class="offer__grid__bottom">
            <img src="<?= base_url('assets/offer-4.jpg') ?>" alt="offer" />
            <img src="<?= base_url('assets/offer-5.jpg') ?>" alt="offer" />
            <img src="<?= base_url('assets/offer-6.jpg') ?>" alt="offer" />
            <img src="<?= base_url('assets/offer-7.jpg') ?>" alt="offer" />
        </div>
    </section>

    <section class="section__container craft__container" id="craft">
        <div class="craft__content">
            <h2 class="section__header">Dibuat Dengan Material Terbaik </h2>
            <p class="section__subheader">
                Tingkatkan ruang anda dengan kualitas dan gaya
            </p>
            <button class="btn">Explore</button>
        </div>
        <?php foreach ($gallery as $gl): ?>
        <div class="craft__image">
            <div class="craft__image__content">

                <img src="<?= base_url('uploads/') . $gl['gambar']; ?>" style="width: 100px;" class="img-thumbnail" />
                <p>
                    <?= $gl['nama']; ?>
                </p>
                <h4>
                    <?= $gl['kategori']; ?>
                </h4>
            </div>
            <a href="#"><i class="ri-add-line"></i></a>

        </div>
    <?php endforeach; ?>
    </section>

    <!----------------------------------About----------------------------------------------------------------------->
    <section class="section__container choose__container" id="choose">
        <img class="choose__bg" src="<?= base_url('assets/dot-bg.png') ?>" alt="bg" />
        <div class="choose__content">
            <h2 class="section__header">Siapa Kami?</h2>
            <p class="section__subheader">
                Tutu Art & Deco didirikan oleh Boy Alkaf pada tahun 2018 dengan visi untuk membawa keindahan dan
                kehangatan ke dalam setiap rumah melalui seni dekoratif. Dengan latar belakang seni dan desain interior,
                Boy Alkaf menggabungkan keahlian kreatifnya dengan hasrat untuk menciptakan ruang yang indah dan
                berkesan bagi pelanggan.
            <p class="section__subheader">
                Boy Alkaf merupakan Seniman berpengalaman dengan sejarah kerja yang terbukti di industri seni rupa.
                Terampil dalam Pengarahan Seni, Fotografi, Menggambar, Art Deco, Seni Kontemporer, dan Pembuat Film.
                Profesional seni dan desain yang kuat dengan latar belakang pendidikan S1 Seni Rupa dari Institut Seni
                Indonesia Padang Panjang.
            </p>
            </p>
        </div>
        </div>
        <div class="choose__image">
            <img src="<?= base_url('assets/bgboy.jpeg') ?>" alt="choose" />
        </div>
    </section>
    
    <!----------------------------------Testimonials--------------------------------------------------------------------- -->
    
    <section class="section__container testimonial__container" id="testimonial">
        <h2 class="section__header">Testimonials</h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            Working with them was an absolute pleasure! Their modern design
                            expertise completely transformed my home into a contemporary
                            haven. I now have a space that not only looks stunning but also
                            feels incredibly comfortable. I couldn't be happier with the
                            results
                        </p>

                        <img src="<?= base_url('assets/profile-pic-1.jpg') ?>" alt="testimonial" />
                        <h4>Sam William</h4>
                        <h5>CEO, Co-Founder</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            I hired them to revamp our office space, and the results
                            exceeded my expectations. Their innovative design concepts
                            breathed new life into our workplace, making it both functional
                            and stylish. The team's attention to detail and commitment to
                            quality are truly commendable.
                        </p>
                        <img src="<?= base_url('assets/profile-pic-2.jpg') ?>" alt="testimonial" />
                        <h4>Michelle Anna</h4>
                        <h5>Office Renovator</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            I had a vision of a minimalist-inspired home, and they brought
                            it to life flawlessly. Their designers understood my aesthetic
                            and incorporated sleek, clean lines, and a neutral color palette
                            to create a serene oasis. I'm in love with my modern,
                            clutter-free space!
                        </p>
                        <img src="<?= base_url('assets/profile-pic-3.jpg') ?>" alt="testimonial" />
                        <h4>John D'souza</h4>
                        <h5>Banker</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial__card">
                        <p>
                            What sets them apart is their professionalism and efficiency.
                            They made the entire design process hassle-free, from the
                            initial consultation to the final installation. Their team
                            handled everything, leaving me with a beautifully designed
                            modern interior
                        </p>
                        <img src="<?= base_url('assets/profile-pic-4.jpg') ?>" alt="testimonial" />
                        <h4>David Laid</h4>
                        <h5>Businessman</h5>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!----------------------------------footer--------------------------------------------------------------------- -->
    
