yii2-baidu-ueditor
==================
yii2 ueditor extension

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist aprsoft/yii2-baidu-ueditor "*"
```

or add

```
"aprsoft/yii2-baidu-ueditor": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \AprSoft\UEditor\UEditor::widget(); ?>
```
or    
```php
<?= $form->field($model, 'body')->widget(\AprSoft\UEditor\UEditor::className()) ?>
```


config upload   

```php    


public function actions()
{
    return [
        'upload' => [
            'class' => 'AprSoft\UEditor\UEditorAction',
            'config' => [
                "imageUrlPrefix"  => "http://www.baidu.com",//图片访问路径前缀
                "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}", //上传保存路径
                "imageRoot" => Yii::getAlias("@webroot"),
            ],
        ]
    ];
}
```
