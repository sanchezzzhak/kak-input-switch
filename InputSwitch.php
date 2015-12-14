<?php
/**
 * Created by PhpStorm.
 * User: PHPdev
 * Date: 14.12.2015
 * Time: 17:06
 */

namespace kak\widgets\InputSwitch;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Class InputSwitch
 * @package kak\widgets\InputSwitch
 * @docs options http://www.bootstrap-switch.org/options.html
 * @docs methods http://www.bootstrap-switch.org/methods.html
 * @docs events http://www.bootstrap-switch.org/events.html
 */
class InputSwitch extends \yii\widgets\InputWidget
{
    const JS_KEY = '/kak/InputSwitch';

    public function init(){
        parent::init();

        Html::addCssClass($this->options,'InputSwitch');
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

        //$id = $this->options['id'];


        $view->registerJs("jQuery('.InputSwitch').bootstrapSwitch();" , $view::POS_READY, self::JS_KEY );


    }




}
