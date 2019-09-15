<?php

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class SwitcheryAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/switchery/dist/';
    public $css = [
        'switchery.min.css'
    ];
    public $js = [
        'switchery.min.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
