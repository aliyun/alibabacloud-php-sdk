<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryCommercialUsageRequest\advancedFilters;

class QueryCommercialUsageRequest extends Model
{
    /**
     * @var advancedFilters[]
     */
    public $advancedFilters;
    /**
     * @var string[]
     */
    public $dimensions;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var int
     */
    public $intervalInSec;
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
    public $queryType;
    /**
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
        if (\is_array($this->advancedFilters)) {
            Model::validateArray($this->advancedFilters);
        }
        if (\is_array($this->dimensions)) {
            Model::validateArray($this->dimensions);
        }
        if (\is_array($this->measures)) {
            Model::validateArray($this->measures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedFilters) {
            if (\is_array($this->advancedFilters)) {
                $res['AdvancedFilters'] = [];
                $n1                     = 0;
                foreach ($this->advancedFilters as $item1) {
                    $res['AdvancedFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dimensions) {
            if (\is_array($this->dimensions)) {
                $res['Dimensions'] = [];
                $n1                = 0;
                foreach ($this->dimensions as $item1) {
                    $res['Dimensions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }

        if (null !== $this->measures) {
            if (\is_array($this->measures)) {
                $res['Measures'] = [];
                $n1              = 0;
                foreach ($this->measures as $item1) {
                    $res['Measures'][$n1++] = $item1;
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

        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
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
        if (isset($map['AdvancedFilters'])) {
            if (!empty($map['AdvancedFilters'])) {
                $model->advancedFilters = [];
                $n1                     = 0;
                foreach ($map['AdvancedFilters'] as $item1) {
                    $model->advancedFilters[$n1++] = advancedFilters::fromMap($item1);
                }
            }
        }

        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = [];
                $n1                = 0;
                foreach ($map['Dimensions'] as $item1) {
                    $model->dimensions[$n1++] = $item1;
                }
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
                $model->measures = [];
                $n1              = 0;
                foreach ($map['Measures'] as $item1) {
                    $model->measures[$n1++] = $item1;
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

        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
