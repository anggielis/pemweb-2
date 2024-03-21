<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Process</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container p-4">
        <div class="container" style="border: 1.5px solid black;">
            <h1 class="text-center">Form Pendaftaran</h1><br>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label font-weight-bold">NIM</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-user-circle-o"></i>
                                </div>
                            </div>
                            <input id="nim" name="nim" type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label font-weight-bold">Nama Lengkap</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-book"></i>
                                </div>
                            </div>
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 font-weight-bold">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="prodi" class="col-4 col-form-label font-weight-bold">Program Studi</label>
                    <div class="col-8">
                        <select id="prodi" name="prodi" class="custom-select">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 font-weight-bold">Skill & Programming</label>
                    <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="Javascript">
                            <label for="skill[]_2" class="custom-control-label">Javascript</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="RWD Bootstrap">
                            <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                            <label for="skill[]_5" class="custom-control-label">Python</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                            <label for="skill[]_6" class="custom-control-label">Java</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label font-weight-bold">Tempat Domisili</label>
                    <div class="col-8">
                        <select id="domisili" name="domisili" class="custom-select">
                            <option value="Jakarta">Jakarta</option>
                            <option value="Depok">Depok</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Bekasi">Bekasi</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label font-weight-bold">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- Other form elements -->
                <!-- Your form elements go here -->
                <!-- End of form elements -->

                <!-- PHP code starts here -->
                <?php
                $nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
                $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
                $jenis_kelamin = isset($_POST["jk"]) ? $_POST["jk"] : "";
                $prodi = isset($_POST["prodi"]) ? $_POST["prodi"] : "";
                $skill = isset($_POST["skill"]) ? $_POST["skill"] : array();
                $domisili = isset($_POST["domisili"]) ? $_POST["domisili"] : "";
                $email = isset($_POST["email"]) ? $_POST["email"] : "";
                $skor = 0;

                if (!empty($skill)) {
                    foreach ($skill as $s) {
                        switch ($s) {
                            case 'HTML':
                            case 'CSS':
                                $skor += 10;
                                break;
                            case 'Javascript':
                            case 'RWD Bootstrap':
                                $skor += 20;
                                break;
                            case 'PHP':
                            case 'Python':
                                $skor += 30;
                                break;
                            case 'Java':
                                $skor += 50;
                                break;
                            default:
                                $skor = 0;
                                break;
                        }
                    }
                }

                if ($skor >= 100 && $skor <= 150) {
                    $kategori_skill = "Sangat Baik";
                } elseif ($skor >= 60 && $skor <= 100) {
                    $kategori_skill = "Baik";
                } elseif ($skor >= 40 && $skor <= 60) {
                    $kategori_skill = "Cukup";
                } elseif ($skor >= 0 && $skor <= 40) {
                    $kategori_skill = "Kurang";
                } else {
                    $kategori_skill = "Tidak Memadai";
                }
                ?>
                <!-- PHP code ends here -->

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Displaying submitted data -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card border-primary">
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <!-- Displaying submitted data -->
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>NIM:</strong></div>
                                            <div class="col-md-6"><?php echo $nim; ?></div>
                                        </div>
                                    </li>
                                    <!-- Other submitted data -->
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Nama:</strong></div>
                                            <div class="col-md-6"><?php echo ucwords($nama); ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Jenis Kelamin:</strong></div>
                                            <div class="col-md-6"><?php echo $jenis_kelamin; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Program Studi:</strong></div>
                                            <div class="col-md-6"><?php echo $prodi; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Skill Web & Programming:</strong></div>
                                            <div class="col-md-6">
                                                <?php
                                                if (!empty($skill)) {
                                                    echo implode(", ", $skill);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Tempat Domisili:</strong></div>
                                            <div class="col-md-6"><?php echo $domisili; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Email:</strong></div>
                                            <div class="col-md-6"><?php echo $email; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Skor:</strong></div>
                                            <div class="col-md-6"><?php echo $skor; ?></div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-6"><strong>Kategori:</strong></div>
                                            <div class="col-md-6"><?php echo $kategori_skill; ?></div>
                                        </div>
                                    </li>
                                    <!-- End of other submitted data -->
                                    <!-- End of displaying submitted data -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- PHP code ends here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>


