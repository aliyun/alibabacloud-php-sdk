<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRuleRequest\filterExpression\filterValues;

class filterExpression extends Model
{
    /**
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

    public function validate()
    {
        if (null !== $this->filterValues) {
            $this->filterValues->validate();
        }
        if (\is_array($this->operands)) {
            Model::validateArray($this->operands);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expressionType) {
            $res['ExpressionType'] = $this->expressionType;
        }

        if (null !== $this->filterValues) {
            $res['FilterValues'] = null !== $this->filterValues ? $this->filterValues->toArray($noStream) : $this->filterValues;
        }

        if (null !== $this->operand) {
            $res['Operand'] = $this->operand;
        }

        if (null !== $this->operands) {
            if (\is_array($this->operands)) {
                $res['Operands'] = [];
                $n1 = 0;
                foreach ($this->operands as $item1) {
                    $res['Operands'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
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
                $model->operands = [];
                $n1 = 0;
                foreach ($map['Operands'] as $item1) {
                    $model->operands[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        return $model;
    }
}
