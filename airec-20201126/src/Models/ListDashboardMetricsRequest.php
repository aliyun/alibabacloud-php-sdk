<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardMetricsRequest extends Model
{
    /**
     * @description The statistical results.
     *
     * This parameter is required.
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
     * @description The statistical results.
     *
     * @example The details about the metric.
     *
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $metricView;

    /**
     * @description USERACTIONPV_COUNT
     *
     * This parameter is required.
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
