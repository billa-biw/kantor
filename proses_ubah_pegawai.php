<?php
if($_POST){

    $id_pegawai=$_POST['id_pegawai'];
    $nik_pegawai=$_POST['nik_pegawai'];
    $nama_pegawai=$_POST['nama_pegawai'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $no_telp=$_POST['no_telp'];
    $id_jabatan=$_POST['id_jabatan'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if (empty($nik_pegawai)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='ubah_pegawai.php';</script>";
    
    } else if (empty($nama_pegawai)){
        echo "<script>alert('Nama Pegawai tidak boleh kosong');location.href='ubah_pegawai.php';</script>";

    } else if(empty($username)){
        echo "<script>alert('Username tidak boleh kosong');location.href='ubah_pegawai.php';</script>";

    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update tabel_pegawai set nik_pegawai='".$nik_pegawai."',nama_pegawai='".$nama_pegawai."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_telp='".$no_telp."', id_jabatan='".$id_jabatan."', username='".$username."' where id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href=tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update tabel_pegawai set nik_pegawai='".$nik_pegawai."',nama_pegawai='".$nama_pegawai."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', no_telp='".$no_telp."', id_jabatan='".$id_jabatan."', username='".$username."', password='".md5($passowrd)."' where id_pegawai = '".$id_pegawai."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=".$id_pegawai."';</script>";
            }
        }
        
    } 
}
?>
