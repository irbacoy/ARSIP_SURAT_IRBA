<div class="m-3">
    <h2>Arsip Surat</h2>
    <p class="w-50">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br> 
        Klik "Lihat" pada kolom aksi untuk menampilkan surat</p>
    <?= $this->load->view('alert', null, TRUE);
    ?>
    <hr>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <table class="table table-bordered" id="datatables">
        <thead>
            <tr>
                <th>Nomor Surat</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Waktu Pengarsipan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arsipData as $key => $value) { ?>
                <tr>
                    <td style="text-transform: uppercase;" scope="row"><?= $value['nomor_surat'] ?></td>
                    <td><?= $value['kategori'] ?></td>
                    <td><?= $value['judul_surat'] ?></td>
                    <td><?= $value['createdAt'] ?></td>
                    <td>
                        <div class="d-flex">
                        <button class="btn btn-sm btn-danger" onclick="deleteModal(<?= $value['id_arsip'] ?>)" role="button"><i class="fa fa-trash"></i>
                        </button>
                        <hr>
                        <a class="btn btn-sm btn-warning" href="<?= base_url('arsip/download/' . $value['id_arsip']) ?>" role="button"><i class="fa fa-download"></i></a>
                        <hr>
                        <a class="btn btn-sm btn-primary" href="<?= base_url('arsip/detail/' . $value['id_arsip']) ?>" role="button"><i class="fa fa-eye" ></i></a>
                    </td>
                </tr>
            <?php } ?>
        </div>
        </tbody>
    </table>
    <div class="py-4">
        <a class="btn btn-success" href="<?= base_url('arsip/tambah') ?>" role="button">Arsipkan Surat</a>
    </div>
</div>


<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('arsip/delete') ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Peringatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin menghapus arsip surat ini.</p>
                    <input id="idarsipdelete" name="idarsip" type="text" hidden>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Ya!</button>
                </div>
            </form>
        </div>
    </div>
</div>