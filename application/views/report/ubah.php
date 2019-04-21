<div class="container">
    <h1>Hello, world!</h1>
    <h2>Report / Ubah</h2>
<hr>
<hr>

    <?php if( $this->session->flashdata('flashUbah')) : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data izin mikro <strong>Berhasil!</strong> <?= $this->session->flashdata('flashUbah'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md">
            
            <!-- tampil eror untuk semua -->
            <!-- <?php if(validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?> -->

            <form action="" method="post">
                
                <input type="hidden" name="no" value="<?= $izin['no']; ?>">

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama" name="nama_pemohon" value="<?= $izin['nama_pemohon']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama_pemohon'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="nik">No Induk Kependudukan</label>
                    <input type="text" class="form-control" id="nik" name="nik" value="<?= $izin['nik']; ?>">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat_pemohon">Alamat Tinggal</label>
                    <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" value="<?= $izin['alamat_pemohon']; ?>">
                    <small class="form-text text-danger"><?= form_error('alamat_pemohon'); ?></small>
                </div>

                <div class="form-group">
                    <label for="telp">No. Telpon</label>
                    <input type="text" class="form-control" id="telpon" name="telpon" value="<?= $izin['no_telpon']; ?>">
                    <small class="form-text text-danger"><?= form_error('telpon'); ?></small>
                </div>
                
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama_usaha">Nama usaha</label>
                    <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" value="<?= $izin['nama_usaha']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama_usaha'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="npwp">NPWP</label>
                    <input type="text" class="form-control" id="npwp" name="npwp" value="<?= $izin['npwp']; ?>">
                    <small class="form-text text-danger"><?= form_error('npwp'); ?></small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="sarana_usaha">Sarana Usaha</label>
                    <select class="form-control" name="sarana_usaha">

                    <?php foreach( $saranaUsaha as $sarUs) : ?>
                        <?php if($sarUs == $izin['sarana_usaha']) : ?>
                            <option value="<?= $sarUs; ?>" selected><?= $sarUs; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    </select>                    
                    </div>
                    <div class="form-group col-md-6">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" value="<?= $izin['jenis_usaha']; ?>">
                    <small class="form-text text-danger"><?= form_error('jenis_usaha'); ?></small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat_usaha">Alamat Usaha</label>
                    <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" value="<?= $izin['alamat_usaha']; ?>">
                    <small class="form-text text-danger"><?= form_error('alamat_usaha'); ?></small>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="modal_usaha">Modal usaha</label>
                    <input type="text" class="form-control" id="modal_usaha" name="modal_usaha" value="<?= $izin['modal_usaha']; ?>">
                    <small class="form-text text-danger"><?= form_error('modal_usaha'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="rekomendasi">No Rekomendasi</label>
                    <input type="text" class="form-control" id="rekomendasi" name="rekomendasi" value="<?= $izin['no_rekomendasi']; ?>">
                    <small class="form-text text-danger"><?= form_error('rekomendasi'); ?></small>
                    </div>
                </div>

                <button class="btn btn-success" type="submit" name="ubah">Simpan Data</button>
            </form>

        </div>
    </div>
</div>