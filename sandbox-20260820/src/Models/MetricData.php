<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sandbox\V20260820\Models\MetricData\results;

class MetricData extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $groupBy;

    /**
     * @var int
     */
    public $period;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'endTime' => 'endTime',
        'groupBy' => 'groupBy',
        'period' => 'period',
        'results' => 'results',
        'startTime' => 'startTime',
        'time' => 'time',
    ];

    public function validate()
    {
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->groupBy) {
            if (\is_array($this->groupBy)) {
                $res['groupBy'] = [];
                $n1 = 0;
                foreach ($this->groupBy as $item1) {
                    $res['groupBy'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->time) {
            $res['time'] = $this->time;
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
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['groupBy'])) {
            if (!empty($map['groupBy'])) {
                $model->groupBy = [];
                $n1 = 0;
                foreach ($map['groupBy'] as $item1) {
                    $model->groupBy[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
