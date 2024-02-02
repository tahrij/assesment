<?php $this->load->view('header') ?>

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title"><?php echo $tittle ?></h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <center>
      <h1>Hallo Selamat Datang <?php echo $_SESSION['username'] ?> Di Website Silades</h1>
    </center>
  </div>

  <!-- /.card-body -->
  <div class="card-footer">
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->


<?php $this->load->view('footer') ?>