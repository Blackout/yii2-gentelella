<?php

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class ICheckAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/iCheck/';
    public $css = [
        'skins/flat/green.css'
    ];
    public $js = [
        'icheck.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
