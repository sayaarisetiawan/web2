<?php
$mahasiswa =[ 
["Ari Setiawan", "22510010", "Sistem Informasi", "ari22510010@stimata.ac.id"],
["Setiawan", "510010", "SI", "setiawan510010@stimata.ac.id"],
["Doni", "31510010", "TI", "doni31510010@stimata.ac.id"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <?php foreach ($mhs as $m) : ?>
            <li><?php echo $m; ?></li>
        <?php endforeach;?>
    </ul>
    <?php endforeach ;?>
</body>
</html>