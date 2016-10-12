<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LightcaseAsset extends AssetBundle
{
    public $sourcePath = '@bower/lightcase/src';
    public $css = [
        'css/lightcase.css',
    ];
    public $js = [
        'js/lightcase.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
