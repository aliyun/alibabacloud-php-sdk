<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetCloudMetricLogsRequest extends Model
{
    /**
     * @description The data aggregation interval. Unit: seconds.
     *
     * Default value: 1
     * @example 10
     *
     * @var int
     */
    public $aggregationInterval;

    /**
     * @description The data aggregation type. Valid values:
     *
     *   sum: the sum of the data
     *   avg: the average value
     *   max: the maximum value
     *   min: the minimum value
     *
     * Aggregation is disabled by default.
     * @example avg
     *
     * @var string
     */
    public $aggregationType;

    /**
     * @description The ID of the cluster.
     *
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The filter conditions. A JSON string consisting of one or more key:value pairs. Value range of key:
     *
     *   InstanceId: the ID of the node
     *   Hostname: the hostname of the node
     *   NetworkInterface: the name of the network interface
     *   DiskDevice: the name of the disk
     *
     * @example {"Hostname":"compute000"}
     *
     * @var string
     */
    public $filter;

    /**
     * @description The beginning of the time range to query. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1583907780
     *
     * @var int
     */
    public $from;

    /**
     * @description The category of the output performance metrics. Separate multiple metrics with commas (,). Valid values:
     *
     *   cpu
     *   memory
     *
     * @example cpu
     *
     * @var string
     */
    public $metricCategories;

    /**
     * @description The dimensions of the performance metric. Valid values:
     *
     *   machine
     *   process
     *   network
     *   disk
     *
     * @example network
     *
     * @var string
     */
    public $metricScope;

    /**
     * @description Logs are returned in reverse order of timestamps.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The end of the time range to query. This value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1583907790
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'aggregationInterval' => 'AggregationInterval',
        'aggregationType'     => 'AggregationType',
        'clusterId'           => 'ClusterId',
        'filter'              => 'Filter',
        'from'                => 'From',
        'metricCategories'    => 'MetricCategories',
        'metricScope'         => 'MetricScope',
        'reverse'             => 'Reverse',
        'to'                  => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationInterval) {
            $res['AggregationInterval'] = $this->aggregationInterval;
        }
        if (null !== $this->aggregationType) {
            $res['AggregationType'] = $this->aggregationType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->metricCategories) {
            $res['MetricCategories'] = $this->metricCategories;
        }
        if (null !== $this->metricScope) {
            $res['MetricScope'] = $this->metricScope;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudMetricLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationInterval'])) {
            $model->aggregationInterval = $map['AggregationInterval'];
        }
        if (isset($map['AggregationType'])) {
            $model->aggregationType = $map['AggregationType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['MetricCategories'])) {
            $model->metricCategories = $map['MetricCategories'];
        }
        if (isset($map['MetricScope'])) {
            $model->metricScope = $map['MetricScope'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
