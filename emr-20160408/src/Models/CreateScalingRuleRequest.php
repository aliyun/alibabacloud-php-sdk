<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingRuleRequest\cloudWatchTrigger;
use AlibabaCloud\SDK\Emr\V20160408\Models\CreateScalingRuleRequest\schedulerTrigger;
use AlibabaCloud\Tea\Model;

class CreateScalingRuleRequest extends Model
{
    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $ruleCategory;

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
     * @var schedulerTrigger[]
     */
    public $schedulerTrigger;

    /**
     * @var cloudWatchTrigger[]
     */
    public $cloudWatchTrigger;
    protected $_name = [
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'clusterId'            => 'ClusterId',
        'hostGroupId'          => 'HostGroupId',
        'ruleCategory'         => 'RuleCategory',
        'ruleName'             => 'RuleName',
        'adjustmentType'       => 'AdjustmentType',
        'adjustmentValue'      => 'AdjustmentValue',
        'cooldown'             => 'Cooldown',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->ruleCategory) {
            $res['RuleCategory'] = $this->ruleCategory;
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
            $res['SchedulerTrigger'] = [];
            if (null !== $this->schedulerTrigger && \is_array($this->schedulerTrigger)) {
                $n = 0;
                foreach ($this->schedulerTrigger as $item) {
                    $res['SchedulerTrigger'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cloudWatchTrigger) {
            $res['CloudWatchTrigger'] = [];
            if (null !== $this->cloudWatchTrigger && \is_array($this->cloudWatchTrigger)) {
                $n = 0;
                foreach ($this->cloudWatchTrigger as $item) {
                    $res['CloudWatchTrigger'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['RuleCategory'])) {
            $model->ruleCategory = $map['RuleCategory'];
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
            if (!empty($map['SchedulerTrigger'])) {
                $model->schedulerTrigger = [];
                $n                       = 0;
                foreach ($map['SchedulerTrigger'] as $item) {
                    $model->schedulerTrigger[$n++] = null !== $item ? schedulerTrigger::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CloudWatchTrigger'])) {
            if (!empty($map['CloudWatchTrigger'])) {
                $model->cloudWatchTrigger = [];
                $n                        = 0;
                foreach ($map['CloudWatchTrigger'] as $item) {
                    $model->cloudWatchTrigger[$n++] = null !== $item ? cloudWatchTrigger::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
