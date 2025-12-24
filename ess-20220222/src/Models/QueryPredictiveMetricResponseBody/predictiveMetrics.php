<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveMetricResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryPredictiveMetricResponseBody\predictiveMetrics\predictiveMetric;

class predictiveMetrics extends Model
{
    /**
     * @var predictiveMetric[]
     */
    public $predictiveMetric;
    protected $_name = [
        'predictiveMetric' => 'PredictiveMetric',
    ];

    public function validate()
    {
        if (\is_array($this->predictiveMetric)) {
            Model::validateArray($this->predictiveMetric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->predictiveMetric) {
            if (\is_array($this->predictiveMetric)) {
                $res['PredictiveMetric'] = [];
                $n1 = 0;
                foreach ($this->predictiveMetric as $item1) {
                    $res['PredictiveMetric'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PredictiveMetric'])) {
            if (!empty($map['PredictiveMetric'])) {
                $model->predictiveMetric = [];
                $n1 = 0;
                foreach ($map['PredictiveMetric'] as $item1) {
                    $model->predictiveMetric[$n1] = predictiveMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
