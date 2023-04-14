<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardMetricsRequest extends Model
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
     * @var string
     */
    public $metricQuery;

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
     * @var string
     */
    public $metricView;

    /**
     * @description The start time. The value is a timestamp in seconds.
     *
     * @example 1586673466
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'     => 'endTime',
        'metricQuery' => 'metricQuery',
        'metricType'  => 'metricType',
        'metricView'  => 'metricView',
        'startTime'   => 'startTime',
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
        if (null !== $this->metricQuery) {
            $res['metricQuery'] = $this->metricQuery;
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->metricView) {
            $res['metricView'] = $this->metricView;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['metricQuery'])) {
            $model->metricQuery = $map['metricQuery'];
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }
        if (isset($map['metricView'])) {
            $model->metricView = $map['metricView'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
