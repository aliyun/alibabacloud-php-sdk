<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\JudgeNodeMetaDesc;

use AlibabaCloud\Dara\Model;

class expressionMetaDesc extends Model
{
    /**
     * @var int
     */
    public $leftFieldType;

    /**
     * @var string
     */
    public $leftOperand;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var int
     */
    public $rightFieldType;

    /**
     * @var string
     */
    public $rightOperand;

    /**
     * @var string
     */
    public $roundingMode;
    protected $_name = [
        'leftFieldType' => 'LeftFieldType',
        'leftOperand' => 'LeftOperand',
        'operator' => 'Operator',
        'rightFieldType' => 'RightFieldType',
        'rightOperand' => 'RightOperand',
        'roundingMode' => 'RoundingMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->leftFieldType) {
            $res['LeftFieldType'] = $this->leftFieldType;
        }

        if (null !== $this->leftOperand) {
            $res['LeftOperand'] = $this->leftOperand;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->rightFieldType) {
            $res['RightFieldType'] = $this->rightFieldType;
        }

        if (null !== $this->rightOperand) {
            $res['RightOperand'] = $this->rightOperand;
        }

        if (null !== $this->roundingMode) {
            $res['RoundingMode'] = $this->roundingMode;
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
        if (isset($map['LeftFieldType'])) {
            $model->leftFieldType = $map['LeftFieldType'];
        }

        if (isset($map['LeftOperand'])) {
            $model->leftOperand = $map['LeftOperand'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['RightFieldType'])) {
            $model->rightFieldType = $map['RightFieldType'];
        }

        if (isset($map['RightOperand'])) {
            $model->rightOperand = $map['RightOperand'];
        }

        if (isset($map['RoundingMode'])) {
            $model->roundingMode = $map['RoundingMode'];
        }

        return $model;
    }
}
