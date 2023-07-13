<?php

if (isset($_GET["page"])) {
  $page = $_GET["page"];
} else {
  $page = "";
}

switch ($page) {
  case "":
  case "dashboard":
    include "pages/dasboard.php";
    break;
  case "pilihan":
    include "pages/pilihan/pilihan.php";
    break;
  case "pilihantambah":
    include "pages/pilihan/pilihantambah.php";
    break;
  case 'pilihanhapus':
    include "pages/pilihan/pilihanhapus.php";
    break;
  case 'pilihanubah':
    include "pages/pilihan/pilihanubah.php";
    break;
  case 'pilihandetail':
      include "pages/pilihan/pilihandetail.php";
      break;  
  case 'informasi':
      include "pages/informasi/informasi.php";
    break;
    default:
      include "pages/404.php";
}
