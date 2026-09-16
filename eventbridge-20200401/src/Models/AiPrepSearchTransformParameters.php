<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AiPrepSearchTransformParameters extends Model
{
    /**
     * @var AiTransformField
     */
    public $inputField;

    /**
     * @var int
     */
    public $maxChunkSize;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'inputField' => 'InputField',
        'maxChunkSize' => 'MaxChunkSize',
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
        if (null !== $this->inputField) {
            $res['InputField'] = null !== $this->inputField ? $this->inputField->toArray($noStream) : $this->inputField;
        }

        if (null !== $this->maxChunkSize) {
            $res['MaxChunkSize'] = $this->maxChunkSize;
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
        if (isset($map['InputField'])) {
            $model->inputField = AiTransformField::fromMap($map['InputField']);
        }

        if (isset($map['MaxChunkSize'])) {
            $model->maxChunkSize = $map['MaxChunkSize'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
