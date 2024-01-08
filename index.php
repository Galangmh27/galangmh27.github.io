<!DOCTYPE html>
<html lang="id" data-bs-theme="dark">

<head>
    <!-- Common Tag -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="Undangan Pernikahan Galang & Pritty" />
    <meta name="description" content="Website Undangan Pernikahan Galang & Pritty Secara Online" />
    <meta name="theme-color" content="#212529" />
    <meta name="color-scheme" content="dark" />
    <link rel="website icon" type="png" href="assets/images/logo.png" />
    <title>The wedding Party Galang & Pritty</title>

    <!-- SEO Tag -->
    <meta property="og:title" content="Undangan Pernikahan Galang & Pritty" />
    <meta property="og:description" content="Website Undangan Pernikahan Galang & Pritty Secara Online" />
    <meta property="og:image" content="https://ulems.my.id/assets/images/bg.jpeg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:alt" content="Undangan Pernikahan Galang & Prutty" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:site_name" content="Undangan" />
    <meta property="og:url" content="https://ulems.my.id/" />

    <!-- Preconnect CDN -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous" />
    <link rel="preconnect" href="https://api.ulems.my.id" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous" />
    <link rel="preconnect" href="https://gstatic.com" crossorigin="anonymous" />

    <!-- Dependencies CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css"
        integrity="sha256-WAgYcAck1C1/zEl5sBl5cfyhxtLgKGdpI3oKyJffVRI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha256-MBffSnbbXwHCuZtgPYiwMQbfE7z+GOZ7fBPCNB06Z98=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css"
        integrity="sha256-CTSx/A06dm1B063156EVh15m6Y67pAjZZaQc89LLSrU=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
        integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/app.css" />
</head>

