<div class="container">
    <h1>Hello, world!</h1>
    <h2>Input / Index</h2>
<hr>
<hr>

    <?php if( $this->session->flashdata('flashTambah')) : ?>
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data izin mikro <strong>Berhasil!</strong> <?= $this->session->flashdata('flashTambah'); ?>.
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

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama">Nama Pemohon</label>
                    <input type="text" class="form-control" id="nama" name="nama_pemohon">
                    <small class="form-text text-danger"><?= form_error('nama_pemohon'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="nik">No Induk Kependudukan</label>
                    <input type="text" class="form-control" id="nik" name="nik">
                    <small class="form-text text-danger"><?= form_error('nik'); ?></small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat_pemohon">Alamat Tinggal</label>
                    <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon">
                    <small class="form-text text-danger"><?= form_error('alamat_pemohon'); ?></small>
                </div>

                <div class="form-group">
                    <label for="telp">No. Telpon</label>
                    <input type="text" class="form-control" id="telpon" name="telpon">
                    <small class="form-text text-danger"><?= form_error('telpon'); ?></small>
                </div>
                
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama_usaha">Nama usaha</label>
                    <input type="text" class="form-control" id="nama_usaha" name="nama_usaha">
                    <small class="form-text text-danger"><?= form_error('nama_usaha'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="npwp">NPWP</label>
                    <input type="text" class="form-control" id="npwp" name="npwp">
                    <small class="form-text text-danger"><?= form_error('npwp'); ?></small>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="sarana_usaha">Sarana Usaha</label>
                        <select class="form-control" id="sarana_usaha" name="sarana_usaha">
                        <option value="Rumah Tnggal">Rumah Tinggal</option>
                        <option value="Non Rumah Tnggal">Non Rumah Tinggal</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha">
                    <small class="form-text text-danger"><?= form_error('jenis_usaha'); ?></small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="alamat_usaha">Alamat Usaha</label>
                    <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha">
                    <small class="form-text text-danger"><?= form_error('alamat_usaha'); ?></small>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="modal_usaha">Modal usaha</label>
                    <input type="text" class="form-control" id="modal_usaha" name="modal_usaha">
                    <small class="form-text text-danger"><?= form_error('modal_usaha'); ?></small>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="rekomendasi">No Rekomendasi</label>
                    <input type="text" class="form-control" id="rekomendasi" name="rekomendasi">
                    <small class="form-text text-danger"><?= form_error('rekomendasi'); ?></small>
                    </div>
                </div>

                <button class="btn btn-success" type="submit" name="tambah">Simpan Data</button>
            </form>

        </div>
    </div>
</div>