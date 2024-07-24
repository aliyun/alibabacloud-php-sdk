<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryCommercialUsageRequest\advancedFilters;
use AlibabaCloud\Tea\Model;

class QueryCommercialUsageRequest extends Model
{
    /**
     * @description The filter conditions.
     *
     * @var advancedFilters[]
     */
    public $advancedFilters;

    /**
     * @description The dimensions of the metric that you want to query. Valid values:
     *
     *   dataType: data type
     *   productType: product type
     *   instanceId: instance ID
     *   instanceName: instance name
     *   instanceType: instance type
     *
     * @var string[]
     */
    public $dimensions;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1699286400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The time interval between data slices. Unit: seconds. Minimum value: 3600.
     *
     * @example 3600
     *
     * @var int
     */
    public $intervalInSec;

    /**
     * @description The measures of the metric that you want to query.
     *
     * @var string[]
     */
    public $measures;

    /**
     * @description The name of the metric. Valid value: USAGEFEE.STAT.
     *
     * This parameter is required.
     * @example USAGEFEE.STAT
     *
     * @var string
     */
    public $metric;

    /**
     * @description The order in which data is sorted. Valid value:
     *
     *   `ASC`: ascending order
     *   `DESC`: descending order
     *
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description The dimension by which data is sorted.
     *
     * Valid value:
     *
     *   dataType
     *
     * <!-- -->
     * @example dataType
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The data type. Valid values:
     *
     *   instantQuery: non-time series
     *   timeSeriesQuery: time series
     *
     * This parameter is required.
     * @example instantQuery
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The start of the time range to query. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1699200000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'advancedFilters' => 'AdvancedFilters',
        'dimensions'      => 'Dimensions',
        'endTime'         => 'EndTime',
        'intervalInSec'   => 'IntervalInSec',
        'measures'        => 'Measures',
        'metric'          => 'Metric',
        'order'           => 'Order',
        'orderBy'         => 'OrderBy',
        'queryType'       => 'QueryType',
        'startTime'       => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFilters) {
            $res['AdvancedFilters'] = [];
            if (null !== $this->advancedFilters && \is_array($this->advancedFilters)) {
                $n = 0;
                foreach ($this->advancedFilters as $item) {
                    $res['AdvancedFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->measures) {
            $res['Measures'] = $this->measures;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCommercialUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFilters'])) {
            if (!empty($map['AdvancedFilters'])) {
                $model->advancedFilters = [];
                $n                      = 0;
                foreach ($map['AdvancedFilters'] as $item) {
                    $model->advancedFilters[$n++] = null !== $item ? advancedFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = $map['Dimensions'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['Measures'])) {
            if (!empty($map['Measures'])) {
                $model->measures = $map['Measures'];
            }
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
