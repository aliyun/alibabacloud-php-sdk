<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\calculations;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\filters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\orders;
use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description Specifies whether to further split the dataset based on the column name.
     *
     * @var string[]
     */
    public $breakdowns;

    /**
     * @description The operator that is used to calculate the specified column.
     *
     * @var calculations[]
     */
    public $calculations;

    /**
     * @description The timestamp that specifies the end of the time range to query. Unit: milliseconds.
     *
     * @example 1687861201814
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The logic used to filter the combination of conditions.
     *
     * @example AND
     *
     * @var string
     */
    public $filterCombination;

    /**
     * @description The filter conditions.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The minimum time unit for querying time series data. Minimum value: 1. Unit: seconds. The value of this parameter is a recommended value. The actual value returned shall prevail.
     *
     * @example 30
     *
     * @var int
     */
    public $granularity;

    /**
     * @description The maximum number of events to query. Valid values: 1 to 10000.
     *
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @description The offset of the start position for this query. The offset starts from 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The order of the query results. This parameter is valid only if you set QueryType to table.
     *
     * @var orders[]
     */
    public $orders;

    /**
     * @description The timestamp that specifies the beginning of the time range to query. Unit: milliseconds.
     *
     * @example 1687860901814
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The time range during which events are queried. Minimum value: 1000. Unit: milliseconds.
     *
     * @example 1000000
     *
     * @var int
     */
    public $timeRange;
    protected $_name = [
        'breakdowns' => 'Breakdowns',
        'calculations' => 'Calculations',
        'endTime' => 'EndTime',
        'filterCombination' => 'FilterCombination',
        'filters' => 'Filters',
        'granularity' => 'Granularity',
        'limit' => 'Limit',
        'offset' => 'Offset',
        'orders' => 'Orders',
        'startTime' => 'StartTime',
        'timeRange' => 'TimeRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakdowns) {
            $res['Breakdowns'] = $this->breakdowns;
        }
        if (null !== $this->calculations) {
            $res['Calculations'] = [];
            if (null !== $this->calculations && \is_array($this->calculations)) {
                $n = 0;
                foreach ($this->calculations as $item) {
                    $res['Calculations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filterCombination) {
            $res['FilterCombination'] = $this->filterCombination;
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
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->orders) {
            $res['Orders'] = [];
            if (null !== $this->orders && \is_array($this->orders)) {
                $n = 0;
                foreach ($this->orders as $item) {
                    $res['Orders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeRange) {
            $res['TimeRange'] = $this->timeRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Breakdowns'])) {
            if (!empty($map['Breakdowns'])) {
                $model->breakdowns = $map['Breakdowns'];
            }
        }
        if (isset($map['Calculations'])) {
            if (!empty($map['Calculations'])) {
                $model->calculations = [];
                $n = 0;
                foreach ($map['Calculations'] as $item) {
                    $model->calculations[$n++] = null !== $item ? calculations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FilterCombination'])) {
            $model->filterCombination = $map['FilterCombination'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Orders'])) {
            if (!empty($map['Orders'])) {
                $model->orders = [];
                $n = 0;
                foreach ($map['Orders'] as $item) {
                    $model->orders[$n++] = null !== $item ? orders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeRange'])) {
            $model->timeRange = $map['TimeRange'];
        }

        return $model;
    }
}
