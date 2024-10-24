<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_tabel_pegawai=mysqli_query($conn,"select * from tabel_pegawai where id_pegawai = '".$_GET['id_pegawai']."'");
    $dt_tabel_pegawai=mysqli_fetch_array($qry_get_tabel_pegawai);
    ?>
    <h3>Tambah Pegawai</h3>
    <form action="proses_ubah_pegawai.php" method="post">
        <input type="hidden" name="id_pegawai" value= "<?=$dt_tabel_pegawai['id_pegawai']?>">

        NIK
        <input type="text" name="nik_pegawai" value="<?=$dt_tabel_pegawai['nik_pegawai']?>" class="form-control">

        Nama Pegawai :
        <input type="text" name="nama_pegawai" value="<?=$dt_tabel_pegawai['nama_pegawai']?>" class="form-control">

        Alamat :
        <input type="text" name="alamat" value="<?=$dt_tabel_pegawai['alamat']?>" class="form-control">

        Jenis Kelamin : 
            <?php 
            $arr_jenis_kelamin=array('L'=>'Laki-laki','P'=>'Perempuan');
            ?>
            <select name="jenis_kelamin" class="form-control">
                <option></option>
                <?php foreach ($arr_jenis_kelamin as $key_jenis_kelamin => $val_jenis_kelamin):
                    if($key_jenis_kelamin==$dt_tabel_pegawai['jenis_kelamin']){
                        $selek="selected";
                    } else {
                        $selek="";
                    }
                ?>
            <option value="<?=$key_jenis_kelamin?>" <?=$selek?>><?=$val_jenis_kelamin?></option>
                <?php endforeach ?>
            </select>

        no telp : 
            <input type="text" name="no_telp" value="<?=$dt_tabel_pegawai['no_telp']?>" class="form-control">

        jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_tabel_jabatan=mysqli_query($conn,"select * from tabel_jabatan");
            while($data_tabel_jabatan=mysqli_fetch_array($qry_tabel_jabatan)){
                if($data_tabel_jabatan['id_jabatan']==$dt_tabel_pegawai['id_jabatan']){
                    $selek="selected";
                } else {
                    $selek="";
                }
        echo '<option value="'.$data_tabel_jabatan['id_jabatan'].'" '.$selek.'>'.$data_tabel_jabatan['nama_jabatan'].'</option>';   
            }
            ?>
        </select>

        Username : 
            <input type="text" name="username" value="<?=$dt_tabel_pegawai['username']?>" class="form-control">

        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
