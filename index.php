<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Ilmu Komputer</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- FontAwesome Icon CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

  <!-- LINK TO CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <!-- TODO: Memambahkan link scroll smooth pada menu -->

  <!-- FIXME: Query Mode Tablet in #ka-prodi  -->
  <!-- TODO: sejarah page in other page -->

  <!-- DONE : Membuat Fasilitas -> Jeremi ☑☑☑☑ -->

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid px-md-5">
      <figure class="mr-md-3">
        <img class="img-fluid" src="./assets/logo/logo.png" alt="Logo UNIMED">
      </figure>
      <a class="navbar-brand" href="#">
        <h3>Ilmu Komputer</h3>
        <h6>Universitas Negeri Medan</h6>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-3">

          <!-- Menu beranda -->
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Beranda</a>
          </li>

          <!-- Menu Profil -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Profil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./sejarah.html">Sejarah</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#visi-misi">Visi & Misi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Struktur Organisasi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Profil Pengelola</a>
            </div>
          </li>

          <!-- Menu Akademik -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Akademik
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Profil Kelulusan</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Capaian Pembelajaran</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Mata Kuliah</a>
            </div>
          </li>

          <!-- Menu SDM -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              SDM
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="dosen.html">Dosen</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Tenaga Pendidik</a>
            </div>
          </li>

          <!-- Menu Fasilitas -->
          <li class="nav-item">
            <a class="nav-link" href="#">Fasilitas</a>
          </li>

          <!-- Menu Kemahasiswaan -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Kemahasiswaan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Prestasi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Kegiatan Kemahasiswaan</a>
            </div>
          </li>

          <!-- Menu Penelitian -->
          <li class="nav-item">
            <a class="nav-link" href="#">Penelitian</a>
          </li>

        </ul>
        <form class="form-inline">
          <div class="w-100 rounded-pill shadow-sm position-relative search--btn">
            <input type="text" class="rounded-pill form-control border-0 px-3" placeholder="Pencarian"
              aria-label="Pencarian" aria-describedby="button-addon2">
            <div class="position-absolute">
              <button class="btn" type="submit" id="button-addon2">
                <img src="./assets/icon/search.png" alt="">
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- main content -->
  <main>
    <!-- hero -->
    <section id="hero">

      <div id="carousel-hero" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./assets/img/slide1-1440x621.jpeg" class="d-block w-100"
              alt="Perpustakaan Universitas Negeri Medan">
          </div>
          <div class="carousel-item">
            <img src="./assets/img/slide2-1440x621.jpeg" class="d-block w-100"
              alt="Gedung Fakutas Matematika dan Ilmu Pengetahuan Alam">
          </div>
          <div class="carousel-item">
            <img src="./assets/img/slide3.jpg" class="d-block w-100" alt="Gambar dammy">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-hero" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-hero" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </section>
    <!-- end hero -->

    <!-- news -->
    <section id="news" class="pb-4">
      <div class="container px-md-5">
        <div class="row">
          <div class="col-12 py-3">
            <h3 class="text-center">Berita</h3>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col-md-4 col-12 mb-3">
            <div class="card p-3 border-0 shadow rounded">
              <img class="card-img-top rounded mb-3" src="https://picsum.photos/340/226" alt="Card image cap">
              <div class="card-body p-0">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="card-link">Selengkapnya <span><img style="height: 10px; width: 12.5;"
                      class="img-fluid ml-3" src="./assets/icon/arrow - right.png" alt=""></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 mb-3">
            <div class="card border-0 p-3 shadow rounded">
              <img class="card-img-top rounded mb-3" src="https://picsum.photos/340/226" alt="Card image cap">
              <div class="card-body p-0">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="card-link">Selengkapnya <span><img style="height: 10px; width: 12.5;"
                      class="img-fluid ml-3" src="./assets/icon/arrow - right.png" alt=""></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 mb-3">
            <div class="card border-0 p-3 shadow rounded">
              <img class="card-img-top rounded mb-3" src="https://picsum.photos/340/226" alt="Card image cap">
              <div class="card-body p-0">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                  card's content.</p>
                <a href="#" class="card-link">Selengkapnya <span><img style="height: 10px; width: 12.5;"
                      class="img-fluid ml-3" src="./assets/icon/arrow - right.png" alt=""></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end news -->

    <!-- ka-prodi -->
    <!-- NOTE: if you want to change image in this carousel you need image size same to example image -->
    <section id="ka-prodi" class="py-4 position-relative mt-5">
      <div class="bg--ka-prodi"></div>
      <div id="carousel-kata-sambutan" class="carousel slide position-absolute" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-kata-sambutan" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-kata-sambutan" data-slide-to="1"></li>
          <li data-target="#carousel-kata-sambutan" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-12">
                  <figure>
                    <img class="img-fluid rounded" src="https://picsum.photos/460/265" alt="image-dummy">
                  </figure>
                </div>
                <div class="col-md-6 col-12 mt-2 d-flex  justify-content-md-end flex-column">
                  <p>(Kata Sambutan Kaprodi) Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. In semper magna sapien. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                  <h4>Hermawan Syaputra</h4>
                  <p class="sub--title">Ketua Program Studi Ilmu Komputer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-12">
                  <figure>
                    <img class="img-fluid rounded" src="https://picsum.photos/460/265" alt="image-dummy">
                  </figure>
                </div>
                <div class="col-md-6 col-12 mt-2 d-flex  justify-content-md-end flex-column">
                  <p>(Kata Sambutan Kaprodi)Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. In semper magna sapien. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                  <h4>Hermawan Syaputra</h4>
                  <p class="sub--title">Ketua Program Studi Ilmu Komputer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-12">
                  <figure>
                    <img class="img-fluid rounded" src="https://picsum.photos/460/265" alt="image-dummy">
                  </figure>
                </div>
                <div class="col-md-6 col-12 mt-2 d-flex   justify-content-md-end flex-column">
                  <p>(Kata Sambutan Kaprodi)Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. In semper magna sapien. Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                  <h4>Hermawan Syaputra</h4>
                  <p class="sub--title">Ketua Program Studi Ilmu Komputer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Arrow Dekstop -->
        <a class="carousel-control-prev" href="#carousel-kata-sambutan" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-kata-sambutan" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        <!-- Arrow mobile -->
        <a class="carousel-control-prev-mob" href="#carousel-kata-sambutan" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next-mob" href="#carousel-kata-sambutan" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- ka-prodi -->

    <!-- fasilitas -->
    <section id="fasilitas">
      <div class="container">
        <h3>Fasilitas</h3>
        <div class="row justify-content-center">
          <!-- fasilitas 1  -->
          <div class="col-md-6 col-sm-0">
            <div class="fasilitas-card">
              <div class="row align-items-start">
                <div class="fasilitas-card-img col-md-2 col-sm-0">
                  <div id="bg-c1" class="fasilitas-bg-img">
                    <i id="c1" class="fa fa-wifi fa-3x" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="fasilitas-card-content col-md-9 col-sm-0">
                  <div class="fasilitas-card-content-judul">
                    Internet
                  </div>
                  <div class="fasilitas-card-content-penj">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In semper magna sapien
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./fasilitas 1  -->

          <!-- fasilitas 2 -->
          <div class="col-md-6 col-sm-0">
            <div class="fasilitas-card">
              <div class="row align-items-start">
                <div class="fasilitas-card-img col-md-2 col-sm-0">
                  <div id="bg-c2" class="fasilitas-bg-img">
                    <i id="c2" class="fa fa-desktop fa-3x" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="fasilitas-card-content col-md-9 col-sm-0">
                  <div class="fasilitas-card-content-judul">
                    Laboratorium
                  </div>
                  <div class="fasilitas-card-content-penj">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In semper magna sapien
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./fasilitas 2 -->

          <div class="w-100"></div>
          <!-- fasilitas 3 -->
          <div class="col-md-6 col-sm-0">
            <div class="fasilitas-card">
              <div class="row align-items-start">
                <div class="fasilitas-card-img col-md-2 col-sm-0">
                  <div id="bg-c3" class="fasilitas-bg-img">
                    <i id="c3" class="fa fa-cutlery fa-3x" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="fasilitas-card-content col-md-9 col-sm-0">
                  <div class="fasilitas-card-content-judul">
                    Kantin
                  </div>
                  <div class="fasilitas-card-content-penj">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In semper magna sapien
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./fasilitas 3 -->

          <!-- fasilitas 4 -->
          <div class="col-md-6 col-sm-0">
            <div class="fasilitas-card">
              <div class="row align-items-start">
                <div class="fasilitas-card-img col-md-2 col-sm-0">
                  <div id="bg-c4" class="fasilitas-bg-img">
                    <i id="c4" class="fa fa-university fa-3x" aria-hidden="true"></i>
                  </div>
                </div>
                <div class="fasilitas-card-content col-md-9 col-sm-0">
                  <div class="fasilitas-card-content-judul">
                    Pusat Kreatifitas Mahasiswa
                  </div>
                  <div class="fasilitas-card-content-penj">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    In semper magna sapien
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./fasilitas 4 -->
        </div>
      </div>
    </section>
    <!-- end fasilitas -->

    <!-- visi misi -->
    <section id="visi-misi" class="bg-light pb-4 position-relative overflow-hidden">
      <div class="container">
        <div class="row">
          <div class="col-12 py-3">
            <h3 class="text-center">Visi & Misi</h3>
          </div>
        </div>

        <div class="row visi-misi--wrapper bg-white rounded d-flex align-items-center mb-3 ">
          <div class="col-1--blok"></div>
          <div class="col-10 pl-5">
            <h5>Visi</h5>
            <p class="m-0">Menjadi Program Studi yang unggul pada bidang artificial intelegensi dan sains komputasi
              secara
              nasional dan mendapat pengakuan internasional pada tahun 2028.</p>
          </div>
        </div>

        <div class="row visi-misi--wrapper bg-white rounded d-flex align-items-center mb-3">
          <div class="col-1--blok"></div>
          <div class="col-10 pl-5">
            <h5>Misi</h5>
            <p class="m-0">1. Menyelenggarakan pendidikan dan pembelajaran ilmu komputer berfokus pada bidang artificial
              intelegensi dan sains komputasi yang bermutu dan bernuansa link and match dengan kebutuhan stakeholder.
            </p>
          </div>
        </div>

        <div class="row visi-misi--wrapper bg-white rounded d-flex align-items-center mb-3">
          <div class="col-1--blok"></div>
          <div class="col-10 pl-5">
            <p class="m-0">2. Menyelenggarakan penelitian di bidang ilmu komputer berfokus pada bidang artificial
              intelegensi dan sains komputasi yang inovatif dan aplikatif serta mengembangkan rekayasa industri dan
              teknologi yang kreatif.</p>
          </div>
        </div>

        <div class="row visi-misi--wrapper bg-white rounded d-flex align-items-center mb-3">
          <div class="col-1--blok"></div>
          <div class="col-10 pl-5">
            <p class="m-0">3. Menyelanggarakan pengabdian kepada masyarakat melalui pemetaan kebutuhan dan permasalahan
              teknologi komputer di masyarakat.</p>
          </div>
        </div>

        <div class="row visi-misi--wrapper bg-white rounded d-flex align-items-center mb-3">
          <div class="col-1--blok"></div>
          <div class="col-10 pl-5">
            <p class="m-0">4. Mengembangkan budaya ilmiah dan budaya etnik, kewirausahaan, membina suasana akademik yang
              sehat.</p>
          </div>
        </div>

        <div class="row visi-misi--wrapper bg-white rounded d-flex align-items-center mb-3">
          <div class="col-1--blok"></div>
          <div class="col-10 pl-5">
            <p class="m-0">5. Menjalin kerjasama secara berkelanjutan dengan berbagai instansi di tingkat lokal,
              nasional, regional, dan internasional.</p>
          </div>
        </div>
      </div>
      <div class="boll ball-1 position-absolute rounded-circle"></div>
      <div class="boll ball-2 position-absolute rounded-circle"></div>
    </section>
    <!-- end visi misi -->

    <!-- sub menu -->
    <!-- TODO: ini adalah bagian sub menu yang berada di bawah carousel hero yang melayang -->
    <!-- end sub menu -->

  </main>
  <!-- end main content -->

  <!-- footer -->
  <footer id="footer">
    <div id="footercontainer" class="container px-md-7">
      <div class="row">
        <div class="small-12 medium-6 columns">
          <div class="row ml-1">
            <div class="small-4 medium-3 columns">
              <img id="img-unimed-bg-bw" src="/assets/img/unimed-bw.png" />
            </div>
            <div class="small-4 medium-3 columns">
              <div id="splitter"></div>
            </div>
            <div class="small-4 medium-3 columns">
              <div id="ilkomfooter">
                <h4>Ilmu Komputer</h4>
                <h5>Universitas Negeri Medan</h5>
              </div>
            </div>
          </div>
          <h3 class="mt-5">UNIVERSITAS NEGERI MEDAN</h3>
          <br />
          <p>
            Jl. Willem Iskandar / Pasar V, Medan, Sumatera Utara –
            Indonesia<br />
            Kotak Pos 1589, Kode Pos 20221<br />
            Telp. (061) 6613365, Fax. (061) 6614002 / 6613319<br />
            E-mail : humas@unimed.ac.id
          </p>
        </div>
        <div class="small-12 medium-6 columns">
          <div id="footer-link">
            <ul class="ml-2">
              <li>
                <h5>Sosial Media :</h5>
              </li>
              <li>
                <a href="https://facebook.com/UnimedOfficial">Facebook</a>
              </li>
              <li><a href="https://twitter.com/UnimedOfficial">Twitter</a></li>
              <li>
                <a href="https://instagram.com/UnimedOfficial">Instagram</a>
              </li>
              <li>
                <a href="https://youtube.com/UnimedOfficial">Youtube</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->


  <!-- jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- SCRIPT JAVASCRIPT -->
  <script src="js/script.js"></script>
</body>

</html>