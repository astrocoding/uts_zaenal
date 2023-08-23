<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/notebook.jpg')">
  <div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <div class="site-heading">
          <h1>Zaenal News</h1>
          <span class="subheading">Portal artikel dan berita terkini!</span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
  <div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
      <!-- Post preview-->
			<?php foreach ($news as $news_item): ?>
      <div class="post-preview">
        <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">
          <h2 class="post-title"><?php echo $news_item['title']; ?></h2>
          <h3 class="post-subtitle"><?php echo $news_item['subtitle']; ?></h3>
        </a>
        <p class="post-meta"> Posted by
          <a href="#!">Zaenal Alfian</a> on <?php echo $news_item['date']; ?>
        </p>
      </div>
			<!-- Divider-->
			<hr class="my-4" />
			<?php endforeach; ?>
      <!-- Pager-->
      <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
    </div>

    <section style="color: #000; background-color: #f3f2f2;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h3 class="fw-bold mb-4">Testimonials</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Situs kami memberikan pelayanan terbaik dan tercepat. Kami menyediakan berbagai artikel dan berita terkini. Mari dengarkan pendapat mereka!
        </p>
      </div>
    </div>

    <div class="row text-center">
    <?php foreach ($testimonials as $testi_item): ?>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card shadow p-3 mb-5 bg-white rounded">
          <div class="card-body py-3 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="<?php echo base_url('assets/uploads/files/'.$testi_item['photo']); ?>"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h4 class="font-weight-bold"><?php echo $testi_item['nama']; ?></h4>
            <h6 class="font-weight-bold my-3 text-info"><?php echo $testi_item['pekerjaan']; ?></h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-warning"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-warning"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i><?php echo $testi_item['deskripsi_testimoni'] ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


  </div>
</div>

