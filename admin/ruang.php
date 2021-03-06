<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Data Ruang</h1>
  </div>

  <div class="row">

    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Data Ruang</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahRuangModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Ruang</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Ruangan</th>
                  <th>Kapasitas Ruangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1.</td>
                  <td>R304</td>
                  <td>45</td>
                  <td>
                    <a href="editRuang.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="deleteRuang.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<!-- Tambah Ruangan Modal-->
<div class="modal fade" id="tambahRuangModal" tabindex="-1" role="dialog" aria-labelledby="tambahRuangModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahRuangModal">Tambah Ruangan</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
        <div class="form-group">
          <label for="namaRuang">Nama Ruangan</label>
          <input type="text" class="form-control" id="namaRuang" name="namaRuang" required>
        </div>
        <div class="form-group">
          <label for="kapasitasRuang">Kapasitas Ruangan</label>
          <input type="number" class="form-control" id="kapasitasRuang" name="kapasitasRuang" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahRuang" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>