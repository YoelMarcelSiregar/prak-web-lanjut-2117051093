<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<div class="container">
    <h1 class="mt-5">Form Tambah Kelas</h1>
    <form action="<?= base_url('/kelas/store') ?>" method="POST" class="mt-5" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="nama_kelas" name="nama_kelas" value="<?= old('nama_kelas'); ?>">
                <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama_kelas'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
<?= $this->endSection()?>
