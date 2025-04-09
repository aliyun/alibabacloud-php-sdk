<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduledScalingRuleRequest extends Model
{
    /**
     * @var int
     */
    public $durationMinutes;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $firstScheduledTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repeatType;

    /**
     * @var int
     */
    public $reservedPubFlow;

    /**
     * @var int
     */
    public $reservedSubFlow;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string[]
     */
    public $weeklyTypes;
    protected $_name = [
        'durationMinutes' => 'DurationMinutes',
        'enable' => 'Enable',
        'firstScheduledTime' => 'FirstScheduledTime',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'repeatType' => 'RepeatType',
        'reservedPubFlow' => 'ReservedPubFlow',
        'reservedSubFlow' => 'ReservedSubFlow',
        'ruleName' => 'RuleName',
        'scheduleType' => 'ScheduleType',
        'timeZone' => 'TimeZone',
        'weeklyTypes' => 'WeeklyTypes',
    ];

    public function validate()
    {
        if (\is_array($this->weeklyTypes)) {
            Model::validateArray($this->weeklyTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->weeklyTypes) {
            if (\is_array($this->weeklyTypes)) {
                $res['WeeklyTypes'] = [];
                $n1 = 0;
                foreach ($this->weeklyTypes as $item1) {
                    $res['WeeklyTypes'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['WeeklyTypes'])) {
                $model->weeklyTypes = [];
                $n1 = 0;
                foreach ($map['WeeklyTypes'] as $item1) {
                    $model->weeklyTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
