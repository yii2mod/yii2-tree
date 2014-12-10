<?php

namespace yii2mod\tree;

use yii2mod\tree\TreeAsset;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Tree is a Yii Framework wrapper class for jQuery Dynatree extension {@link http://wwwendt.de/tech/dynatree/index.html)
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
        $this->options['children'] = $this->items;
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
        $js = '$("#' . $this->id . '").dynatree(' . $this->getOptions() . ');';
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
