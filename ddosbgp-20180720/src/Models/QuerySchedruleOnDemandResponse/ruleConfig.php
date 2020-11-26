<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\QuerySchedruleOnDemandResponse;

use AlibabaCloud\Tea\Model;

class ruleConfig extends Model
{
    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $ruleConditionCnt;

    /**
     * @var string
     */
    public $ruleUndoBeginTime;

    /**
     * @var string
     */
    public $ruleUndoMode;

    /**
     * @var string
     */
    public $ruleUndoEndTime;

    /**
     * @var string
     */
    public $ruleConditionMbps;

    /**
     * @var string
     */
    public $ruleConditionKpps;

    /**
     * @var string
     */
    public $ruleSwitch;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'ruleName'          => 'RuleName',
        'ruleConditionCnt'  => 'RuleConditionCnt',
        'ruleUndoBeginTime' => 'RuleUndoBeginTime',
        'ruleUndoMode'      => 'RuleUndoMode',
        'ruleUndoEndTime'   => 'RuleUndoEndTime',
        'ruleConditionMbps' => 'RuleConditionMbps',
        'ruleConditionKpps' => 'RuleConditionKpps',
        'ruleSwitch'        => 'RuleSwitch',
        'ruleAction'        => 'RuleAction',
        'timeZone'          => 'TimeZone',
    ];

    public function validate()
    {
        Model::validateRequired('ruleName', $this->ruleName, true);
        Model::validateRequired('ruleConditionCnt', $this->ruleConditionCnt, true);
        Model::validateRequired('ruleUndoBeginTime', $this->ruleUndoBeginTime, true);
        Model::validateRequired('ruleUndoMode', $this->ruleUndoMode, true);
        Model::validateRequired('ruleUndoEndTime', $this->ruleUndoEndTime, true);
        Model::validateRequired('ruleConditionMbps', $this->ruleConditionMbps, true);
        Model::validateRequired('ruleConditionKpps', $this->ruleConditionKpps, true);
        Model::validateRequired('ruleSwitch', $this->ruleSwitch, true);
        Model::validateRequired('ruleAction', $this->ruleAction, true);
        Model::validateRequired('timeZone', $this->timeZone, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleConditionCnt) {
            $res['RuleConditionCnt'] = $this->ruleConditionCnt;
        }
        if (null !== $this->ruleUndoBeginTime) {
            $res['RuleUndoBeginTime'] = $this->ruleUndoBeginTime;
        }
        if (null !== $this->ruleUndoMode) {
            $res['RuleUndoMode'] = $this->ruleUndoMode;
        }
        if (null !== $this->ruleUndoEndTime) {
            $res['RuleUndoEndTime'] = $this->ruleUndoEndTime;
        }
        if (null !== $this->ruleConditionMbps) {
            $res['RuleConditionMbps'] = $this->ruleConditionMbps;
        }
        if (null !== $this->ruleConditionKpps) {
            $res['RuleConditionKpps'] = $this->ruleConditionKpps;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleConditionCnt'])) {
            $model->ruleConditionCnt = $map['RuleConditionCnt'];
        }
        if (isset($map['RuleUndoBeginTime'])) {
            $model->ruleUndoBeginTime = $map['RuleUndoBeginTime'];
        }
        if (isset($map['RuleUndoMode'])) {
            $model->ruleUndoMode = $map['RuleUndoMode'];
        }
        if (isset($map['RuleUndoEndTime'])) {
            $model->ruleUndoEndTime = $map['RuleUndoEndTime'];
        }
        if (isset($map['RuleConditionMbps'])) {
            $model->ruleConditionMbps = $map['RuleConditionMbps'];
        }
        if (isset($map['RuleConditionKpps'])) {
            $model->ruleConditionKpps = $map['RuleConditionKpps'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
