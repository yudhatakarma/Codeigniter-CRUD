<div id="flash-data" data-flashdata="<?=$this->session->flashdata('success')?>"></div>

<section class="content-header">
    <a href="<?=site_url('data/mahasiswa')?>" class="btn btn-sm bg-blue"><i class="fas fa-users"></i> Data Mahasiswa</a>
</section>

<section class="content container-fluid">

    <div class="panel">
        <div class="panel-heading bg-blue"><i class="fas fa-user-plus"></i> Tambah Data Mahasiswa</div>
        <div class="panel-body">
            <form method="post" action="<?=site_url('mahasiswa/updated')?>" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-3">Nama Mahasiswa</label>
                    <div class="col-md-8">
                        <input type="hidden" class="form-control" name="id_mhs" value="<?=$mhs['id_mahasiswa']?>">
                        <input type="text" class="form-control" name="nama_mhs" value="<?=$mhs['nama_mhs']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">NPM / Prodi</label>
                    <div class="col-md-4">
                        <input type="number" class="form-control" name="npm" value="<?=$mhs['npm']?>">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="prodi" value="<?=$mhs['prodi']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tmp/Tgl. Lahir</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="tmp_lahir" value="<?=$mhs['tmp_lahir']?>">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="tgl_lahir" id="tanggal" value="<?=$mhs['tgl_lahir']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Jenis Kelmain</label>
                    <div class="col-md-8">
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?=$mhs['jenis_kelamin']?>"><?=$mhs['jenis_kelamin']?></option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select name="agama" class="form-control">
                            <option value="<?=$mhs['agama']?>"><?=$mhs['agama']?></option>
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
                        <input type="tel" class="form-control" name="no_hp" value="<?=$mhs['no_hp']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3"></label>
                    <div class="col-md-8">
                       <button type="submit" name="submit" class="btn btn-sm bg-blue"><i class="fas fa-save"></i> Perbarui</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>