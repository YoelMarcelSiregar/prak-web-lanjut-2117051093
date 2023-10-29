<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css');?>">
    <title>Document</title>
</head>
<body>


            <table class="detail">
                <tr>
                    <td><p class="data"><img class="foto" src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="Foto"></p></td>
                </tr>   
                <tr>
                    <td><p class="data"><?= $user['nama'] ?></p></td>
                </tr>
                <tr>
                    <td><p class="data"><?= $user['npm'] ?></p></td>
                </tr>
                <tr>
                    <td><p class="data"><?= $user['nama_kelas'] ?></p></td>
                </tr>
            </table>



</body>
</html>