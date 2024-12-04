<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleResponseBody\dataQualityRule\checkingConfig\thresholds;

use AlibabaCloud\Tea\Model;

class expected extends Model
{
    /**
     * @description The threshold expression.
     *
     * @example $checkValue <= 0.01
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
