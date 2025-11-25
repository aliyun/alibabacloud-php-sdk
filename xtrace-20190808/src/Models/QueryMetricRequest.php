<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\QueryMetricRequest\filters;

class QueryMetricRequest extends Model
{
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
        'dimensions' => 'Dimensions',
        'endTime' => 'EndTime',
        'filters' => 'Filters',
        'intervalInSec' => 'IntervalInSec',
        'limit' => 'Limit',
        'measures' => 'Measures',
        'metric' => 'Metric',
        'order' => 'Order',
        'orderBy' => 'OrderBy',
        'proxyUserId' => 'ProxyUserId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (\is_array($this->measures)) {
            Model::validateArray($this->measures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1 = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->measures)) {
                $res['Measures'] = [];
                $n1 = 0;
                foreach ($this->measures as $item1) {
                    $res['Measures'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1 = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1] = filters::fromMap($item1);
                    ++$n1;
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
                $model->measures = [];
                $n1 = 0;
                foreach ($map['Measures'] as $item1) {
                    $model->measures[$n1] = $item1;
                    ++$n1;
                }
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
