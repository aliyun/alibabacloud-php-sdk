<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\prometheusMetrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\scaleDownRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\scaleUpRules;
use AlibabaCloud\Tea\Model;

class metric extends Model
{
    /**
     * @description The maximum number of instances.
     *
     * @example 3
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @var string
     */
    public $metricSource;

    /**
     * @description The list of metrics that are used to trigger the auto scaling policy.
     *
     * @var metrics[]
     */
    public $metrics;

    /**
     * @description The execution status of the metric-based auto scaling policy.
     *
     * @var metricsStatus
     */
    public $metricsStatus;

    /**
     * @description The minimum number of instances.
     *
     * @example 1
     *
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
     * @description Rules that determine the application scale-in.
     *
     * @var scaleDownRules
     */
    public $scaleDownRules;

    /**
     * @description Rules that determine the application scale-out.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->metricSource) {
            $res['MetricSource'] = $this->metricSource;
        }
        if (null !== $this->metrics) {
            $res['Metrics'] = [];
            if (null !== $this->metrics && \is_array($this->metrics)) {
                $n = 0;
                foreach ($this->metrics as $item) {
                    $res['Metrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->metricsStatus) {
            $res['MetricsStatus'] = null !== $this->metricsStatus ? $this->metricsStatus->toMap() : null;
        }
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }
        if (null !== $this->prometheusMetrics) {
            $res['PrometheusMetrics'] = [];
            if (null !== $this->prometheusMetrics && \is_array($this->prometheusMetrics)) {
                $n = 0;
                foreach ($this->prometheusMetrics as $item) {
                    $res['PrometheusMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ScaleDownRules'] = null !== $this->scaleDownRules ? $this->scaleDownRules->toMap() : null;
        }
        if (null !== $this->scaleUpRules) {
            $res['ScaleUpRules'] = null !== $this->scaleUpRules ? $this->scaleUpRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metric
     */
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
                $n = 0;
                foreach ($map['Metrics'] as $item) {
                    $model->metrics[$n++] = null !== $item ? metrics::fromMap($item) : $item;
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
                $n = 0;
                foreach ($map['PrometheusMetrics'] as $item) {
                    $model->prometheusMetrics[$n++] = null !== $item ? prometheusMetrics::fromMap($item) : $item;
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
