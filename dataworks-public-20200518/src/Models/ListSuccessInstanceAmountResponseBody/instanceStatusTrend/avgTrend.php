<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody\instanceStatusTrend;

use AlibabaCloud\Tea\Model;

class avgTrend extends Model
{
    /**
     * @description The number of instances that are successfully run.
     *
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @description The point in time. The value is an exact hour that ranges from 00:00 to 23:00, such as 00:00, 01:00, or 02:00.
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
     * @return avgTrend
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
