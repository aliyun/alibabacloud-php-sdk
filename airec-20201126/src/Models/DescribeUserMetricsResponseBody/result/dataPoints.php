<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeUserMetricsResponseBody\result;

use AlibabaCloud\Tea\Model;

class dataPoints extends Model
{
    /**
     * @example 1567152000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1567152000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 84.6
     *
     * @var float
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
     * @return dataPoints
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
