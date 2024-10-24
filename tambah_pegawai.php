<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        NIK :
        <input type="text" name="nik_pegawai" value="" class="form-control">

        Nama Pegawai :
        <input type="text" name="nama_pegawai" value="" class="form-control">

        Alamat :
        <input type="text" name="alamat" value="" class="form-control">

        Jenis Kelamin :
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        No Telp :
        <input type="text" name="no_telp" value="" class="form-control">

        Jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_tabel_jabatan=mysqli_query($conn,"select * from tabel_jabatan");
            while($data_tabel_jabatan=mysqli_fetch_array($qry_tabel_jabatan)){
                echo '<option value="'.$data_tabel_jabatan['id_jabatan'].'">'.$data_tabel_jabatan['nama_jabatan'].'</option>';    
            }
            ?>
        </select>

        Username :
        <input type="text" name="username" value="" class="form-control">
        
        Passwword :
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
