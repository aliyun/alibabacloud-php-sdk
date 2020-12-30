<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList\scalingRule\cloudWatchTrigger;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList\scalingRule\schedulerTrigger;
use AlibabaCloud\Tea\Model;

class scalingRule extends Model
{
    /**
     * @var cloudWatchTrigger
     */
    public $cloudWatchTrigger;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $ruleCategory;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var schedulerTrigger
     */
    public $schedulerTrigger;

    /**
     * @var string
     */
    public $launchTime;

    /**
     * @var bool
     */
    public $withGrace;

    /**
     * @var string
     */
    public $essScalingRuleId;
    protected $_name = [
        'cloudWatchTrigger'    => 'CloudWatchTrigger',
        'status'               => 'Status',
        'adjustmentType'       => 'AdjustmentType',
        'recurrenceValue'      => 'RecurrenceValue',
        'recurrenceType'       => 'RecurrenceType',
        'timeoutWithGrace'     => 'TimeoutWithGrace',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'ruleName'             => 'RuleName',
        'scalingGroupId'       => 'ScalingGroupId',
        'ruleCategory'         => 'RuleCategory',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'cooldown'             => 'Cooldown',
        'adjustmentValue'      => 'AdjustmentValue',
        'schedulerTrigger'     => 'SchedulerTrigger',
        'launchTime'           => 'LaunchTime',
        'withGrace'            => 'WithGrace',
        'essScalingRuleId'     => 'EssScalingRuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = null !== $this->cloudWatchTrigger ? $this->cloudWatchTrigger->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->schedulerTrigger) {
            $res['SchedulerTrigger'] = null !== $this->schedulerTrigger ? $this->schedulerTrigger->toMap() : null;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }
        if (null !== $this->essScalingRuleId) {
            $res['EssScalingRuleId'] = $this->essScalingRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scalingRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudWatchTrigger'])) {
            $model->cloudWatchTrigger = cloudWatchTrigger::fromMap($map['CloudWatchTrigger']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['SchedulerTrigger'])) {
            $model->schedulerTrigger = schedulerTrigger::fromMap($map['SchedulerTrigger']);
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }
        if (isset($map['EssScalingRuleId'])) {
            $model->essScalingRuleId = $map['EssScalingRuleId'];
        }

        return $model;
    }
}
