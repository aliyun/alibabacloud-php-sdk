<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserMetricsRequest extends Model
{
    /**
     * @description The end time. The value is a timestamp in seconds.
     *
     * This parameter is required.
     * @example 1567155600
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the user metric that you want to query. Valid values: pvCtr and uvCtr.
     *
     * This parameter is required.
     * @example pvCtr
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The start time. The value is a timestamp in seconds.
     *
     * This parameter is required.
     * @example 1567152000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'endTime',
        'metricType' => 'metricType',
        'startTime'  => 'startTime',
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
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
