<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricLastRequest extends Model
{
    /**
     * @description The dimensions that specify the resources whose monitoring data you want to query.
     *
     * Set the value to a collection of key-value pairs. A typical key-value pair is `instanceId:i-2ze2d6j5uhg20x47****`.
     *
     * >  You can query a maximum of 50 instances in a single request.
     * @example [{"instanceId":"i-abcdefgh12****"}]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The error message.
     *
     * @example 2019-01-31 10:10:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start of the time range to query monitoring data.
     *
     * @example {"groupby":["userId","instanceId"]}
     *
     * @var string
     */
    public $express;

    /**
     * @description The namespace of the cloud service. Format: acs_service name.
     *
     * For more information about the namespaces of cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example 1000
     *
     * @var string
     */
    public $length;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example CPUUtilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The paging token.
     *
     *   If the number of results exceeds the maximum number of entries allowed on a single page, a paging token is returned.
     *   This token can be used as an input parameter to obtain the next page of results. If all results are obtained, no token is returned.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The expression that is used to calculate the query results in real time.
     *
     * @example 15761432850009dd70bb64cff1f0fff6c0b08ffff073be5fb1e785e2b020f7fed9b5e137bd810a6d6cff5ae****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeMetricLast**.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The end of the time range to query monitoring data.
     *
     *   For second-level data, the start time is obtained by comparing the time that is specified by the startTime parameter and 20 minutes earlier of the time that is specified by the EndTime parameter. The earlier one of the compared points in time is used as the start time.
     *   For minute-level data, the start time is obtained by comparing the time that is specified by the startTime parameter and 2 hours earlier of the time that is specified by the EndTime parameter. The earlier one of the compared points in time is used as the start time.
     *   For hour-level data, the start time is obtained by comparing the time that is specified by the startTime parameter and two days earlier of the time that is specified by the EndTime parameter. The earlier one of the compared points in time is used as the start time.
     *
     * @example 2019-01-31 10:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'endTime'    => 'EndTime',
        'express'    => 'Express',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'namespace'  => 'Namespace',
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
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
     * @return DescribeMetricLastRequest
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
        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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
