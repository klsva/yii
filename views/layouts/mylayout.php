<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);// $this - представляет собой объект представления
?>
<?php $this->beginPage() //вызывает событие EVENT_BEGIN_PAGE, которое происходит при начале обработки страницы.?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() //вставляет в страницу два мета-тега: csrf-param и csrf-token?>
    <title><?= Html::encode(Yii::$app->name) ?></title>
    <?php $this->head() //Помечает позицию секции заголовка HTML?>
</head>
<body>
<?php $this->beginBody() //Помечает начало раздела тела HTML?>
<div class="wrap">	
	  <?php
			NavBar::begin([
				'brandLabel' => '<img width="35" src="http://localhost/basic/web/img/logo.png">',
				'brandUrl' => Yii::$app->homeUrl, // ссылка на главную страницу сайта
				'options' => [
					'id' => 'main-menu',
					'class' => 'navbar navbar-default navbar-fixed-top bg-navbar', // стили главной панели
				],
			]);
			$menu = [
				//['label' => 'Главная', 'url' => ['/books/index']],
				['label' => 'О нас', 'url' => ['/books/about']],
				//['label' => 'Рецензии', 'url' => ['/books/news']],
				['label' => 'Рецензии', 'items' => [ // первый уровень
                	['label' => 'Книги 0-2', 'url' => ['/books/news']], // второй уровень
                	['label' => 'Книги 3-5', 'url' => ['/books/news1']],
               		['label' => 'Книги 5-9', 'url' => ['/books/news2']],
            	]],
				['label' => 'Контакты', 'url' => ['#'], 'linkOptions' => ['data-toggle' => 'modal', 'data-target' => '#contacts']],
			];
			if (YII::$app->user->isGuest) {
				// Если пользователь гость, показыаем ссылку "Вход", если он авторизовался "Выход"
				$menu[] = ['label' => 'Авторизация', 'url' => ['/books/login']];
			}
			else {
				$menu[] = ['label' => 'Панель управления', 'url' => ['/books/admin']];
				$menu[] = ['label' => 'Выход', 'url' => ['/books/logout']];
			}
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'], // стили ul
					'items' => $menu, //li
				]);
			NavBar::end();

			Modal::begin([
				'size' => 'modal-lg',
				'header' => '<h2>Контактная информация</h2>',
				'id' => 'contacts',
				'footer'=> '<button type="button" class="btn btn-defaultr" data-dismiss="modal">Закрыть</button>',
			]);
			echo '<p>Email: mail@mail.com</p>';
			echo '<p>Телефон: (812)111-22-33</p>';
			echo '<address>Адрес: Санкт-Петербург, ул. Некрасова, д.25, оф.17</address>';
			//echo md5('qwerty');
			Modal::end();
		?>

   <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]); ?>
        <?= $content //содержимое страницы?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Книги Детям  </p>

        <p class="pull-right">&copy; klsva <?= date('Y')?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>