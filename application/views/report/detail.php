<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        
        <div class="card">
            <div class="card-header">
                Detail Data Izin usaha
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $izin['nama_pemohon']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $izin['nama_usaha']; ?></h6>
                <p class="card-text"><?= $izin['alamat_usaha'] ?></p>
                <a href="<?= base_url('report'); ?>" class="btn btn-primary">kembali-an</a>
            </div>
        </div>

        </div>
    </div>
</div>