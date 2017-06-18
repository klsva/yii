<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Carousel;

$this->title = 'Главная';
//$this->params['breadcrumbs'][] = $this->title;

$carousel = [
	[
		'content' => '<img class="center-block" src="http://localhost/basic/web/img/carousel/books1.png"/>',
		'caption' => '<h1>Книги для самых маленьких</h1><p>Самые лучшие и красивые книги для самых маленьких</p><p><a href="#" class="btn btn-success">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
		
	],
	[
		'content' => '<img class="center-block" src="http://localhost/basic/web/img/carousel/books2.png"/>',
		'caption' => '<h1>Книги для самых средних</h1><p>Самые лучшие и красивые книги для самых средних</p><p><a href="#" class="btn btn-success">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
		
	],
	[
		'content' => '<img class="center-block" src="http://localhost/basic/web/img/carousel/books3.png"/>',
		'caption' => '<h1>Книги для самых больших</h1><p>Самые лучшие и красивые книги для самых больших</p><p><a href="#" class="btn btn-success">Подробнее <span class="glyphicon glyphicon-chevron-right"></a></p>',
		
	],
];

echo Carousel::widget([
	'items' => $carousel,
	'options' => ['class' => 'carousel slide', 'data-interval' => '5000'],
	'controls' => [
	'<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>',
	'<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>'
	]
]);

?>