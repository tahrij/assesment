<?php $this->load->view('header') ?>
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
    <div class="container">
      <form action="<?php echo $action; ?>" method="post">
        <div class="mb-3">
          <label for="judul" class="form-label">Judul Program Baru</label>
          <input type="text" class="form-control" placeholder="Judul Program" id="judul" name="judul" value="<?php echo $judul; ?>" required>
        </div>
        <div class="mb-3">
          <label for="detail" class="form-label">Detail/Keterangan</label>
          <input type="text" class="form-control" placeholder="Detail" id="detail" name="detail" value="<?php echo $detail; ?>" required>
        </div>
        <!-- Add other fields as needed -->

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>


<?php $this->load->view('footer') ?>