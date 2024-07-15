<?php

namespace ereminmdev\yii2\idiomorph;

use yii\web\AssetBundle;

class IdiomorphAsset extends AssetBundle
{
    public $sourcePath = '@npm/idiomorph/dist';

    public $js = [
        YII_DEBUG ? 'idiomorph.js' : 'idiomorph.min.js',
    ];
}
