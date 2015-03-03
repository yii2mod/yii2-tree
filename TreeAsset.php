<?php

namespace yii2mod\tree;

use yii\web\AssetBundle;

/**
 * Class TreeAsset
 * @package yii2mod\tree
 */
class TreeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower';

    /**
     * @var array
     */
    public $css = [
        'fancytree/dist/skin-lion/ui.fancytree.css'
    ];

    /**
     * @var array
     */
    public $js = [
        'jquery-ui/jquery-ui.js',
        'fancytree/dist/jquery.fancytree.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'app\assets\AppAsset',
    ];
}
