<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules\weeklyTypes;

class scheduledScalingRules extends Model
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
    public $estimatedElasticScalingDownTimeSecs;
    /**
     * @var int
     */
    public $estimatedElasticScalingUpTimeSecs;
    /**
     * @var int
     */
    public $firstScheduledTime;
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
     * @var int
     */
    public $ruleId;
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
     * @var weeklyTypes
     */
    public $weeklyTypes;
    protected $_name = [
        'durationMinutes'                     => 'DurationMinutes',
        'enable'                              => 'Enable',
        'estimatedElasticScalingDownTimeSecs' => 'EstimatedElasticScalingDownTimeSecs',
        'estimatedElasticScalingUpTimeSecs'   => 'EstimatedElasticScalingUpTimeSecs',
        'firstScheduledTime'                  => 'FirstScheduledTime',
        'repeatType'                          => 'RepeatType',
        'reservedPubFlow'                     => 'ReservedPubFlow',
        'reservedSubFlow'                     => 'ReservedSubFlow',
        'ruleId'                              => 'RuleId',
        'ruleName'                            => 'RuleName',
        'scheduleType'                        => 'ScheduleType',
        'timeZone'                            => 'TimeZone',
        'weeklyTypes'                         => 'WeeklyTypes',
    ];

    public function validate()
    {
        if (null !== $this->weeklyTypes) {
            $this->weeklyTypes->validate();
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

        if (null !== $this->estimatedElasticScalingDownTimeSecs) {
            $res['EstimatedElasticScalingDownTimeSecs'] = $this->estimatedElasticScalingDownTimeSecs;
        }

        if (null !== $this->estimatedElasticScalingUpTimeSecs) {
            $res['EstimatedElasticScalingUpTimeSecs'] = $this->estimatedElasticScalingUpTimeSecs;
        }

        if (null !== $this->firstScheduledTime) {
            $res['FirstScheduledTime'] = $this->firstScheduledTime;
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

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
            $res['WeeklyTypes'] = null !== $this->weeklyTypes ? $this->weeklyTypes->toArray($noStream) : $this->weeklyTypes;
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

        if (isset($map['EstimatedElasticScalingDownTimeSecs'])) {
            $model->estimatedElasticScalingDownTimeSecs = $map['EstimatedElasticScalingDownTimeSecs'];
        }

        if (isset($map['EstimatedElasticScalingUpTimeSecs'])) {
            $model->estimatedElasticScalingUpTimeSecs = $map['EstimatedElasticScalingUpTimeSecs'];
        }

        if (isset($map['FirstScheduledTime'])) {
            $model->firstScheduledTime = $map['FirstScheduledTime'];
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

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
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
            $model->weeklyTypes = weeklyTypes::fromMap($map['WeeklyTypes']);
        }

        return $model;
    }
}
