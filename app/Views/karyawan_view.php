<div class="container pt-5">
    <a href="<?= base_url('karyawan/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Data Karyawan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Karyawan</th>
                            <th>Nomor Handphone</th>
                            <th>Tanggal Lahir</th>
                            <th>Golongan</th>
                            <th>Action</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getKaryawan as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $isi['nama'];?></td>
                                <td><?= $isi['nohp'];?></td>
                                <td><?= $isi['tgllahir'];?></td>
                                <td><?= $isi['golongan'];?></td>
                                <td>
                                    <a href="<?= base_url('karyawan/edit/'.$isi['id']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('karyawan/hapus/'.$isi['id']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data karyawan ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>