<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AiFilterTransformParameters extends Model
{
    /**
     * @var string
     */
    public $condition;

    /**
     * @var AiTransformField
     */
    public $inputField;

    /**
     * @var string
     */
    public $onMismatch;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'condition' => 'Condition',
        'inputField' => 'InputField',
        'onMismatch' => 'OnMismatch',
        'stepName' => 'StepName',
    ];

    public function validate()
    {
        if (null !== $this->inputField) {
            $this->inputField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->inputField) {
            $res['InputField'] = null !== $this->inputField ? $this->inputField->toArray($noStream) : $this->inputField;
        }

        if (null !== $this->onMismatch) {
            $res['OnMismatch'] = $this->onMismatch;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['InputField'])) {
            $model->inputField = AiTransformField::fromMap($map['InputField']);
        }

        if (isset($map['OnMismatch'])) {
            $model->onMismatch = $map['OnMismatch'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
