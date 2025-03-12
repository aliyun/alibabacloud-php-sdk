<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetHoneypotNodeMetricListRequest extends Model
{
    /**
     * @description The end of the time range to query. Valid values:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC
     *   Date format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 2019-01-30 00:10:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The expression that is used to compute the query results in real time.
     *
     * >  Only the groupby expression is supported. This expression is similar to the GROUP BY statement that applies to databases.
     * @example {"groupby":["userId","instanceId"]}
     *
     * @var string
     */
    public $express;

    /**
     * @description The number of entries per page.
     *
     * >  The maximum value of the Length parameter in a request is 1440.
     * @example 100
     *
     * @var string
     */
    public $length;

    /**
     * @description The metric that is used to monitor the cloud service.
     *
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service. Format: acs_cloud service name.
     *
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The management node ID.
     *
     * @example cc427e14-f257-4670-9d2b-d83bbbe7****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The time interval. Unit: seconds. Valid values: 60, 300, and 900.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The beginning of the time range to query. The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC
     *   Date format: YYYY-MM-DDThh:mm:ssZ
     *   The interval between the start time and the end time is less than or equal to 31 days.
     *
     * @example 2019-01-30 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'    => 'EndTime',
        'express'    => 'Express',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'namespace'  => 'Namespace',
        'nodeId'     => 'NodeId',
        'period'     => 'Period',
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
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHoneypotNodeMetricListRequest
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
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
