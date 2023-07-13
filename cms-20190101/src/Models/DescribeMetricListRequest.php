<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricListRequest extends Model
{
    /**
     * @description The expression that is used to compute the query results in real time.
     *
     * >  Only the groupby expression is supported. This expression is similar to the GROUP BY statement that is used in databases.
     * @example [{"instanceId": "i-abcdefgh12****"}]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The dimensions that specify the resources whose monitoring data you want to query.
     *
     * Set the value to a collection of key-value pairs. A typical key-value pair is `instanceId:i-2ze2d6j5uhg20x47****`.
     *
     * >  You can query a maximum of 50 instances in a single request.
     * @example 2019-01-30 00:10:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The interval at which the monitoring data is queried. Unit: seconds. Valid values: 60, 300, and 900.
     *
     * @example {"groupby":["userId","instanceId"]}
     *
     * @var string
     */
    public $express;

    /**
     * @description The beginning of the time range to query. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format
     *
     * >  The specified period includes the end time and excludes the start time. The start time must be earlier than the end time.
     * @example 1000
     *
     * @var string
     */
    public $length;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeMetricList**.
     *
     * @example cpu_idle
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The namespace of the cloud service. Format: acs_service name.
     *
     * For more information about the namespaces of cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example 15761485350009dd70bb64cff1f0fff750b08ffff073be5fb1e785e2b020f1a949d5ea14aea7fed82f01dd8****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The end of the time range to query. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format
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
     * @description The error message.
     *
     * @example 2019-01-30 00:00:00
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
     * @return DescribeMetricListRequest
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
