<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class GetMetricDataRequest extends Model
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
     * @var string[]
     */
    public $metricNames;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $sandboxID;

    /**
     * @var string
     */
    public $sandboxPlan;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $teamID;

    /**
     * @var string
     */
    public $templateID;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'endTime' => 'endTime',
        'groupBy' => 'groupBy',
        'metricNames' => 'metricNames',
        'period' => 'period',
        'sandboxID' => 'sandboxID',
        'sandboxPlan' => 'sandboxPlan',
        'startTime' => 'startTime',
        'teamID' => 'teamID',
        'templateID' => 'templateID',
        'time' => 'time',
    ];

    public function validate()
    {
        if (\is_array($this->groupBy)) {
            Model::validateArray($this->groupBy);
        }
        if (\is_array($this->metricNames)) {
            Model::validateArray($this->metricNames);
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

        if (null !== $this->metricNames) {
            if (\is_array($this->metricNames)) {
                $res['metricNames'] = [];
                $n1 = 0;
                foreach ($this->metricNames as $item1) {
                    $res['metricNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->sandboxID) {
            $res['sandboxID'] = $this->sandboxID;
        }

        if (null !== $this->sandboxPlan) {
            $res['sandboxPlan'] = $this->sandboxPlan;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->teamID) {
            $res['teamID'] = $this->teamID;
        }

        if (null !== $this->templateID) {
            $res['templateID'] = $this->templateID;
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

        if (isset($map['metricNames'])) {
            if (!empty($map['metricNames'])) {
                $model->metricNames = [];
                $n1 = 0;
                foreach ($map['metricNames'] as $item1) {
                    $model->metricNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['sandboxID'])) {
            $model->sandboxID = $map['sandboxID'];
        }

        if (isset($map['sandboxPlan'])) {
            $model->sandboxPlan = $map['sandboxPlan'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['teamID'])) {
            $model->teamID = $map['teamID'];
        }

        if (isset($map['templateID'])) {
            $model->templateID = $map['templateID'];
        }

        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
