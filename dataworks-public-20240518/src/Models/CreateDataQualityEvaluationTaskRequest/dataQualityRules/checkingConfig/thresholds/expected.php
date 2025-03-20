<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityEvaluationTaskRequest\dataQualityRules\checkingConfig\thresholds;

use AlibabaCloud\Tea\Model;

class expected extends Model
{
    /**
     * @description The threshold expression.
     *
     * If the template specified by the TemplateCode parameter is about fluctuation, you must use an expression to represent the threshold for fluctuation. Examples:
     *
     *   $checkValue > 0.01
     *   $checkValue < -0.01
     *   abs($checkValue) > 0.01
     *
     * If the template specified by the TemplateCode parameter is about fixed value, you can also use an expression to represent the threshold. If you configure the Expression, Operator, and Value parameters for the threshold at the same time, the Expression parameter takes precedence over the Operator and Value parameters.
     *
     * @example $checkValue > 0.01
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
     * @example =
     *
     * @var string
     */
    public $operator;

    /**
     * @description The threshold value.
     *
     * @example 0
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'expression' => 'Expression',
        'operator' => 'Operator',
        'value' => 'Value',
    ];

    public function validate() {}

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
