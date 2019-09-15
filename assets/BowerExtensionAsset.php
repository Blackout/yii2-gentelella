<?php
/**
 * Created by PhpStorm.
 * User: godson
 * Date: 3/21/18
 * Time: 12:58
 */

namespace yiister\gentelella\assets;


use yii\web\AssetBundle;

class BowerExtensionAsset extends AssetBundle {
	public $sourcePath = '@bower/gentelella/vendors/';

	public $css = [
		'bootstrap-daterangepicker/daterangepicker.css',
		'bootstrap-wysiwyg/css/style.css',
		'datatables.net-bs/css/dataTables.bootstrap.min.css',
		'jquery.tagsinput/src/jquery.tagsinput.css',
		'iCheck/skins/all.css',
		'nprogress/nprogress.css',
		'dropzone/dist/min/dropzone.min.css',
		'dropzone/dist/min/basic.min.css'
	];
	public $js = [
		'moment/min/moment-with-locales.min.js',
		'bootstrap-daterangepicker/daterangepicker.js',
		'bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js',
		'datatables.net/js/jquery.dataTables.min.js',
		'datatables.net-bs/js/dataTables.bootstrap.min.js',
		'jquery.tagsinput/src/jquery.tagsinput.js',
		'iCheck/icheck.min.js',
		'fastclick/lib/fastclick.js',
		'nprogress/nprogress.js',
		'dropzone/dist/min/dropzone.min.js',
		'devbridge-autocomplete/dist/jquery.autocomplete.min.js'
	];
}
