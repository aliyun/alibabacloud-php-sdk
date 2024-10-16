<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeRCMetricListRequest extends Model
{
    /**
     * @description The end of the time range to query. The end time must be later than the start time. Example: `2024-08-06 10:15:00`.
     *
     * @example 2024-08-06 10:15:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $express;

    /**
     * @description The instance ID.
     *
     * @example rc-dh2jf9n6j4s14926****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of entries per page.
     *
     * >  The maximum value of the Length parameter in a request is 1440.
     * @example 1000
     *
     * @var string
     */
    public $length;

    /**
     * @description The metric that you want to use. For more information, see [CloudMonitor metrics](javascript:void\\(0\\)).
     *
     * This parameter is required.
     * @example CPUUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The pagination token.
     *
     * @example 6178f1825f9fb76ce0b5e8707e68181f
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The statistical period of the monitoring data.
     *
     * Default value: 60.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Example: `2024-08-06 10:05:00`.
     *
     * @example 2024-08-06 10:05:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'express'    => 'Express',
        'instanceId' => 'InstanceId',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'nextToken'  => 'NextToken',
        'period'     => 'Period',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
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
        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRCMetricListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
