<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceMetricsRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The metric type. Valid values:
     *
     *   GpuCoreUsage: the GPU utilization.
     *   GpuMemoryUsage: the GPU memory utilization.
     *   CpuCoreUsage: the CPU utilization.
     *   MemoryUsage: the memory utilization.
     *   NetworkInputRate: the network ingress rate.
     *   NetworkOutputRate: the network egress rate.
     *   DiskReadRate: the disk read rate.
     *   DiskWriteRate: the disk write rate.
     *
     * This parameter is required.
     *
     * @example GpuCoreUsage
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The beginning of the time range to query.
     *
     * @example 2020-11-08T15:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The interval at which metrics are returned. Unit: minutes.
     *
     * @example 15m
     *
     * @var string
     */
    public $timeStep;
    protected $_name = [
        'endTime' => 'EndTime',
        'metricType' => 'MetricType',
        'startTime' => 'StartTime',
        'timeStep' => 'TimeStep',
    ];

    public function validate() {}

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
