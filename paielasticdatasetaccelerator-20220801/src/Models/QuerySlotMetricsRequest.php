<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Tea\Model;

class QuerySlotMetricsRequest extends Model
{
    /**
     * @example SlotIDs: xxx
     *
     * @var mixed[]
     */
    public $dimensions;

    /**
     * @example 2020-11-08T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example NetworkReceiveBytesPerSecond
     *
     * @var string
     */
    public $metricType;

    /**
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 5m
     *
     * @var string
     */
    public $timeStep;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'endTime'    => 'EndTime',
        'metricType' => 'MetricType',
        'startTime'  => 'StartTime',
        'timeStep'   => 'TimeStep',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeStep) {
            $res['TimeStep'] = $this->timeStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySlotMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeStep'])) {
            $model->timeStep = $map['TimeStep'];
        }

        return $model;
    }
}
