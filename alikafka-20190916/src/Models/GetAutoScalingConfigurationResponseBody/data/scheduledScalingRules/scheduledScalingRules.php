<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetAutoScalingConfigurationResponseBody\data\scheduledScalingRules\scheduledScalingRules\weeklyTypes;
use AlibabaCloud\Tea\Model;

class scheduledScalingRules extends Model
{
    /**
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
     * @example 780
     *
     * @var int
     */
    public $estimatedElasticScalingDownTimeSecs;

    /**
     * @example 780
     *
     * @var int
     */
    public $estimatedElasticScalingUpTimeSecs;

    /**
     * @example 1714467540000
     *
     * @var int
     */
    public $firstScheduledTime;

    /**
     * @example Weekly
     *
     * @var string
     */
    public $repeatType;

    /**
     * @example 120
     *
     * @var int
     */
    public $reservedPubFlow;

    /**
     * @example 120
     *
     * @var int
     */
    public $reservedSubFlow;

    /**
     * @example 64
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example test
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example at
     *
     * @var string
     */
    public $scheduleType;

    /**
     * @example GMT+8
     *
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
            $res['WeeklyTypes'] = null !== $this->weeklyTypes ? $this->weeklyTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduledScalingRules
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
