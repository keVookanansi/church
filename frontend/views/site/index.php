<?php
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
$this->title = 'IZIWA SDA CHURCH SYSTEM';
?>
<div class="site-index">

   <!-- ✅ IMAGE CAROUSEL -->
   <div id="churchCarousel" class="carousel slide mb-4" data-bs-ride="carousel">
      <div class="carousel-inner rounded shadow">
         <div class="carousel-item active">
            <img src="<?= Url::to('@web/picha/kanisa1.jpg') ?>" class="d-block w-100" alt="Kanisa 1">
         </div>
         <div class="carousel-item">
            <img src="<?= Url::to('@web/picha/kanisa2.jpg') ?>" class="d-block w-100" alt="Kanisa 2">
         </div>
         <div class="carousel-item">
            <img src="<?= Url::to('@web/picha/kanisa3.jpg') ?>" class="d-block w-100" alt="Kanisa 3">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#churchCarousel" data-bs-slide="prev">
         <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#churchCarousel" data-bs-slide="next">
         <span class="carousel-control-next-icon"></span>
      </button>
   </div>

   <!-- ✅ DASHBOARD CARDS -->
   <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
         <div class="card dashboard-card">
            <div class="card-body text-center">
               <h5 class="card-title">Matukio</h5>
               <p class="card-text">Ratiba ya mikutano na ibada.</p>
               <a href="<?= Url::to(['/matukio/index']) ?>" class="btn btn-outline-primary">Fungua</a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
         <div class="card dashboard-card">
            <div class="card-body text-center">
               <h5 class="card-title">Huduma</h5>
               <p class="card-text">Huduma mbalimbali za kanisa.</p>
               <a href="<?= Url::to(['/huduma/index']) ?>" class="btn btn-outline-success">Angalia</a>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
         <div class="card dashboard-card">
            <div class="card-body text-center">
               <h5 class="card-title">Matangazo</h5>
               <p class="card-text">Habari na matangazo rasmi ya kanisa.</p>
               <a href="<?= Url::to(['/matangazo/index']) ?>" class="btn btn-outline-warning">Soma</a>
            </div>
         </div>
      </div>
   </div>

</div>

<!-- ✅ WHATSAPP FLOAT BUTTON -->
<div class="whatsapp-float">
   <a href="https://wa.me/255712345678" target="_blank" title="Tuma ujumbe WhatsApp">
      📞
   </a>
</div>

<!-- ✅ CUSTOM STYLES -->
<style>
   .dashboard-card {
      border-radius: 15px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
   }

   .carousel-inner img {
      width: 100%;
      height: 400px;
      object-fit: cover;
   }

   .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
   }

   .whatsapp-float a {
      background: #25D366;
      color: white;
      padding: 12px 16px;
      border-radius: 50%;
      font-size: 24px;
      text-align: center;
      box-shadow: 0 3px 8px rgba(0,0,0,0.3);
      display: inline-block;
   }

   .whatsapp-float a:hover {
      transform: scale(1.1);
   }

   @media (max-width: 768px) {
      .carousel-inner img {
         height: 220px;
      }
   }
</style>
