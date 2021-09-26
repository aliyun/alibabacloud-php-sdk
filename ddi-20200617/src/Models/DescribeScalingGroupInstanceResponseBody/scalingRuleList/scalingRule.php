<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingRuleList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingRuleList\scalingRule\cloudWatchTrigger;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeScalingGroupInstanceResponseBody\scalingRuleList\scalingRule\schedulerTrigger;
use AlibabaCloud\Tea\Model;

class scalingRule extends Model
{
    /**
     * @var string
     */
    public $ruleCategory;

    /**
     * @var string
     */
    public $essScalingRuleId;

    /**
     * @var int
     */
    public $scalingGroupId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $adjustmentType;

    /**
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var int
     */
    public $cooldown;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $launchTime;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @var bool
     */
    public $withGrace;

    /**
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @var schedulerTrigger
     */
    public $schedulerTrigger;

    /**
     * @var cloudWatchTrigger
     */
    public $cloudWatchTrigger;
    protected $_name = [
        'ruleCategory'         => 'RuleCategory',
        'essScalingRuleId'     => 'EssScalingRuleId',
        'scalingGroupId'       => 'ScalingGroupId',
        'ruleName'             => 'RuleName',
        'adjustmentType'       => 'AdjustmentType',
        'adjustmentValue'      => 'AdjustmentValue',
        'cooldown'             => 'Cooldown',
        'status'               => 'Status',
        'launchTime'           => 'LaunchTime',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'withGrace'            => 'WithGrace',
        'timeoutWithGrace'     => 'TimeoutWithGrace',
        'schedulerTrigger'     => 'SchedulerTrigger',
        'cloudWatchTrigger'    => 'CloudWatchTrigger',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }
        if (null !== $this->essScalingRuleId) {
            $res['EssScalingRuleId'] = $this->essScalingRuleId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->schedulerTrigger) {
            $res['SchedulerTrigger'] = null !== $this->schedulerTrigger ? $this->schedulerTrigger->toMap() : null;
        }
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = null !== $this->cloudWatchTrigger ? $this->cloudWatchTrigger->toMap() : null;
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
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }
        if (isset($map['EssScalingRuleId'])) {
            $model->essScalingRuleId = $map['EssScalingRuleId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['SchedulerTrigger'])) {
            $model->schedulerTrigger = schedulerTrigger::fromMap($map['SchedulerTrigger']);
        }
        if (isset($map['CloudWatchTrigger'])) {
            $model->cloudWatchTrigger = cloudWatchTrigger::fromMap($map['CloudWatchTrigger']);
        }

        return $model;
    }
}
