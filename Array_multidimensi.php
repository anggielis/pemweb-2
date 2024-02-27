<?php
    $dosen = [
        ['Pak Rojul', 'Web'],
        ['Pak REza', 'DDP'],
        ['Pak Lukman', 'OS']
    ];

    echo $dosen[0][1];
    echo '<br>';

    foreach ($dosen as $dsn){
        echo 'Nama Dosen : ' . $dsn[0];
        echo '<br>';
        echo 'Matkul : ' . $dsn[1];
        echo '<br>';
    }

?>



