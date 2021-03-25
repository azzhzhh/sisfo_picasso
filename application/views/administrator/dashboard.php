<div class="container-fluid">
    <div class="alert alert-success" role="alert">
    <i class="fas fa-tachometer-alt"></i> Dashboard
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang!</h4>
        <p>Selamat Datang <strong> <?php echo $username ?> </strong> 
        di Sistem Informasi Picasso Drawing School, Anda login sebagai
        <strong> <?php echo $level; ?> </strong> </p>
        <hr>
            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cogs"></i> Control Panel
            </button>
        </div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Control Panel </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Siswa </p> </a>
            <i class="fas fa-3x fa-user-graduate"></i>
            </div>

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Guru </p> </a>
            <i class="fas fa-3x fa-chalkboard-teacher"></i>
            </div>

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Materi </p> </a>
            <i class="fas fa-3x fa-sticky-note"></i>
            </div> 

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Kelas </p> </a>
            <i class="fas fa-3x fa-address-book"></i>
            </div> 
        </div> <hr>
        <div class="row">
            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Input Nilai </p> </a>
            <i class="fas fa-3x fa-sort-numeric-down"></i>
            </div>

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Tugas </p> </a>
            <i class="fas fa-3x fa-tasks"></i>
            </div>

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Upload Tugas </p> </a>
            <i class="fas fa-3x fa-file-upload"></i>
            </div> 

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info"> Study Record </p> </a>
            <i class="fas fa-3x fa-file-alt"></i>
            </div> 
        </div> <hr>
        <div class="row">
            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info">Info Picasso</p> </a>
            <i class="fas fa-3x fa-info-circle"></i>
            </div>

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info">Fasilitas</p> </a>
            <i class="fas fa-3x fa-laptop"></i>
            </div>

            <div class="col-md-3 text-info text-center">
            <a href=" <?php echo base_url() ?>"> <p class="nav-link small text-info">Gallery</p> </a>
            <i class="fas fa-3x fa-images"></i>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>