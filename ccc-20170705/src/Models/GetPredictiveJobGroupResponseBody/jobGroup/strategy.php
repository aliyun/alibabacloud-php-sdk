<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetPredictiveJobGroupResponseBody\jobGroup;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetPredictiveJobGroupResponseBody\jobGroup\strategy\workingTime;
use AlibabaCloud\Tea\Model;

class strategy extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxAttemptsPerDay;

    /**
     * @var int
     */
    public $minAttemptInterval;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var workingTime[]
     */
    public $workingTime;
    protected $_name = [
        'endTime'            => 'EndTime',
        'maxAttemptsPerDay'  => 'MaxAttemptsPerDay',
        'minAttemptInterval' => 'MinAttemptInterval',
        'startTime'          => 'StartTime',
        'strategyId'         => 'StrategyId',
        'workingTime'        => 'WorkingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxAttemptsPerDay) {
            $res['MaxAttemptsPerDay'] = $this->maxAttemptsPerDay;
        }
        if (null !== $this->minAttemptInterval) {
            $res['MinAttemptInterval'] = $this->minAttemptInterval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxAttemptsPerDay'])) {
            $model->maxAttemptsPerDay = $map['MaxAttemptsPerDay'];
        }
        if (isset($map['MinAttemptInterval'])) {
            $model->minAttemptInterval = $map['MinAttemptInterval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
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
