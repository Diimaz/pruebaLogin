<?= $this->extend('templates/admin_template') ?>

<?= $this->section('content') ?>

<h5>Soy un <?= session('rol')?> y estoy en buscar</h5>

<?= $this->endSection() ?>