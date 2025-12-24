<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\QueryHistoricalMetricResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\QueryHistoricalMetricResponseBody\historicalMetrics\historicalMetric;

class historicalMetrics extends Model
{
    /**
     * @var historicalMetric[]
     */
    public $historicalMetric;
    protected $_name = [
        'historicalMetric' => 'HistoricalMetric',
    ];

    public function validate()
    {
        if (\is_array($this->historicalMetric)) {
            Model::validateArray($this->historicalMetric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historicalMetric) {
            if (\is_array($this->historicalMetric)) {
                $res['HistoricalMetric'] = [];
                $n1 = 0;
                foreach ($this->historicalMetric as $item1) {
                    $res['HistoricalMetric'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HistoricalMetric'])) {
            if (!empty($map['HistoricalMetric'])) {
                $model->historicalMetric = [];
                $n1 = 0;
                foreach ($map['HistoricalMetric'] as $item1) {
                    $model->historicalMetric[$n1] = historicalMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
