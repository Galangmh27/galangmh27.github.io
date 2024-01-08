<?php
include 'head.php';
?>

<body>
    <!--Preloader-->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!--/Preloader-->

    <div class="wrapper pa-0">
        <header class="sp-header navbar-dark bg-dark">
            <div class="sp-logo-wrap mb-10">
                <span class="brand-text-white">Buku Tamu Galang & Pritty</span>
            </div>
        </header>
        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page" style="background-image:url(assets/images/bg5.jpg)"
            background-size:100%; no-repeat center top;>
            <div class="container-fluid">
                <!-- Row -->
                <div class="table-struct full-width full-height">
                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-light mb-10">Isi Buku Tamu</h3>
                                        <h6 class="text-center nonecase-font txt-light">Masukkan data anda di bawah
                                            ini
                                        </h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="aksi.php" method="POST">
                                            <div class="mb-3">
                                                <label for="form-nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control shadow-sm" name="nama"
                                                    id="form-nama" placeholder="Isikan Nama Anda" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="form-alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control shadow-sm" name="alamat"
                                                    id="form-nama" placeholder="Isikan Alamat Anda" />
                                            </div>

                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-info btn-success btn-rounded"
                                                    name="bsimpan">Simpan</button>
                                            </div>
                                        </form>
                                        <hr>
                                        <div class="button-group text-center">
                                            <a href="index.php" class="btn btn-info btn-success btn-rounded">Kembali
                                            </a>
                                            <a href="data_tamu.php" class="btn btn-info btn-success btn-rounded">Data
                                                Tamu
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Main Content -->
        </div>
        <!-- /#wrapper -->
    </div>
    <button type="button" id="tombol-musik" style="display: none" class="btn btn-light btn-sm rounded-circle btn-music"
        onclick="play(this)" data-status="true" data-url="./assets/music/Theme_Song.mp3">
        <i class="fa-solid fa-circle-pause"></i>
    </button>
    <?php
include 'foot.php';
?>