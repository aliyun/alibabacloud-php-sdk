<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryMetricDistributionRequest\ranges;

class QueryHistoryMetricDistributionRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var ranges[]
     */
    public $ranges;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate' => 'EndDate',
        'metricName' => 'MetricName',
        'ranges' => 'Ranges',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->ranges)) {
            Model::validateArray($this->ranges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->ranges) {
            if (\is_array($this->ranges)) {
                $res['Ranges'] = [];
                $n1 = 0;
                foreach ($this->ranges as $item1) {
                    $res['Ranges'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Ranges'])) {
            if (!empty($map['Ranges'])) {
                $model->ranges = [];
                $n1 = 0;
                foreach ($map['Ranges'] as $item1) {
                    $model->ranges[$n1] = ranges::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
