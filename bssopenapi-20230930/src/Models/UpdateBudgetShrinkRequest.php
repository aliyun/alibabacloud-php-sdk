<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class UpdateBudgetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $budgetName;

    /**
     * @var string
     */
    public $budgetType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $cycleEndPeriod;

    /**
     * @var string
     */
    public $cycleQuotaShrink;

    /**
     * @var string
     */
    public $cycleStartPeriod;

    /**
     * @var string
     */
    public $cycleType;

    /**
     * @var string
     */
    public $ecIdAccountIdsShrink;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $nbid;

    /**
     * @var string
     */
    public $originalBudgetName;

    /**
     * @var string
     */
    public $queryFilterShrink;

    /**
     * @var string
     */
    public $quota;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var string
     */
    public $warnConfsShrink;
    protected $_name = [
        'budgetName' => 'BudgetName',
        'budgetType' => 'BudgetType',
        'comment' => 'Comment',
        'cycleEndPeriod' => 'CycleEndPeriod',
        'cycleQuotaShrink' => 'CycleQuota',
        'cycleStartPeriod' => 'CycleStartPeriod',
        'cycleType' => 'CycleType',
        'ecIdAccountIdsShrink' => 'EcIdAccountIds',
        'metric' => 'Metric',
        'nbid' => 'Nbid',
        'originalBudgetName' => 'OriginalBudgetName',
        'queryFilterShrink' => 'QueryFilter',
        'quota' => 'Quota',
        'quotaType' => 'QuotaType',
        'warnConfsShrink' => 'WarnConfs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->budgetName) {
            $res['BudgetName'] = $this->budgetName;
        }

        if (null !== $this->budgetType) {
            $res['BudgetType'] = $this->budgetType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->cycleEndPeriod) {
            $res['CycleEndPeriod'] = $this->cycleEndPeriod;
        }

        if (null !== $this->cycleQuotaShrink) {
            $res['CycleQuota'] = $this->cycleQuotaShrink;
        }

        if (null !== $this->cycleStartPeriod) {
            $res['CycleStartPeriod'] = $this->cycleStartPeriod;
        }

        if (null !== $this->cycleType) {
            $res['CycleType'] = $this->cycleType;
        }

        if (null !== $this->ecIdAccountIdsShrink) {
            $res['EcIdAccountIds'] = $this->ecIdAccountIdsShrink;
        }

        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        if (null !== $this->originalBudgetName) {
            $res['OriginalBudgetName'] = $this->originalBudgetName;
        }

        if (null !== $this->queryFilterShrink) {
            $res['QueryFilter'] = $this->queryFilterShrink;
        }

        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->warnConfsShrink) {
            $res['WarnConfs'] = $this->warnConfsShrink;
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
        if (isset($map['BudgetName'])) {
            $model->budgetName = $map['BudgetName'];
        }

        if (isset($map['BudgetType'])) {
            $model->budgetType = $map['BudgetType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['CycleEndPeriod'])) {
            $model->cycleEndPeriod = $map['CycleEndPeriod'];
        }

        if (isset($map['CycleQuota'])) {
            $model->cycleQuotaShrink = $map['CycleQuota'];
        }

        if (isset($map['CycleStartPeriod'])) {
            $model->cycleStartPeriod = $map['CycleStartPeriod'];
        }

        if (isset($map['CycleType'])) {
            $model->cycleType = $map['CycleType'];
        }

        if (isset($map['EcIdAccountIds'])) {
            $model->ecIdAccountIdsShrink = $map['EcIdAccountIds'];
        }

        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        if (isset($map['OriginalBudgetName'])) {
            $model->originalBudgetName = $map['OriginalBudgetName'];
        }

        if (isset($map['QueryFilter'])) {
            $model->queryFilterShrink = $map['QueryFilter'];
        }

        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['WarnConfs'])) {
            $model->warnConfsShrink = $map['WarnConfs'];
        }

        return $model;
    }
}
