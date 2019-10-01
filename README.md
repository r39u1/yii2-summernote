# Summernote widget for Yii2

Renders a [Summernote](https://summernote.org/) widget.

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

	composer require r39u1/yii2-summernote

or add

	"r39u1/yii2-summernote": "~1.0"

to the require section of your composer.json

## Usage

	<?= $form->field($model, 'content')->widget(SummernoteWidget::class, [
        'editorOptions' => [
            ...
        ]
	]); ?>

or

	<?= SummernoteWidget::widget([
        'name' => 'editor_id',
        'editorOptions' => [
            ...
        ]
	]); ?>

See [editorOptions](https://summernote.org/getting-started/#height-and-focus)

Example:

```
  <?= SummernoteWidget::widget([
        'name' => 'editor_id',
        'editorOptions' => [
            'height' => 300,    // set editor height
            'focus' => true     // set focus to editable area after initializing summernote
        ]
  ]); ?>
```
