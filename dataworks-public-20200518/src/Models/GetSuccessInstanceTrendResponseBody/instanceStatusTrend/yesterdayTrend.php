<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponseBody\instanceStatusTrend;

use AlibabaCloud\Tea\Model;

class yesterdayTrend extends Model
{
    /**
     * @description The number of instances.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The point in time. Valid values: 00:00 to 23:00.
     *
     * @example 01:00
     *
     * @var string
     */
    public $timePoint;
    protected $_name = [
        'count'     => 'Count',
        'timePoint' => 'TimePoint',
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
        if (null !== $this->timePoint) {
            $res['TimePoint'] = $this->timePoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return yesterdayTrend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['TimePoint'])) {
            $model->timePoint = $map['TimePoint'];
        }

        return $model;
    }
}
