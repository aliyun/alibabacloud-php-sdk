<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeNetworkFlowTimeSeriesMetricResponseBody\timeSeriesMetaData\dateRange;
use AlibabaCloud\Tea\Model;

class timeSeriesMetaData extends Model
{
    /**
     * @description The time granularity. For example, 15m indicates that each data point is counted every 15 minutes. For details, see the **Time granularity of time series data points** section below.
     *
     * @example 1m
     *
     * @var string
     */
    public $aggregateInterval;

    /**
     * @description The query time range.
     *
     * @var dateRange
     */
    public $dateRange;

    /**
     * @description The unit of the returned data. It is fixed as requests.
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
