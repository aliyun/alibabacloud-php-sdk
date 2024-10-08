<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateScheduledPreloadExecutionsRequest;

use AlibabaCloud\Tea\Model;

class executions extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $interval;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $sliceLen;

    /**
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
