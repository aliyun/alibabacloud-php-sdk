<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponseBody;

use AlibabaCloud\Tea\Model;

class ruleConfig extends Model
{
    /**
     * @var string
     */
    public $ruleSwitch;

    /**
     * @var string
     */
    public $ruleConditionMbps;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleConditionKpps;

    /**
     * @var string
     */
    public $ruleUndoMode;

    /**
     * @var string
     */
    public $ruleUndoBeginTime;

    /**
     * @var string
     */
    public $ruleConditionCnt;

    /**
     * @var string
     */
    public $ruleUndoEndTime;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'ruleSwitch'        => 'RuleSwitch',
        'ruleConditionMbps' => 'RuleConditionMbps',
        'timeZone'          => 'TimeZone',
        'ruleAction'        => 'RuleAction',
        'ruleConditionKpps' => 'RuleConditionKpps',
        'ruleUndoMode'      => 'RuleUndoMode',
        'ruleUndoBeginTime' => 'RuleUndoBeginTime',
        'ruleConditionCnt'  => 'RuleConditionCnt',
        'ruleUndoEndTime'   => 'RuleUndoEndTime',
        'ruleName'          => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->ruleConditionMbps) {
            $res['RuleConditionMbps'] = $this->ruleConditionMbps;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleConditionKpps) {
            $res['RuleConditionKpps'] = $this->ruleConditionKpps;
        }
        if (null !== $this->ruleUndoMode) {
            $res['RuleUndoMode'] = $this->ruleUndoMode;
        }
        if (null !== $this->ruleUndoBeginTime) {
            $res['RuleUndoBeginTime'] = $this->ruleUndoBeginTime;
        }
        if (null !== $this->ruleConditionCnt) {
            $res['RuleConditionCnt'] = $this->ruleConditionCnt;
        }
        if (null !== $this->ruleUndoEndTime) {
            $res['RuleUndoEndTime'] = $this->ruleUndoEndTime;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['RuleConditionMbps'])) {
            $model->ruleConditionMbps = $map['RuleConditionMbps'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleConditionKpps'])) {
            $model->ruleConditionKpps = $map['RuleConditionKpps'];
        }
        if (isset($map['RuleUndoMode'])) {
            $model->ruleUndoMode = $map['RuleUndoMode'];
        }
        if (isset($map['RuleUndoBeginTime'])) {
            $model->ruleUndoBeginTime = $map['RuleUndoBeginTime'];
        }
        if (isset($map['RuleConditionCnt'])) {
            $model->ruleConditionCnt = $map['RuleConditionCnt'];
        }
        if (isset($map['RuleUndoEndTime'])) {
            $model->ruleUndoEndTime = $map['RuleUndoEndTime'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
