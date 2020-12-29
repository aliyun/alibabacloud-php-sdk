<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageRequest\filters;
use AlibabaCloud\Tea\Model;

class QueryMetricByPageRequest extends Model
{
    /**
     * @var int
     */
    public $intervalInSec;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $orderBy;

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
    public $proxyUserId;

    /**
     * @var string
     */
    public $consistencyDataKey;

    /**
     * @var string
     */
    public $consistencyQueryStrategy;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var string[]
     */
    public $dimensions;

    /**
     * @var string[]
     */
    public $measures;
    protected $_name = [
        'intervalInSec'            => 'IntervalInSec',
        'startTime'                => 'StartTime',
        'endTime'                  => 'EndTime',
        'orderBy'                  => 'OrderBy',
        'metric'                   => 'Metric',
        'order'                    => 'Order',
        'proxyUserId'              => 'ProxyUserId',
        'consistencyDataKey'       => 'ConsistencyDataKey',
        'consistencyQueryStrategy' => 'ConsistencyQueryStrategy',
        'currentPage'              => 'CurrentPage',
        'pageSize'                 => 'PageSize',
        'filters'                  => 'Filters',
        'dimensions'               => 'Dimensions',
        'measures'                 => 'Measures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->consistencyDataKey) {
            $res['ConsistencyDataKey'] = $this->consistencyDataKey;
        }
        if (null !== $this->consistencyQueryStrategy) {
            $res['ConsistencyQueryStrategy'] = $this->consistencyQueryStrategy;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->measures) {
            $res['Measures'] = $this->measures;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMetricByPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ConsistencyDataKey'])) {
            $model->consistencyDataKey = $map['ConsistencyDataKey'];
        }
        if (isset($map['ConsistencyQueryStrategy'])) {
            $model->consistencyQueryStrategy = $map['ConsistencyQueryStrategy'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = $map['Dimensions'];
            }
        }
        if (isset($map['Measures'])) {
            if (!empty($map['Measures'])) {
                $model->measures = $map['Measures'];
            }
        }

        return $model;
    }
}
