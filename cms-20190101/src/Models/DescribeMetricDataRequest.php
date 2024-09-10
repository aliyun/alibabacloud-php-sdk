<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricDataRequest extends Model
{
    /**
     * @description The dimensions based on which the resources are queried.
     *
     * Set the value to a collection of key-value pairs. A typical key-value pair is `instanceId:i-2ze2d6j5uhg20x47****`.
     *
     * >  You can query a maximum of 50 instances in a single request.
     * @example [{"instanceId": "i-abcdefgh12****"}]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The end of the time range to query monitoring data.
     *
     *   If the `StartTime` and `EndTime` parameters are not specified, the monitoring data of the last statistical period is queried.``
     *
     *   If the `StartTime` and `EndTime` parameters are specified, the monitoring data of the last statistical period in the specified time range is queried.```` The following examples demonstrate how to determine the period in which monitoring data is queried:
     *
     *   If you set the `Period` parameter to 15, the specified time range must be less than or equal to 20 minutes. For example, if you set the StartTime parameter to 2021-05-08 08:10:00 and the EndTime parameter to 2021-05-08 08:30:00, the monitoring data of the last 15 seconds in the time range is queried.
     *   If you set the `Period` to 60 or 900, the specified time range must be less than or equal to 2 hours. For example, if you set the Period parameter to 60, the StartTime parameter to 2021-05-08 08:00:00, and the EndTime parameter to 2021-05-08 10:00:00, the monitoring data of the last 60 seconds in the time range is queried.
     *   If you set the `Period` parameter to 3600, the specified time range must be less than or equal to 2 days. For example, if you set the StartTime parameter to 2021-05-08 08:00:00 and the EndTime parameter to 2021-05-10 08:00:00, the monitoring data of the last 3,600 seconds in the time range is queried.
     *
     * The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 UTC on Thursday, January 1, 1970.
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format.
     *
     * >  We recommend that you use UNIX timestamps to prevent time zone-related issues.
     * @example 1618368960000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The expression that is used to compute the query results in real time.
     *
     * >  Only the `groupby` expression is supported. This expression is similar to the `GROUP BY` statement that is used in databases.
     * @example {"groupby":["userId","instanceId"]}
     *
     * @var string
     */
    public $express;

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
     * @description The metric that is used to monitor the cloud service.
     *
     * This parameter is required.
     * @example cpu_idle
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * This parameter is required.
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The statistical period of the metric.
     *
     * >
     *
     *   If this parameter is not specified, monitoring data is queried based on the period in which metric values are reported.
     *
     *   For more information about the statistical period of a metric that is specified by the `MetricName` parameter, see [Appendix 1: Metrics](https://help.aliyun.com/document_detail/163515.html).
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
     * @description The start of the time range to query monitoring data.
     *
     *   If the `StartTime` and `EndTime` parameters are not specified, the monitoring data of the last statistical period is queried.``
     *
     *   If the `StartTime` and `EndTime` parameters are specified, the monitoring data of the last statistical period in the specified time range is queried.```` The following examples demonstrate how to determine the period in which monitoring data is queried:
     *
     *   If you set the `Period` parameter to 15, the specified time range must be less than or equal to 20 minutes. For example, if you set the StartTime parameter to 2021-05-08 08:10:00 and the EndTime parameter to 2021-05-08 08:30:00, the monitoring data of the last 15 seconds in the time range is queried.
     *   If you set the `Period` to 60 or 900, the specified time range must be less than or equal to 2 hours. For example, if you set the Period parameter to 60, the StartTime parameter to 2021-05-08 08:00:00, and the EndTime parameter to 2021-05-08 10:00:00, the monitoring data of the last 60 seconds in the time range is queried.
     *   If you set the `Period` parameter to 3600, the specified time range must be less than or equal to 2 days. For example, if you set the StartTime parameter to 2021-05-08 08:00:00 and the EndTime parameter to 2021-05-10 08:00:00, the monitoring data of the last 3,600 seconds in the time range is queried.
     *
     * The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 UTC on Thursday, January 1, 1970.
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format.
     *
     * >
     *
     *   You must set the `StartTime` parameter to a point in time that is later than 00:00:00 UTC on Thursday, January 1, 1970. Otherwise, this parameter is invalid.
     *
     *   We recommend that you use UNIX timestamps to prevent time zone-related issues.
     *
     * @example 1618368900000
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
     * @return DescribeMetricDataRequest
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
