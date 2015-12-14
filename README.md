# kak-input-switch
bootstrap-switch widget for Yii2

 * @docs options http://www.bootstrap-switch.org/options.html
 * @docs methods http://www.bootstrap-switch.org/methods.html
 * @docs events http://www.bootstrap-switch.org/events.html

ActiveForm
```php
echo $form->field($model, 'list')->widget('\kak\widgets\InputSwitch\InputSwitch', [
	'options' => [
		'data-id'   => $model->id,
		'data-size' => 'small'
	],
]) ?>
```
Native
```php
echo  \kak\widgets\InputSwitch\InputSwitch::widget([
	'name' => 'OperatorSwitch[' . $model->id . ']',
	'value' => $model->status == true,
	'options' => [
		'data-id'   => $model->id,
		'data-size' => 'small'
	]
]);
```
Use Events
```php
$js =<<<JS
   $('.InputSwitch').on('switchChange.bootstrapSwitch', function(event, state) {
      $.post('/finance/credit-operator-switch',{status: state, id: $(this).data('id') })
    });
JS;
$this->registerJs($js)
?>
```