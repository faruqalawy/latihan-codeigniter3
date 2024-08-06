<?php

if (empty($blog['cover']))
    $cover = base_url() . 'assets/assets/img/post-bg.jpg';
else
    $cover = base_url() . 'uploads/' . $blog['url'];

?>

<!DOCTYPE html>
<html lang="en">
        <?php $this->load->view('partials/header') ?>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= $cover; ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?= $blog['title']; ?></h1>
                            <h2 class="subheading">Lorem ipsum dolor sit amet.</h2>
                            <span class="meta">
                                Posted on <?= $blog['date'] ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?= $blog['content'] ?></p>
                        <p>
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>
                    </div>
                </div>
            </div>
        </article>

        <?php $this->load->view('partials/footer') ?>
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <p><?= $blog['content']; ?></p>
</body>
</html>