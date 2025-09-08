<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric;

use AlibabaCloud\Dara\Model;

class prometheusMetrics extends Model
{
    /**
     * @var string
     */
    public $prometheusQuery;

    /**
     * @var string
     */
    public $targetMetricValue;
    protected $_name = [
        'prometheusQuery' => 'PrometheusQuery',
        'targetMetricValue' => 'TargetMetricValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusQuery) {
            $res['PrometheusQuery'] = $this->prometheusQuery;
        }

        if (null !== $this->targetMetricValue) {
            $res['TargetMetricValue'] = $this->targetMetricValue;
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
        if (isset($map['PrometheusQuery'])) {
            $model->prometheusQuery = $map['PrometheusQuery'];
        }

        if (isset($map['TargetMetricValue'])) {
            $model->targetMetricValue = $map['TargetMetricValue'];
        }

        return $model;
    }
}
