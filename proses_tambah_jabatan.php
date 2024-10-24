<?php
if($_POST){
    $nama_jabatan=$_POST['nama_jabatan'];
    $gaji_pokok=$_POST['gaji_pokok'];
    $tunjangan=$_POST['tunjangan'];
    if(empty($nama_jabatan)){
        echo "<script>alert('nama jabatan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";

    } elseif(empty($gaji_pokok)){
        echo "<script>alert('gaji pokok tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    
    } elseif(empty($tunjangan)){
        echo "<script>alert('tunjangan tidak boleh kosong');location.href='tambah_jabatan.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_jabatan (nama_jabatan, gaji_pokok, tunjangan) value ('".$nama_jabatan."','".$gaji_pokok."','".$tunjangan."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan jabatan');location.href='tambah_jabatan.php';</script>";
        }
    }
}
?>
