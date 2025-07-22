<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterRuleResponseBody\filterExpression\filterValues;
use AlibabaCloud\Tea\Model;

class filterExpression extends Model
{
    /**
     * @example NARY
     *
     * @var string
     */
    public $expressionType;

    /**
     * @var filterValues
     */
    public $filterValues;

    /**
     * @var mixed
     */
    public $operand;

    /**
     * @var mixed[]
     */
    public $operands;

    /**
     * @example AND
     *
     * @var string
     */
    public $operatorType;
    protected $_name = [
        'expressionType' => 'ExpressionType',
        'filterValues' => 'FilterValues',
        'operand' => 'Operand',
        'operands' => 'Operands',
        'operatorType' => 'OperatorType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressionType) {
            $res['ExpressionType'] = $this->expressionType;
        }
        if (null !== $this->filterValues) {
            $res['FilterValues'] = null !== $this->filterValues ? $this->filterValues->toMap() : null;
        }
        if (null !== $this->operand) {
            $res['Operand'] = $this->operand;
        }
        if (null !== $this->operands) {
            $res['Operands'] = $this->operands;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterExpression
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressionType'])) {
            $model->expressionType = $map['ExpressionType'];
        }
        if (isset($map['FilterValues'])) {
            $model->filterValues = filterValues::fromMap($map['FilterValues']);
        }
        if (isset($map['Operand'])) {
            $model->operand = $map['Operand'];
        }
        if (isset($map['Operands'])) {
            if (!empty($map['Operands'])) {
                $model->operands = $map['Operands'];
            }
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        return $model;
    }
}
