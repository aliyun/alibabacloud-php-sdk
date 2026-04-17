<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class CostQueryTrendDTO extends Model
{
    /**
     * @var string
     */
    public $defaultMetric;

    /**
     * @var string
     */
    public $granularity;

    /**
     * @var MetricDefRespDTO[]
     */
    public $metrics;

    /**
     * @var TrendPointDTO[]
     */
    public $points;
    protected $_name = [
        'defaultMetric' => 'defaultMetric',
        'granularity' => 'granularity',
        'metrics' => 'metrics',
        'points' => 'points',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (\is_array($this->points)) {
            Model::validateArray($this->points);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultMetric) {
            $res['defaultMetric'] = $this->defaultMetric;
        }

        if (null !== $this->granularity) {
            $res['granularity'] = $this->granularity;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->points) {
            if (\is_array($this->points)) {
                $res['points'] = [];
                $n1 = 0;
                foreach ($this->points as $item1) {
                    $res['points'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['defaultMetric'])) {
            $model->defaultMetric = $map['defaultMetric'];
        }

        if (isset($map['granularity'])) {
            $model->granularity = $map['granularity'];
        }

        if (isset($map['metrics'])) {
            if (!empty($map['metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['metrics'] as $item1) {
                    $model->metrics[$n1] = MetricDefRespDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['points'])) {
            if (!empty($map['points'])) {
                $model->points = [];
                $n1 = 0;
                foreach ($map['points'] as $item1) {
                    $model->points[$n1] = TrendPointDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
