<?php
namespace winternet\tinymce;

use yii\web\AssetBundle;

class TinyMCEAsset extends AssetBundle
{
	public $sourcePath = '@winternet/tinymce/assets';
	
	public $css = [];
	
	public $js = [
		'tinymce.min.js',
	];

	// public $publishOptions = ['forceCopy' => true];
}