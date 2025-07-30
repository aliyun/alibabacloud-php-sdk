<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobEventsRequest extends Model
{
    /**
     * @description The end time (UTC) of the time range for querying events. The default value is the current time.
     *
     * @example 2020-11-08T18:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The maximum number of events that can be returned. Default value: 2000.
     *
     * @example 100
     *
     * @var int
     */
    public $maxEventsNum;

    /**
     * @description The start time (UTC) of the time range for querying events. The default value is 7 days ago.
     *
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'maxEventsNum' => 'MaxEventsNum',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->maxEventsNum) {
            $res['MaxEventsNum'] = $this->maxEventsNum;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MaxEventsNum'])) {
            $model->maxEventsNum = $map['MaxEventsNum'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
