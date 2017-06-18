<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'Рецензии';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Новости</h1>
<?php 
	echo ListView::widget([
		'dataProvider' => $data,
		'itemView' => '_news',
		]);
?>