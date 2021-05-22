<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Koleksi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <center>
        <div class="container">
            <div class="card mt-5">
                <div class=" card-header">
                    <h2>Data Koleksi</h2>
                    <a href="index.php?page=praktikum&aksi=create" class="btn btn-success float-right">Tambah Praktikum</a>
                </div>
                <div class="card-body">

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Nama Pengarang</th>
                                <th>Jenis Koleksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Diganti Saat Modul 2 -->
                            <tr>
                                <td>1</td>
                                <td>Si Kancil Anak Nakal</td>
                                <td>Ghopur</td>
                                <td>Buku Cerita</td>
                                <td>
                                    <a href="index.php?page=praktikum&aksi=edit&id=#" class="btn btn-warning">Edit</a>
                                    <a href="index.php?page=modul&aksi=delete&id=#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>