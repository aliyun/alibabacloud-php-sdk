<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\prometheusMetrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\scaleDownRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\scaleUpRules;

class metric extends Model
{
    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var string
     */
    public $metricSource;

    /**
     * @var metrics[]
     */
    public $metrics;

    /**
     * @var metricsStatus
     */
    public $metricsStatus;

    /**
     * @var int
     */
    public $minReplicas;

    /**
     * @var prometheusMetrics[]
     */
    public $prometheusMetrics;

    /**
     * @var string
     */
    public $prometheusToken;

    /**
     * @var string
     */
    public $prometheusUrl;

    /**
     * @var scaleDownRules
     */
    public $scaleDownRules;

    /**
     * @var scaleUpRules
     */
    public $scaleUpRules;
    protected $_name = [
        'maxReplicas' => 'MaxReplicas',
        'metricSource' => 'MetricSource',
        'metrics' => 'Metrics',
        'metricsStatus' => 'MetricsStatus',
        'minReplicas' => 'MinReplicas',
        'prometheusMetrics' => 'PrometheusMetrics',
        'prometheusToken' => 'PrometheusToken',
        'prometheusUrl' => 'PrometheusUrl',
        'scaleDownRules' => 'ScaleDownRules',
        'scaleUpRules' => 'ScaleUpRules',
    ];

    public function validate()
    {
        if (\is_array($this->metrics)) {
            Model::validateArray($this->metrics);
        }
        if (null !== $this->metricsStatus) {
            $this->metricsStatus->validate();
        }
        if (\is_array($this->prometheusMetrics)) {
            Model::validateArray($this->prometheusMetrics);
        }
        if (null !== $this->scaleDownRules) {
            $this->scaleDownRules->validate();
        }
        if (null !== $this->scaleUpRules) {
            $this->scaleUpRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }

        if (null !== $this->metricSource) {
            $res['MetricSource'] = $this->metricSource;
        }

        if (null !== $this->metrics) {
            if (\is_array($this->metrics)) {
                $res['Metrics'] = [];
                $n1 = 0;
                foreach ($this->metrics as $item1) {
                    $res['Metrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricsStatus) {
            $res['MetricsStatus'] = null !== $this->metricsStatus ? $this->metricsStatus->toArray($noStream) : $this->metricsStatus;
        }

        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }

        if (null !== $this->prometheusMetrics) {
            if (\is_array($this->prometheusMetrics)) {
                $res['PrometheusMetrics'] = [];
                $n1 = 0;
                foreach ($this->prometheusMetrics as $item1) {
                    $res['PrometheusMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->prometheusToken) {
            $res['PrometheusToken'] = $this->prometheusToken;
        }

        if (null !== $this->prometheusUrl) {
            $res['PrometheusUrl'] = $this->prometheusUrl;
        }

        if (null !== $this->scaleDownRules) {
            $res['ScaleDownRules'] = null !== $this->scaleDownRules ? $this->scaleDownRules->toArray($noStream) : $this->scaleDownRules;
        }

        if (null !== $this->scaleUpRules) {
            $res['ScaleUpRules'] = null !== $this->scaleUpRules ? $this->scaleUpRules->toArray($noStream) : $this->scaleUpRules;
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
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }

        if (isset($map['MetricSource'])) {
            $model->metricSource = $map['MetricSource'];
        }

        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n1 = 0;
                foreach ($map['Metrics'] as $item1) {
                    $model->metrics[$n1] = metrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MetricsStatus'])) {
            $model->metricsStatus = metricsStatus::fromMap($map['MetricsStatus']);
        }

        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }

        if (isset($map['PrometheusMetrics'])) {
            if (!empty($map['PrometheusMetrics'])) {
                $model->prometheusMetrics = [];
                $n1 = 0;
                foreach ($map['PrometheusMetrics'] as $item1) {
                    $model->prometheusMetrics[$n1] = prometheusMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PrometheusToken'])) {
            $model->prometheusToken = $map['PrometheusToken'];
        }

        if (isset($map['PrometheusUrl'])) {
            $model->prometheusUrl = $map['PrometheusUrl'];
        }

        if (isset($map['ScaleDownRules'])) {
            $model->scaleDownRules = scaleDownRules::fromMap($map['ScaleDownRules']);
        }

        if (isset($map['ScaleUpRules'])) {
            $model->scaleUpRules = scaleUpRules::fromMap($map['ScaleUpRules']);
        }

        return $model;
    }
}
