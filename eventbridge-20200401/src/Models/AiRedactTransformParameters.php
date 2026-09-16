<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class AiRedactTransformParameters extends Model
{
    /**
     * @var string[]
     */
    public $entities;

    /**
     * @var AiTransformField
     */
    public $inputField;

    /**
     * @var string
     */
    public $maskChar;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $stepName;
    protected $_name = [
        'entities' => 'Entities',
        'inputField' => 'InputField',
        'maskChar' => 'MaskChar',
        'mode' => 'Mode',
        'stepName' => 'StepName',
    ];

    public function validate()
    {
        if (\is_array($this->entities)) {
            Model::validateArray($this->entities);
        }
        if (null !== $this->inputField) {
            $this->inputField->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entities) {
            if (\is_array($this->entities)) {
                $res['Entities'] = [];
                $n1 = 0;
                foreach ($this->entities as $item1) {
                    $res['Entities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->inputField) {
            $res['InputField'] = null !== $this->inputField ? $this->inputField->toArray($noStream) : $this->inputField;
        }

        if (null !== $this->maskChar) {
            $res['MaskChar'] = $this->maskChar;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['Entities'])) {
            if (!empty($map['Entities'])) {
                $model->entities = [];
                $n1 = 0;
                foreach ($map['Entities'] as $item1) {
                    $model->entities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InputField'])) {
            $model->inputField = AiTransformField::fromMap($map['InputField']);
        }

        if (isset($map['MaskChar'])) {
            $model->maskChar = $map['MaskChar'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        return $model;
    }
}
