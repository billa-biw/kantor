<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login Kantor</title>
    <style>
        body {
            background-image: url('https://via.placeholder.com/1920x1080'); /* Ganti dengan URL gambar latar belakang Anda */
            background-size: cover;
            background-position: center;
        }
        .login-container {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            margin-top: 50px;
        }
        .btn-success {
            transition: background-color 0.3s ease;
        }
        .btn-success:hover {
            background-color: #218838; /* Warna saat hover */
        }
        .btn-secondary {
            margin-left: 10px; /* Jarak antara tombol */
        }
        h3 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
        }
        .icon {
            font-size: 50px;
            margin-bottom: 20px;
            color: #28a745;
        }
        img{
            border-radius:50%;
            max-width:150px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 login-container">
                <div class="text-center">
                    <img src="logo.jpg" alt="logo">
                    <h3>LOGIN KANTOR</h3>
                </div>
                <form action="proses_login.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username:</label>
                        <input type="text" name="username" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <center>
                        <input type="submit" name="login" class="btn btn-success" value="LOGIN">
                        <a href="tambah_pegawai.php" class="btn btn-secondary">Tambah Pegawai</a>
                    </center>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> <!-- Ikon Bootstrap -->
</body>
</html>
