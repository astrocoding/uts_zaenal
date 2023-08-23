<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/uploads/files/e1b5c-coder.jpg')">
            <div class="container position-relative px-4 px-lg-5">
            <?php foreach ($about as $about_item): ?>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo $about_item['title'] ?></h1>
                            <span class="subheading"><?php echo $about_item['subtitle'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <?php echo $about_item['description'] ?>
                    </div>
                </div>
            </div>
        </main>
        <?php endforeach; ?>