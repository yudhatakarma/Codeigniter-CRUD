<div id="flash-data" data-flashdata="<?=$this->session->flashdata('success')?>"></div>
<section class="content-header">
    <a href="<?=site_url('data/mahasiswa/add')?>" class="btn btn-sm bg-blue"><i class="fas fa-plus"></i> Tambah</a>
</section>

<section class="content container-fluid">
    <div class="panel">
        <div class="panel-heading bg-blue"><i class="fas fa-user-graduate"></i> Data Mahasiswa</div>
        <div class="panel-body table-responsive">
            <table class="table table-bordered table-hover" id="datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Mahasiswa</th>
                        <th>Tmp/Tgl. Lahir</th>
                        <th>JK</th>
                        <th>Agama</th>
                        <th>No. HP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($mahasiswa as $row): ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td>
                                <?=$row['nama_mhs']?> <br>
                                <small><?=$row['npm'];?>/<?=$row['prodi'];?></small>
                            </td>
                            <td>
                                <?=$row['tmp_lahir']?> <br> <?=indo_date($row['tgl_lahir'])?>
                            </td>
                            <td><?=$row['jenis_kelamin']?></td>
                            <td><?=$row['agama']?></td>
                            <td><?=$row['no_hp']?></td>
                            <td>
                                <a href="<?=site_url('mahasiswa/updated/'.$row['id_mahasiswa'])?>" class="btn btn-sm bg-green"><i class="fas fa-edit"></i></a>
                                <a href="<?=site_url('mahasiswa/deleted/'.$row['id_mahasiswa'])?>" class="btn btn-sm bg-red btn-del"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>