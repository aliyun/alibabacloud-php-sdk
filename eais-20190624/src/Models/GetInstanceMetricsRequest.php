<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceMetricsRequest extends Model
{
    /**
     * @example 2022-11-22T16:30:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example eais-hznzre6ffmz9num4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example MemoryUsage
     *
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @example 2022-11-22T16:00:00Z
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
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'metricType' => 'MetricType',
        'regionId'   => 'RegionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
