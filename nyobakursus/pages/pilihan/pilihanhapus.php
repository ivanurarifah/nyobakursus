<?php include "database/connection.php" ?>
<div id="id" class="row mb-3">
 <div class="col">
  <h3>Hapus Data Pilihan</h3>
 </div>
 <div class="col">
  <a href="?page=pilihan" class="btn btn-primary float-end">
   <i class="da da-arrow-circle-left"></i>
   <a href="?page=pilihan" class="btn btn-primary float-end">Kembali</a>
  </a>
 </div>
</div>
<div id="pesan" class="row mb-3">
 <div class="col">
  <?php
  $id = $_GET['id'];
  $sql = "DELETE FROM pilihan WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if (!$result) {
  ?>
   <div class="alert" class="alert-danger" role="alert">
    <i class="fa fa-exclamation-circle"></i>
    <?= mysqli_errno($conn) ?>
   </div>
  <?php } else { ?>
   <div class="alert" class="alert-success" role="alert">
    <i class="fa fa-check-circle"></i>
    Data berhasil dihapus
   </div>
   <meta http-equiv="refresh" content="2;url=?page=pilihan">
  <?php } ?>
 </div>
</div>