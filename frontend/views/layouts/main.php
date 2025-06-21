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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
      body {
         background-color: white;
         font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
         padding-top: 40px;
         color: #eee;
         background-image: url('<?= Url::to('@web/picha/kanisa1.jpg') ?>');
         background-repeat: no-repeat;
         background-position: center center;
         background-size: cover;
         position: relative;
         z-index: 0;
      }

      body::before {
         content: "";
         position: fixed;
         top: 0; left: 0; right: 0; bottom: 0;
         background: rgba(0, 0, 0, 0.0);
         z-index: -1;
      }

      h2.nav-brand {
         font-weight: 900;
         font-size: 4rem;
         color: #007bff;
         margin-bottom: 0;
         cursor: pointer;
         text-shadow:
            3px 3px 0 #ffeb3b,
            6px 6px 10px #fdd835,
            9px 9px 15px #fbc02d,
            12px 12px 20px #f9a825,
            15px 15px 25px #f57f17;
         transition: color 0.3s ease, text-shadow 0.3s ease;
      }

      h2.nav-brand:hover {
         color: #3399ff;
         text-shadow:
            0 0 20px #fff176,
            0 0 40px #ffeb3b,
            0 0 60px #fdd835,
            0 0 80px #fbc02d,
            0 0 100px #f9a825,
            0 0 120px #f57f17;
      }

      h3.nav-link {
         font-weight: 900;
         font-size: 2.5rem;
         color: #007bff;
         margin-bottom: 0;
         cursor: pointer;
         text-shadow:
            2px 2px 0 #ffeb3b,
            4px 4px 8px #fdd835,
            6px 6px 12px #fbc02d;
         transition: color 0.3s ease, text-shadow 0.3s ease;
      }

      h3.nav-link:hover {
         color: #3399ff;
         text-shadow:
            0 0 15px #fff176,
            0 0 30px #ffeb3b,
            0 0 45px #fdd835;
      }

      nav {
         display: flex;
         gap: 50px;
         align-items: center;
         padding-left: 30px;
         flex-wrap: wrap;
      }

      main.container {
         margin-top: 50px;
      }

      footer {
         background: #212529;
         color: #ccc;
         text-align: center;
         padding: 20px 0;
         margin-top: 80px;
         font-size: 0.9rem;
      }

      .dashboard-card img {
         width: 100%;
         height: 150px;
         object-fit: cover;
         border-top-left-radius: 10px;
         border-top-right-radius: 10px;
      }

      .dashboard-card {
         background: rgba(255, 255, 255, 0.95);
         color: #000;
         border-radius: 10px;
         box-shadow: 0 4px 12px rgba(0,0,0,0.2);
         transition: transform 0.3s ease;
      }

      .dashboard-card:hover {
         transform: scale(1.03);
      }

      @media (max-width: 768px) {
         nav {
            flex-direction: column;
            align-items: flex-start;
            gap: 20px;
            padding: 20px;
         }

         h2.nav-brand {
            font-size: 2rem;
            text-align: center;
         }

         h3.nav-link {
            font-size: 1.5rem;
            text-align: center;
         }

         main.container {
            margin-top: 20px;
            padding: 10px;
         }

         footer {
            font-size: 0.8rem;
            padding: 15px;
         }

         body {
            padding-top: 20px;
         }
      }
   </style>
</head>
<body>
<?php $this->beginBody() ?>

<nav>
   <a href="<?= Yii::$app->homeUrl ?>" style="text-decoration:none;"><h2 class="nav-brand">IZIWA SDA CHURCH MANAGEMENT SYSTEM</h2></a>
   <a href="<?= Yii::$app->homeUrl ?>" style="text-decoration:none;"><h3 class="nav-link">Home</h3></a>
   <a href="<?= Url::to(['/site/about']) ?>" style="text-decoration:none;"><h3 class="nav-link">About</h3></a>
   <a href="<?= Url::to(['/site/contact']) ?>" style="text-decoration:none;"><h3 class="nav-link">Contact</h3></a>
</nav>

<main class="container">
   <!-- DASHBOARDS TATU KWA MISTARI (3 per row even on phone) -->
   <div class="row">
      <div class="col-4 p-2">
         <div class="card dashboard-card text-center">
            <img src="<?= Url::to('@web/picha/huduma.jpg') ?>" alt="Huduma">
            <div class="card-body">
               <h5 class="card-title">Huduma</h5>
               <p class="card-text">Maelezo mafupi ya huduma.</p>
            </div>
         </div>
      </div>
      <div class="col-4 p-2">
         <div class="card dashboard-card text-center">
            <img src="<?= Url::to('@web/picha/matukio.jpg') ?>" alt="Matukio">
            <div class="card-body">
               <h5 class="card-title">Matukio</h5>
               <p class="card-text">Maelezo ya matukio kanisani.</p>
            </div>
         </div>
      </div>
      <div class="col-4 p-2">
         <div class="card dashboard-card text-center">
            <img src="<?= Url::to('@web/picha/washirika.jpg') ?>" alt="Washirika">
            <div class="card-body">
               <h5 class="card-title">Washirika</h5>
               <p class="card-text">Taarifa za washirika wote.</p>
            </div>
         </div>
      </div>
   </div>
</main>

<footer>
   &copy; <?= date('Y') ?> IZIWA SDA Church. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
