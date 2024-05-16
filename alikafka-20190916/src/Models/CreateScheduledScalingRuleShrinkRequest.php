<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Tea\Model;

class CreateScheduledScalingRuleShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $durationMinutes;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description This parameter is required.
     *
     * @example 1714467540000
     *
     * @var int
     */
    public $firstScheduledTime;

    /**
     * @description This parameter is required.
     *
     * @example alikafka_serverless-cn-vxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Weekly
     *
     * @var string
     */
    public $repeatType;

    /**
     * @description This parameter is required.
     *
     * @example 120
     *
     * @var int
     */
    public $reservedPubFlow;

    /**
     * @description This parameter is required.
     *
     * @example 120
     *
     * @var int
     */
    public $reservedSubFlow;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description This parameter is required.
     *
     * @example at
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @description This parameter is required.
     *
     * @example GMT+8
     *
     * @var string
     */
    public $timeZone;

    /**
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
