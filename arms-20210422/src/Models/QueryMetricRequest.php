<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\QueryMetricRequest\filters;
use AlibabaCloud\Tea\Model;

class QueryMetricRequest extends Model
{
    /**
     * @var string
     */
    public $consistencyDataKey;

    /**
     * @var string
     */
    public $consistencyQueryStrategy;

    /**
     * @var string[]
     */
    public $dimensions;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var int
     */
    public $intervalInSec;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string[]
     */
    public $measures;

    /**
     * @var string
     */
    public $metric;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'consistencyDataKey'       => 'ConsistencyDataKey',
        'consistencyQueryStrategy' => 'ConsistencyQueryStrategy',
        'dimensions'               => 'Dimensions',
        'endTime'                  => 'EndTime',
        'filters'                  => 'Filters',
        'intervalInSec'            => 'IntervalInSec',
        'limit'                    => 'Limit',
        'measures'                 => 'Measures',
        'metric'                   => 'Metric',
        'order'                    => 'Order',
        'orderBy'                  => 'OrderBy',
        'proxyUserId'              => 'ProxyUserId',
        'startTime'                => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consistencyDataKey) {
            $res['ConsistencyDataKey'] = $this->consistencyDataKey;
        }
        if (null !== $this->consistencyQueryStrategy) {
            $res['ConsistencyQueryStrategy'] = $this->consistencyQueryStrategy;
        }
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
        if (isset($map['ConsistencyDataKey'])) {
            $model->consistencyDataKey = $map['ConsistencyDataKey'];
        }
        if (isset($map['ConsistencyQueryStrategy'])) {
            $model->consistencyQueryStrategy = $map['ConsistencyQueryStrategy'];
        }
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
