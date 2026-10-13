<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentResponseBody\data\model;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var bool
     */
    public $enabled;

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
        'enabled' => 'enabled',
        'limitType' => 'limitType',
        'overLimit' => 'overLimit',
        'periodType' => 'periodType',
        'ruleStatus' => 'ruleStatus',
        'usageLimit' => 'usageLimit',
        'usedAmount' => 'usedAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->limitType) {
            $res['limitType'] = $this->limitType;
        }

        if (null !== $this->overLimit) {
            $res['overLimit'] = $this->overLimit;
        }

        if (null !== $this->periodType) {
            $res['periodType'] = $this->periodType;
        }

        if (null !== $this->ruleStatus) {
            $res['ruleStatus'] = $this->ruleStatus;
        }

        if (null !== $this->usageLimit) {
            $res['usageLimit'] = $this->usageLimit;
        }

        if (null !== $this->usedAmount) {
            $res['usedAmount'] = $this->usedAmount;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['limitType'])) {
            $model->limitType = $map['limitType'];
        }

        if (isset($map['overLimit'])) {
            $model->overLimit = $map['overLimit'];
        }

        if (isset($map['periodType'])) {
            $model->periodType = $map['periodType'];
        }

        if (isset($map['ruleStatus'])) {
            $model->ruleStatus = $map['ruleStatus'];
        }

        if (isset($map['usageLimit'])) {
            $model->usageLimit = $map['usageLimit'];
        }

        if (isset($map['usedAmount'])) {
            $model->usedAmount = $map['usedAmount'];
        }

        return $model;
    }
}
