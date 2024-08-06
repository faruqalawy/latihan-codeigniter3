<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('partials/header'); ?>

    <!-- Page Header-->
    <header class="masthead" style="background-image: url('<?= base_url(); ?>assets/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>Welcome</h1>
                        <span class="subheading">A Blog Using PHP to Build</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                <form method="GET">
                    <input type="text" name="keyword" placeholder="search article...">
                    <button type="submit">Search</button>
                </form>

                <?php foreach ($blogs as $key => $article) : ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="<?= site_url('blog/detail/' . $article['url']) ?>">
                            <h2 class="post-title"><?= $article['title'] ?></h2>
                            <h3 class="post-subtitle"><?= $article['content'] ?></h3>
                        </a>
                        <p class="post-meta">
                            Posted
                            on <?= $article['date'] ?>
                        </p>
                        <a href="<?= site_url('blog/edit/' . $article["id"]) ?>">Edit</a>
                        <a href="<?= site_url('blog/delete/' . $article["id"]) ?>">Delete</a>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                <?php endforeach; ?>

                <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
    
</body>

</html>