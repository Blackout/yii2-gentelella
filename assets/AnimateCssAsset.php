<?php

namespace yiister\gentelella\assets;

use yii\web\AssetBundle;

class AnimateCssAsset extends AssetBundle
{
    public $sourcePath = '@bower/gentelella/vendors/animate.css/';
    public $css = [
        'animate.min.css'
    ];
    public $js = [];
    public $depends = [];
}
