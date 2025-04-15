<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\calculations;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\filters;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EventCenterQueryEventsRequest\body\parameters\orders;

class parameters extends Model
{
    /**
     * @var string[]
     */
    public $breakdowns;

    /**
     * @var calculations[]
     */
    public $calculations;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $filterCombination;

    /**
     * @var filters[]
     */
    public $filters;

    /**
     * @var int
     */
    public $granularity;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var orders[]
     */
    public $orders;

    /**
     * @var int
     */
    public $startTime;

    /**
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

    public function validate()
    {
        if (\is_array($this->breakdowns)) {
            Model::validateArray($this->breakdowns);
        }
        if (\is_array($this->calculations)) {
            Model::validateArray($this->calculations);
        }
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        if (\is_array($this->orders)) {
            Model::validateArray($this->orders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->breakdowns) {
            if (\is_array($this->breakdowns)) {
                $res['Breakdowns'] = [];
                $n1 = 0;
                foreach ($this->breakdowns as $item1) {
                    $res['Breakdowns'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->calculations) {
            if (\is_array($this->calculations)) {
                $res['Calculations'] = [];
                $n1 = 0;
                foreach ($this->calculations as $item1) {
                    $res['Calculations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1 = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->orders)) {
                $res['Orders'] = [];
                $n1 = 0;
                foreach ($this->orders as $item1) {
                    $res['Orders'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Breakdowns'])) {
            if (!empty($map['Breakdowns'])) {
                $model->breakdowns = [];
                $n1 = 0;
                foreach ($map['Breakdowns'] as $item1) {
                    $model->breakdowns[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Calculations'])) {
            if (!empty($map['Calculations'])) {
                $model->calculations = [];
                $n1 = 0;
                foreach ($map['Calculations'] as $item1) {
                    $model->calculations[$n1++] = calculations::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Orders'] as $item1) {
                    $model->orders[$n1++] = orders::fromMap($item1);
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
