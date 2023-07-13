<?php include "database/connection.php" ?>
<div class="row g-3 my-2">
  <div class="col-md-6 col-lg-3">
    <h3>Pilihan</h3>
  </div>
  <div class="col">
    <a href="?page=pilihantambah" class="btn btn-success float-end">
      <i class="fa fa-plus-circle"></i>
      Tambah
    </a>
  </div>
</div>
<div class="row mt-3">
  <div class="col">
    <?php
    $sql = "SELECT * FROM pilihan";
    $result = mysqli_query($conn, $sql);
    if (!$result) :
    ?>
      <div class="alert alert-danger" role="alert">
        <?= mysqli_error($conn) ?>
      </div>
    <?php return;
    endif; ?>
    <?php if (mysqli_num_rows($result) == 0) : ?>
      <div class="alert alert-light" role="alert">
        data kosong
      </div>
    <?php return;
    endif; ?>
    <table class="table bg-white rounded shadow-sm  table-hover">
      <thead>
        <tr>
          <th scope="col" width="50">Nomer</th>
          <th scope="col">kategori Kursus</th>
          <th scope="col" width="400">Pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
          <tr class="align-middle">
            <td>
              <?= $no++ ?>
            </td>
            <td>
              <?= $row['kategori'] ?>
            </td>
            <td>
            <a href="?page=pilihandetail&id=<?= $row['id'] ?>" class="btn btn-primary">
                <i class="fa fa-edit"></i>
                Detail Materi</a>
              <a href="?page=pilihanubah&id=<?= $row['id'] ?>" class="btn btn-primary">
                <i class="fa fa-edit"></i>
                Ubah</a>
              <a href="?page=pilihanhapus&id=<?= $row['id'] ?>" onclick="javascript:return confirm('konfirmasi data akan dihapus?');" class="btn btn-danger">
                <i class="fa fa-trash"></i>
                Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
</div>