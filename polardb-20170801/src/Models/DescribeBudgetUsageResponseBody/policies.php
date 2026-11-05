<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBudgetUsageResponseBody;

use AlibabaCloud\Dara\Model;

class policies extends Model
{
    /**
     * @var string
     */
    public $alertThresholdPct;

    /**
     * @var string
     */
    public $budgetDimensionRefId;

    /**
     * @var string
     */
    public $budgetDimensionType;

    /**
     * @var string
     */
    public $budgetPoints;

    /**
     * @var string
     */
    public $budgetPolicyId;

    /**
     * @var string
     */
    public $budgetType;

    /**
     * @var string
     */
    public $resetDayOfMonth;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'alertThresholdPct' => 'AlertThresholdPct',
        'budgetDimensionRefId' => 'BudgetDimensionRefId',
        'budgetDimensionType' => 'BudgetDimensionType',
        'budgetPoints' => 'BudgetPoints',
        'budgetPolicyId' => 'BudgetPolicyId',
        'budgetType' => 'BudgetType',
        'resetDayOfMonth' => 'ResetDayOfMonth',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertThresholdPct) {
            $res['AlertThresholdPct'] = $this->alertThresholdPct;
        }

        if (null !== $this->budgetDimensionRefId) {
            $res['BudgetDimensionRefId'] = $this->budgetDimensionRefId;
        }

        if (null !== $this->budgetDimensionType) {
            $res['BudgetDimensionType'] = $this->budgetDimensionType;
        }

        if (null !== $this->budgetPoints) {
            $res['BudgetPoints'] = $this->budgetPoints;
        }

        if (null !== $this->budgetPolicyId) {
            $res['BudgetPolicyId'] = $this->budgetPolicyId;
        }

        if (null !== $this->budgetType) {
            $res['BudgetType'] = $this->budgetType;
        }

        if (null !== $this->resetDayOfMonth) {
            $res['ResetDayOfMonth'] = $this->resetDayOfMonth;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AlertThresholdPct'])) {
            $model->alertThresholdPct = $map['AlertThresholdPct'];
        }

        if (isset($map['BudgetDimensionRefId'])) {
            $model->budgetDimensionRefId = $map['BudgetDimensionRefId'];
        }

        if (isset($map['BudgetDimensionType'])) {
            $model->budgetDimensionType = $map['BudgetDimensionType'];
        }

        if (isset($map['BudgetPoints'])) {
            $model->budgetPoints = $map['BudgetPoints'];
        }

        if (isset($map['BudgetPolicyId'])) {
            $model->budgetPolicyId = $map['BudgetPolicyId'];
        }

        if (isset($map['BudgetType'])) {
            $model->budgetType = $map['BudgetType'];
        }

        if (isset($map['ResetDayOfMonth'])) {
            $model->resetDayOfMonth = $map['ResetDayOfMonth'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
