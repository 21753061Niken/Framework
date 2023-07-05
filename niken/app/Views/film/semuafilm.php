<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<h1>
    Data Film
</h1>
    <div class="row">
        <?php foreach ($semuafilm as $film) : ?>
            <div class="col-md-3">
                <div class="card">
                <img src="/assets/cover/<?= $film ["cover"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $film["nama_film"] ?></h5>
                    <p class="card-text"><?= $film["nama_genre"] ?> || <?= $film["duration"] ?></p>
                    <a href="#" class="btn btn-info">Detail</a>
                    <td>
                    <a href="/film/update/<?= $film["id"]; ?>" class="btn btn-success">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    </td>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
</div>
<?= $this->endSection() ?>
</body>
</html>