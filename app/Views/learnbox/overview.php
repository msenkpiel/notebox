<div class="container mt-5">
    <div class="row">
        <div class="col-sm">



<?php if (!empty($learnBox) && is_array($learnBox)) : ?>

    <?php foreach ($learnBox as $box): ?>

        <h3><?= $box['title'] ?></h3>

        <div class="main">
            <?= $box['body'] ?>
        </div>
        <p><a href="<?= '/learnbox/' . $box['slug'] ?>">View article</a></p>


        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>


    <?php endforeach; ?>

<?php else : ?>

    <h1 class="display-4">Learnbox overview</h1>

    <div class="card text-center mt-5">
        <!--
        <div class="card-header">
            You have no boxes!
        </div>
        -->
        <div class="card-body">
            <h5 class="card-title">Oooh no!</h5>
            <p class="card-text">You can create on if you like!</p>
            <a href="<?= base_url('box/create') ?>" class="btn btn-primary">Create Learn Box</a>
        </div>
        <!--
        <div class="card-footer text-muted">
            2 days ago
        </div>
        -->
    </div>

<?php endif ?>

        </div>
    </div>
</div>
