<?php include 'header.php'; ?>

<?php include 'menu.php'; ?>

<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mt-5 text-gray-800 ">Dashboard</h1>
  </div>

  <div class="row">

    <div class="col-xl-2 col-md-6 mb-4">
      <a href="guru.php" style="text-decoration: none;">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Guru</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">104</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-people-carry fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <a href="mapel.php" style="text-decoration: none;">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mapel</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">68</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-book fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <a href="jurusan.php" style="text-decoration: none;">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jurusan</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-university fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <a href="ruang.php" style="text-decoration: none;">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ruang</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">31</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-door-open fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <a href="kelas.php" style="text-decoration: none;">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kelas</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">256</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-star fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xl-2 col-md-6 mb-4">
      <a href="siswa.php" style="text-decoration: none;">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Siswa</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">33</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-user fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

  </div>

  <div class="row mt-3">

    <div class="col-md-7">
      <div class="card mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
          <h6 class="text-custom font-weight-bold">Kelola User</h6>
          <a href="#" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm" data-toggle="modal"
            data-target="#tambahUserModal"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah User</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Level</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>ALex</td>
                  <td>Suvervisor</td>
                  <td>
                    <a href="editUser.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailUser.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteUser.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Ronal</td>
                  <td>Kurikulum</td>
                  <td>
                    <a href="editUser.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailUser.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteUser.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Totti</td>
                  <td>Kurikulum</td>
                  <td>
                    <a href="editUser.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailUser.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteUser.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Surya</td>
                  <td>Tata Usaha</td>
                  <td>
                    <a href="editUser.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailUser.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteUser.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
                <tr>
                  <td>Salman</td>
                  <td>Kepala Sekolah</td>
                  <td>
                    <a href="editUser.php" class="btn btn-success btn-sm">Edit</a> |
                    <a href="detailUser.php" class="btn btn-warning btn-sm">Detail</a> |
                    <a href="deleteUser.php" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-5">
      <div class="card mb-4">
        <div class="card-header">
          <h6 class="text-custom font-weight-bold">Baru saja Log In</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="dataTable" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama Lengkap<br>Email</th>
                  <th>Logged In</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alexsander Suyono<br>alex2020@gmail.com</td>
                  <td>5 minute ago</td>
                  <td>
                    <a href="" class="btn btn-warning btn-sm">Detail</a>
                  </td>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>


<!-- Tambah User Modal-->
<div class="modal fade" id="tambahUserModal" tabindex="-1" role="dialog" aria-labelledby="tambahUserModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahUserModalLabel">Tambah Jurusan Guru</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="user" action="" method="POST">
          <div class="form-group">
            <label for="nipUser">NIP User</label>
            <input type="number" class="form-control" id="nipUser" name="nipUser" required>
          </div>
          <div class="form-group">
            <label for="namaUser">Nama User</label>
            <input type="text" class="form-control" id="namaUser" name="namaUser" required>
          </div>
          <div class="form-group">
            <label for="alamatUser">Alamat User</label>
            <textarea class="form-control" name="alamatUser" id="alamatUser" cols="10" rows="3">Bandung</textarea>
          </div>
          <div class="form-group">
            <label for="noTeleponUser">No Telepon User</label>
            <input type="text" class="form-control" id="noTeleponUser" name="noTeleponUser" required>
          </div>
          <div class="form-group">
            <label>Level</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Pilih Level -- </option>
              <option value="">Supervisor</option>
              <option value="">Kepala Sekolah</option>
              <option value="">Tata Usaha</option>
              <option value="">Kurikulum</option>
            </select>
          </div>
          <div class="form-group">
            <label for="emailUser">Email User</label>
            <input type="text" class="form-control" id="emailUser" name="emailUser" required>
          </div>
          <div class="form-group">
            <label for="passwordUser">Password User</label>
            <input type="password" class="form-control" id="passwordUser" name="passwordUser" required>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="prodi" class="form-control" required>
              <option value=""> -- Status Sekarang -- </option>
              <option value="no_active">Aktif</option>
              <option value="active">Tidak Aktif</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button type="submit" name="tambahUser" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>