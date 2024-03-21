<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <section class="container mt-5">
    <h1 class="text-center mb-4">Data Mahasiswa</h1>
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">NIM</th>
            <th scope="col">UTS</th>
            <th scope="col">UAS</th>
            <th scope="col">TUGAS</th>
            <th scope="col">NILAI AKHIR</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $ar_nilai = [
            ['id' => 1, 'nim' => 0110, 'uts' => 80, 'uas' => 90, 'tugas' => 95],
            ['id' => 2, 'nim' => 01102, 'uts' => 85, 'uas' => 95, 'tugas' => 100],
            ['id' => 3, 'nim' => 01103, 'uts' => 87, 'uas' => 98, 'tugas' => 100],
            ['id' => 4, 'nim' => 01104, 'uts' => 89, 'uas' => 99, 'tugas' => 100]
          ];
          $nomer = 1;
          foreach ($ar_nilai as $mhs) {
            $nilai_akhir = ($mhs['uts'] + $mhs['uas'] + $mhs['tugas']) / 3;
          ?>
            <tr>
              <td><?= $nomer ?></td>
              <td><?= $mhs['nim'] ?></td>
              <td><?= $mhs['uts'] ?></td>
              <td><?= $mhs['uas'] ?></td>
              <td><?= $mhs['tugas'] ?></td>
              <td><?= number_format($nilai_akhir, 2, ',', ',') ?></td>
            </tr>
          <?php
            $nomer++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>