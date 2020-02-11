<div id="flash-data" data-flashdata="<?=$this->session->flashdata('success')?>"></div>

<section class="content-header">
    <a href="<?=site_url('data/mahasiswa')?>" class="btn btn-sm bg-blue"><i class="fas fa-users"></i> Data Mahasiswa</a>
</section>

<section class="content container-fluid">

    <div class="panel">
        <div class="panel-heading bg-blue"><i class="fas fa-user-plus"></i> Tambah Data Mahasiswa</div>
        <div class="panel-body">
            <form method="post" action="<?=site_url('mahasiswa/created')?>" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-3">Nama Mahasiswa</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="nama_mhs" placeholder="Nama Mahasiswa">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">NPM / Prodi</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" name="npm" placeholder="NPM">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="prodi" placeholder="Program Studi">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tmp/Tgl. Lahir</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="tmp_lahir" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Kelmain</label>
                    <div class="col-md-8">
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">Pilih</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select name="agama" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">No. HP</label>
                    <div class="col-md-8">
                        <input type="tel" class="form-control" name="no_hp" placeholder="Nomor HP">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"></label>
                    <div class="col-md-8">
                       <button type="submit" name="submit" class="btn btn-sm bg-blue"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>