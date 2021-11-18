<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioFromTemplateResponseBody\scenario;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateScenarioFromTemplateResponseBody\scenario\strategy\workingTime;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var string
     */
    public $customized;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $followUpStrategy;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var int
     */
    public $maxAttemptsPerDay;

    /**
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @var string
     */
    public $repeatBy;

    /**
     * @var string[]
     */
    public $repeatDays;

    /**
     * @var string
     */
    public $routingStrategy;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategyDescription;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var string
     */
    public $strategyName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var workingTime[]
     */
    public $workingTime;
    protected $_name = [
        'customized'          => 'Customized',
        'endTime'             => 'EndTime',
        'followUpStrategy'    => 'FollowUpStrategy',
        'isTemplate'          => 'IsTemplate',
        'maxAttemptsPerDay'   => 'MaxAttemptsPerDay',
        'minAttemptInterval'  => 'MinAttemptInterval',
        'repeatBy'            => 'RepeatBy',
        'repeatDays'          => 'RepeatDays',
        'routingStrategy'     => 'RoutingStrategy',
        'startTime'           => 'StartTime',
        'strategyDescription' => 'StrategyDescription',
        'strategyId'          => 'StrategyId',
        'strategyName'        => 'StrategyName',
        'type'                => 'Type',
        'workingTime'         => 'WorkingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customized) {
            $res['Customized'] = $this->customized;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->followUpStrategy) {
            $res['FollowUpStrategy'] = $this->followUpStrategy;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->maxAttemptsPerDay) {
            $res['MaxAttemptsPerDay'] = $this->maxAttemptsPerDay;
        }
        if (null !== $this->minAttemptInterval) {
            $res['MinAttemptInterval'] = $this->minAttemptInterval;
        }
        if (null !== $this->repeatBy) {
            $res['RepeatBy'] = $this->repeatBy;
        }
        if (null !== $this->repeatDays) {
            $res['RepeatDays'] = $this->repeatDays;
        }
        if (null !== $this->routingStrategy) {
            $res['RoutingStrategy'] = $this->routingStrategy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->strategyDescription) {
            $res['StrategyDescription'] = $this->strategyDescription;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Customized'])) {
            $model->customized = $map['Customized'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FollowUpStrategy'])) {
            $model->followUpStrategy = $map['FollowUpStrategy'];
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['MaxAttemptsPerDay'])) {
            $model->maxAttemptsPerDay = $map['MaxAttemptsPerDay'];
        }
        if (isset($map['MinAttemptInterval'])) {
            $model->minAttemptInterval = $map['MinAttemptInterval'];
        }
        if (isset($map['RepeatBy'])) {
            $model->repeatBy = $map['RepeatBy'];
        }
        if (isset($map['RepeatDays'])) {
            if (!empty($map['RepeatDays'])) {
                $model->repeatDays = $map['RepeatDays'];
            }
        }
        if (isset($map['RoutingStrategy'])) {
            $model->routingStrategy = $map['RoutingStrategy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StrategyDescription'])) {
            $model->strategyDescription = $map['StrategyDescription'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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

        return $model;
    }
}
