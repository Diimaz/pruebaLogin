<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>

<h5>Soy un <?= session('rol')?> y estoy en home</h5>

<?= $this->endSection() ?>