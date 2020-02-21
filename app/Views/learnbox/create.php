<div class="container mt-5">
    <div class="row">
        <div class="col-sm">

            <h4 class="display-4"><?= esc($title); ?></h4>

            <?= \Config\Services::validation()->listErrors(); ?>

            <form action="<?= base_url('box/create') ?>" method="post">

                <div class="form-group">
                    <label for="ff-title">Email address</label>
                    <input type="text" name="title" class="form-control" id="ff-title" placeholder="Your box title">
                </div>

                <button type="submit" class="btn btn-primary">Create Box</button>

            </form>

        </div>
    </div>
</div>