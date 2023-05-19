<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeCostBudgetsSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The information about the budget. The BudgetCycleType parameter indicates the cycle of the budget. Valid values: daily, monthly, quarterly, and yearly. The TotalBudgetAmount parameter indicates the total budget. The BudgetMemo parameter indicates the remarks of the budget.
     *
     * @example {           "budgetCycleType": "monthly",           "budgetMemo": "",           "totalBudgetAmount": 220         }
     *
     * @var mixed[]
     */
    public $budget;

    /**
     * @description The name of the budget.
     *
     * @example Annual budget
     *
     * @var string
     */
    public $budgetName;

    /**
     * @description The status of the budget.
     *
     * @example overdue
     *
     * @var string
     */
    public $budgetStatus;

    /**
     * @description The type of the budget.
     *
     * @example cost
     *
     * @var string
     */
    public $budgetType;

    /**
     * @description The information about the estimate-to-actual analysis. The ActualConsumeSum parameter indicates the accumulated actual value. The ActualAddForecastedAmount parameter indicates the sum of accumulated actual value and predicted value. If the BudgetType parameter is set to cost, the sum of actual value and predicted value includes the actual cost incurred from the budget start date to the current date and the predicted cost from the current date to the budget end date. If the BudgetType parameter is set to asset, the sum of actual value and predicted value includes the actual usage or coverage from the budget start date to the budget end date. If the budget end date minus the current date is more than one year, the part that exceeds one year is not included. The ActualAndBudgetComparison parameter indicates the comparison between the actual value and the predicted value. The value of the ActualAndBudgetComparison parameter is calculated based on the following formula: Accumulated actual value/Total budget × 100%.
     *
     * @example {           "actualConsumeSum": 88.6,           "actualAddForecastedAmount": 89.6,           "actualAndBudgetComparison": "20.73%"         }
     *
     * @var mixed[]
     */
    public $calculatedValues;

    /**
     * @description The information about the billing cycle. The ConsumePeriodBegin parameter indicates the start date of the budget. The ConsumePeriodEnd parameter indicates the end date of the budget.
     *
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
