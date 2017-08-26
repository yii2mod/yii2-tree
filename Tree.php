<?php

namespace yii2mod\tree;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Yii2 wrapper for Fancytree plugin.
 *
 * @author Igor Chepurnoi <chepurnoi.igor@gmail.com>
 *
 * @since 1.0
 */
class Tree extends Widget
{
    /**
     * @var array list of categories
     */
    public $items = [];

    /**
     * @var string container id
     */
    public $id = 'tree';

    /**
     * @var array
     */
    public $clientOptions = [];

    /**
     * Executes the widget.
     */
    public function run()
    {
        $this->clientOptions['source'] = $this->items;
        echo Html::tag('div', '', ['id' => $this->id]);
        $this->registerAssets();
    }

    /**
     * Register assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        TreeAsset::register($view);
        $js = '$("#' . $this->id . '").fancytree(' . $this->getClientOptions() . ');';
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * @return string
     */
    public function getClientOptions()
    {
        return Json::encode($this->clientOptions);
    }
}
