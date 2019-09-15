<?php
/**
 * Created by PhpStorm.
 * User: godson
 * Date: 3/16/18
 * Time: 17:23
 */

namespace yiister\gentelella\assets;


use yii\web\AssetBundle;

class MapAsset extends AssetBundle {
	public $sourcePath = '@bower/gentelella/vendors/jqvmap/';
	public $css = [
        'dist/jqvmap.css',
	];
	public $js = [
		'dist/jquery.vmap.js',
		'dist/maps/jquery.vmap.world.js',
	];

}
