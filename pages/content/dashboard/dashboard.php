<?php

  $ds = DIRECTORY_SEPARATOR;
  $base_dir = realpath(dirname(__FILE__)  . $ds . '..' . $ds . '..' . $ds . '..') . $ds;
  require_once("{$base_dir}pages{$ds}core{$ds}header.php");

?>
  
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../../assets/img/depan.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../../assets/img/depan1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../../../assets/img/danto.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
        
        <!-- Start Ngoding Disini -->

        <!-- End Ngoding Disini -->

      </div>
    </section>

  </main><!-- End #main -->


<?php
  require_once("{$base_dir}pages{$ds}core{$ds}footer.php");
?> 