<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeCustomEventHistogramResponseBody\eventHistograms;

use AlibabaCloud\Tea\Model;

class eventHistogram extends Model
{
    /**
     * @description Queries the number of times that a custom event occurred during each interval of a time period.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The beginning of an interval.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     * @example 1552226750000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The information about the number of times that the custom event occurred during an interval of a time period.
     *
     * @example 1552226740000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'count'     => 'Count',
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventHistogram
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
