<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class CreateSchedruleOnDemandRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ruleName;

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
    public $ruleConditionCnt;

    /**
     * @var string
     */
    public $ruleAction;

    /**
     * @var string
     */
    public $ruleSwitch;

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
    public $ruleUndoEndTime;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'sourceIp'          => 'SourceIp',
        'instanceId'        => 'InstanceId',
        'ruleName'          => 'RuleName',
        'ruleConditionMbps' => 'RuleConditionMbps',
        'ruleConditionKpps' => 'RuleConditionKpps',
        'ruleConditionCnt'  => 'RuleConditionCnt',
        'ruleAction'        => 'RuleAction',
        'ruleSwitch'        => 'RuleSwitch',
        'ruleUndoMode'      => 'RuleUndoMode',
        'ruleUndoBeginTime' => 'RuleUndoBeginTime',
        'ruleUndoEndTime'   => 'RuleUndoEndTime',
        'timeZone'          => 'TimeZone',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleConditionMbps) {
            $res['RuleConditionMbps'] = $this->ruleConditionMbps;
        }
        if (null !== $this->ruleConditionKpps) {
            $res['RuleConditionKpps'] = $this->ruleConditionKpps;
        }
        if (null !== $this->ruleConditionCnt) {
            $res['RuleConditionCnt'] = $this->ruleConditionCnt;
        }
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->ruleSwitch) {
            $res['RuleSwitch'] = $this->ruleSwitch;
        }
        if (null !== $this->ruleUndoMode) {
            $res['RuleUndoMode'] = $this->ruleUndoMode;
        }
        if (null !== $this->ruleUndoBeginTime) {
            $res['RuleUndoBeginTime'] = $this->ruleUndoBeginTime;
        }
        if (null !== $this->ruleUndoEndTime) {
            $res['RuleUndoEndTime'] = $this->ruleUndoEndTime;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSchedruleOnDemandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleConditionMbps'])) {
            $model->ruleConditionMbps = $map['RuleConditionMbps'];
        }
        if (isset($map['RuleConditionKpps'])) {
            $model->ruleConditionKpps = $map['RuleConditionKpps'];
        }
        if (isset($map['RuleConditionCnt'])) {
            $model->ruleConditionCnt = $map['RuleConditionCnt'];
        }
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['RuleSwitch'])) {
            $model->ruleSwitch = $map['RuleSwitch'];
        }
        if (isset($map['RuleUndoMode'])) {
            $model->ruleUndoMode = $map['RuleUndoMode'];
        }
        if (isset($map['RuleUndoBeginTime'])) {
            $model->ruleUndoBeginTime = $map['RuleUndoBeginTime'];
        }
        if (isset($map['RuleUndoEndTime'])) {
            $model->ruleUndoEndTime = $map['RuleUndoEndTime'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
