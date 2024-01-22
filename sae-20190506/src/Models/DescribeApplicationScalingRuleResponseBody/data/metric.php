<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\metrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\metricsStatus;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\scaleDownRules;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRuleResponseBody\data\metric\scaleUpRules;
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
        'maxReplicas'    => 'MaxReplicas',
        'metrics'        => 'Metrics',
        'metricsStatus'  => 'MetricsStatus',
        'minReplicas'    => 'MinReplicas',
        'scaleDownRules' => 'ScaleDownRules',
        'scaleUpRules'   => 'ScaleUpRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
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
        if (isset($map['Metrics'])) {
            if (!empty($map['Metrics'])) {
                $model->metrics = [];
                $n              = 0;
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
        if (isset($map['ScaleDownRules'])) {
            $model->scaleDownRules = scaleDownRules::fromMap($map['ScaleDownRules']);
        }
        if (isset($map['ScaleUpRules'])) {
            $model->scaleUpRules = scaleUpRules::fromMap($map['ScaleUpRules']);
        }

        return $model;
    }
}
