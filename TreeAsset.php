<?php

namespace yii2mod\tree;

use yii\web\AssetBundle;

/**
 * TreeAsset bundle
 *
 * @author Igor Chepurnoi <chepurnoi.igor@gmail.com>
 *
 * @since 1.0
 */
class TreeAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/fancytree/dist';

    /**
     * @var array
     */
    public $css = [
        'skin-lion/ui.fancytree.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'jquery.fancytree-all.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
