<div id="id" class="row mb-3">
 <div class="col">
  <h3>Tambah Data Pilihan</h3>
 </div>
 <div class="col">
  <i class="da da-arrow-circle-left"></i>
  <a href="?page=pilihan" class="btn btn-primary float-end">Kembali</a>
 </div>
</div>
<div id="pesan" class="row mb-3">
 <div class="col">
  <?php include "database/connection.php";
  if (isset($_POST['simpan'])) {
   $kategori = $_POST['pilihan'];
   $sudahAda = false;
   $cek = "SELECT * FROM pilihan WHERE kategori='$kategori'";
   $resultCek = mysqli_query($conn, $cek);
   if (mysqli_num_rows($resultCek) > 0) {
    $sudahAda = true;
   }
   if ($sudahAda) {
  ?>
    <div class="alert alert-danger" role="alert">
     <i class="fa fa-exclamation-circle"></i>
     nama pilihan sudah ada
    </div>
    <?php
   } else {
    $sql = "INSERT INTO pilihan SET kategori='$kategori'";
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
      Data berhasil disimpan
     </div>
    <?php } ?>
   <?php } ?>
  <?php } ?>
 </div>
</div>
<div id="inputan" class="row mb-3">
 <div class="col">
  <div class="card px-3 py-3">
   <form action="" method="post">
    <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Pilihan kategori</label>
     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="misal:Kursus Pemograman" required kategori="pilihan">
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
<script>
 if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
 }
</script>