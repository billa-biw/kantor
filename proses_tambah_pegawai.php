<?php
if($_POST){
    $nik_pegawai=$_POST['nik_pegawai'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];
    $id_jabatan=$_POST['id_jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nik_pegawai)){
        echo "<script>alert('nik pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($nama_pegawai)){
        echo "<script>alert('nama pegawai tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into tabel_pegawai (nik_pegawai, nama_pegawai, alamat, jenis_kelamin, no_telp, id_jabatan, username, password) value ('".$nik_pegawai."','".$nama_pegawai."','".$alamat."','".$jenis_kelamin."','".$no_telp."','".$id_jabatan."', '".$username."', '".md5($password)."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }
    }
}
?>
