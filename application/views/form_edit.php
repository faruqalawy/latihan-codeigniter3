<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?= form_open_multipart() ?>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <?= form_input('title', $blog['title'], 'class="form-control"') ?>
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Url</label>
                    <?= form_input('url', $blog['url'], 'class="form-control"') ?>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <?= form_textarea('content', $blog['content'], 'class="form-control"') ?>
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover</label>
                    <?= form_upload('cover', $blog['cover'], 'class="form-control"') ?>
                </div>
                <button type="submit" class="btn btn-primary mt-3 mb-5">Update</button>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/footer'); ?>
</body>

</html>