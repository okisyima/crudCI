<!-- <?php var_dump($izin); ?> -->
<div class="container">

    <h1>Hello, world!</h1>
    <h2>Report / Index</h2>

<hr>
<hr>

    <?php if( $this->session->flashdata('flashHapus')) : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data izin mikro <strong>Berhasil!</strong> <?= $this->session->flashdata('flashHapus'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('input'); ?>" class="btn btn-primary">Tambah Izin</a>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-md-6">
        <h3>Daftar Izin Usaha MK</h3>
            <ul class="list-group">
            <?php foreach($izin as $row) : ?>
                <li class="list-group-item">
                    <?= $row ['nama_pemohon']; ?>
                    <a href="<?= base_url(); ?>Report/hapus/<?= $row['no']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin loh?');">hapus</a>
                    <a href="<?= base_url(); ?>Report/ubah/<?= $row['no']; ?>" class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>Report/detail/<?= $row['no']; ?>" class="badge badge-primary float-right">detail</a>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>