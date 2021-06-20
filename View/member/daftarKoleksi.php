<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Koleksi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <div class="card mt-5">
            <div class=" card-header">
                <h2>Daftar Koleksi</h2>
                <a href="index.php?page=member&aksi=peminjaman" class="btn btn-info float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="index.php?page=member&aksi=storeKoleksi" method="POST">
                    <div class="row">
                        <div class="col">
                            <label for="">Daftar Koleksi : </label>
                            <select name="koleksi" class="form-control">
                            <?php foreach ($data as $row) : ?>
                                <option value="<?= $row['id'] ?>"><?= $row['judul'] ?></option>
                            <?php endforeach; ?>
                            </select>
                            <div class="form-group">
                                <label>Tanggal Pinjam : </label>
                                <input type="date" class="form-control" name="tglpinjam">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Kembali : </label>
                                <input type="date" class="form-control" name="tglkembali">
                            </div>
                        </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-3">Daftar</button>
                </form>


            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.css"></script>
</body>

</html>