Tree Widget for Yii 2
=========
- Tree widget based on Fancytree extension http://wwwendt.de/tech/fancytree/demo/#sample-default.html


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-tree "*"
```

or add

```json
"yii2mod/yii2-tree": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

```php
echo yii2mod\tree\Tree::widget([
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
                            'folder' => true
                        ],
                    ],
                    'folder' => true,
                ]

            ],
            'options' => [
                'autoCollapse' => true,
                'clickFolderMode' => 3,
                'activate' => new \yii\web\JsExpression('
                        function(node, data) {
                              node  = data.node;
                              // Log node title
                              console.log(node.title);
                        }
                ')
            ]
        ]);
        
```
