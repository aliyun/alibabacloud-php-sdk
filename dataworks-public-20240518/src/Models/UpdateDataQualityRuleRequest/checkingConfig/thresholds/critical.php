<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityRuleRequest\checkingConfig\thresholds;

use AlibabaCloud\Tea\Model;

class critical extends Model
{
    /**
     * @description 阈值表达式。
     *
     * 固定值类型规则也可以使用表达式方式配置阈值，如果同时配置，表达式优先级高于Operator和Value
     * @example $checkValue > 0.05
     *
     * @var string
     */
    public $expression;

    /**
     * @description The comparison operator. Valid values:
     *
     *   \\>
     *   \\>=
     *   <
     *   <=
     *   !=
     *   \\=
     *
     * @example >
     *
     * @var string
     */
    public $operator;

    /**
     * @description The threshold value.
     *
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
     * @return critical
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
