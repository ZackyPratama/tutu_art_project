
    <!--  Header End -->
    <div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title fw-semibold mb-4"><?php echo $judul; ?></h5>

        <div class="col-md-6"><a href="<?= base_url()?>Admin/Tambah" class="btn btn-success mb-2">Tambah Data</a></div>

        <?= $this->session->flashdata('message');?>
        <table class="table">
        <thead>
            <tr>
            <td>No</td>
            <td>Gambar</td>
            <td>Nama</td>
            <td>Kategori</td>
            <td>Keterangan</td>
            <td>Aksi</td>
            </tr>
            </thead>
        <tbody>
        <?php $i = 1;?> 
            <?php foreach ($gallery as $gl) : ?>
                <tr>
                    <td><?= $i;?>.</td>
                    <td><img src="<?= base_url('uploads/') . $gl['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                    <td><?= $gl['nama'];?>.</td>
                    <td><?= $gl['kategori'];?>.</td>
                    <td><?= $gl['keterangan'];?>.</td>
                    
                <td>
                    <a href="<?= base_url('Admin/Hapus/') . $gl['id']; ?> " class="btn btn-danger">Hapus</a>
                    <a href="<?= base_url('Admin/Edit/') . $gl['id'];?>" class="btn btn-warning">Edit</a>
                    <!--  -->
                </td>
                </tr>
                <?php $i++; ?> 
            <?php endforeach; ?>
        </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
