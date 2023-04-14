<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardMetricsResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @description The end time. The value is a timestamp in seconds.
     *
     * @example 1586673466
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start time. The value is a timestamp in seconds.
     *
     * @example 1586673466
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The specific value of the metric.
     *
     * @example 13
     *
     * @var string
     */
    public $val;
    protected $_name = [
        'endTime'   => 'endTime',
        'startTime' => 'startTime',
        'val'       => 'val',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->val) {
            $res['val'] = $this->val;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['val'])) {
            $model->val = $map['val'];
        }

        return $model;
    }
}
