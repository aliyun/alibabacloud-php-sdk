<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand;

use AlibabaCloud\Dara\Model;

class customScheduleConfig extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $intervalUnit;

    /**
     * @var string
     */
    public $schedulePeriod;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'intervalUnit' => 'IntervalUnit',
        'schedulePeriod' => 'SchedulePeriod',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->intervalUnit) {
            $res['IntervalUnit'] = $this->intervalUnit;
        }

        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IntervalUnit'])) {
            $model->intervalUnit = $map['IntervalUnit'];
        }

        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
