<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <title>Selamat Datang</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Katalog Buku.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="color:black;" href="?menu=data_buku" >Tambah Buku</a>
                </li>
            </ul>
            </div>
        </div>
        <ul class="nav navbar-expand-lg justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color:black;" onclick="return confirm('Yakin keluar?');" href="logout.php" >Logout</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5 flex-row justify-content-center">
        <div class="jumbotron">
            <div class="text-center">
                <h1 class="display-4 center">Selamat Datang, Admin!</h1>
                <br>
                <a href="?menu=data_buku" class="lead center" style="text-decoration:none; color: black;"> Tap here for more </a>
                <hr class="my-4">
                <strong class="center">Copyright &copy; 2021 <a href="#">Puja Maulida Herwanto</a>.</strong> All rights reserved.
            </div>
        </div>
    </div>

    <?php
        switch (@$_GET["menu"]) {
            case 'data_buku';
                include 'data_buku.php';
            break;
        }
    
    
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html>