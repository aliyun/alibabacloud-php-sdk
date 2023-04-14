<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardMetricsFlowsRequest extends Model
{
    /**
     * @description The end time. The value is a timestamp in seconds.
     *
     * @example 1586673466
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the metric. Valid values:
     *
     * USER_ACTION_UV_RATIO: the traffic consumed per person
     * @example USERACTIONPV_COUNT
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The start time. The value is a timestamp in seconds.
     *
     * @example 1586673466
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
     * @return ListDashboardMetricsFlowsRequest
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
