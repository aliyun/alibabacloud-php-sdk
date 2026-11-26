<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLMetricSeries extends Model
{
    /**
     * @var string
     */
    public $aggregation;

    /**
     * @var bool
     */
    public $downsampled;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var RLMetricPoint[]
     */
    public $points;
    protected $_name = [
        'aggregation' => 'Aggregation',
        'downsampled' => 'Downsampled',
        'metricName' => 'MetricName',
        'points' => 'Points',
    ];

    public function validate()
    {
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregation) {
            $res['Aggregation'] = $this->aggregation;
        }

        if (null !== $this->downsampled) {
            $res['Downsampled'] = $this->downsampled;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['Points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['Points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Aggregation'])) {
            $model->aggregation = $map['Aggregation'];
        }

        if (isset($map['Downsampled'])) {
            $model->downsampled = $map['Downsampled'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['Points'])) {
            if (!empty($map['Points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['Points'] as $item1) {
                    $model->points[$n1] = RLMetricPoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
