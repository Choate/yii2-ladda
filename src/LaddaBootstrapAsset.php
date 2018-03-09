<?php
/**
 * Created by PhpStorm.
 * User: Choate
 * Date: 2018/3/9
 * Time: 10:54
 */

namespace choate\yii2\laddabootstrap;

use yii\web\AssetBundle;

class LaddaBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/ladda-bootstrap';

    public $js = [
        'dist/spin.min.js',
        'dist/ladda.min.js'
    ];

    public $css = [
        'dist/ladda-themeless.min.css',
    ];
}