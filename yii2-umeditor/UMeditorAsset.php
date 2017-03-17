<?php

namespace hongyukeji\widgets\umeditor;

use yii\web\AssetBundle;

class UMeditorAsset extends AssetBundle
{
	public $sourcePath = '@vendor/hongyukeji/yii-widgets/yii2-umeditor/assets';

	public $css = [
		'themes/default/css/umeditor.min.css',
	];

	public $js = [
		'umeditor.min.js',
		'umeditor.config.js',
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];
}
