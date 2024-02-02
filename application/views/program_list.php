<?php $this->load->view('header') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <?php if ($this->session->flashdata('message')) : ?>
  <div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('message') ?>
  </div>
  <?php endif ?>
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
      <table id="programTable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul Program</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          <?php foreach ($list_program as $program) : ?>
          <tr>
            <td><?php echo $count++; ?></td>
            <td>
              <?php echo '<strong>' . $program->judul . '</strong>'; ?>
            </td>
            <td>
              <?php echo substr($program->detail, 0, 50) . '...'; ?>
              <!-- Display a truncated version of the detail with an ellipsis -->
            </td>
            <td>
              <a href="<?php echo site_url('Program/update/' . $program->id) ?>" class="btn btn-info btn-sm"><i
                  class="fas fa-edit"></i></a>
              <a href="<?php echo site_url('Program/delete/' . $program->id) ?>" class="btn btn-danger btn-sm"
                onclick="return confirm('Apakah Anda Akan Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
              <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                data-target="#detailModal<?php echo $program->id; ?>"><i class="fas fa-eye"></i> Detail</a>
            </td>
          </tr>

          <!-- Detail Modal -->
          <div class="modal fade" id="detailModal<?php echo $program->id; ?>" tabindex="-1" role="dialog"
            aria-labelledby="detailModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="detailModalLabel">Detail Program: <?php echo $program->judul; ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p><?php echo $program->detail; ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function() {
    $('#programTable').DataTable();
  });
  </script>
</body>

</html>

<?php $this->load->view('footer') ?>