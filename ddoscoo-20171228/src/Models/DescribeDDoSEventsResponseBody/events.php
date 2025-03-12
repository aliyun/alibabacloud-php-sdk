<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeDDoSEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @example 3289457398
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 12
     *
     * @var int
     */
    public $interval;

    /**
     * @example 3289457324
     *
     * @var int
     */
    public $startTime;

    /**
     * @example blackhole_start
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'   => 'EndTime',
        'interval'  => 'Interval',
        'startTime' => 'StartTime',
        'status'    => 'Status',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
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
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
