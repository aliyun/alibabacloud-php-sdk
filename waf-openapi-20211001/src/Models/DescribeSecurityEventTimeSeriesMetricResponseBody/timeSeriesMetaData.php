<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSecurityEventTimeSeriesMetricResponseBody\timeSeriesMetaData\dateRange;
use AlibabaCloud\Tea\Model;

class timeSeriesMetaData extends Model
{
    /**
     * @description The time granularity of data points in the time series data returned. For example, a value of 15m indicates that data points are collected at 15-minute intervals. For more information about time granularities, see the **Time granularities of data points in time series** section below.
     *
     * @example 1m
     *
     * @var string
     */
    public $aggregateInterval;

    /**
     * @description The time range that is used for the query.
     *
     * @var dateRange
     */
    public $dateRange;

    /**
     * @description The unit of the statistics returned. It is fixed as requests.
     *
     * @example requests
     *
     * @var string
     */
    public $units;
    protected $_name = [
        'aggregateInterval' => 'AggregateInterval',
        'dateRange' => 'DateRange',
        'units' => 'Units',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregateInterval) {
            $res['AggregateInterval'] = $this->aggregateInterval;
        }
        if (null !== $this->dateRange) {
            $res['DateRange'] = null !== $this->dateRange ? $this->dateRange->toMap() : null;
        }
        if (null !== $this->units) {
            $res['Units'] = $this->units;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeSeriesMetaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregateInterval'])) {
            $model->aggregateInterval = $map['AggregateInterval'];
        }
        if (isset($map['DateRange'])) {
            $model->dateRange = dateRange::fromMap($map['DateRange']);
        }
        if (isset($map['Units'])) {
            $model->units = $map['Units'];
        }

        return $model;
    }
}
