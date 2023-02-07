<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example {           "budgetCycleType": "monthly",           "budgetMemo": "",           "totalBudgetAmount": 220         }
     *
     * @var mixed[]
     */
    public $budget;

    /**
     * @var string
     */
    public $budgetName;

    /**
     * @example overdue
     *
     * @var string
     */
    public $budgetStatus;

    /**
     * @example cost
     *
     * @var string
     */
    public $budgetType;

    /**
     * @example {           "actualConsumeSum": 88.6,           "actualAddForecastedAmount": 89.6,           "actualAndBudgetComparison": "20.73%"         }
     *
     * @var mixed[]
     */
    public $calculatedValues;

    /**
     * @example {           "consumePeriodBegin": "2022-10",           "consumePeriodEnd": "2022-11"         }
     *
     * @var mixed[]
     */
    public $consumePeriod;
    protected $_name = [
        'budget'           => 'Budget',
        'budgetName'       => 'BudgetName',
        'budgetStatus'     => 'BudgetStatus',
        'budgetType'       => 'BudgetType',
        'calculatedValues' => 'CalculatedValues',
        'consumePeriod'    => 'ConsumePeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->budget) {
            $res['Budget'] = $this->budget;
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
            $res['CalculatedValues'] = $this->calculatedValues;
        }
        if (null !== $this->consumePeriod) {
            $res['ConsumePeriod'] = $this->consumePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Budget'])) {
            $model->budget = $map['Budget'];
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
            $model->calculatedValues = $map['CalculatedValues'];
        }
        if (isset($map['ConsumePeriod'])) {
            $model->consumePeriod = $map['ConsumePeriod'];
        }

        return $model;
    }
}
