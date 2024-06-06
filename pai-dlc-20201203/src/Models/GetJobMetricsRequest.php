<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobMetricsRequest extends Model
{
    /**
     * @example 2020-11-09T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example GpuMemoryUsage
     *
     * @var string
     */
    public $metricType;

    /**
     * @example 2020-11-08T16:00:00Z
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

    /**
     * @example eyXXXX-XXXX.XXXXX
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'endTime'    => 'EndTime',
        'metricType' => 'MetricType',
        'startTime'  => 'StartTime',
        'timeStep'   => 'TimeStep',
        'token'      => 'Token',
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobMetricsRequest
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
