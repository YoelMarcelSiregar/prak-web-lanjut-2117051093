<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
    <div class="container">
        <h1 class="mt-4">Form Edit User</h1>

        <div class="text-center mt-4">
            <img src="<?= $user['foto'] ?>" alt="Foto" style="width: 200px; border-radius: 50%;">
        </div>

        <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" class="mt-5" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>

            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="inputNama" name="nama" value="<?= $user['nama'] ?>">
                    <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('nama'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputNPM" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="inputNPM" name="npm" value="<?= $user['npm'] ?>">
                    <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                        <div class="invalid-feedback">
                            <?= session('validation')->getError('npm'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Pilih Kelas" name="kelas">
                        <option value="0" <?= $user['id_kelas'] == 0 ? 'selected' : '' ?>>Pilih Kelas</option>
                        <?php foreach ($kelas as $item) : ?>
                            <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="inputFoto" name="foto">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
<?= $this->endSection()?>
