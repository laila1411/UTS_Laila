<?php
if (isset ($_POST['nama'])){
    $nma =$_POST['nama'];
    echo "Halo" . $nama;
} else {
    echo"nama belum diisi";
}
?>