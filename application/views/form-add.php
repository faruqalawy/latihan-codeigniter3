<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $this->load->view('partials/header'); ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?= base_url(); ?>assets/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>New Article</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?= form_open_multipart() ?>
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <?= form_input('title', null, 'class="form-control"') ?>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Url</label>
                        <?= form_input('url', null, 'class="form-control"') ?>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <?= form_textarea('content', null, 'class="form-control"') ?>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <?= form_upload('cover', null, 'class="form-control"') ?>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3 mb-5">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>

</html>
