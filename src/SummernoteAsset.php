<?php


namespace r39u1\summernote;


use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@bower/summernote/dist';
    public $css = [
        'summernote.css',
    ];
    public $js = [
        'summernote.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}