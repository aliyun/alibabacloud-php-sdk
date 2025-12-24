<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\QueryHistoricalMetricResponseBody\historicalMetrics;

use AlibabaCloud\Dara\Model;

class historicalMetric extends Model
{
    /**
     * @var string
     */
    public $metricValue;

    /**
     * @var string
     */
    public $time;
    protected $_name = [
        'metricValue' => 'MetricValue',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricValue) {
            $res['MetricValue'] = $this->metricValue;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['MetricValue'])) {
            $model->metricValue = $map['MetricValue'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
