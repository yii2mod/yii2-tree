<?php

namespace yii2mod\tree;

use yii\web\AssetBundle;

/**
 * Class TreeAsset
 * @package yii2mod\tree
 *
 * @author Igor Chepurnoy
 */
class TreeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/dynatree';


    /**
     * @var array
     */
    public $js = [
        'jquery/jquery-ui.custom.js',
        'jquery/jquery.cookie.js',
        'dist/jquery.dynatree.js',
    ];

    /**
     * Depends
     * @var array
     */
    public $depends = [
        'app\assets\AppAsset',
        'yii2mod\tree\TreeCssAsset',
    ];
}

/**
 * Class TreeCssAsset
 * @package yii2mod\tree
 *
 * @author Igor Chepurnoy
 */
class TreeCssAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@vendor/yii2mod/yii2-tree/assets';

    /**
     * @var array
     */
    public $css = [
        'css/ui.dynatree.css',
    ];

}