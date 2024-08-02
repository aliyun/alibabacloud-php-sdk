<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledScalingRuleShrinkRequest extends Model
{
    /**
     * @description The duration of each scheduled scaling task. Unit: minutes.
     *
     * This parameter is required.
     * @example 60
     *
     * @var int
     */
    public $durationMinutes;

    /**
     * @description Specifies whether to enable the scheduled scaling rule. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The time when the scheduled scaling task is executed.
     *
     * This parameter is required.
     * @example 1714467540000
     *
     * @var int
     */
    public $firstScheduledTime;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example alikafka_serverless-cn-vxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the instance resides.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The frequency to execute the scheduled scaling task. This parameter is required only if you set ScheduleType to repeat. Valid values:
     *
     *   Daily: The scheduled scaling task is executed every day.
     *
     *   Weekly: The scheduled scaling task is executed every week.
     *
     * @example Weekly
     *
     * @var string
     */
    public $repeatType;

    /**
     * @description The reserved production capacity for scheduled scaling. Unit: MB/s.
     *
     * This parameter is required.
     * @example 120
     *
     * @var int
     */
    public $reservedPubFlow;

    /**
     * @description The reserved consumption capacity for scheduled scaling. Unit: MB/s.
     *
     * This parameter is required.
     * @example 120
     *
     * @var int
     */
    public $reservedSubFlow;

    /**
     * @description The name of the scheduled scaling rule.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the scheduled scaling task. Valid values:
     *
     *   at: The scheduled scaling task is executed only once.
     *   repeat: The scheduled scaling task is repeatedly executed.
     *
     * This parameter is required.
     * @example at
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @description The time zone in Coordinated Universal Time (UTC).
     *
     * This parameter is required.
     * @example GMT+8
     *
     * @var string
     */
    public $timeZone;

    /**
     * @description The day on which the scheduled scaling task is executed every week. You can specify multiple days.
     *
     * @var string
     */
    public $weeklyTypesShrink;
    protected $_name = [
        'durationMinutes'    => 'DurationMinutes',
        'enable'             => 'Enable',
        'firstScheduledTime' => 'FirstScheduledTime',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
        'repeatType'         => 'RepeatType',
        'reservedPubFlow'    => 'ReservedPubFlow',
        'reservedSubFlow'    => 'ReservedSubFlow',
        'ruleName'           => 'RuleName',
        'scheduleType'       => 'ScheduleType',
        'timeZone'           => 'TimeZone',
        'weeklyTypesShrink'  => 'WeeklyTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationMinutes) {
            $res['DurationMinutes'] = $this->durationMinutes;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->firstScheduledTime) {
            $res['FirstScheduledTime'] = $this->firstScheduledTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatType) {
            $res['RepeatType'] = $this->repeatType;
        }
        if (null !== $this->reservedPubFlow) {
            $res['ReservedPubFlow'] = $this->reservedPubFlow;
        }
        if (null !== $this->reservedSubFlow) {
            $res['ReservedSubFlow'] = $this->reservedSubFlow;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->weeklyTypesShrink) {
            $res['WeeklyTypes'] = $this->weeklyTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScheduledScalingRuleShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationMinutes'])) {
            $model->durationMinutes = $map['DurationMinutes'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['FirstScheduledTime'])) {
            $model->firstScheduledTime = $map['FirstScheduledTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatType'])) {
            $model->repeatType = $map['RepeatType'];
        }
        if (isset($map['ReservedPubFlow'])) {
            $model->reservedPubFlow = $map['ReservedPubFlow'];
        }
        if (isset($map['ReservedSubFlow'])) {
            $model->reservedSubFlow = $map['ReservedSubFlow'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['WeeklyTypes'])) {
            $model->weeklyTypesShrink = $map['WeeklyTypes'];
        }

        return $model;
    }
}
