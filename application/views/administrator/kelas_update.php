<div class="container-fluid">

<div class="alert alert-success" role="alert">
        <i class="fas fa-university"></i> Form Update Kelas
    </div>

<?php foreach($kelas as $kls) :?>
    <form method="post" action="<?php echo base_url('administrator/kelas/update_aksi') ?>">
        <div class="form_group">
            <label>Kode Kelas</label>
            <input type="hidden" name="id_kelas" 
            value="<?php echo $kls->id_kelas?>">
            <input type="text" name="kode_kelas" class="form-control" 
            value="<?php echo $kls->kode_kelas?>">
        </div>

        <div class="form_group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" 
            value="<?php echo $kls->nama_kelas?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
<?php endforeach; ?>
</div>