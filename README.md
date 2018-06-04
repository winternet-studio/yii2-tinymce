winternet-studio/yii2-tinymce
=========================
The TinyMCE Extension for yii framework

Forked from [Kaile/yii2-tinymce](https://github.com/Kaile/yii2-tinymce) who forked it from the original author [moonlandsoft/yii2-tinymce](https://github.com/moonlandsoft/yii2-tinymce)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist winternet-studio/yii2-tinymce "*"
```

or add

```
"winternet-studio/yii2-tinymce": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use winternet\tinymce\TinyMCE;

echo TinyMCE::widget(['name' => 'text-content']);

$form->field($model, 'attribute')->widget(TinyMCE::className());

//toggle to tinyMCE or to textarea

echo TinyMCE::widget(['name' => 'text-content', 'toggle' => ['active' => true]]);

$form->field($model, 'attribute')->widget(TinyMCE::className(), [
	'toggle' => [
		'active' => true,
	]
]);
```
