<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/icon" href="logoku.jpg" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BElanja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>


    <section class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <section class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- Form -->
                                <form method="POST" action="">
                                    <div class="mb-3 row">
                                        <label for="customer" class="col-md-4 col-form-label">Customer</label>
                                        <div class="col-md-8">
                                            <input id="customer" name="customer" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-md-4">Pilihan Produk</label>
                                        <div class="col-md-8">
                                            <div class="form-check form-check-inline">
                                                <input name="produk" id="produk_0" type="radio" class="form-check-input" value="tv">
                                                <label for="produk_0" class="form-check-label">TV</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="produk" id="produk_1" type="radio" class="form-check-input" value="kulkas">
                                                <label for="produk_1" class="form-check-label">Kulkas</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="produk" id="produk_2" type="radio" class="form-check-input" value="mesinCuci">
                                                <label for="produk_2" class="form-check-label">Mesin Cuci</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="text1" class="col-md-4 col-form-label">Jumlah</label>
                                        <div class="col-md-8">
                                            <input id="text1" name="jumlah" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="offset-md-4 col-md-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-4">
                                <!-- Daftar harga -->
                                <ul>
                                    <li>TV : 4.200.000</li>
                                    <li>Kulkas : 3.100.000</li>
                                    <li>Mesin Cuci : 3.800.000</li>
                                    <li>Harga Dapat Berubah Setiap Saat</li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <hr>

                    <?php if (isset($_POST['submit']) && isset($_POST['produk'])) : ?>
                        <?php
                        $total_harga = 0;
                        if ($_POST['produk'] == 'tv' && $_POST['jumlah'] >= 1) {
                            $total_harga = 4200000 * $_POST['jumlah'];
                        } elseif ($_POST['produk'] == 'kulkas') {
                            $total_harga = 3100000 * $_POST['jumlah'];
                        } elseif ($_POST['produk'] == 'mesinCuci') {
                            $total_harga = 3800000 * $_POST['jumlah'];
                        }
                        ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Belanja</h5>
                        <p class="card-text">Nama Customer: <?= $_POST['customer'] ?></p>
                        <p class="card-text">Produk Pilihan: <?= $_POST['produk'] ?></p>
                        <p class="card-text">Jumlah Beli: <?= $_POST['jumlah'] ?></p>
                        <p class="card-text">Total Belanja: <?= $total_harga ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
