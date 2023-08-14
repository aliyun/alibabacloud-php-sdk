<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceMetricsRequest extends Model
{
    /**
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example GpuCoreUsage
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
     * @example 15m
     *
     * @var string
     */
    public $timeStep;
    protected $_name = [
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
     * @return GetInstanceMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
