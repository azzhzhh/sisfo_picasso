<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Input Kelas
    </div>

    <form method="post" action="<?php echo base_url('administrator/kelas/input_aksi') ?>">
        <div class="form-group">
            <label>Kode kelas</label>
            <input type="text" name="kode_kelas"
            placeholder="Masukkan Kode Kelas" class="form-control">
            <?php echo form_error('kode_kelas', '<div class="text-danger small" 
            ml-3>') ?>
        </div>

        <div class="form-group">
            <label>Nama kelas</label>
            <input type="text" name="nama_kelas"
            placeholder="Masukkan Nama Kelas" class="form-control">
            <?php echo form_error('nama_kelas', '<div class="text-danger small" 
            ml-3>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        

    </form>
</div>