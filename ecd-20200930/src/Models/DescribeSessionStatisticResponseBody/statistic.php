<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSessionStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @description The total number of sessions in the time range.
     *
     * @example 4
     *
     * @var int
     */
    public $count;

    /**
     * @description The point in time.
     *
     * @example 1690164443508
     *
     * @var int
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
     * @return statistic
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
