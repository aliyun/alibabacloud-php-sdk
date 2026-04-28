<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateBudgetPolicyRequest extends Model
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
    public $budgetPoints;

    /**
     * @var string
     */
    public $budgetType;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resetDayOfMonth;
    protected $_name = [
        'alertThresholdPct' => 'AlertThresholdPct',
        'budgetDimensionRefId' => 'BudgetDimensionRefId',
        'budgetPoints' => 'BudgetPoints',
        'budgetType' => 'BudgetType',
        'gwClusterId' => 'GwClusterId',
        'regionId' => 'RegionId',
        'resetDayOfMonth' => 'ResetDayOfMonth',
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

        if (null !== $this->budgetPoints) {
            $res['BudgetPoints'] = $this->budgetPoints;
        }

        if (null !== $this->budgetType) {
            $res['BudgetType'] = $this->budgetType;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resetDayOfMonth) {
            $res['ResetDayOfMonth'] = $this->resetDayOfMonth;
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

        if (isset($map['BudgetPoints'])) {
            $model->budgetPoints = $map['BudgetPoints'];
        }

        if (isset($map['BudgetType'])) {
            $model->budgetType = $map['BudgetType'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResetDayOfMonth'])) {
            $model->resetDayOfMonth = $map['ResetDayOfMonth'];
        }

        return $model;
    }
}
