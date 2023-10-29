<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>

        <header class="header">
            <ul class="navlist mb-0 ps-0">
                <li><a href="<?= base_url('/user')?>">USER</a></li>
                <li><a href="<?= base_url('/kelas')?>">KELAS</a></li>
            </ul>
        </header>

<center><h1>Kelas</h1></center>
<a href="<?= base_url('/kelas/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px; background-color: #F7B733;">Tambah Data</Button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            foreach ($kelass as $kelas){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $kelas['nama_kelas'] ?></td>
                <td>
                <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" class="btn" style="background-color: #DFDCE3; color: #000;">Edit</a>
                    <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post" style="margin-top : 5px;">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger" style="background-color: #FC4A1A;">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
<?= $this->endSection()?>