<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\GetWorkerResponseBody\data;

use AlibabaCloud\Dara\Model;

class limitConfig extends Model
{
    /**
     * @var string
     */
    public $limitType;

    /**
     * @var bool
     */
    public $overLimit;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $ruleStatus;

    /**
     * @var int
     */
    public $usageLimit;

    /**
     * @var int
     */
    public $usedAmount;
    protected $_name = [
        'limitType' => 'LimitType',
        'overLimit' => 'OverLimit',
        'periodType' => 'PeriodType',
        'ruleStatus' => 'RuleStatus',
        'usageLimit' => 'UsageLimit',
        'usedAmount' => 'UsedAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        if (null !== $this->overLimit) {
            $res['OverLimit'] = $this->overLimit;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        if (null !== $this->usageLimit) {
            $res['UsageLimit'] = $this->usageLimit;
        }

        if (null !== $this->usedAmount) {
            $res['UsedAmount'] = $this->usedAmount;
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
        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        if (isset($map['OverLimit'])) {
            $model->overLimit = $map['OverLimit'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        if (isset($map['UsageLimit'])) {
            $model->usageLimit = $map['UsageLimit'];
        }

        if (isset($map['UsedAmount'])) {
            $model->usedAmount = $map['UsedAmount'];
        }

        return $model;
    }
}
