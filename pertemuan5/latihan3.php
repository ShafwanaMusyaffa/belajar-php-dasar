<?php
    $siswa = ["Wana", "110105", "RPL", "ishafwana@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar siswa RPL</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <ul>
       <?php foreach( $siswa as $s ) : ?>
            <li><?= $s; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>