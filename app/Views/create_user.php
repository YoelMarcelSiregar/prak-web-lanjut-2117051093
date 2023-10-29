<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<div class="container">
    <h1 class="mt-5">Form Tambah User</h1>
    <form action="<?= base_url('/user/store') ?>" method="POST" class="mt-5" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="npm" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="npm" name="npm" value="<?= old('npm'); ?>">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('npm'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select class="form-select <?= session('validation') && session('validation')->hasError('kelas') ? 'is-invalid' : '' ?>" id="kelas" name="kelas">
                    <option selected>Pilih Kelas</option>
                    <?php foreach ($kelas as $item) : ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <?php if (session('validation') && session('validation')->hasError('kelas')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('kelas'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="foto" name="foto">
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection()?>
