<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii2 Tree Widget</h1>
    <br>
</p>

Tree widget based on Fancytree extension http://wwwendt.de/tech/fancytree/demo/#sample-default.html

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-tree/v/stable)](https://packagist.org/packages/yii2mod/yii2-tree) 
[![Total Downloads](https://poser.pugx.org/yii2mod/yii2-tree/downloads)](https://packagist.org/packages/yii2mod/yii2-tree) 
[![License](https://poser.pugx.org/yii2mod/yii2-tree/license)](https://packagist.org/packages/yii2mod/yii2-tree)
[![Build Status](https://travis-ci.org/yii2mod/yii2-tree.svg?branch=master)](https://travis-ci.org/yii2mod/yii2-tree)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-tree "*"
```

or add

```
"yii2mod/yii2-tree": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

```php
<?php echo yii2mod\tree\Tree::widget([
            'items' => [
                ['title' => 'Category 1'],
                ['title' => 'Category 2'],
                [
                    'title' => 'Category 3',
                    'children' => [
                        [
                            'title' => 'Category 3.1',
                        ],
                        [
                            'title' => 'Category 3.2',
                            'children' => [
                                [
                                    'title' => 'Category 3.2.1',
                                ]
                            ],
                            'folder' => true,
                        ],
                    ],
                    'folder' => true,
                ],

            ],
            'clientOptions' => [
                'autoCollapse' => true,
                'clickFolderMode' => 3,
                'activate' => new \yii\web\JsExpression('
                        function(node, data) {
                              node  = data.node;
                              // Log node title
                              console.log(node.title);
                        }
                '),
            ],
        ]); ?>
```


**You can also change the theme of Fancytree extension!**

To change the theme, you can configure the assetManager array in your application configuration:
```php
// skin-win8

'assetManager' => [
    'bundles' => [
        'yii2mod\tree\TreeAsset' => [
            'css' => [
                'skin-win8/ui.fancytree.less',
            ]
        ],
    ],
]
```
