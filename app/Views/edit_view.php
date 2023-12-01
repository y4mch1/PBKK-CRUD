<div class="container p-5">
    <a href="<?= base_url('karyawan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Karyawan : <?= $karyawan->nama;?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('karyawan/update');?>">
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" value="<?= $karyawan->nama;?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nomor Handphone</label>
                    <input type="text" value="<?= $karyawan->nohp;?>" name="nohp" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" value="<?= $karyawan->tgllahir;?>" name="tgllahir" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Golongan</label>
                    <input type="text" value="<?= $karyawan->golongan;?>" name="golongan" required class="form-control">
                </div>
                <input type="hidden" value="<?= $karyawan->id;?>" name="id">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>