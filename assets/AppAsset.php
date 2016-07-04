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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/materialize.css',
    ];
    public $js = [
        'js/jquery-3.0.0.min.js',
        'js/jquery-migrate-1.4.1.min.js',
        'js/bootstrap.js',
        'js/main.js',
        'js/materialize.js',
    ];
    public $depends = [
        
    ];
}
