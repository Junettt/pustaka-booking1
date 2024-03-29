<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Flash Messages -->
    <?= $this->session->flashdata('pesan'); ?>

    <div class="row">
        <div class="col-lg-3">

            <!-- Validation Error Message -->
            <?php if(validation_errors()){ ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>

            <!-- Flash Messages -->
            <?= $this->session->flashdata('pesan'); ?>

            <!-- Button to Open Modal for Adding New Category -->
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kategoriBaruModal">
                <i class="fas fa-file-alt"></i> Tambah Kategori
            </a>

            <!-- Categories Table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $a = 1; ?>
                    <?php foreach ($kategori as $k) { ?>
                        <tr>
                            <th scope="row"><?= $a++; ?></th>
                            <td><?= $k['nama_kategori']; ?></td>
                            <td>
                                <a href="<?= base_url('buku/ubahkategori/').$k['id_kategori']; ?>" class="badge badge-info">
                                    <i class="fas fa-edit"></i> Ubah
                                </a>
                                <a href="<?= base_url('buku/hapuskategori/').$k['id_kategori']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$k['nama_kategori']; ?> ?');" class="badge badge-danger">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal for Adding New Category -->
<div class="modal fade" id="kategoriBaruModal" tabindex="-1" role="dialog" aria-labelledby="kategoriBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriBaruModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('buku/kategori'); ?>"method="post">
                <div class="modal-body">
                    <div class="form-group">
                    <input type="text" name="kategori" id="kategori" placeholder="Masukkan Nama Kategori" class="form-control-user">
                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-ban"></i> Close
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i> Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal for Adding New Category -->
<!-- End of Main Content -->
