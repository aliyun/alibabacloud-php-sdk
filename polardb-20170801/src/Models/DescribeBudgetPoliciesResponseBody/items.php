<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBudgetPoliciesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $alertThresholdPct;

    /**
     * @var bool
     */
    public $alertTriggered;

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
    public $exceeded;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $resetDayOfMonth;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $usedPoints;
    protected $_name = [
        'alertThresholdPct' => 'AlertThresholdPct',
        'alertTriggered' => 'AlertTriggered',
        'budgetDimensionRefId' => 'BudgetDimensionRefId',
        'budgetDimensionType' => 'BudgetDimensionType',
        'budgetPoints' => 'BudgetPoints',
        'budgetPolicyId' => 'BudgetPolicyId',
        'budgetType' => 'BudgetType',
        'exceeded' => 'Exceeded',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'gwClusterId' => 'GwClusterId',
        'resetDayOfMonth' => 'ResetDayOfMonth',
        'status' => 'Status',
        'usedPoints' => 'UsedPoints',
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

        if (null !== $this->alertTriggered) {
            $res['AlertTriggered'] = $this->alertTriggered;
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

        if (null !== $this->exceeded) {
            $res['Exceeded'] = $this->exceeded;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->resetDayOfMonth) {
            $res['ResetDayOfMonth'] = $this->resetDayOfMonth;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usedPoints) {
            $res['UsedPoints'] = $this->usedPoints;
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

        if (isset($map['AlertTriggered'])) {
            $model->alertTriggered = $map['AlertTriggered'];
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

        if (isset($map['Exceeded'])) {
            $model->exceeded = $map['Exceeded'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['ResetDayOfMonth'])) {
            $model->resetDayOfMonth = $map['ResetDayOfMonth'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UsedPoints'])) {
            $model->usedPoints = $map['UsedPoints'];
        }

        return $model;
    }
}
