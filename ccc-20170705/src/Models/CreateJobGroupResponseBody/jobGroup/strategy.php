<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateJobGroupResponseBody\jobGroup;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateJobGroupResponseBody\jobGroup\strategy\workingTime;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var int
     */
    public $maxAttemptsPerDay;

    /**
     * @var workingTime[]
     */
    public $workingTime;

    /**
     * @var string
     */
    public $followUpStrategy;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $customized;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string[]
     */
    public $repeatDays;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var string
     */
    public $strategyDescription;

    /**
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @var string
     */
    public $repeatBy;
    protected $_name = [
        'type'                => 'Type',
        'strategyName'        => 'StrategyName',
        'maxAttemptsPerDay'   => 'MaxAttemptsPerDay',
        'workingTime'         => 'WorkingTime',
        'followUpStrategy'    => 'FollowUpStrategy',
        'endTime'             => 'EndTime',
        'customized'          => 'Customized',
        'startTime'           => 'StartTime',
        'isTemplate'          => 'IsTemplate',
        'strategyId'          => 'StrategyId',
        'repeatDays'          => 'RepeatDays',
        'routingStrategy'     => 'RoutingStrategy',
        'strategyDescription' => 'StrategyDescription',
        'minAttemptInterval'  => 'MinAttemptInterval',
        'repeatBy'            => 'RepeatBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->maxAttemptsPerDay) {
            $res['MaxAttemptsPerDay'] = $this->maxAttemptsPerDay;
        }
        if (null !== $this->workingTime) {
            $res['WorkingTime'] = [];
            if (null !== $this->workingTime && \is_array($this->workingTime)) {
                $n = 0;
                foreach ($this->workingTime as $item) {
                    $res['WorkingTime'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->followUpStrategy) {
            $res['FollowUpStrategy'] = $this->followUpStrategy;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->customized) {
            $res['Customized'] = $this->customized;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->repeatDays) {
            $res['RepeatDays'] = $this->repeatDays;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->strategyDescription) {
            $res['StrategyDescription'] = $this->strategyDescription;
        }
        if (null !== $this->minAttemptInterval) {
            $res['MinAttemptInterval'] = $this->minAttemptInterval;
        }
        if (null !== $this->repeatBy) {
            $res['RepeatBy'] = $this->repeatBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['MaxAttemptsPerDay'])) {
            $model->maxAttemptsPerDay = $map['MaxAttemptsPerDay'];
        }
        if (isset($map['WorkingTime'])) {
            if (!empty($map['WorkingTime'])) {
                $model->workingTime = [];
                $n                  = 0;
                foreach ($map['WorkingTime'] as $item) {
                    $model->workingTime[$n++] = null !== $item ? workingTime::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FollowUpStrategy'])) {
            $model->followUpStrategy = $map['FollowUpStrategy'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Customized'])) {
            $model->customized = $map['Customized'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['RepeatDays'])) {
            if (!empty($map['RepeatDays'])) {
                $model->repeatDays = $map['RepeatDays'];
            }
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['StrategyDescription'])) {
            $model->strategyDescription = $map['StrategyDescription'];
        }
        if (isset($map['MinAttemptInterval'])) {
            $model->minAttemptInterval = $map['MinAttemptInterval'];
        }
        if (isset($map['RepeatBy'])) {
            $model->repeatBy = $map['RepeatBy'];
        }

        return $model;
    }
}
