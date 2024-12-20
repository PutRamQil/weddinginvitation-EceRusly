<?php

if (!isset($_GET["nama"])) {
  $nama = "Tamu yang terhormat";
} else {
  $nama = $_GET["nama"];
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedding Khumairoh Dan Rusly </title>
  <!-- favicon -->
  <link rel="icon" href="asset/img/gallery/foto10.jpg">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Work+Sans&display=swap" rel="stylesheet">
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- lightbox2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/css/lightbox.min.css" integrity="sha512-xtV3HfYNbQXS/1R1jP53KbFcU9WXiSA1RFKzl5hRlJgdOJm4OxHCWYpskm6lN0xp0XtKGpAfVShpbvlFH3MDAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- css -->
  <link rel="stylesheet" href="asset/css/style.css">
</head>

<body class="overflow-hidden">
  <!-- music -->
  <!-- Pemanis aja -->
  <audio class="music" src="asset/Audio/music.mp3" preload="auto"></audio>
  <!-- sfx door -->
  <audio src="asset/Audio/" class="sound-door"></audio>

  <!-- door section -->
  <div id="door-section" class="open" onclick="mulai()">
    <h1 class="heading-door left huruf-sambung"></h1>
    <h1 class="heading-door right huruf-sambung"></h1>
    <div class="doors">
      <div class="door left">
        <img src="asset/img/door-left.png" alt="left door">
      </div>
      <div class="door right">
        <img src="asset/img/door-right.png" alt="right door">
      </div>
    </div>
  </div>
  <!-- content section -->
  <div id="content-section">
    <!-- navbar -->
    <ul class="nav">
      <span class="nav-music"></span>
      <li>
        <a href="#acara-section">
          <i class="fas fa-fw fa-calendar-day"></i>
        </a>
      </li>
      <li>
        <a href="#lokasi-section">
          <i class="fas fa-fw fa-location-dot"></i>
        </a>
      </li>
      <li>
        <a href="#love-story-section">
          <i class="fas fa-fw fa-heart"></i>
        </a>
      </li>
      <li>
        <a href="#" class="nav-item-music rotate" id="music-button" onclick="toggleMusic(event)">
          <i class="fas fa-fw fa-compact-disc"></i>
        </a>
      </li>
      <li>
        <a href="#gallery-section">
          <i class="fas fa-fw fa-image"></i>
        </a>
      </li>
      <li>
        <a href="#gift-section">
          <i class="fas fa-fw fa-gift"></i>
        </a>
      </li>
      <li>
        <a href="#rsvp-section">
          <i class="fas fa-fw fa-check-to-slot"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- hero section -->
  <section id="hero-section" class="d-flex align-items-center">
    <img src="asset/img/sparkle.gif" alt="sparkle" class="sparkle">
    <div class="container text-center">
      <h4 class="my-2 text-white">Kepada <span><?= $nama; ?></span></h4>
      <h1 class="my-2 text-white huruf-sambung">Khumairoh & Rusly</h1>
      <h4 class="my-2 text-white">Akan segera melangsungkan pernikahan pada</h4>
      <h4 class="my-2 text-white fw-bold">Senin, 16 Desember 2024</h4>
      <div class="row my-3 d-flex justify-content-center" id="countdown-wedding">
        <div class="col-lg-1 col-3">
          <div class="text-center p-2 rounded text-light">
            <h5>0</h5> Hari
          </div>
        </div>
        <div class="col-lg-1 col-3">
          <div class="text-center p-2 rounded text-light">
            <h5>0</h5> Jam
          </div>
        </div>
        <div class="col-lg-1 col-3">
          <div class="text-center p-2 rounded text-light">
            <h5>0</h5> Menit
          </div>
        </div>
        <div class="col-lg-1 col-3">
          <div class="text-center p-2 rounded text-light">
            <h5>0</h5> Detik
          </div>
        </div>
      </div>
      <a href="#pembuka-section" class="rounded-pill text-decoration-none btn btn-lg btn-get-started py-3"><i class="fas fa-envelope-open-text fa-fw"></i> Buka undangan</a>
    </div>
  </section>

  <!-- pembuka section -->
  <section id="pembuka-section" class="pembuka-section section-bg py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1 class="tect-pink huruf-sambung fw-bold">Assalamu'alaikum</h1>
            <h3>بِسْمِ ٱللَّهِ ٱلرَّحْمَـٰنِ ٱلرَّحِيمِ</h3>
            <p>"Segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah)."</p>
            <p>(QS. Az-Zariyah (51) : 49)</p>
            <!-- <p>"Jika menikah adalah sesuatu ya Engkau muliakan maka jauhkan kami dari ketakutan akan kemuliaan-Mu"</p> -->
          </div>
          <div class="row my-4 justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up" .data-aos-easing="linear" data-aos-duration="1500">
              <img src="asset/img/WhatsApp Image 2024-11-18 at 22.30.16_2f4d74b3.jpg" alt="wedding" class="img-fluid rounded-pill">
            </div>
          </div>
          <div class="row my-3 justify-content-between">
            <div class="col rounded" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
              <div class="p-2 pt-3 text-center">
                <h1 class="text-center huruf-sambung">apt. Khumairoh Iskandar,S.Farm. / Ece'</h1>
                <p>Putri Bungsu Dari Pasangan:</p>
                <p>H. Nurbaya Usman & H. Iskandar (alm)</p>
              </div>
            </div>
            <div class="col-sm-1 my-auto" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
              <h1 class="text-center huruf-sambung">&</h1>
            </div>
            <div class="col rounded" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
              <div class="p-2 pt-3 text-center">
                <h1 class="text-center huruf-sambung">Rusly Heryanto / Rusly</h1>
                <p>Putra Pertama Dari Pasangan:</p>
                <p>Heryanto H. Usman & Nurhayati Liem</p>
                <!-- <img src="asset/img/bunga (2).png" alt=""> -->
              </div>
            </div>
          </div>
        </div>
        <img src="asset/img/bunga (2).png" alt="foto" class="section-title text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
      </div>
    </div>
  </section>

  <!-- Acara section -->

  <section id="acara-section" class="acara-section py-5 mb-5">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h1 class="text-pink huruf-sambung fw-bold">Acara Pernikahan</h1>
            <p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila, Bpk/Ibu/Saudara/i berkenan hadir untuk
              memberikan do'a restunya, kami ucapkan terima kasih.</p>
          </div>
          <div class="row justify-content-between px-3 text-center">
            <div class="col-lg-6 border my-2 rounded p-3 card-acara" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
              <h4>AKAD NIKAH</h4>
              <hr>
              <p><i class="fas fa-fw fa-calendar-day"></i> Senin, 16 Desember 2024</p>
              <p><i class="fas fa-fw fa-clock"></i> 09:00 - 12:00 WITA</p>
              <p><i class="fas fa-fw fa-location-dot"></i> Rumah Mempelai Wanita

              </p>
              <p>Jalan Timor Raya (Samping Kantor Pos dan Giro) Niki-Niki, Kec. Amanuban Tengah, Kab. Timor Tengah
                Selatan, Provinsi NTT
              </p>
              <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Akad+NIkah&details=Akad+Nikah+Khumairoh+dan+Rusly&location=Jalan+Timor+Raya+%28Samping+Kantor+Pos+dan+Giro%29+Niki-Niki%2C+Kec.+Amanuban+Tengah%2C+Kab.+Timor+Tengah+Selatan%2C+Provinsi+NTT&dates=20241216T020000Z%2F20241216T050000Z" class="btn btn-lg btn-pink rounded-pill" target="_blank">
                <i class="fas fa-fw fa-calendar-day"></i> Simpan ke Kalender
              </a>
            </div>
            <!-- <img src="asset/img/bunga (2).png" alt="foto" class="section-title text-center"> -->

            <div class="col-lg-6 border my-2 rounded p-3 card-acara" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
              <h4>RESEPSI</h4>
              <hr>
              <p><i class="fas fa-fw fa-calendar-day"></i> Senin, 16 Desember 2024</p>
              <p><i class="fas fa-fw fa-clock"></i> 18:00 - Selesai WITA</p>
              <p><i class="fas fa-fw fa-location-dot"></i> Samping Kantor Urusan Agama (KUA)</p>
              <p>Amanuban Tengah</p>
              <p>Jalan Timor Raya Niki-Niki, Kec. Amanuban Tengah, Kab. Timor Tengah Selatan, Provinsi NTT</p>
              <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Resepsi&details=Resepsi+Khumairoh+dan+Rusly&location=Lapangan+Boibalan+%28Depan+Pasar+Inpres%29+Jalan+Timor+Raya++Niki-Niki%2C+Kec.+Amanuban+Tengah%2C+Kab.+Timor+Tengah+Selatan%2C+Provinsi+NTT&dates=20241216T110000Z%2F20241216T150000Z" class="btn btn-lg btn-pink rounded-pill" target="_blank">
                <i class="fas fa-fw fa-calendar-day"></i> Simpan ke Kalender
              </a>
            </div>
            <div class="row justify-content-center px-3 text-center">
              <div class="col-lg-6 border my-2 rounded p-3 card-acara" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
                <h4>HIBURAN DOMINO</h4>
                <hr>
                <p><i class="fas fa-fw fa-calendar-day"></i> Minggu, 15 Desember 2024</p>
                <p><i class="fas fa-fw fa-clock"></i> 18:00 - Selesai WITA</p>
                <p><i class="fas fa-fw fa-gift"></i> Hadiah Menarik
                </p>

                <a href="https://www.google.com/calendar/render?action=TEMPLATE&text=Resepsi&details=Rsepsi+Brucad+Dan+Khumairoh&location=Pasar+Inpres+Ekpulen%2C+Niki-Niki%2C+Amanuban+Tengah%2C+Timor+Tengah+Selatan%2C+Jawa+Timur&dates=20241215T020000Z%2F20241215T050000ZZ" class="btn btn-lg btn-pink rounded-pill" target="_blank">
                  <i class="fas fa-fw fa-calendar-day"></i> Simpan ke Kalender
                </a>
              </div>

              <img src="asset/img/bunga.png" alt="" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            </div>

          </div>
        </div>
      </div>
  </section>

  <!-- lokasi section -->
  <section id="lokasi-section" class="lokasi-section py-5 section-bg">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h1 class="text-pink huruf-sambung fw-bold">Lokasi Akad & Resepsi Pernikahan</h1>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
              <a href="https://maps.app.goo.gl/Nnpbz7enra4AoYCG8" target="_blank" class="btn btn-lg btn-pink rounded-pill mb-4"><i class="fas fa-fw fa-location-dot"></i>Buka di Google
                Maps</a>
              <iframe class="mb-4 mb-lg-0 border-pink" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.339806367832!2d124.47187227505202!3d-9.821800704473745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c55f73c56a0ff5b%3A0xf6fc2a32b49e970e!2sPasar%20Inpres%20Niki-Niki!5e0!3m2!1sen!2sid!4v1731729925481!5m2!1sen!2sid" width="100%" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- love story section -->

  <section id="love-story-section" class="love-story-section py-5">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <div class="section-title">
        <h1 class="text-pink huruf-sambung fw-bold">Love Story</h1>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg">
          <ul class="timeline">
            <li data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
              <div class="timeline-badge" style="background-image:url('asset/img/gallery/foto2.jpg');">

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title">"Awal yang Tak Terduga"</h3>
                  <span class="timeline-date"></span>
                </div>
                <div class="timeline-body">
                  <p>Pada akhir 2019, komunikasi bermula dari konsultasi sederhana tentang obat. Perbincangan itu
                    singkat, namun rupanya menjadi awal dari kisah kami.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
              <div class="timeline-badge" style="background-image:url('asset/img/gallery/foto4.jpg');">

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title">"Ketulusan yang Tak Terbatas"</h3>
                  <span class="timeline-date"></span>
                </div>
                <div class="timeline-body">
                  <p>Memasuki 2020, Rusli tertarik dan ingin kenal lebih dekat. Kum menolak, membatasi interaksi,
                    menjaga jarak, di sisi lain Rusli tetap menyimpan harapan, tidak menyerah tanda Rusli benar-benar
                    serius. "Orang yg berjuang saat ada peluang itu biasa tapi beliau meyakini akan bersama walaupun
                    tidak ada peluang."</p>
                </div>
              </div>
            </li>

            <li data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
              <div class="timeline-badge" style="background-image:url('asset/img/gallery/foto8.jpg');">

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title">"Menunggu Kayu Api Terbaik"</h3>
                  <span class="timeline-date"></span>
                </div>
                <div class="timeline-body">
                  <p>2021 Rusli kembali, menyatakan ingin serius menikahi Kum namun Kum belum menerima. Dalam pencarian,
                    Kum teringat pesan Ustad Felix yg mengatakan, "Jodoh itu seperti masuk ke hutan dan ke luar harus
                    membawa kayu api terbaik". Kum merasa di depan sana mungkin masih ada "kayu api" yg lebih baik.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
              <div class="timeline-badge" style="background-image:url('asset/img/gallery/foto5.jpg');">

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title">"Waktu Menguji"</h3>
                  <span class="timeline-date"></span>
                </div>
                <div class="timeline-body">
                  <p>Mei 2021-Juni 2023, komunikasi semakin tidak intens namun perjuangan Rusli seperti fenomena gunung
                    es, apa yg ada di bawah air JAUH LEBIH BESAR dari yg tampak di permukaan oleh orang lain.</p>
                </div>
              </div>
            </li>
            <li data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1500">
              <div class="timeline-badge" style="background-image:url('asset/img/gallery/foto3.jpg');">

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title">"Kembali dalam Takdir Allah"</h3>
                  <span class="timeline-date"></span>
                </div>
                <div class="timeline-body">
                  <p>Januari 2024, 5 tahun berlalu Kum bertemu banyak orang baru, mencari dan memilih kayu api terbaik.
                    Allah rupanya mencondongkan hati pada Rusli, Untungnya Rusli tidak menyerah, gigih membuktikan
                    kesungguhannya dan kini datang dengan versi dirinya yang jauh lebih baik. Jodoh, sejauh apapun
                    berlari akan kembali.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1500">
              <div class="timeline-badge" style="background-image:url('asset/img/gallery/foto10.jpg');">

              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h3 class="timeline-title">"Melangkah Bersama"</h3>
                  <span class="timeline-date"></span>
                </div>
                <div class="timeline-body">
                  <p>16 Desember 2024, kami putuskan untuk melangkah bersama dalam ikatan pernikahan. Percaya "Better
                    Together", Bersama Lebih Baik, saling melengkapi, menemukan kedamaian dan saling membantu untuk
                    taat kepada Allah.</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- ihsaiohio -->
  <!-- galeri section -->
  <section id="gallery-section" class="gallery-section py-5 section-bg">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <div class="section-title">
        <h1 class="huruf-sambung" text-pink fw-bold>Gallery</h1>
      </div>
      <div class="row" data-masonry='{"percentPosition": true}'>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto1.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto1.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto2.jpg" data-lightbox="rusliKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto2.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto3.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto3.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto4.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto4.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto5.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto5.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <!-- <div class="col-sm-6 col-lg-4 mb-4">
              <a href="asset/img/gallery/foto62.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
                <img src="asset/img/gallery/foto62.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
              </a>
            </div> -->
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto12.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto12.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto8.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto8.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto9.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto9.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto10.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto10.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto11.jpg" data-lightbox="rusliKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto11.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4">
          <a href="asset/img/gallery/foto7.jpg" data-lightbox="ruslyKhumairoh" class="text-decoration-none">
            <img src="asset/img/gallery/foto7.jpg" alt="Rusly & Khumairoh" class="card-img border-pink">
          </a>
        </div>

      </div>
      <div class="row justify-content-center">
        <div class="col-12 text-center">

        </div>
      </div>
    </div>
  </section>

  <!-- gift section -->
  <section id="gift-section" class="gift-section py-5 ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h1 class="huruf-sambung text-pink fw-bold">Wedding Gift</h1>
            <p>Bagi Bapak/Ibu/Saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account atau
              No.rek di bawah ini.</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <button type="button" class="text-center btn btn-lg btn-pink mb-4 rounded-pill" data-bs-toggle="collapse" data-bs-target="#giftCollapse"><i class="fas fa-fw fa-gift"></i> Kirim Hadiah</button>
              <div class="collapse" id="giftCollapse">
                <div class="my-4 mx-auto position-relative credit-card">
                  <img src="asset/img/logobri.jpg" alt="Logo BCA" class="card-logo">
                  <div class="card-container">
                    <img src="asset/img/logosim.png" alt="sim" class="card-sim">
                    <div class="card-number">3619 0102 2768 531</div>
                  </div>
                  <div class="card-name mt-2">Khumairoh Iskandar</div>
                  <a style="cursor: pointer;" onclick="copyText(this)" class="copy-button btn btn-light mt-3">
                    <i class="fas fa-fw fa-copy"></i>
                    Copy
                  </a>
                </div>
                <div class="my-4 mx-auto position-relative credit-card">
                  <img src="asset/img/logobri.jpg" alt="Logo BCA" class="card-logo">
                  <div class="card-container">
                    <img src="asset/img/logosim.png" alt="sim" class="card-sim">
                    <div class="card-number">3619 0103 9034 533</div>
                  </div>
                  <div class="card-name mt-2">Rusly Heryanto</div>
                  <a style="cursor: pointer;" onclick="copyText(this)" class="copy-button btn btn-light mt-3">
                    <i class="fas fa-fw fa-copy"></i>
                    Copy
                  </a>
                </div>

              </div>
            </div>
            <img src="asset/img/bunga.png" alt="" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          </div>

        </div>
      </div>
  </section>


  <!-- rsvp section -->
  <section id="rsvp-section" class="rsvp-section section-bg py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1 class="text-pink huruf-sambung fw-bold">RSVP</h1>
            <p>Isi form di bawah ini untuk melakukan konfirmasi kehadiran Anda.</p>
          </div>
          <form action="https://script.google.com/macros/s/AKfycbyIfjWG5EjQiyYk3R8n0MnmlJM6TcOYWuG4HvBaq3VpbINVZyMZvvNVjCDLffH61Aq7/exec" class="row row-cols-md-auto g-3 align-items-center justify-content-center" id="rsvp-form" method="POST">
            <div class="col-12">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="5" length="1" value="1">
              </div>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                  <option value="0" selected>Pilih salah satu</option>
                  <option value="Hadir">Hadir</option>
                  <option value="Tidak Hadir">Tidak Hadir</option>
                </select>
              </div>
            </div>
            <div class="col-12 mt-3">
              <div class="mt-3">
                <button type="submit" class="btn btn-kirim"><i class="fas fa-fw fa-paper-plane"></i> Kirim</button>
              </div>
            </div>
          </form>
          <div class="row mt-5 justify-content-center">
            <div class="col-lg-12">
              <div id="disqus_thread"></div>
              <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                  var d = document,
                    s = d.createElement('script');
                  s.src = 'https://wedding-nobita-shizuka-1.disqus.com/embed.js';
                  s.setAttribute('data-timestamp', +new Date());
                  (d.head || d.body).appendChild(s);
                })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered
                  by Disqus.</a></noscript>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- penutup section -->
  <section id="penutup-section" class="penutup-section py-5">
    <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h1 class="text-pink huruf-sambung fw-bold">Wassalamu'alaikum</h1>
            <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
              memberikan do'a restu kepada kami.</p>
            <h5 class="my-3">KAMI YANG BERBAHAGIA</h5>
            <h1 class="huruf-sambung">Khumairoh & Rusly</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer id="footer" class="mb-5 pb-5">
    <div class="container py-5 text-center position-relative">
      <div class="row">
        <div class="col-12 my-3">
          <a href="https://youtube.com/c/hauscoding" target="_blank" class="text-decoration-none text-pink fw-bold">&copy; 2024. Made with ❤ by Al Creations</a>
        </div>
        <div class="col-12 my-3">
          <a href="#" class="text-pink"><i class="fas fa-fw fa-arrow-up"></i> Back to top</a>
        </div>
      </div>
    </div>
  </footer>

  </div>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- bootstrap5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- javascript -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- lightbox2 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js" integrity="sha512-KbRFbjA5bwNan6DvPl1ODUolvTTZ/vckssnFhka5cG80JVa5zSlRPCr055xSgU/q6oMIGhZWLhcbgIC0fyw3RQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- sweetalert2 -->
  <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js
    "></script>
  <!-- wasonry -->
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="asset/js/script.js"></script>
</body>

</html>