<body data-email="user@example.com" data-password="12345678" data-url="https://api.ulems.my.id/"
    style="overflow-y: hidden">
    <!-- Navbar Bottom -->
    <nav class="navbar navbar-dark bg-dark navbar-expand fixed-bottom rounded-top-4 p-0" id="navbar-menus">
        <ul class="navbar-nav nav-justified w-100 align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="#home">
                    <i class="fas fa-home"></i>
                    <span class="d-block" style="font-size: 0.7rem">Home</span>
                </a>
            </li>
            <!--<li class="nav-item">
          <a class="nav-link" href="#mempelai">
            <i class="fa-solid fa-user-group"></i>
            <span class="d-block" style="font-size: 0.7rem">Mempelai</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tanggal">
            <i class="fa-solid fa-calendar-check"></i>
            <span class="d-block" style="font-size: 0.7rem">Tanggal</span>
          </a>
        </li>-->
            <!--<li class="nav-item">
                <a class="nav-link" href="#galeri">
                    <i class="fa-solid fa-images"></i>
                    <span class="d-block" style="font-size: 0.7rem">Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ucapan">
                    <i class="fa-solid fa-comments"></i>
                    <span class="d-block" style="font-size: 0.7rem">Ucapan</span>
                </a>
            </li>
        </ul>-->
    </nav>

    <!-- Main Content -->
    <main class="text-light" data-bs-spy="scroll" data-bs-target="#navbar-menus" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" tabindex="0">
        <!-- Home -->
        <section class="container" id="home">
            <div class="text-center pt-4">
                <h1 class="font-esthetic my-4" style="font-size: 2.5rem">Wedding Party</h1>

                <div class="py-4">
                    <div class="img-crop border border-3 border-light shadow mx-auto">
                        <img src="./assets/images/bg1.jpg" alt="bg" onclick="modalFoto(this)" />
                    </div>
                </div>

                <h1 class="font-esthetic my-4" style="font-size: 3rem">Galang & Pritty</h1>
                <h4>Minggu, 23 November 2025</h4>

                <a class="btn btn-outline-light btn-sm shadow rounded-pill px-3 my-2" target="_blank"
                    href="guestbook.php">
                    <i class="fa-solid fa-calendar-check me-2"></i>Be Our Guest
                </a>

                <!--<div class="d-flex justify-content-center align-items-center mt-4 mb-2">
            <div class="mouse-animation">
              <div class="scroll-animation"></div>
            </div>
          </div>

          <p class="m-0">Scroll Down</p>
        </div>-->
        </section>

        <!-- Wave Separator -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#111111" fill-opacity="1"
                d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <!-- Galeri Foto -->
        <section class="dark-section" id="galeri">

            <div class="container pb-2 pt-4">
                <div class="card-body border rounded-4 shadow p-3">

                    <h1 class="font-esthetic text-center py-3" data-aos="fade-down" data-aos-duration="1500"
                        style="font-size: 2rem;">Galeri</h1>

                    <div id="carousel-foto-satu" data-aos="fade-up" data-aos-duration="1500" class="carousel slide"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-foto-satu" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <img src="./assets/images/db.jpg" class="d-block w-100" onclick="modalFoto(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/db2.jpg" class="d-block w-100" onclick="modalFoto(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/db3.jpg" class="d-block w-100" onclick="modalFoto(this)">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-satu"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-satu"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div id="carousel-foto" data-aos="fade-up" data-aos-duration="1500" class="carousel slide mt-4"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-foto" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-foto" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-foto" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner rounded-4">
                            <div class="carousel-item active">
                                <img src="./assets/images/gp.jpg" class="d-block w-100" onclick="modalFoto(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/gp.jpg" class="d-block w-100" onclick="modalFoto(this)">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/1280/720?random=8" class="d-block w-100"
                                    onclick="modalFoto(this)">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-foto-dua"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-foto-dua"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ucapan -->
        <section class="m-0 p-0" id="ucapan">
            <div class="container">
                <div class="card-body border rounded-4 shadow p-3">
                    <h1 class="font-esthetic text-center mb-3" style="font-size: 3rem">Ucapan & Doa</h1>
                    <div class="mb-1" id="balasan"></div>

                    <div class="mb-3">
                        <label for="form-nama" class="form-label">Nama</label>
                        <input type="text" class="form-control shadow-sm" id="form-nama"
                            placeholder="Isikan Nama Anda" />
                    </div>

                    <div class="mb-3">
                        <label for="form-kehadiran" class="form-label" id="label-kehadiran">Kehadiran</label>
                        <select class="form-select shadow-sm" id="form-kehadiran">
                            <option value="0" selected>Konfirmasi Kehadiran</option>
                            <option value="1">Hadir</option>
                            <option value="2">Berhalangan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="form-pesan" class="form-label">Ucapan & Doa</label>
                        <textarea class="form-control shadow-sm" id="form-pesan" rows="4"
                            placeholder="Tulis Ucapan & Doa"></textarea>
                    </div>

                    <div class="d-flex">
                        <button class="flex-fill btn btn-danger btn-sm rounded-3 shadow m-1" style="display: none"
                            onclick="comment.batal()" id="batal">Batal<i class="fa-solid fa-xmark ms-1"></i></button>
                        <button class="flex-fill btn btn-success btn-sm rounded-3 shadow m-1" style="display: none"
                            onclick="comment.reply()" id="reply">Balas<i class="fa-solid fa-reply ms-1"></i></button>
                        <button class="flex-fill btn btn-warning btn-sm rounded-3 shadow m-1" style="display: none"
                            onclick="comment.ubah()" id="ubah">Edit<i
                                class="fa-solid fa-pen-to-square ms-1"></i></button>
                        <button class="flex-fill btn btn-primary btn-sm rounded-3 shadow m-1" onclick="comment.kirim()"
                            id="kirim">Kirim<i class="fa-solid fa-paper-plane ms-1"></i></button>
                    </div>
                </div>

                <div class="rounded-4 mt-4 mb-2" id="daftar-ucapan"></div>

                <nav class="d-flex justify-content-center mb-0">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled" id="previous">
                            <button class="page-link" onclick="pagination.previous(this)" aria-label="Previous"><i
                                    class="fa-solid fa-circle-left me-1"></i>Sebelumnya</button>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link" id="page">1</span>
                        </li>
                        <li class="page-item" id="next">
                            <button class="page-link" onclick="pagination.next(this)" aria-label="Next">Selanjutnya<i
                                    class="fa-solid fa-circle-right ms-1"></i></button>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <!-- Footer Undangan -->
        <footer>
            <div class="container">
                <hr class="mt-3 mb-2" />

                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <small class="text-light"> Build with<i class="fa-solid fa-heart mx-1"></i>Wedding Producer -
                            Wedding Planer - Wedding Organizer </small>
                    </div>
                    <div class="col-auto">
                        <small> <i class="fa-brands fa-instagram me-1"></i><a target="_blank" href="">MiLLen Wedding
                                Services</a> </small>
                    </div>
                </div>
            </div>
            </div>
        </footer>

        <!-- Welcome Page -->
        <div class="loading-page" id="welcome" style="opacity: 1">
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important">
                <div class="text-center">
                    <h1 class="font-esthetic mb-4" style="font-size: 2.5rem">The Wedding Of</h1>

                    <div class="img-crop border border-3 border-light shadow mb-4 mx-auto">
                        <img src="./assets/images/bg1.jpg" alt="bg" />
                    </div>

                    <h1 class="font-esthetic my-4" style="font-size: 2.5rem">Galang & Pritty</h1>
                    <div id="nama-tamu"></div>

                    <button type="button" class="btn btn-light shadow rounded-4 mt-4" onclick="buka()"><i
                            class="fa-solid fa-envelope-open me-2"></i>Buka</button>
                </div>
            </div>
        </div>

        <!-- Audio Button -->
        <button type="button" id="tombol-musik" style="display: none"
            class="btn btn-light btn-sm rounded-circle btn-music" onclick="play(this)" data-status="true"
            data-url="./assets/music/Theme_Song.mp3">
            <i class="fa-solid fa-circle-pause"></i>
        </button>

        <!-- Loading page -->
        <div class="loading-page" id="loading" style="opacity: 1">
            <div class="d-flex justify-content-center align-items-center" style="height: 100vh !important">
                <div class="text-center w-75">
                    <img class="img-fluid mb-3" src="./assets/images/logo.png" alt="icon" style="width: 3.5rem" />
                    <div class="progress" role="progressbar" style="height: 0.5rem">
                        <div class="progress-bar" id="bar" style="width: 0%"></div>
                    </div>
                    <small class="mt-1" id="progress-info">Loading asset</small>
                </div>
            </div>
        </div>

        <!-- Modal Foto Large -->
        <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100%">
                            <img src="./assets/images/bg1.jpg" class="w-100" alt="foto" id="showModalFoto" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dependencies JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha256-gvZPYrsDwbwYJLD5yeBfcNujPhRoGOY831wwbIzz3t0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"
            integrity="sha256-pQBbLkFHcP1cy0C8IhoSdxlm0CtcH5yJ2ki9jjgR03c=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"
            integrity="sha256-XG5M9shcLLpu8ct5bVbu6lLVzLpfZChl+csxdyLVP18=" crossorigin="anonymous"></script>

        <!-- Custom JS -->
        <script src="./js/app.js"></script>
</body>

</html>