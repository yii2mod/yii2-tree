<?php

namespace yii2mod\tree;

use yii2mod\tree\TreeAsset;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Tree widget based on Fancytree extension {@link http://wwwendt.de/tech/fancytree/demo/#sample-default.html)
 *
 * Class Tree
 * @package app\widgets\tree
 */
class Tree extends Widget
{

    /**
     * List of categories
     * @var
     */
    public $items = [];

    /**
     * container div tag id
     * @var mixed
     */
    public $id = 'tree';

    /**
     * Plugin options
     * @var array
     */
    public $options = [];


    /**
     * Initializes the widget
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Render tree
     * @return string|void
     */
    public function run()
    {
        $this->options['source'] = $this->items;
        echo Html::tag('div', '', ['id' => $this->id]);
        $this->registerAssets();
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        TreeAsset::register($view);
        $js = '$("#' . $this->id . '").fancytree(' . $this->getOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * Get plugin options
     * @return string
     */
    public function getOptions()
    {
        return Json::encode($this->options);
    }
}
