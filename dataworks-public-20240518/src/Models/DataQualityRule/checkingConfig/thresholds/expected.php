<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityRule\checkingConfig\thresholds;

use AlibabaCloud\Tea\Model;

class expected extends Model
{
    /**
     * @example 波动率类型规则使用，通过表达式来表示波动阈值。如：波动上升大于0.01： $checkValue > 0.01  波动下降大于0.01：$checkValue < -0.01   波动率绝对值：abs($checkValue) > 0.01
     *
     * @var string
     */
    public $expression;

    /**
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @example 100.0
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'expression' => 'Expression',
        'operator'   => 'Operator',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expected
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
