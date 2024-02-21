<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList\scalingRule\cloudWatchTrigger;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeScalingGroupInstanceV2ResponseBody\scalingRuleList\scalingRule\schedulerTrigger;
use AlibabaCloud\Tea\Model;

class scalingRule extends Model
{
    /**
     * @example QuantityChangeInCapacity
     *
     * @var string
     */
    public $adjustmentType;

    /**
     * @example -1
     *
     * @var int
     */
    public $adjustmentValue;

    /**
     * @var cloudWatchTrigger
     */
    public $cloudWatchTrigger;

    /**
     * @example 600
     *
     * @var int
     */
    public $cooldown;

    /**
     * @example sgr-34234eed234242
     *
     * @var string
     */
    public $essScalingRuleId;

    /**
     * @example 600
     *
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @example 2020-07-22T03:09Z
     *
     * @var string
     */
    public $launchTime;

    /**
     * @example 2020-07-22T03:09Z
     *
     * @var string
     */
    public $recurrenceEndTime;

    /**
     * @example Daily
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @example 1
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @example ByLoad
     *
     * @var string
     */
    public $ruleCategory;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @example 122
     *
     * @var int
     */
    public $scalingGroupId;

    /**
     * @var schedulerTrigger
     */
    public $schedulerTrigger;

    /**
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @example 1000
     *
     * @var int
     */
    public $timeoutWithGrace;

    /**
     * @example true
     *
     * @var bool
     */
    public $withGrace;
    protected $_name = [
        'adjustmentType'       => 'AdjustmentType',
        'adjustmentValue'      => 'AdjustmentValue',
        'cloudWatchTrigger'    => 'CloudWatchTrigger',
        'cooldown'             => 'Cooldown',
        'essScalingRuleId'     => 'EssScalingRuleId',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime'           => 'LaunchTime',
        'recurrenceEndTime'    => 'RecurrenceEndTime',
        'recurrenceType'       => 'RecurrenceType',
        'recurrenceValue'      => 'RecurrenceValue',
        'ruleCategory'         => 'RuleCategory',
        'ruleName'             => 'RuleName',
        'scalingGroupId'       => 'ScalingGroupId',
        'schedulerTrigger'     => 'SchedulerTrigger',
        'status'               => 'Status',
        'timeoutWithGrace'     => 'TimeoutWithGrace',
        'withGrace'            => 'WithGrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adjustmentType) {
            $res['AdjustmentType'] = $this->adjustmentType;
        }
        if (null !== $this->adjustmentValue) {
            $res['AdjustmentValue'] = $this->adjustmentValue;
        }
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = null !== $this->cloudWatchTrigger ? $this->cloudWatchTrigger->toMap() : null;
        }
        if (null !== $this->cooldown) {
            $res['Cooldown'] = $this->cooldown;
        }
        if (null !== $this->essScalingRuleId) {
            $res['EssScalingRuleId'] = $this->essScalingRuleId;
        }
        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }
        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }
        if (null !== $this->recurrenceEndTime) {
            $res['RecurrenceEndTime'] = $this->recurrenceEndTime;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }
        if (null !== $this->schedulerTrigger) {
            $res['SchedulerTrigger'] = null !== $this->schedulerTrigger ? $this->schedulerTrigger->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeoutWithGrace) {
            $res['TimeoutWithGrace'] = $this->timeoutWithGrace;
        }
        if (null !== $this->withGrace) {
            $res['WithGrace'] = $this->withGrace;
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
        if (isset($map['AdjustmentType'])) {
            $model->adjustmentType = $map['AdjustmentType'];
        }
        if (isset($map['AdjustmentValue'])) {
            $model->adjustmentValue = $map['AdjustmentValue'];
        }
        if (isset($map['CloudWatchTrigger'])) {
            $model->cloudWatchTrigger = cloudWatchTrigger::fromMap($map['CloudWatchTrigger']);
        }
        if (isset($map['Cooldown'])) {
            $model->cooldown = $map['Cooldown'];
        }
        if (isset($map['EssScalingRuleId'])) {
            $model->essScalingRuleId = $map['EssScalingRuleId'];
        }
        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }
        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }
        if (isset($map['RecurrenceEndTime'])) {
            $model->recurrenceEndTime = $map['RecurrenceEndTime'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }
        if (isset($map['SchedulerTrigger'])) {
            $model->schedulerTrigger = schedulerTrigger::fromMap($map['SchedulerTrigger']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TimeoutWithGrace'])) {
            $model->timeoutWithGrace = $map['TimeoutWithGrace'];
        }
        if (isset($map['WithGrace'])) {
            $model->withGrace = $map['WithGrace'];
        }

        return $model;
    }
}
