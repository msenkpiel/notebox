<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
    echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css');
    echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 'stylesheet', 'text/css');
    echo link_tag('static/css/styles.css');
    ?>

    <title><?= $title ?></title>
</head>
<body>

<div id="page-navbar" class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm">

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="<?= base_url() ?>">
                        <i class="fas fa-box"></i>
                        <strong>note</strong>BOX
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('box') ?>">Your Box<span class="sr-only">(current)</span></a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Disabled</a>
                            </li>
                            -->
                        </ul>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>

