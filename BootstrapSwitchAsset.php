<?php
/**
 * Created by PhpStorm.
 * User: PHPdev
 * Date: 14.12.2015
 * Time: 16:59
 */
namespace kak\widgets\BSwitch;
use yii\web\AssetBundle;

class BootstrapSwitchAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-switch/dist';
    public $depends = [
        'yii\web\JqueryAsset'
    ];

    public function init()
    {
        $this->js[] = 'js/bootstrap-switch' . (!YII_DEBUG ? ".min" : "")  . ".js";
        $this->css[] = 'css/bootstrap3/bootstrap-switch' . (!YII_DEBUG ? ".min" : "") . ".css";
    }

}