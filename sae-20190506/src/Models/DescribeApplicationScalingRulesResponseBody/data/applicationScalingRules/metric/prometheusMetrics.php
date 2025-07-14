<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric;

use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return prometheusMetrics
     */
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
