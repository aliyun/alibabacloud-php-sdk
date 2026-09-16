<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AiEmbedTransformParameters extends Model
{
    /**
     * @var int
     */
    public $dimension;

    /**
     * @var AiTransformField
     */
    public $inputField;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'dimension' => 'Dimension',
        'inputField' => 'InputField',
        'model' => 'Model',
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
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->inputField) {
            $res['InputField'] = null !== $this->inputField ? $this->inputField->toArray($noStream) : $this->inputField;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['InputField'])) {
            $model->inputField = AiTransformField::fromMap($map['InputField']);
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
