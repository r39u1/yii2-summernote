<?php


namespace r39u1\summernote;


use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class SummernoteWidget extends InputWidget
{
    public $editorOptions = [];

    public function init()
    {
        parent::init();
        $this->options = array_merge(['class' => 'form-control'], $this->options);
    }

    public function run()
    {
        $view = $this->getView();
        SummernoteAsset::register($view);

        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->name, $this->value, $this->options);
        }

        $editorOptions = null;
        if (!empty($this->editorOptions)) {
            $editorOptions = Json::encode($this->editorOptions);
        }

        $script = "$(document).ready(function() {";
        $script .= "$('#" . $this->options['id'] . "').summernote(" . $editorOptions . ");";
        $script .= "});";

        $view->registerJs($script);
    }
}