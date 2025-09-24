<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var mixed[]
     */
    public $budget;

    /**
     * @var string
     */
    public $budgetName;

    /**
     * @var string
     */
    public $budgetStatus;

    /**
     * @var string
     */
    public $budgetType;

    /**
     * @var mixed[]
     */
    public $calculatedValues;

    /**
     * @var mixed[]
     */
    public $consumePeriod;
    protected $_name = [
        'budget' => 'Budget',
        'budgetName' => 'BudgetName',
        'budgetStatus' => 'BudgetStatus',
        'budgetType' => 'BudgetType',
        'calculatedValues' => 'CalculatedValues',
        'consumePeriod' => 'ConsumePeriod',
    ];

    public function validate()
    {
        if (\is_array($this->budget)) {
            Model::validateArray($this->budget);
        }
        if (\is_array($this->calculatedValues)) {
            Model::validateArray($this->calculatedValues);
        }
        if (\is_array($this->consumePeriod)) {
            Model::validateArray($this->consumePeriod);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->budget) {
            if (\is_array($this->budget)) {
                $res['Budget'] = [];
                foreach ($this->budget as $key1 => $value1) {
                    $res['Budget'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->budgetName) {
            $res['BudgetName'] = $this->budgetName;
        }

        if (null !== $this->budgetStatus) {
            $res['BudgetStatus'] = $this->budgetStatus;
        }

        if (null !== $this->budgetType) {
            $res['BudgetType'] = $this->budgetType;
        }

        if (null !== $this->calculatedValues) {
            if (\is_array($this->calculatedValues)) {
                $res['CalculatedValues'] = [];
                foreach ($this->calculatedValues as $key1 => $value1) {
                    $res['CalculatedValues'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->consumePeriod) {
            if (\is_array($this->consumePeriod)) {
                $res['ConsumePeriod'] = [];
                foreach ($this->consumePeriod as $key1 => $value1) {
                    $res['ConsumePeriod'][$key1] = $value1;
                }
            }
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
        if (isset($map['Budget'])) {
            if (!empty($map['Budget'])) {
                $model->budget = [];
                foreach ($map['Budget'] as $key1 => $value1) {
                    $model->budget[$key1] = $value1;
                }
            }
        }

        if (isset($map['BudgetName'])) {
            $model->budgetName = $map['BudgetName'];
        }

        if (isset($map['BudgetStatus'])) {
            $model->budgetStatus = $map['BudgetStatus'];
        }

        if (isset($map['BudgetType'])) {
            $model->budgetType = $map['BudgetType'];
        }

        if (isset($map['CalculatedValues'])) {
            if (!empty($map['CalculatedValues'])) {
                $model->calculatedValues = [];
                foreach ($map['CalculatedValues'] as $key1 => $value1) {
                    $model->calculatedValues[$key1] = $value1;
                }
            }
        }

        if (isset($map['ConsumePeriod'])) {
            if (!empty($map['ConsumePeriod'])) {
                $model->consumePeriod = [];
                foreach ($map['ConsumePeriod'] as $key1 => $value1) {
                    $model->consumePeriod[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
