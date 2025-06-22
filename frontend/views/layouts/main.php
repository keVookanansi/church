<?php
use yii\helpers\Html;
use yii\helpers\Url;

/** @var \yii\web\View $this */
/** @var string $content */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
   <meta charset="<?= Yii::$app->charset ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

   <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
      body {
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         background-color: #f8f9fa;
         margin: 0;
         padding-top: 70px;
      }

      .navbar-brand {
         font-weight: 900;
         font-size: 1.8rem;
         color: #007bff !important;
      }

      .nav-link {
         font-weight: 600;
         color: #555 !important;
      }

      .nav-link:hover {
         color: #007bff !important;
      }

      .card-custom {
         border: none;
         border-radius: 16px;
         box-shadow: 0 4px 12px rgba(0,0,0,0.1);
         transition: transform 0.3s ease;
      }

      .card-custom:hover {
         transform: translateY(-5px);
      }

      footer {
         background: #343a40;
         color: #ccc;
         text-align: center;
         padding: 20px 0;
         margin-top: 40px;
      }

      @media (max-width: 768px) {
         .navbar-brand {
            font-size: 1.4rem;
         }
      }
   </style>
</head>
<body>
<?php $this->beginBody() ?>

<!-- ✅ Smart Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
   <div class="container">
      <a class="navbar-brand" href="<?= Yii::$app->homeUrl ?>">IZIWA SDA CMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a class="nav-link" href="<?= Yii::$app->homeUrl ?>">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= Url::to(['/site/about']) ?>">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= Url::to(['/site/contact']) ?>">Contact</a>
            </li>
         </ul>
      </div>
   </div>
</nav>

<!-- ✅ Main Container -->
<main class="container mt-4">
   <?= $content ?>
</main>

<!-- ✅ Footer -->
<footer>
   <div class="container text-center">
      <p>&copy; <?= date('Y') ?> IZIWA SDA Church. Imetengenezwa kwa upendo 💙.</p>

      <p class="mb-1">
         <strong>Wasiliana nasi kupitia:</strong><br>
         📞 <strong>Mzee wa Kanisa:</strong> <a href="tel:0756123456" class="text-info">0756 123 456</a><br>
         👦 <strong>Mkuu wa Vijana:</strong> <a href="tel:0778123456" class="text-success">0778 123 456</a><br>
         🙏 <strong>Mkuu wa Mambo ya Kiroho:</strong> <a href="tel:0897765432" class="text-warning">0897 765 432</a>
      </p>

      <div class="d-flex justify-content-center gap-3 mt-3">
         <a href="https://wa.me/255756123456" target="_blank" title="Tuma ujumbe WhatsApp" class="text-white bg-success px-3 py-2 rounded-circle shadow-sm">
            <i class="bi bi-whatsapp"></i>
         </a>
         <a href="https://facebook.com/iziwasdachurch" target="_blank" title="Facebook Page" class="text-white bg-primary px-3 py-2 rounded-circle shadow-sm">
            <i class="bi bi-facebook"></i>
         </a>
         <a href="https://instagram.com/iziwasda" target="_blank" title="Instagram Page" class="text-white bg-danger px-3 py-2 rounded-circle shadow-sm">
            <i class="bi bi-instagram"></i>
         </a>
      </div>
   </div>
</footer>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ✅ Toggle collapse menu on second click -->
<script>
document.addEventListener('DOMContentLoaded', function () {
   const toggler = document.querySelector('.navbar-toggler');
   const collapse = document.querySelector('#navbarNav');

   toggler.addEventListener('click', function () {
      if (collapse.classList.contains('show')) {
         new bootstrap.Collapse(collapse, { toggle: true }).hide();
      }
   });
});
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
