<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<nav>
    <div class="nav-wrapper">
      <a id="site/home" class="btn-floating btn-large waves-effect waves-light red">MTG</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php

      if(Yii::$app->user->isGuest)
      {
        echo '
            <li><a id="site/test">Sass</a></li>
            <li><a id="site/signup">Rejestracja</a></li>
            <li><a id="site/login">Logowanie</a></li>
        ';

      }
      else
      { echo '
            <li><a id="site/test">Sass</a></li>
            <li><a id="logout" href="?" data-method="POST">Wyloguj</a></li>
            <li><a id="site/login">Brak</a></li>
            ';
      }

       ?>
       
      </ul>
    </div>
  </nav>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>
  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 MTG
            <a class="grey-text text-lighten-4 right" href="#!">Github</a>
            </div>
          </div>
        </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
