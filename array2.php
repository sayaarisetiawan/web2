<?php
$mahasiswa = ["Ari Setiawan", "22510010", "Sistem Informasi", "ari22510010@stimata.ac.id"];
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
    <ul>
      <li><?php echo $mahasiswa[0]; ?></li>
      <li><?php echo $mahasiswa[1]; ?></li>
      <li><?php echo $mahasiswa[2]; ?></li>
      <li><?php echo $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>