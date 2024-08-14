<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('header') ?>

    <header class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">Portal Berita Codeigniter</h1>
                </div>
            </div>
        </div>
    </header>

<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <h2>Dashboard</h2>
    <p>Welcome, <?= session()->get('username'); ?>!</p>
    <a href="/customers" class="btn btn-primary">Manage Customers</a>
    <a href="/logout" class="btn btn-danger">Logout</a>
    
<?= $this->endSection() ?>