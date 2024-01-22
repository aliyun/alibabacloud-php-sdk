<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus\currentMetrics;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric\metricsStatus\nextScaleMetrics;
use AlibabaCloud\Tea\Model;

class metricsStatus extends Model
{
    /**
     * @description The metrics that are used to trigger the auto scaling policy this time.
     *
     * @var currentMetrics[]
     */
    public $currentMetrics;

    /**
     * @description The current number of instances.
     *
     * @example 2
     *
     * @var int
     */
    public $currentReplicas;

    /**
     * @description The expected number of instances.
     *
     * @example 2
     *
     * @var int
     */
    public $desiredReplicas;

    /**
     * @description The time when the auto scaling policy was last triggered.
     *
     * @example 2022-01-11T08:14:32Z
     *
     * @var string
     */
    public $lastScaleTime;

    /**
     * @description The maximum number of instances.
     *
     * @example 3
     *
     * @var int
     */
    public $maxReplicas;

    /**
     * @description The minimum number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $minReplicas;

    /**
     * @description The metrics that are used to trigger the auto scaling policy next time.
     *
     * @var nextScaleMetrics[]
     */
    public $nextScaleMetrics;

    /**
     * @description The duration for which the metric-based auto scaling policy takes effect next time.
     *
     * @example 3
     *
     * @var int
     */
    public $nextScaleTimePeriod;
    protected $_name = [
        'currentMetrics'      => 'CurrentMetrics',
        'currentReplicas'     => 'CurrentReplicas',
        'desiredReplicas'     => 'DesiredReplicas',
        'lastScaleTime'       => 'LastScaleTime',
        'maxReplicas'         => 'MaxReplicas',
        'minReplicas'         => 'MinReplicas',
        'nextScaleMetrics'    => 'NextScaleMetrics',
        'nextScaleTimePeriod' => 'NextScaleTimePeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentMetrics) {
            $res['CurrentMetrics'] = [];
            if (null !== $this->currentMetrics && \is_array($this->currentMetrics)) {
                $n = 0;
                foreach ($this->currentMetrics as $item) {
                    $res['CurrentMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->currentReplicas) {
            $res['CurrentReplicas'] = $this->currentReplicas;
        }
        if (null !== $this->desiredReplicas) {
            $res['DesiredReplicas'] = $this->desiredReplicas;
        }
        if (null !== $this->lastScaleTime) {
            $res['LastScaleTime'] = $this->lastScaleTime;
        }
        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }
        if (null !== $this->nextScaleMetrics) {
            $res['NextScaleMetrics'] = [];
            if (null !== $this->nextScaleMetrics && \is_array($this->nextScaleMetrics)) {
                $n = 0;
                foreach ($this->nextScaleMetrics as $item) {
                    $res['NextScaleMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextScaleTimePeriod) {
            $res['NextScaleTimePeriod'] = $this->nextScaleTimePeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricsStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentMetrics'])) {
            if (!empty($map['CurrentMetrics'])) {
                $model->currentMetrics = [];
                $n                     = 0;
                foreach ($map['CurrentMetrics'] as $item) {
                    $model->currentMetrics[$n++] = null !== $item ? currentMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CurrentReplicas'])) {
            $model->currentReplicas = $map['CurrentReplicas'];
        }
        if (isset($map['DesiredReplicas'])) {
            $model->desiredReplicas = $map['DesiredReplicas'];
        }
        if (isset($map['LastScaleTime'])) {
            $model->lastScaleTime = $map['LastScaleTime'];
        }
        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }
        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }
        if (isset($map['NextScaleMetrics'])) {
            if (!empty($map['NextScaleMetrics'])) {
                $model->nextScaleMetrics = [];
                $n                       = 0;
                foreach ($map['NextScaleMetrics'] as $item) {
                    $model->nextScaleMetrics[$n++] = null !== $item ? nextScaleMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextScaleTimePeriod'])) {
            $model->nextScaleTimePeriod = $map['NextScaleTimePeriod'];
        }

        return $model;
    }
}
