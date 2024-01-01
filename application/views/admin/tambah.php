
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h2>
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Gallery
                </div>

                <div class="card-body">
                    <form action="" method="post" encrype="multipart/form-data">

                    <div class="form-group mb-3">
                            <label for="gambar">Gambar</label>
                            <div class="costume-file">
                                <input type="file" class="custom-file-input" name="gambar" >
                                <label for="gambar" class="custom-file-label">Pilih Gambar</label>
                            </div>
                            
                        </div>
                        <div class="form-group mb-3">
                            <label for="Nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="prodi" placeholder="Nama Photo" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="kategori" placeholder="kategori" value="<?= set_value('kategori'); ?>">
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="keterangan" value="<?= set_value('keterangan'); ?>">
                            <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <a href="<?=base_url('Admin')?> " class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Item</button>
                    </form>
                </div>
            </div>
            </div>

        </div>
        </div>
    </div>
    </div>
</div>
</div>
