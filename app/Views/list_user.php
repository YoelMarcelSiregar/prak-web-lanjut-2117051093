<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
        <header class="header">
            <ul class="navlist mb-0 ps-0">
                <li><a href="<?= base_url('/user')?>">USER</a></li>
                <li><a href="<?= base_url('/kelas')?>">KELAS</a></li>
            </ul>
        </header>
<center><h1>User</h1></center>
<a href="<?= base_url('/user/create') ?>"><Button class="btn btn-primary"  style="margin-top: 20px; margin-left: 20px; margin-bottom: 30px; background-color: #F7B733;">Tambah Data</Button></a>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><img src="<?= $user['foto'] ?>" alt="Foto" width="150px"></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-primary"  style="background-color: #7FAEED;">Detail</a>
                    <a href="<?= base_url('/user/' . $user['id'] . '/edit') ?>" class="btn btn-warning"  style="background-color: #DFDCE3;">Edit</a>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="post" style="margin-top: 5px;">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger"  style="background-color: #FC4A1A;">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>
