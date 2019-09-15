<?php

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class SparklineAsset extends AssetBundle
{
	public $sourcePath = '@bower/gentelella/vendors/';

	public $css = [];
	public $js = [
		'jquery-sparkline/dist/jquery.sparkline.min.js',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
