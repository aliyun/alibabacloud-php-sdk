<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsRequest;

use AlibabaCloud\Tea\Model;

class executions extends Model
{
    /**
     * @description The end time of the prefetch plans.
     *
     * @example 2024-06-04T02:02:09Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time interval between each batch execution. Unit: seconds.
     *
     * This parameter is required.
     * @example 30
     *
     * @var int
     */
    public $interval;

    /**
     * @description The number of URLs prefetched in each batch.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $sliceLen;

    /**
     * @description The start time of the prefetch plans.
     *
     * @example 2024-06-03T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'interval'  => 'Interval',
        'sliceLen'  => 'SliceLen',
        'startTime' => 'StartTime',
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
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->sliceLen) {
            $res['SliceLen'] = $this->sliceLen;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SliceLen'])) {
            $model->sliceLen = $map['SliceLen'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
