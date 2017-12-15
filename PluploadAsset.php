<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-plupload
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-plupload
 * @version 0.1.0
 */

namespace cinghie\plupload;

use yii\web\AssetBundle;

class PluploadAsset extends AssetBundle
{

	/**
	 * @inherit
	 */
	public $sourcePath = '@vendor/moxiecode/plupload/js';

	/**
	 * @inherit
	 */
	public $js = [
		'plupload.min.js',
	];

	/**
	 * @inherit
	 */
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'yii\web\JqueryAsset',
	];

}
