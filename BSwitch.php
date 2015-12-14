<?php
/**
 * Created by PhpStorm.
 * User: PHPdev
 * Date: 14.12.2015
 * Time: 17:06
 */

namespace kak\widgets\BSwitch;
use yii\helpers\Html;

/**
 * Class BSwitch
 * @package kak\widgets\BSwitch
 */
class BSwitch extends \yii\widgets\InputWidget
{
    public function init(){
        parent::init();
    }

    public function run()
    {
        echo $this->hasModel()
            ? Html::activeCheckbox($this->model, $this->attribute, $this->options)
            : Html::checkbox($this->name, $this->value, $this->options);

        $this->registerAssets();
    }

    /**
     * Registers Assets
     */
    public function registerAssets()
    {
        $view = $this->getView();
        BootstrapSwitchAsset::register($view);
    }




}