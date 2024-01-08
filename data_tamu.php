<?php
include 'head.php';
?>

<body>
    <div class="col mx-auto">
        <div class="card mt-3">
            <div class="card-header bg-green text-black">
                <b>Data Buku Tamu Wedding Galang & Pritty<strong></strong></b>
            </div>
            <div class="card-body">
                <div class="button-group text-left mb-3">
                    <a href="guestbook.php" class="btn btn-info btn-success btn-rounded">Tambah Data
                    </a>
                </div>
                <div class="table-responsive mb-3">
                    <table id="datatablesSimple" class="table table-striped-columns table-hover text-center"
                        style=" width:100%">
                        <thead>
                            <tr>
                                <th class="text-center text-light">No.</th>
                                <th class="text-center text-light">Tanggal</th>
                                <th class="text-center text-light">Nama</th>
                                <th class="text-center text-light">Alamat</th>
                            </tr>
                        </thead>
                        <!--- Awal Tampil Data Di tabel-->
                        <?php
                            $no = 1;
                            //awal tangkap data dari tanggal
                            include "db.php";
                            $query = mysqli_query($koneksi, "select*from buku_tamu");
                            while ($data = mysqli_fetch_array($query)){

                        ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td class="text-center">
                                <?php $tanggals=$data['tanggal']; echo date("d-M-Y", strtotime($tanggals)) ?>
                            </td>
                            <td class="text-center">
                                <?= $data['nama'] ?>
                            </td>
                            <td class="text-center">
                                <?= $data['alamat'] ?>
                            </td>
                            <td class="text-center">
                                <a href="guestbook.php" class=" btn btn-green"><i
                                        class="fas fa-pencil-square"></i>Back</a>
                            </td>
                        </tr>
                        <?php
                    }?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
include 'foot.php';
?>