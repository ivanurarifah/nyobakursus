<div id="id" class="row mb-3">
  <div class="col">
    <h3>Ubah Data pilihan</h3>
  </div>
  <div class="col">
    <a href="?page=pilihan" class="btn btn-primary float-end">
      <i class="da da-arrow-circle-left"></i>
      <a href="?page=pilihan" class="btn btn-primary float-end">Kembali</a>
    </a>
  </div>
</div>
<div id="inputan" class="row mb-3">
  <div class="col">
    <?php
    include "database/connection.php";
    if (isset($_POST['simpan'])) {
      $id = $_POST['id'];
      $pilihan = $_POST['pilihan'];
      $cek = "SELECT * FROM pilihan WHERE kategori='$pilihan'";
      $resultCek = mysqli_query($conn, $cek);
      if (mysqli_num_rows($resultCek) > 0) {
    ?>
        <div class="alert alert-danger" role="alert">
          <i class="fa fa-exclamation-circle"></i>
          nama pilihan sudah ada
        </div>
        <?php
      } else {
        $sql = "UPDATE pilihan SET kategori='$pilihan' WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
        ?>
          <div class="alert alert-danger" role="alert">
            <i class="fa fa-exclamation-circle"></i>
            <?= mysqli_error($conn); ?>
          </div>
        <?php } else { ?>
          <div class="alert alert-success" role="alert">
            <i class="fa fa-check-circle"></i>
            Data berhasil diubah
          </div>
    <?php
        }
      }
    }
    $id = $_GET['id'];
    $sql = "SELECT * FROM pilihan WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (!$result || mysqli_num_rows($result) == 0) {
      echo '<meta http-wquiv="refresh" content="0:url=?page=pilihan"';
    }
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="card px-3 py-3">
      <form action="" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="emailHelp" placeholder="Contohnya:Kursus Pemograman" required name="id" value="<?= $id ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Pilihan</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contohnya:Kursus Pemograman" required name="pilihan" value="<?= $row['kategori'] ?>">
        </div>
        <div class="col mb-3">
          <button type="submit" name="simpan" class="btn btn-success">
            <i class="fa fa-save"></i>
            Simpan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>