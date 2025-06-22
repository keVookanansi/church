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

   <title><?= Html::encode($this->title) ?></title>
   <?php $this->head() ?>
   <!-- Bootstrap CSS -->
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
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
   &copy; <?= date('Y') ?> IZIWA SDA Church. Imetengenezwa kwa upendo 💙.
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
