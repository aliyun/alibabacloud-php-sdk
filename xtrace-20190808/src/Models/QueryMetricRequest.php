<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\QueryMetricRequest\filters;
use AlibabaCloud\Tea\Model;

class QueryMetricRequest extends Model
{
    /**
     * @description The dimensions of the metric that you want to query.
     *
     * @example RT
     *
     * @var string[]
     */
    public $dimensions;

    /**
     * @description The timestamp of the end time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * @example 1575622455686
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The filter conditions.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The time interval at which you want to query metric data. Unit: milliseconds. Minimum value: 60000.
     *
     * > If you set this parameter to 2147483647, all data in the specified time interval is returned.
     * @example 100000
     *
     * @var int
     */
    public $intervalInSec;

    /**
     * @description The maximum number of entries that you want to return.
     *
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @description The measures of the metric that you want to query.
     *
     * @example count
     *
     * @var string[]
     */
    public $measures;

    /**
     * @description The name of the metric. Valid values:
     *
     * - `appstat.sql`: SQL statistics
     * @example appstat.incall
     *
     * @var string
     */
    public $metric;

    /**
     * @description The order in which you want to sort the returned entries. Valid values:
     *
     * - DESC: descending order
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description The field based on which you want to sort the returned entries.
     *
     * @example count
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The ID of the proxy user.
     *
     * @example testefgag12
     *
     * @var string
     */
    public $proxyUserId;

    /**
     * @description The timestamp of the start time of the time range to query. The timestamp is accurate to milliseconds.
     *
     * @example 1575561600000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'dimensions'    => 'Dimensions',
        'endTime'       => 'EndTime',
        'filters'       => 'Filters',
        'intervalInSec' => 'IntervalInSec',
        'limit'         => 'Limit',
        'measures'      => 'Measures',
        'metric'        => 'Metric',
        'order'         => 'Order',
        'orderBy'       => 'OrderBy',
        'proxyUserId'   => 'ProxyUserId',
        'startTime'     => 'StartTime',
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
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
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
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = $map['Dimensions'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
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
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
